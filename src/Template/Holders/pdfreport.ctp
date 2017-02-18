<?php

$title = 'Invoice';
$pdf->SetTitle($title);
$pdf->SetAuthor('Testing');
$pdf->PrintChapter(1, 'A RUNAWAY REEF', '20k_c1.txt');
$pdf->PrintChapter(2, 'THE PROS AND CONS', '20k_c2.txt');
$pdf->Output();

?>