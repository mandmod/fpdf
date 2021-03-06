<?php
define ( 'FPDF_FONTPATH', 'font/' );
require 'fpdf.php';
$pdf = new FPDF ();
$pdf->AddFont ( 'angsana', '', 'angsa.php' );
$pdf->AddPage ();
$pdf->SetFont ( 'angsana', '', 14 );
$pdf->Cell ( 0, 5, iconv ( 'UTF-8', 'cp874', 'พิมพ์ให้อยู่ตรงกลาง' ), 0, 1, 'C' );
$pdf->Cell ( 50, 5, iconv ( 'UTF-8', 'cp874', 'พิมพ์ให้อยู่ตรงกลาง' ), 1 );
$pdf->Cell ( 50, 5, iconv ( 'UTF-8', 'cp874', 'พิมพ์ให้อยู่ตรงกลาง' ), 'TBR' );
$pdf->Ln ();
$pdf->Ln ();
$pdf->Cell ( 100, 6, iconv ( 'UTF-8', 'cp874', 'Mthai เป็นอะไรดี  ไม่รู้จะอธิบาย อย่างไร' ), '1','2','C','','www.mthai.com' );
//รูปแบบการใช้คำสั่ง Cell
//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
// Cell(50,5,iconv('UTF-8', 'cp874', 'พิมพ์ให้อยู่ตรงกลาง'),'0')
// Cell = เป็นคำสั่ง  กล่องข้อความ  เราสามารถ จะเอากล่องข้อความไปวางตรงไหนก็ได้ใน file PDF
// 50 = w : (ตัวเลข) ความกวัางของกล่องข้อความ ถ้าระบบเป็น 0 กล้องจะกว่างไปจนถึงกั้นขวาของกระดาษ
// 5 = h : (ตัวเลข) ความสูงของกล่องข้อความ ค่าดีฟอลต์เป็น 0
// $txt = ช้อความที่จะพิมพ์
//		    จากตัวอย่าง  ใช้คำสั่ง iconv เป็นคำสั่ง เรียกคำสั่ง มาตรฐาน ของภาษา UTF-8
// $border = เส้นขอบ  ค่าของมันคือ 0= ไม่มีขอบ     และ   1= มีขอบ
// 			และยังสามารถระบุได้ว่าจะตีเส้นด้านไหนของกรอบได้ด้วย
//			L= ขอบด้านซ้าย
//			T= ขอบด้านบน
//			R= ขอบด้านขวา
//			B= ขอบล่าง
//			'TBR'  หมายความว่า  ตีเส้น ด้าบน  และ  ด้านล่าง และ  ด้านขวา          !!! แต่ไม่ตีเส้นด้านหน้า
// $ln = (ตัวเลข) ระบุว่าหลังจากพิมพ์ข้อความในกล่องเสร็จแล้ว  ให้เลื่อนเคอร์เซ่อร์ไปทางไหน
//			0= ปล่อยไว้ที่เดิม
//			1= เลื่อนไปเริ่มต้นที่บรรทัดใหม่
//			2= เลื่อนลงไปด้านล่างของกล่องข้อความ
// $align = (ตัวหนังสือ) จัดเรียงข้อความภายในกล่อง
//			L or ค่าว่าง = ชิดซ้าย (Default Value)
//			C = จัดกึ่งกลาง
//			R = ชิดขวา
// $fill = (true/false) แรเงากล่องข้อความหรือไม่  สำหรับสีที่จะใช้ในการแรเงานั้นกำหนดได้ด้วยคำสั่ง SetFillColor ซึ่งจะอธิบายในบทต่อ ๆ ไป
//			false : ไม่มีแรเงา (default)
//			ture : แรเงา
// $link = (ตัวหนังสือ) URL เว็บไซต์ ในกรณีเราต้องการพิมพ์ข้อความนี้ให้เป็นไฮเปอร์ลิ้งก์


$pdf->Output ();
?>