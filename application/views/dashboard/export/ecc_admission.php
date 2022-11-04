$html = '
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="asset/css/style.css">
<style>
@font-face {
    font-family: sun-exta, big5;
    font-style: normal;
    font-weight: normal;
    src: url('dompdf/dompdf/libs/fonts/DejaVuSans-Bold.ttf') format('truetype');
}
   
body {
    font-size: 14px;
    color: #111;
    font-weight: normal;
    font-family: big5;
    line-height: 20px;
}


table {
    border-right: 0;
    border-bottom: 0;
    border-collapse: collapse;
    padding: 0px;
    margin: 0px;
}

table td,
table th {
    padding-left: 5px;
    padding-top: 5px;
    padding-bottom: 5px;
}

td {
    white-space: normal;
    padding: 8px 0px 8px 0px;
}
tr,td,th {
    border-top: 1px solid #000000;
    border-bottom: 1px solid #000000;
    border-left: 1px solid #000000;
    border-right: 1px solid #000000;
    text-align: left;
    padding: 0px;
}
section.header,.personal-info,.family-japan,.eligibility,.edu-background,.address {
    width: 100%;
    position: relative;
    margin: 0 auto;
}

.logo {
    width: 250px;
    float: left;
}
.application-title {
    width: 500px;
    margin: 0 auto;
    float: left;
}
img{
    width: 100%;;
}
        
</style>
</head>
<body>
<section class="header">
	<div class="logo">
	</div>
		<h2 style="text-align:center;font-family:big5;">入　学　願　書 </h2>
       <p class="application-title" style="text-align:center;font-weight:normal;font-size:20px;line-height:1px;">Application for Admission</p>
</section>
<br>
<section class="eligibility">	
<div style="width:120px;height:149px;float: right;border:1px solid #000000;margin:0px;padding:0px;">
    <p style="padding-left: 12px;padding-top: 12px;"> 写真</p>
    <p style="padding-left: 12px;padding-top: 12px;"> Photograph</p>
    <p style="padding-left: 12px;padding-top: 12px;"> 4.0cm×3.0cm</p>
</div>    	
<div  style="width: 558px;float: left;margin:0px;padding:0px;">
<table style="width: 100%;border-bottom:none !important;margin-top:30px;">
    <tr style="border-bottom:none !important;">
        <th style="width: 40%;border-right:none !important;">氏名 Name in Full (Family → Given):</th>
        <td style="width: 30%;border-left:none !important;"></td>
        <th style="width: 15%;border-right:none !important;">性別 SEX</th>
        <td style="border-left:none !important;">Female</td>
    </tr>
</table> 
<table style="width: 100%;border-top:none !important;border-bottom:none !important;">
    <tr style="border-bottom:1px dotted #000000;">
        <th style="width:22%;border-bottom:none !important;border-bottom:1px dotted #000000;border-right:1px dotted #000000;text-align:center;">アルファベット<br>Alphabet</th>
        <td style="border-bottom:1px dotted #000000;border-left:1px dotted #000000;"></td>
    </tr>
</table>
<table style="width: 100%;border-top:none !important;">
    <tr style="border-top:none !important;">
        <th style="width:22%;border-bottom:none !important;border-bottom:1px dotted #000000;border-right:1px dotted #000000;text-align:center;">漢字<br>Chinese Character</th>
        <td style="border-bottom:1px dotted #000000;border-left:1px dotted #000000;"></td>
    </tr>
</table> 
</div>
<table style="padding:0px;margin:0px;width:100%;border-top:none !important;text-align:center;" class="tbl">
    <tr class="text-center" style="font-size: 12px;border-top:none !important;text-align:center;border-bottom:1px dotted #000000;">
        <th scope="col" style="border-top:none !important;text-align:left;">生年月日 Date of Birth</th>
        <th scope="col" class="align-middle" style="border-top:none !important;text-align:left;">出生地 Place of Birth</th>
        <th scope="col" style="border-top:none !important;text-align:left;">国籍  Nationality</th>
    </tr>
    <tr class="text-center" style="font-size: 12px;border-top:none !important;">
        <td>-</td>
        <td></td>
        <td></td>
    </tr>
 </table>
 <table style="padding:0px;margin:0px;width:100%;border-top:none !important;border-bottom:none !important;" class="tbl">
    <tr style="border-top:none !important;">
        <th style="border-top:none !important;text-align:left;">現住所(本人)  Applicant's Address</th>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;" >
        <td  style="width: 60%;border-top:none !important;"></td>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;" >
        <td  style="width: 60%;border-top:none !important;"></td>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;" >
        <td  style="width: 60%;border-top:none !important;"></td>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;" >
        <td  style="width: 60%;border-top:none !important;"></td>
    </tr>
</table>
<table style="border-bottom:none !important;width:100%;">
    <tr  style="border-bottom:none !important;font-size:14px;">
        <th colspan="2" style="width:25%;text-align:center;border-right:none !important;">E-mail</th>
        <td style="width:25%;border-left:none !important;border-right:none !important;font-size:14px;"></td>
        <th style="width:25%;text-align:center;border-right:none !important;border-left:none !important;font-size:14px;">TEL</th>
        <td style="width:25%;border-left:none !important;font-size:14px;"></td>
    </tr>
</table> 
<table style="width:100%;">
    <tr style="font-size:14px;">
        <th style="width: 30%;">職業 Occupation</th>
        <th style="width: 50%;">勤務先・通学先 Place of Employment or School</th>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;">
        <td  style="text-align:center;"></td>
        <td  style="text-align:center;"></td>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;">
        <td  style="text-align:center;"></td>
        <td  style="text-align:center;"></td>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;">
        <td  style="text-align:center;"></td>
        <td  style="text-align:center;"></td>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;">
        <td  style="text-align:center;"></td>
        <td  style="text-align:center;"></td>
    </tr>
</table> 
<table style="padding:0px;margin:0px;width:100%;text-align:left;" class="tbl">
    <tr>
        <th style="text-align:left;">勤務先・通学先の住所 Address of Occupation or School</th>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;">
        <td  style="text-align:center;"></td>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;">
        <td  style="text-align:center;"></td>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;">
        <td  style="text-align:center;"></td>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;">
        <td  style="text-align:center;"></td>
    </tr>
</table>
<table style="border-bottom:none !important;width:100%;">
    <tr  style="border-bottom:none !important;font-size:14px;">
        <th clospan="2" style="width:50%;text-align:right;border-right:none !important;border-left:none !important;font-size:14px;">TEL</th>
        <td style="width:50%;text-align:left;border-left:none !important;font-size:14px;"></td>
    </tr>
</table> 
<table style="padding:0px;margin:0px;width:100%;text-align:left;" class="tbl">
    <tr style="border-bottom: none !important;">
        <th style="border-bottom: none !important;border-right: none !important;"></th>
        <td style="border-bottom: none !important;border-left: none !important;"></td>
    </tr>
    <tr style="border-top:none !important;border-bottom:none !important;">
        <th  rowspan="1" style="width: 50%;border-top:none !important;border-right:none !important;text-align:left;">本校での学習予定期間 Length of Study at ECC</th>
        <td  rowspan="1" style="text-align:center;width: 40%;border-left:none !important;">- 年　year(s)</td>
    </tr>
    <tr style="border-top: none !important;">
        <th style="border-bottom: none !important;border-right: none !important;"></th>
        <td style="border-bottom: none !important;border-left: none !important;"></td>
    </tr>
</table>
<table style="padding:0px;margin:0px;width:100%;text-align:left;" class="tbl">
    <tr style="border-top:none !important;border-bottom:1px dotted #000000;">
        <th rowspan="2" style="border-right:none !important;">旅券 Passport</th>
        <td rowspan="2" style="border-left:none !important;border-right:none !important;">-</td>
        <th style="border-bottom:none !important;border-left:1px dotted #000000;border-bottom:none !important">(1) 番号  Number</th>
        <td style="border-bottom:none !important;">MG353121</td>
    </tr>
    <tr style="border-top:none !important;">
        <th style="border-top:none !important;border-left:1px dotted #000000;border-top:1px dotted #000000;">(2) 有効期限  Valid Until</th>
        <td style="border-top:none !important;">8/24/2027</td>
    </tr>
</table> 
<table style="width:100%;">
    <tr style="border-bottom:none !important;">
        <td style="margin:0px;font-family: big5;">学歴：初等教育(小学校)から順次最終学歴まで  <br/>Educational History : from Elementary School to the Most Recent School</td>
    </tr>
    <tr style="border-top:none !important;">
        <td></td>
    </tr>
</table>
<table style="width:100%;">
    <tr class="text-center" style="border-bottom:1.5px dotted #000000;font-size:12px;border-top:none !important;">
        <th scope="col" style="width:35% !important; text-align: center;border-right:1.5px dotted #000000;border-bottom:1.5px dotted #000000;">学校名<br/>Name of Institution</th>
        <th scope="col" style="width:35% !important; text-align: center;border-right:1.5px dotted #000000;border-left:none !important; border-bottom:1.5px dotted #000000;">住所<br/>Address</th>
        <th scope="col" class="align-middle" style="width: 10%; text-align: center;border-right:1.5px dotted #000000;border-left:none !important;border-bottom:1.5px dotted #000000;">入学年月<br/>Starting<br>Year/Month </th>
        <th scope="col" style="width: 10%;border-left: none;text-align: center;border-left:none !important;border-bottom:1.5px dotted #000000;">卒業年月<br/>Finishing<br>Year/Month</th>	
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">
        <td style="font-size: 11px; text-align: left;border-top: none;border-right:1.5px dotted #000000;border-bottom:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important;border-top: none;border-bottom:1.5px dotted #000000; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; border-top: none;border-bottom:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-top: none;"> ~ </td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;border-top: none;border-bottom:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important;border-top: none;border-bottom:1.5px dotted #000000; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; border-top: none;border-bottom:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-top: none;"> ~ </td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;border-top: none;border-bottom:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important;border-top: none;border-bottom:1.5px dotted #000000; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; border-top: none;border-bottom:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-top: none;"> ~ </td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;border-top: none;border-bottom:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important;border-top: none;border-bottom:1.5px dotted #000000; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; border-top: none;border-bottom:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-top: none;"> ~ </td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;border-top: none;border-bottom:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important;border-top: none;border-bottom:1.5px dotted #000000; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; border-top: none;border-bottom:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-top: none;"> ~ </td>
    </tr>
    <tr >
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;border-top: none;border-bottom:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important;border-top: none;border-bottom:1.5px dotted #000000; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; border-top: none;border-bottom:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-top: none;"> ~ </td>
    </tr>
</table>
<br><br><br>
<table style="width:100%;">
    <tr>
        <td>日本語学習歴　Previous Japanese Language Study</td>
    </tr>
</table>
<table style="width:100%;">
    <tr class="text-center" style="font-size:12px;border-top:none !important;border-bottom:1.5px dotted #000000;">
        <th scope="col" style="width:35% !important; text-align: center;border-right:1.5px dotted #000000;">学校名<br/>Name of Institution</th>
        <th scope="col" style="width:35% !important; text-align: center;border-right:1.5px dotted #000000;border-left:none !important; ">住所<br/>Address</th>
        <th scope="col" class="align-middle" style="width: 10%; text-align: center;border-right:1.5px dotted #000000;border-left:none !important;">入学年月<br/>Starting<br>Year/Month </th>
        <th scope="col" style="width: 10%;border-left: none;text-align: center;border-left:none !important;">卒業年月<br/>Finishing<br>Year/Month</th>	
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;border-top:none !important;">
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; "></td>
        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; "></td>
        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; "></td>
        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; "></td>
        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
    </tr>
    <tr>
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; "></td>
        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
    </tr>
</table>
<table style="width:100%;">
    <tr style="border-top:none !important;">
        <td>職歴(就職年月日順に記載すること) <br>
History of Employment (Write in order, ending with the most recent employment.)</td>
    </tr>
</table>
<table style="width:100%;">
    <tr class="text-center" style="font-size:12px;border-top:none !important;border-bottom:1.5px dotted #000000;">
        <th scope="col" style="width:35% !important; text-align: center;border-right:1.5px dotted #000000;">勤務先 <br/>Place of Employment</th>
        <th scope="col" style="width:35% !important; text-align: center;border-right:1.5px dotted #000000;border-left:none !important; ">住所<br/>Address</th>
        <th scope="col" class="align-middle" style="width: 10%; text-align: center;border-right:1.5px dotted #000000;border-left:none !important;">就職年月<br/>Starting<br>Year/Month </th>
        <th scope="col" style="width: 10%;border-left: none;text-align: center;border-left:none !important;">退職年月<br/>Finishing<br>Year/Month</th>	
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; "></td>
        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; "></td>
        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; "></td>
        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; "></td>
        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
    </tr>
    <tr>
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: right;border-left: none;border-right:1.5px dotted #000000;border-left:none !important; "></td>
        <td style="font-size: 12px; text-align: left;border-right: none;border-left:none !important; "></td>
        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
    </tr>
</table>
<table style="width: 100%;">
    <tr style="border-top:none !important;border-bottom:none !important;">
        <td style="margin:0px;font-family: big5;">家族 Family</td>
    </tr>
</table>
<table style="width:100%;">
    <thead>
        <tr style="font-size: 12px;border-top:none !important;border-bottom:1.5px dotted #000000;border-top:1.5px dotted #000000;background-color:#ffffff;">
            <th style="width:20%;text-align:center;border-right:1.5px dotted #000000;" >氏名<br>Name</th>
            <th scope="col" style="width:10%;text-align:center;border-left: none;border-right:1.5px dotted #000000;">続柄<br>Relation</th>
            <th scope="col" style="width:10%;text-align:center;border-left: none;border-right:1.5px dotted #000000;">生年月日<br>Date of Birth</th>
            <th scope="col" style="width:10%;text-align:center;border-left: none;border-right:1.5px dotted #000000;">職業<br>Occupation </th>
            <th scope="col" style="width:10%;text-align:center;border-left: none !important;">住所<br>Address </th>
        </tr>
    </thead>
    <tbody id="">
        <tr style="border-bottom:1.5px dotted #000000;">
            <td style="font-size: 12px; text-align: left;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none !important;">-</td>
        </tr>
        <tr style="border-bottom:1.5px dotted #000000;">
            <td style="font-size: 12px; text-align: left;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;">-</td>
        </tr>
        <tr style="border-bottom:1.5px dotted #000000;">
            <td style="font-size: 12px; text-align: left;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;">-</td>
        </tr>
        <tr style="border-bottom:1.5px dotted #000000;">
            <td style="font-size: 12px; text-align: left;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;">-</td>
        </tr>
        <tr style="border-bottom:1.5px dotted #000000;">
            <td style="font-size: 12px; text-align: left;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;">-</td>
        </tr>
        <tr style="border-bottom:1.5px dotted #000000;">
            <td style="font-size: 12px; text-align: left;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;">-</td>
        </tr>
    </tbody>
</table>
<table style="width: 100%;">
    <tr style="border-bottom: none !important;border-top:none !important;">
        <td>* 同居する全ての家族について記入してください。父母、兄弟姉妹は、別居していても記入してください。<br> 別居の場合は住所を記入してください (同居の場合は不要です)。</td>

    </tr>
    <tr style="border-top: none !important;">
        <td>
        * Write about every member of family who lives together (No need to write the address). Parents, <br>
        brothers and sisters must be written about even if they live separately (Write the address).
        </td>
    </tr>
</table>
<table style="width:100%;">
<tr style="border-bottom:1.5px dotted #000000;">
        <td>在日親族 ( 父 ･ 母 ･ 配偶者 ・子 ･ 兄弟姉妹 ) 及び同居者 <br>
        Family in Japan (Father, Mother, Spouse, Child, Brother and Sisters, or Others) or Co-residents
</td>
    </tr>
</table>
<table style="width:100%;" class="tbl">
    <thead style="background: #f5f5f5;padding:1px;">
        <tr class="text-center" style="font-size: 12px;border-top:none !important;border-bottom:1.5px dotted #000000;background-color:#ffffff;">
            <th scope="col" style="width:20%;text-align:center;border-right:1.5px dotted #000000;" >続柄<br/>Relation</th>
            <th scope="col" style="width:10%;text-align:center;border-left: none;border-right:1.5px dotted #000000;">氏名<br/>Name</th>
            <th scope="col" style="width:10%;text-align:center;border-left: none;border-right:1.5px dotted #000000;">生年月日<br>Date of Birth</th>
            <th scope="col" style="width:10%;text-align:center;border-left: none;border-right:1.5px dotted #000000;">国籍<br/>Nationality </th>
            <th scope="col" style="width: 10%;text-align:center;border-left: none;border-right:1.5px dotted #000000;">同居予定<br>Residing with Applicant or Not </th>
            <th scope="col" style="width:10%;text-align:center;border-left: none;border-right:1.5px dotted #000000;">勤務先･通学先<br>Place of Employment/School </th>
            <th scope="col" style="width: 10%;text-align:center;border-left: none !important;">在留カード番号<br>Residence Card Number </th>
        </tr>
    </thead>
    <tbody id="">
        <tr style="border-bottom:1.5px dotted #000000;">
            <td style="font-size: 12px; text-align: left;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 12px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none !important;">-</td>
        </tr>
        <tr style="border-bottom:1.5px dotted #000000;">
            <td style="font-size: 12px; text-align: left;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 12px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none !important;">-</td>
        </tr>
        <tr style="border-bottom:1.5px dotted #000000;">
            <td style="font-size: 12px; text-align: left;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 12px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none !important;">-</td>
        </tr>
        <tr>
            <td style="font-size: 12px; text-align: left;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 12px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"> </td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
            <td style="font-size: 11px; text-align: left;border-left: none !important;">-</td>
        </tr>
        
    </tbody>
</table>
<table style="width:100%;">
    <tr style="border-bottom:1.5px dotted #000000;">
        <td>出入国歴 <br>Previous Stay in Japan</td>
    </tr>
</table>
<table style="width:100%;">
    <tr class="text-center" style="font-size: 12px;border-top:none !important;border-bottom:1.5px dotted #000000;">
        <th scope="col" style="text-align: center;border-right:1.5px dotted #000000; ">入国年月日 <br/>Date of Entry</th>
        <th scope="col" style=" text-align: center;border-left: none;border-right:1.5px dotted #000000; ">出国年月日<br/>Date of Departure</th>
        <th scope="col" class="align-middle" style=" text-align: center;border-left: none;border-right:1.5px dotted #000000;">在留資格 <br/>Status</th>
        <th scope="col" style="border-left: none;text-align: center;border-left: none !important;">入国目的<br/>Purpose of Entry</th>	
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">

        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"> -</td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;"></td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">

        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"> -</td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;"></td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">

        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"> -</td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;"></td>
    </tr>
    <tr style="border-bottom:1.5px dotted #000000;">

        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"> -</td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;"></td>
    </tr>
    <tr>
        <td style="font-size: 11px; text-align: left;border-right:1.5px dotted #000000;"> -</td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;border-left: none;border-right:1.5px dotted #000000;"></td>
        <td style="font-size: 11px; text-align: left;"></td>
    </tr>
</table>
<table style="padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
    <tr style="border-top: none !important;">
        <th style="width: 30%;">VISA申請予定地<br/>Place to Apply for VISA</th>
        <td>-</td>
    </tr>
</table>
<table style="padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
    <tr style="width: 100%;border-top: none !important;">
        <th >在留資格認定証明書交付申請歴<br/>Previous Application of Certificate of Eligibility</th>
    </tr>
</table>
<table style="padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
    <tr style="width: 100%;border-top: none !important;">
        <td style="font-size: 11px; text-align: left;width:15%;border-right:none !important;">-</td>
        <td style="font-size: 11px; text-align: left;border-right:none !important;border-left:none !important;">-</td>
        <th style="width:10%;border-right:none !important;border-left:none !important;">times</th>
        <th style="width:25%;font-family: big5;border-right:none !important;border-left:none !important;">入国目的 Purpose of Entry：</th>
        <td style="font-size: 11px; text-align: left;border-right:none !important;border-left:none !important;">-</td>
    </tr>
</table>
<table style="padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
    <tr style="width: 100%;border-top:none !important;">
        <th style="width: 50%;border-right:none !important;">同伴者 Accompanying Persons, if Any</th>
        <th style="width: 50%;border-left:none !important;">配偶者 Marital Status</th>
    </tr>
    <tr style="width: 100%;">
           <td style="border-right:none !important;">-</td>
           <td style="border-left:none !important;">-</td>
    </tr>
</table>
<table style="padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
    <tr style="width: 100%;font-family: big5;border-top:none !important;">
        <th >犯罪歴(日本または海外)  Criminal Record (in Japan or Overseas)</th>
    </tr>
</table>
<table style="padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
    <tr style="width: 100%;border-top: none !important;">
        <td style="font-size: 11px; text-align: left;width:15%;border-right:none !important;">-</td>
        <th style="width:25%;font-family: big5;border-right:none !important;border-left:none !important;">具体的内容 Details:</th>
        <td style="font-size: 11px; text-align: left;border-right:none !important;border-left:none !important;">-</td>
    </tr>
</table>
<table style="padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
    <tr style="width: 100%;font-family: big5;border-top:none !important;">
        <th >退去強制又は出国命令による出国の有無     Departure by deportation / departure order or not</th>
    </tr>
</table>
<table style="padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
    <tr style="width: 100%;border-top: none !important;">
        <td style="font-size: 11px; text-align: left;width:15%;border-right:none !important;">-</td>
    </tr>
</table>
<table style="padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
    <tr style="width: 100%;font-family: big5;border-top:none !important;">
        <th>本校での学習終了後の予定<br/>Specific Plans after Graduating from ECC</th>
    </tr>
</table>
<table style="padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
    <tr style="width: 100%;border-top:none !important;">
        <td style="font-size: 11px; text-align: left;width:15%;">-</td>
    </tr>
</table>
<br>
<table style="border:none !important;padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
    <tr style="border:none !important;">
     <th style="width: 100%;">学習理由　Purpose of Study in Japan</th>
    </tr>
</table>
<section class="personal-info">
    <p class="note" style="width: 100%;padding: 100px 0px;border: 1px solid #000000;text-align:center;"></p>
</section>
<section class="personal-info" style="width:100%;"> 
<p style="font-family: big5;">
 上記は全て真実であり、私が直筆あるいはコンピュータで作成したものです。<br/>
 I hereby declare the above statement is true and correct, and I myself filled in by my own handwriting or by computer. 
</p>
</section>
<section class="personal-info" style="width:100%;"> 
    <table style="border:none !important;padding-top:10%;margin:0px;width:50%;border-top:none !important;text-align:left;" class="tbl">
        <tr style="border:none !important;width: 60%;">
            <td style="border:none !important;font-size: 11px; text-align: left;width:10%;">_____</td>
            <th style="border:none !important;width:10%;">年 Year</th>
            <td style="border:none !important;font-size: 11px; text-align: left;width:10%;">_____</td>
            <th style="border:none !important;width:10%;">月 Month</th>
            <td style="border:none !important;font-size: 11px; text-align: left;width:10%;">_____</td>
            <th style="border:none !important;width:25%;font-family: big5;width:10%;">日 Date</th> 
        </tr>
    </table>
    </section> 
    <section class="personal-info" style="width:100%;float:right;padding-top:12px;"> 
    <div style="width: 45%;float:right">
  <p>署名 Signature:<span>____________________________</span></p>
</div>
    
    </section>
    <section class="personal-info" style="width:100%;float:right;padding-top:12px;padding-right:32px;">
    <div class="edu-logo" style="width: 290px;float:right;">      
    <img src="asset/admin/images/eccImg.jpg">
    </div>
    </section>
</div>
</section> 
    
 <!-- 
    <section class="personal-info" style="width:100%;"> 
    <table style="padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
        <tr style="width: 100%;font-family: big5;">
            <th >犯罪歴(日本または海外)  Criminal Record (in Japan or Overseas)</th>
        </tr>
    </table>
    <table style="padding-top:10%;margin:0px;width:100%;border-top:none !important;text-align:left;" class="tbl">
        <tr style="width: 100%;">
        <td style="font-size: 11px; text-align: left;width:15%;">-</td>
        </tr>
    </table>
    </section> 
<section class="personal-info" style="width:100%;"> 
    
</section> 
<section class="personal-info" style="width:100%;padding-top:22px;"> 

<p style="font-family: big5;padding-top:12px;">
 上記は全て真実であり、私が直筆あるいはコンピュータで作成したものです。<br/>
 I hereby declare the above statement is true and correct, and I myself filled in by my own handwriting or by computer. 
</p>

</section>

<section class="personal-info" style="width:100%;"> 
    <table style="border:none !important;padding-top:10%;margin:0px;width:50%;border-top:none !important;text-align:left;" class="tbl">
        <tr style="border:none !important;width: 60%;">
            <td style="border:none !important;font-size: 11px; text-align: left;width:10%;">-</td>
            <th style="border:none !important;width:10%;">年 Year</th>
            <td style="border:none !important;font-size: 11px; text-align: left;width:10%;">-</td>
            <th style="border:none !important;width:10%;">月 Month</th>
            <td style="border:none !important;font-size: 11px; text-align: left;width:10%;">-</td>
            <th style="border:none !important;width:25%;font-family: big5;width:10%;">日 Date</th> 
        </tr>
    </table>
    </section> 
    <section class="personal-info" style="width:100%;float:right;padding-top:12px;"> 
    <table style="border:none !important;padding-top:10%;margin:0px;width:100%;border-top:none !important;" class="tbl">
        <tr style="border:none !important;">
            <th style="width:70%;border:none !important;text-align:right;">  署名　Signature </th>
            <td style="border:none !important;font-size: 11px; text-align: right;">________________________________</td>
        </tr>
    </table>
    
    </section>
    <section class="personal-info" style="width:100%;float:right;padding-top:22px;padding-right:32px;">
    <div class="edu-logo" style="width: 280px;float:right;">      
    <img src="asset/admin/images/eccImg.jpg">
    </div>
    </section> -->
</body>
</html>
</html>';
