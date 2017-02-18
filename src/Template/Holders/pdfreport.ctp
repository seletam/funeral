<?php

/*header("Content-type: application/pdf"); //ttachment;filename='file.pdf'");
header("Content-type: application/octet-stream"); //ttachment;filename='file.pdf'");
header("Pragma: public"); //ttachment;filename='file.pdf'");
header("Content_Transfer-Encoding: binary"); //ttachment;filename='file.pdf'");
header("Expires: 0"); //ttachment;filename='file.pdf'"); //ttachment;filename='file.pdf'");
header("Content-Disposition:inline;filename='file.pdf'");
header("Accept-Ranges: bytes");*/

$title = '20000 Leagues Under the Seas';
$pdf->SetTitle($title);
$pdf->SetAuthor('Jules Verne');
$pdf->PrintChapter(1,'A RUNAWAY REEF','20k_c1.txt');
$pdf->PrintChapter(2,'THE PROS AND CONS','20k_c2.txt');
$pdf->Output();
?>

