$html = '
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="asset/css/style.css">
<style>
@font-face {
    font-family: sun-exta, sjis;
    font-style: normal;
    font-weight: normal;
    src: url('dompdf/dompdf/libs/fonts/DejaVuSans-Bold.ttf') format('truetype');
}
   
body {
    font-size: 14px;
    color: #111;
    font-weight: normal;
    font-family: sjis;
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
<section class="header" style="border: 1px solid #080707;background-color: #e6e4e3">
	<div class="application-title" style="text-align:center;font-family:sjis;">
		<h2 style="padding:8px 0px ;margin:0px;font-family: sjis;">2023 年　4月生  エントリーシート</h2>
        <h2 style="padding:0px 0px 8px 0px;margin:0px;font-family: sjis;">Entry form for 2023-April students</h2>
	</div>
    <div>
    </div>
</section>
<section class="eligibility">	
  <table style="width: 100%;">
            <tr>
                <th style="width:19%;background-color: #e6e4e3;text-align:center;">記入日<br/>date Y/M/D</th>
                <td>2022年Y______月M ______日D</td>
            </tr>
  </table>
</section>
<section class="eligibility">	
  <table style="width: 100%;">
            <tr>
                <th style="width:18%;background-color: #e6e4e3;text-align:center;">国<br/>Country</th>
                <td style="width:30%;"></td>
                <th style="width:18%;background-color: #e6e4e3;text-align:center;">学校名（紹介者）<br/>Name of School<br/>or Introducer</th>
                <td style="width:30%;"></td>
            </tr>
  </table>
</section>
<section class="eligibility">	
  <table style="width: 100%;">
            <tr>
                <th style="width:19%;background-color: #e6e4e3;text-align:center;">応募者名<br/>Name of <br/>Applicant</th>
                <td></td>
            </tr>
  </table>
</section>
<section class="eligibility">	
  <table style="width: 100%;">
            <tr>
                <th style="width:18%;background-color: #e6e4e3;text-align:center;">性別<br/>Sex</th>
                <td style="width:30%;"></td>
                <th style="width:18%;background-color: #e6e4e3;text-align:center;">既婚・未婚<br/>Marital status</th>
                <td style="width:30%;"></td>
            </tr>
  </table>
</section>
<section class="eligibility">	
  <table style="width: 100%;">
            <tr>
                <th style="width:9%;background-color: #e6e4e3;text-align:center;">生年月日<br/>Date of Birth </th>
                <td style="width:14%;">2022年Y__月M__日D</td>
                <th style="width:17%;background-color: #e6e4e3;text-align:center;">年齢<br/>Age</th>
                <td style="width:21%;text-align: right;"><p style="width:10%;text-align: right;">歳Years old</p></td>
            </tr>
  </table>
</section>
<section class="eligibility">	
  <table style="width: 100%;">
            <tr>
                <th style="width:6%;background-color: #e6e4e3;text-align:center;">最終学歴<br/>Final Education</th>
                <td style="width:30%;"></td>
                <th style="width:12%;background-color: #e6e4e3;text-align:center;">卒業の年<br/>When did (will) <br/>you graduate?</th>
                <td style="width:25%;text-align: right;"><p style="width:10%;text-align: right;">歳Years</p></td>
            </tr>
  </table>
</section>
<section class="eligibility">	
  <table style="width: 100%;">
            <tr>
                <th style="width:19%;background-color: #e6e4e3;text-align:center;">今の状況<br/>Current situation</th>
                <td></td>
            </tr>
  </table>
</section>
<section class="eligibility">	
  <table style="width: 100%;">
            <tr>
                <th style="width:18%;background-color: #e6e4e3;text-align:center;">テスト合格級<br/>Japanese <br/>Language test<br/> you passed </th>
                <td style="width:28%;text-align: left;">
                   <p style="width:12%;text-align: left;">テストName of Test:</p><br/>
                   <p style="width:12%;text-align: left;">級 Level:</p>
                </td>
                <th style="width:19%;background-color: #e6e4e3;text-align:center;">テスト合格日<br/>when did you pass?</th>
                <td style="width:30%;"></td>
            </tr>
  </table>
</section>
<section class="eligibility">	
  <table style="width: 100%;">
            <tr>
                <th style="width:17%;background-color: #e6e4e3;text-align:center;">生年月日<br/>Date of Birth </th>
                <td style="width:26%;">____年Year____月Month</td>
                <th style="width:20%;background-color: #e6e4e3;text-align:center;">年齢<br/>Age</th>
                <td style="width:30%;text-align: right;"></td>
            </tr>
  </table>
</section>

<section class="eligibility">	
  <table style="width: 100%;">
            <tr>
                <th rowspan="2" style="width:19%;background-color: #e6e4e3;text-align:center;">日本語学習期間<br/>Period of studying Japanese</th>
                <td style="width:15%;">From:__年Y__月M__日D</td>
                <th style="width:17%;background-color: #e6e4e3;text-align:center;">日本語学習時間<br/>（今までの既習時間) <br/>Had studied until now</th>
                <td style="width:21%;text-align: right;"><p style="width:10%;text-align: right;">時間Hours</p></td>
            </tr>
            <tr>
                <td style="width:30%;">To:__年Y__月M__日D</td>
                <th style="width:12%;background-color: #e6e4e3;text-align:center;">他の学校に応募したこと<br/>Have you ever applied  <br/>for another school?</th>
                <td style="width:25%;"></td>
            </tr>
  </table>
</section>
<section class="eligibility">	
  <table style="width: 100%;">
            <tr>
                <th style="width:21%;background-color: #e6e4e3;text-align:center;">ビザ申請歴<br/>Have you applied for Japanese Visa/COE?</th>
                <td style="width:32%;"></td>
                <th style="width:20%;background-color: #e6e4e3;text-align:center;">ビザの種類<br/>Type of Visa</th>
                <td style="width:35%;"></td>
            </tr>
  </table>
</section>
</body>

</html>
</html>';
