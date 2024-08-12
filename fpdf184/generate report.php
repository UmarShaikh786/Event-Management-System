<?php

	require('fpdf.php');

	$pdf=new fpdf;
	
	
	$pdf->AddPage("l","A4");
	
	$pdf->SetFont("Arial","B",20);
	$pdf->SetY(20);
	$pdf->SetX(70);
	$pdf->cell(5,8,"Student Information");
	$pdf->Ln();
	
	$pdf->SetY(30);

	$pdf->SetX(10);
	$pdf->SetFont("Arial","B",14);
	$pdf->cell(20,10,"Roll No");
	
	
	//$pdf->SetY(30);
	$pdf->SetX(35);
	$pdf->cell(10,10,"Name");
	
	//$pdf->SetY(30);
	$pdf->SetX(70);
	$pdf->cell(10,10,"Email");
	
    $pdf->SetX(108);
	$pdf->cell(10,10,"mobile");

	$pdf->SetX(133);
	$pdf->cell(10,10,"Gender");
	
	$pdf->SetX(160);
	$pdf->cell(10,10,"Address");
	
	$pdf->SetX(210);
	$pdf->cell(10,10,"City");

    $pdf->SetX(230);
	$pdf->cell(10,10,"Pin");

    $pdf->SetX(250);
	$pdf->cell(10,10,"State");
	$pdf->Ln();
	
	$pdf->cell(0,0,"===============================================================================================");
	$pdf->Ln();
	
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"umar");
	
	$sql="select * from Registration";
	
	$rs=mysqli_query($con,$sql);
	while($row=mysqli_fetch_row($rs))
	{
		$id=$row[0];
        $name=$row[2];
		$email=$row[3];
		$cont=$row[4];
		$gender=$row[5];
		$address=$row[6];
        $city=$row[7];
        
		$pdf->SetX(15);
		$pdf->SetFont("Arial","",12);
		$pdf->cell(10,20,$id);

		$pdf->SetX(30);
		$pdf->cell(5,20,$name);
		
		$pdf->SetX(60);
		$pdf->cell(5,20,$email);
		
		$pdf->SetX(105);
		$pdf->cell(5,20,$cont);
		
		$pdf->SetX(135);
		$pdf->cell(5,20,$gender);
		
        $pdf->SetX(155);
		$pdf->cell(5,20,$address);

		$pdf->SetX(207);
		$pdf->cell(5,20,$city);

        
		$pdf->Ln();
		
	
	}
	
	$pdf->SetY(200);
	$pdf->SetX(20);
	
	$pdf->cell(50,10,"   A.M.Panar","TBLR");
	
	
	$pdf->SetY(200);
	$pdf->SetX(150);
	$pdf->cell(30,30,"       Photo","TBLR");
	
	$pdf->output();
	//$dir='C:\Users\ASUS';
	//$fil='temp_pdf';
	//$pdf->output('D:\ayaz','ayaz');
	//$pdf->output("studentinfo.pdf","1");

?>