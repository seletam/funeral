<?php

/* header("Content-type: application/pdf"); //ttachment;filename='file.pdf'");
  header("Content-type: application/octet-stream"); //ttachment;filename='file.pdf'");
  header("Pragma: public"); //ttachment;filename='file.pdf'");
  header("Content_Transfer-Encoding: binary"); //ttachment;filename='file.pdf'");
  header("Expires: 0"); //ttachment;filename='file.pdf'"); //ttachment;filename='file.pdf'");
  header("Content-Disposition:inline;filename='file.pdf'");
  header("Accept-Ranges: bytes"); */
//debug($holder);
$titlec = $holder->first_names . ' ' . $holder->surname;
$score = 2;
$comment = "This example makes use of the Header() and Footer() methods to process page headers and footers. They are called automatically. They already exist in the FPDF class but do nothing, therefore we have to extend the class and override them. 
The logo is printed with the Image() method by specifying its upper-left corner and its width. The height is calculated automatically to respect the image proportions. To print the page number, a null value is passed as the cell width. It means that the cell should extend up to the right margin of the page; this is handy to center text. The current page number is returned by the PageNo() method; as for the total number of pages, it's obtained via the special value {nb} which is substituted when the document is finished (provided you first called AliasNbPages()). 
Note the use of the SetY() method which allows to set position at an absolute location in the page, starting from the top or the bottom. Another interesting feature is used here: the automatic page breaking. As soon as a cell would cross a limit in the page (at 2 centimeters from the bottom by default), a break is issued and the font restored. Although the header and footer select their own font (Arial), the body continues with Times. This mechanism of automatic restoration also applies to colors and line width. The limit which triggers page breaks can be set with SetAutoPageBreak().";
ob_start();
$pdf1->SetTitle($titlec);
$pdf1->SetAuthor('Seleta Mootwane');
//$pdf1->SetXY 8,30;
//$pdf1->ChapterTitle(1, "Agreement Letter");
//($title, $file, $names, $score, $comment) 
$pdf1->PrintChapter("Agreement Letter", "Agreement_Letter.pdf", $titlec, $score, $comment);
ob_end_clean();
//$pdf1->Output();
$doc = $pdf1->Output('file.php', 'I');
$content = file_get_contents($doc);
echo $content;
ob_end_flush();
?>

