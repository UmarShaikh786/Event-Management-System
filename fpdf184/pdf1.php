<?php

	require('fpdf.php');

	$pdf=new fpdf;
	
	$pdf->AddPage("P","A5");
	
	$pdf->SetFillColor(59, 59, 59);
    $pdf->rect(0, 0, $pdf->GetPageWidth(), 40, "F");
   // $pdf->SetFillColor(244, 244, 244);
   // $pdf->rect(0, 40, $pdf->GetPageWidth(), 11, "F");
    $pdf->SetFont('Helvetica', '', 17);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Text(25, 15, "Royal Events");
    $pdf->SetFontSize(36);
    $pdf->Text(25, 27, "INVOICE");
    $pdf->SetTextColor(244, 244, 244);
    $pdf->SetFontSize(11);
    $pdf->SetXY(97, 11);
    $pdf->Cell(35, 6, "www.royalevent.com", 0, 2, "R");
    $pdf->Cell(35, 6, "royalevent786@gmail.com", 0, 2, "R");
    $pdf->Cell(35, 6, "Tel:02766-645330", 0, 2, "R");
    $pdf->SetXY(160, 11);
    $pdf->Cell(35, 6, "440 S. City Point,", 0, 2, "R");
    $pdf->Cell(35, 6, " Patan Gujarat-384265", 0, 2, "R");
    $pdf->Cell(35, 6, "India", 0, 2, "R");
    $pdf->SetXY(134, 50.2);
   
	require("../connection.php");
	session_start();
	$sql="select * from Servicebooking where UId=".$_SESSION['id']." and date='".$_SESSION['date']."'";
	
	$rs=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($rs))
	{
		$sid=$row['Sid'];
		$name=$row['Uname'];
		$sname=$row['Sname'];
		$sprice=$row['Sprice'];		
		$date=$row['date'];
		$pid=$row['paymentid'];
	}
	$pdf->SetX(25);
    $pdf->SetFont("Helvetica", "b", 16);
	$pdf->SetTextColor(0, 0, 0);
    ;
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell((($pdf->GetPageWidth() - 50) / 2), 5, "Service Bill Details", 0, 2, "L");
    $pdf->Line(25, $pdf->GetY() + 1, $pdf->GetPageWidth() - 25, $pdf->GetY() + 1);
    $pdf->Ln(7);
    $pdf->SetX(25);
    $pdf->SetFont("Helvetica", "b", 10);

	$pdf->SetTextColor(84, 84, 84);
    $pdf->Cell((($pdf->GetPageWidth() - 50) / 2), 5, "User Name", 0, 0, "L");
    $pdf->Cell((($pdf->GetPageWidth() - 50) / 2), 5, $name, 0, 2, "R");


	$pdf->Ln(2);
	$pdf->SetX(25);
	$pdf->Cell((($pdf->GetPageWidth() - 50) / 2), 5, "Service Name", 0, 0, "L");
    $pdf->Cell((($pdf->GetPageWidth() - 50) / 2), 5, $sname, 0, 2, "R");

	

	$pdf->Ln(2);
	$pdf->SetX(25);
    $pdf->Cell((($pdf->GetPageWidth() - 50) / 2), 5, "Date", 0, 0, "L");
    $pdf->Cell((($pdf->GetPageWidth() - 50) / 2), 5, $date, 0, 2, "R");

	$pdf->Ln(2);
	$pdf->SetX(25);
    $pdf->Cell((($pdf->GetPageWidth() - 50) / 2), 5, "Payment Id", 0, 0, "L");
    $pdf->Cell((($pdf->GetPageWidth() - 50) / 2), 5, $pid, 0, 2, "R");
   
	$pdf->Ln(4);
	$pdf->Line(25, $pdf->GetY() + 1, $pdf->GetPageWidth() - 25, $pdf->GetY() + 1);
	$pdf->Ln(4);
	$pdf->SetX(25);
	$pdf->SetTextColor(0, 0, 0);
    $pdf->Cell((($pdf->GetPageWidth() - 50) / 2), 5, "Total", 0, 0, "L");
    $pdf->Cell((($pdf->GetPageWidth() - 50) / 2), 5, "Rs. ".$sprice.".00", 0, 2, "R");


   
	$pdf->output();
	//$dir='C:\Users\ASUS';
	//$fil='temp_pdf';
	//$pdf->output('D:\ayaz','ayaz');
	//$pdf->output("studentinfo.pdf","1");

?>