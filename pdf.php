<?php 
include 'db.php';

require 'vendor/autoload.php';

$result=$conn->query("select * from books");

$pdf= new TCPDF();
$pdf->AddPage();
$pdf->setFont('times', 'I', 12);
$pdf->Cell('0','10','Employee_Table','0','1','C');

$html='<table border="1" cellpadding="10" cellspacing="8" style="background-color:lightblue">
<tr>
<th> book Id</th>
<th>book title</th>
<th>authore name</th>
<th>authore name</th>
<th>authore name</th>
</tr>
';

while ($row=$result->fetch_assoc()) {
    
    $html .= '<tr>
    <th>'.$row['bookid'].'</th>
    <th>'.$row['booktitle'].'</th>
    <th>'.$row['authorname'].'</th>
    <th>'.$row['authorname'].'</th>
    <th>'.$row['authorname'].'</th>
    </tr>';
}

$html .= '</table>';
$pdf->writeHtml($html , true , false , true , false , '');
$pdf->Output('Employee_J1.pdf', 'D');
?>