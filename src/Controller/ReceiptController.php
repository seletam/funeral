<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
require(ROOT . DS . 'vendor' . DS . "fpdf" . DS . "fpdf.php");

/**
 * Description of ReceiptController
 *
 * @author Mootwane
 */
class ReceiptController extends \FPDF {

    protected $col = 0; // Current column
    protected $y0;      // Ordinate of column start

    function Header() {
	// Page header
	global $title;

	$this->SetFont('Arial', 'B', 14);
	$w = $this->GetStringWidth($title) + 6;
	/*$this->SetX((210 - $w) / 2);
	$this->SetDrawColor(0, 80, 180);
	$this->SetFillColor(230, 230, 0);
	$this->SetTextColor(220, 50, 50);
	$this->SetLineWidth(1);
	$this->Cell($w, 9, $title, 1, 1, 'C', true);*/
	$this->Ln(45);
	// Save ordinate
	$this->y0 = $this->GetY();
    }

    function Footer() {
	// Page footer
	$this->SetY(-15);
	$this->SetFont('Arial', 'I', 8);
	$this->SetTextColor(128);
	//$this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
	$this->Cell(0, 10, 'CSIR', 0, 0, 'C');
	$this->Ln();
    }

    function SetCol($col) {
	// Set position at a given column
	$this->col = $col;
	$x = 10 + $col * 65;
	$this->SetLeftMargin($x);
	$this->SetX($x);
    }

    function AcceptPageBreak() {
	// Method accepting or not automatic page break
	if ($this->col < 2) {
	    // Go to next column
	    $this->SetCol($this->col + 1);
	    // Set ordinate to top
	    $this->SetY($this->y0);
	    // Keep on page
	    return false;
	} else {
	    // Go back to first column
	    $this->SetCol(0);
	    // Page break
	    return true;
	}
    }

    function ChapterTitle($label, $names, $score, $comment) {
	// Title
	$this->SetFont('Arial', '', 11);
	$this->SetTextColor(0, 0, 0);
	/*$this->Cell(133.5, 5, "Names: $names", 'L', true);
	$this->Cell(133.5, 5, "ID Number: $idnumber", 'L', true);
	$this->Cell(133.5, 5, "Overall Score: $score", 'L', true);*/
	$this->Ln(18);
	$this->Cell(133.5, 8, "Dear $names,", '0', 'L', false);
	$this->Ln(10);
	$this->SetFont('Arial', '', 16);
	$this->Cell(0, 8, "$label", '0', '0', 'C');
	// Save ordinate
	$this->Ln(15);
	$this->SetFont('Arial', '', 11);
	$this->MultiCell(0, 6, "$comment", '0','J', false);
	$this->y0 = $this->GetY();
    }

    function ChapterBody($file) {
	// Read text file
	$txt = file_get_contents($file);
	// Font
	$this->SetFont('Times', '', 11);
	// Output text in a 6 cm width column
	$this->MultiCell(0, 0, $txt);
	$this->Ln(50);
	// Mention
	$this->SetFont('', 'I');
	$this->Cell(0,5, '___________________________________', '0', 'R', false);
	$this->Ln(5);
	$this->Cell(0,5, 'Signature', '0', 'R', false);
	// Go back to first column
	$this->SetCol(0);
    }

    function PrintChapter($title, $file, $names, $score, $comment) {
	// Add chapter
	$this->AddPage();
	$this->ChapterTitle($title, $names, $score, $comment);
	$this->ChapterBody($file);
    }

}
