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
    font-size: 13px;
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
th{
    background-color: #e6e4e3;
}
        
</style>
</head>

<body>
<section class="header" style="display: inline;position:absolute;">
	<div class="application-title" style="text-align:center;font-family:sjis;margin-left:80px;">
		<h2 style="font-family: sjis;padding:0px;margin:10px;">国際ことば学院日本語学校　入学願書</h2>
        <p style="font-size:14px;">Application for Admission to<br/> Kokusai Kotoba Gakuin Japanese Language School</p>
	</div>
</section>
<section class="header" style="padding: 0px;margin:0px;">
<div class="application-title" style="width:20%;height:160px;border:1px solid #000000;margin-left:550px;">
		<p>Photo</p>
        <p>4cm×3cm</p>
</div>
</section>
<section class="personal-info" style="width:100%;">
<div class="personal" style="width: 100%;display:inline-block;">
<h4 style="margin:0px;font-family: sjis;">1.氏名、性別、国籍、生年月日、年齢、出生地 <p style="font-size:12px ;">Applicant's name, sex, nationality, date of birth, age, place of birth</p></h4>
    <table style="width:100%;">
      <tr style="border-bottom:none !important;">
        <th style="width:10% !important; text-align: center; ">氏名<br>Full <br/>Name</th>
        <td style="text-align: left;"></td>
      </tr>
    </table>
    <table style="width:100%; ">
      <tr >
        <th style="width:10% !important; text-align: center; ">性別<br>sex</th>
        <td style="text-align: left;">Male    ・　Female  </td>
        <th style="width:15% !important; text-align: center; ">生年月日<br>Date of birth</th>
        <td style="text-align: left;"></td>
      </tr>
    </table>
    <table style="width:100%; ">
      <tr >
        <th style="width:15% !important; text-align: center; ">国籍<br>Nationality</th>
        <td style="width:30% ;text-align: left;"></td>
        <th style="width:15% !important; text-align: center; ">出生地<br>Place of birth</th>
        <td style="width:30% ;text-align: left;">(省Province) ・ （市 City)</td>
      </tr>
    </table>
<p style="font-family: sjis;font-size:11px;text-align:right;line-height:11px;">
    ※パスポートの出生地と同じように書いてくださいPlease write as same as on your Passport<br/>
    ※中国人の方は必ず「省」も書いて下さい。Chinese applicant must add the province name,too
</p>
</div>
</section>
<section class="personal-info" style="width:100%;">
<div class="personal" style="width: 100%;display:inline-block;">
<h4 style="margin:0px;font-family: sjis;">2.連絡先　Contact Details</h4>
<table style="width: 100%;">
    <tr>
        <th rowspan="2" style="width: 30%;">あなたの連絡先 <br>Contact details of yourself</th>
        <td colspan="4">
            <p style="width:100%;">現住所(Current Address) </p>
            <p>-</p>
        </td>
    </tr>
    <tr>
        <th style="width: 10%;">(TEL)</th>
        <td style="width: 30%;"></td>
        <th style="width: 10%;">(E-mail)</th>
        <td style="width: 30%;"></td>
    </tr>
    </table>

    <table style="width: 100%;">
    <tr style="border-top: none !important;">
        <th rowspan="2" style="width: 30%;">家族の連絡先 <br>Contact details of your family</th>
        <td colspan="4">
            <p style="width:100%;">住所（Address of your family)  </p>
            <p>-</p>
        </td>
    </tr>
    <tr style="border-top: none !important;">
        <th style="width: 10%;">(TEL)</th>
        <td style="width: 30%;"></td>
        <th style="width: 10%;">(E-mail)</th>
        <td style="width: 30%;"></td>
    </tr>
    </table>
</div>
</section>

<section class="personal-info" style="width:100%;padding-top:10px;">
<div class="personal" style="width: 100%;display:inline-block;">
<h4 style="margin:0px;font-family: sjis;">3.現在の状況　Current Status　＜あなたは現在何をしていますか？＞</h4>
<div style="width: 100%;">
<p style="font-size:12px; width:27%;float:left;font-weight:bold;padding-left:10px;">A. 学校在学中（日本語学校を除く）</p>
<p style="width:70%;font-size: 10px;text-align:left;float:right;line-height:10px;">If you are currently being enrolled and registered as a student at a school (except private Japanese Language schools/intitues), please fill in the blanks below.</p>
</div>
    <table style="width:100%;">
      <tr style="border-bottom:none !important;">
        <th style="width:30% !important; text-align: center; ">学校名　Name of school</th>
        <td style="text-align: left;"></td>
      </tr>
    </table>
    <table>
      <tr>
        <th style="width:27% !important; text-align: center; ">学部・学科　Department/Major</th>
        <th style="width:25% !important; text-align: center; ">学年 Grade</th>
        <th colspan="2" style="width:30% !important; text-align: center; ">卒業予定日(Expected month and year of graduating from the school.)</th>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <th style="width:20% !important; text-align: center; ">卒業予定 <br>will graduate in</th>
        <td> 月 年 <br> Month Year</td>
      </tr>
    </table>
</div>
</section>

<section class="personal-info" style="width:100%;padding-top:5px;">
<div class="personal" style="width: 100%;display:inline-block;">
<div style="width: 100%;">
<p style="font-size:13px; width:27%;float:left;font-weight:bold;padding-left:10px;">B. 就職している場合</p>
<p style="width:70%;font-size: 10px;text-align:left;float:right;">If you are being employed or have a job, please fill in the blanks below.</p>
</div>
    <table style="width:100%;">
      <tr style="border-bottom:none !important;">
        <th style="width:30% !important; text-align: center; ">会社名　Company name</th>
        <td style="text-align: left;"></td>
      </tr>
    </table>
    <table>
      <tr>
        <th style="width:40% !important; text-align: center; ">職種 <br>Type of job</th>
        <td style="width:60%"></td>
        <th style="width:40% !important; text-align: center; ">  在籍期間 <br>Period</th>
        <td style="width:60%"></td>
      </tr>
    </table>
</div>
</section>
<section class="personal-info" style="width:100%;padding-top:5px;">
<div class="personal" style="width: 100%;display:inline-block;">
<p style="font-size:13px; width:100%;font-weight:bold;padding-left:10px;">
    C.その他（日本語学校の学生や、上記のA,B以外の場合、状況を詳しく書いて下さい。) <br>
   <span style="font-size: 10px;"> Others (If your are a student of Japanese language course, or neither a student nor a worker, explain your current situation in detail. )</span>
</p>
<table style="width: 100%;border:1px solid #000000;">
<tr>
    <td style="width: 100%;height:80px;border:1px solid #000000;"></td>
 </tr>
</table>
</div>
</section>

<section class="personal-info" style="width:100%;padding-top:22px;">
<div class="personal" style="width: 100%;display:inline-block;">
<div style="width: 100%;">
<h4 style="width:30%;float:left;font-weight:bold;padding-left:10px;margin:0px;font-family: sjis;">4.旅券　Passport</h4>
<p style="width:40%;font-size: 14px;text-align:left;float:left;">
<input type="checkbox"><label for="" style="font-size: 14px;">ありYes</label>
<input type="checkbox"><label for="" style="font-size: 14px;">なし No</label>
</p>
</div>
    <table style="width:100%;">
      <tr style="border-bottom:none !important;">
        <th style="width:30% !important; text-align: center; ">旅券番号　Passport number</th>
        <td colspan="3" style="width:80%;text-align: left;">-</td>
      </tr>
      <tr style="border-bottom:none !important;">
        <th style="width:30% !important; text-align: center; ">発行年月日　Date of issue</th>
        <td style="text-align: left;border-right:none !important;text-align: right; "><span style="width:80px;float:right;"></span> 日Day</td>
        <td style="text-align: left;border-left:none !important;border-right:none !important;text-align: right;"><span style="width:80px;float:right;"></span>月Month</p></td>
        <td style="text-align: left;border-left:none !important;text-align: right;"><span style="width:80px;float:right;"></span>年Year</p></td>
      </tr>
      <tr>
        <th style="width:30% !important; text-align: center; ">有効期限　Date of expiration</th>
        <td style="text-align: left;border-right:none !important;text-align: right;"><span style="width:80px;float:right;"></span> 日Day</td>
        <td style="text-align: left;border-left:none !important;border-right:none !important;text-align: right;"><span style="width:80px;float:right;"></span>月Month</p></td>
        <td style="text-align: left;border-left:none !important;text-align: right;"><span style="width:80px;float:right;"></span>年Year</p></td>
      </tr>
    </table>
</div>
</section>

<section class="personal-info" style="width:100%;padding-top:22px;">
<div class="personal" style="width: 100%;display:inline-block;">
<div style="width: 100%;">
<h4 style="width:60%;float:left;font-weight:bold;padding-left:10px;margin:0px;font-family: sjis;">5.申請歴　Have you ever applied for Certificate of Eligibility?</h4>
<p style="width:25%;font-size: 14px;text-align:left;float:right;">
<input type="checkbox"><label for="" style="font-size: 14px;">ありYes</label>
<input type="checkbox"><label for="" style="font-size: 14px;">なし No</label>
</p>
</div>
    <table style="width:100%;">
    <tr>
      <td style="width:10%;border-right:none !important;">
        <p style="font-size: 12px;text-align:left;float:right;">
            <input type="checkbox"><label for="" style="font-size: 14px;">交付<br/>issued</label>
        </p>
      </td>
      <td style="font-size:12px;width:27%;text-align:left;border-right:none !important;border-left:none !important;">(申請時の入学予定 年 月期生<br/>Intended to enroll  </td>
      <td style="width:12%;text-align:left;border-right:none !important;border-left:none !important;">年<br/>year</td>
      <td style="width:12%;text-align:left;border-left:none !important;border-right:none !important;">月期生)<br/>month</td>
      <td style="width:12%;border-right:none !important;border-left:none !important;">
        <p style="font-size: 12px;text-align:left;float:right;">
            <input type="checkbox"><label for="" style="font-size: 14px;">不交付<br/>denied</label>
        </p>
      </td>  
      <td style="font-size:12px;width:25%;text-align:left;border-right:none !important;border-left:none !important;">(申請時の入学予定 年 月期生<br/>Intended to enroll  </td>
      <td style="width:12%;text-align:left;border-right:none !important;border-left:none !important;">年<br/>year</td>
      <td style="width:12%;text-align:left;border-left:none !important;border-right:none !important;">月期生)<br/>month</td>
    </tr>
    </table>

    <table style="width:100%;">
    <tr>
      <td style="width:25%;text-align:left;border-right:none !important;border-left:none !important;">ビザの種類 type of visa </td>
      <td style="width:12%;text-align:left;border-right:none !important;border-left:none !important;">
         <p style="font-size: 12px;text-align:left;float:right;">
            <input type="checkbox"><label for="" style="font-size: 14px;">留学<br/>Student</label>
         </p>
      </td>
      <td style="width:12%;text-align:left;border-right:none !important;border-left:none !important;">
         <p style="font-size: 12px;text-align:left;float:right;">
            <input type="checkbox"><label for="" style="font-size: 14px;">研修<br/>Trainee</label>
         </p>
      </td>
      <td style="width:12%;text-align:left;border-right:none !important;border-left:none !important;">
         <p style="font-size: 12px;text-align:left;float:right;">
            <input type="checkbox"><label for="" style="font-size: 14px;">技能実習<br/>Technical Intern Training</label>
         </p>
      </td>
      <td style="width:12%;text-align:left;border-right:none !important;border-left:none !important;">
         <p style="font-size: 12px;text-align:left;float:right;">
            <input type="checkbox"><label for="" style="font-size: 14px;">その他<br/>Others</label>
         </p>
      </td>
      <td style="width:12%;text-align:left;border-right:none !important;border-left:none !important;">(</td>
      <td style="width:12%;text-align:right;border-right:none !important;border-left:none !important;">)</td>
    </tr>
      
    </table>
</div>
</section>
<style>
    input{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none !important;
  border-bottom: 2px solid red;
}
input {
    border: 0;
    outline: 0;
    border-bottom: 2px solid #1890ff;
}
</style>
<section class="header" style="display: inline;padding-top:15px;">
	<div class="application-title" style="text-align:center;font-family:sjis;margin-left:80px;">
		<h2 style="font-family: sjis;padding:0px;margin:10px;">≪履 歴 書≫ PERSONAL HISTORY </h2>
	</div>
</section>
<section class="header" style="display: inline;">
<form style="border:none !important;border-bottom:2px solid red !important;">
<table style="width: 100%;">
  <tr style="border: none !important;">
    <th style="width: 10%;background-color:none !important;border: none !important;">1. 氏名 <span  style="font-size: 11px;"> < Name > </span></th>
    <td style="width: 80%;border: none !important;"></td>
  </tr>
  </table>

<table style="width: 100%;">
  <tr style="border: none !important;width:20%;">
    <th rowspan="2" style="width: 10%;background-color:none !important;border: none !important;">2. 生年月日<span  style="font-size: 12px;"> < Date of birth > </span></th>
    <td style="width: 10%;border: none !important;"></td>
    <td style="width: 10%;border: none !important;">/</td>
    <td style="width: 10%;border: none !important;">/</td>
    <th rowspan="2" style="width: 10%;background-color:none !important;border: none !important;">3. 国籍　<span  style="font-size: 12px;"> < Nationality > </span></th>
    <td rowspan="2" style="width: 10%;border: none !important;"></td>
  </tr>
  <tr style="border: none !important;">
  <td style="width: 10%;border: none !important;text-align:center;">Day</td>
  <td style="width: 10%;border: none !important;text-align:center;">Month</td>
  <td style="width: 10%;border: none !important;text-align:center;">Year</td>
  </tr>
</table>
<table style="width: 100%;">
  <tr style="border: none !important;">
    <th style="width: 20%;background-color:none !important;border: none !important;">4.現住所 <span  style="font-size: 12px;">< current housing address > </span><p style="font-size: 11px;">(the place you are living now)</p></th>
    <td style="width: 65%;border: none !important;"></td>
  </tr>
</table>
<br>
<table style="width: 100%;">
  <tr style="border: none !important;">
    <th style="width: 20%;background-color:none !important;border: none !important;">5. 電話番号 <span  style="font-size: 12px;">  < Phone number > </span></th>
    <td style="width: 30%;border: none !important;text-align:left;">(Home)</td>
    <td style="width: 30%;border: none !important;text-align:right;text-align:left;">/(Mobile)</td>
  </tr>
</table>
<br>
  <table style="width: 100%;">
  <tr style="border: none !important;">
    <th style="width: 30%;background-color:none !important;border: none !important;">6.  Eメール <span  style="font-size: 12px;"> < E-Mail address > </span></th>
    <td style="width: 65%;border: none !important;"></td>
  </tr>
  </table>
  <br>
  <table style="width: 100%;">
  <tr style="border: none !important;">
    <th style="width: 28%;background-color:none !important;border: none !important;">7.配偶者の有無 <span  style="font-size: 12px;"> < Marital Status > </span></th>
    <td style="width: 35%;border: none !important;">
    <input type="radio"><label for="" style="font-size: 14px;">あり < Married ></label>
    <input type="radio"><label for="" style="font-size: 14px;">なし < Single ></label>
    </td>
    <th style="width: 28%;background-color:none !important;border: none !important;"> <span style="font-size: 12px;">配偶者名 < Name of your spouse > </span></th>
    <td  style="width: 8%;border: none !important;"></td>
  </tr>
</table>
<br>
<p style="font-weight: bold;"> 8. 学歴  小学校～最終学歴 < Academic Accomplishments ></p>
<p style="line-height: 2px;">Please complete your detailed educational backgrounds from elementary to your most recent academic record.</p>
<table>
    <tr style="border-bottom: none !important;">
        <th rowspan="2" style="text-align:center;">学校名 <br>Name of School</th>
        <th rowspan="2" style="text-align:center;">所在地(住所) <br><span style="font-size: 11px;">Location(Address) <br>Town, City, State/Province and Country</span></th>
        <th colspan="3" style="text-align:center;border-bottom: none !important;"><span style="font-size: 11px;">在籍年月(入学年月~卒業年月) </span><br><span style="font-size: 11px;">Dates of Attendance</span></th>
        <th rowspan="2" style="text-align:center;">期間  <br><span style="font-size: 11px;">Duration total years</span></th>
    </tr>
    <tr style="border-top: none !important;">
      <th style="border-right:none !important;border-top: none !important;"></th>
      <th style="text-align:center;border-left:none !important;border-right:none !important;border-top: none !important;"><span style="font-size: 11px;">Month </span></th>
      <th style="text-align:center;border-left:none !important;border-top: none !important;"> <span style="font-size: 11px;">Year</span></th>
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;"><span style="font-size: 11px;">from</span></th>
        <td style="border-right:none !important;"></td> 
        <td style="border-left:none !important;">/</td>  
        <td rowspan="2" style="width: 15%;"></td>
    </tr>
    <tr>
       <th style="width: 10%;"><span style="font-size: 11px;">to</span></th>
       <td style="border-right:none !important;"></td> 
       <td style="border-left:none !important;">/</td>  
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;"><span style="font-size: 11px;">from</span></th>
        <td style="border-right:none !important;"></td> 
        <td style="border-left:none !important;">/</td>  
        <td rowspan="2" style="width: 15%;"></td>
    </tr>
    <tr>
       <th style="width: 10%;"><span style="font-size: 11px;">to</span></th>
       <td style="border-right:none !important;"></td> 
       <td style="border-left:none !important;">/</td>  
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;"><span style="font-size: 11px;">from</span></th>
        <td style="border-right:none !important;"></td> 
        <td style="border-left:none !important;">/</td>  
        <td rowspan="2" style="width: 15%;"></td>
    </tr>
    <tr>
       <th style="width: 10%;"><span style="font-size: 11px;">to</span></th>
       <td style="border-right:none !important;"></td> 
       <td style="border-left:none !important;">/</td>  
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;"><span style="font-size: 11px;">from</span></th>
        <td style="border-right:none !important;"></td> 
        <td style="border-left:none !important;">/</td>  
        <td rowspan="2" style="width: 15%;"></td>
    </tr>
    <tr>
       <th style="width: 10%;"><span style="font-size: 11px;">to</span></th>
       <td style="border-right:none !important;"></td> 
       <td style="border-left:none !important;">/</td>  
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;"><span style="font-size: 11px;">from</span></th>
        <td style="border-right:none !important;"></td> 
        <td style="border-left:none !important;">/</td>  
        <td rowspan="2" style="width: 15%;"></td>
    </tr>
    <tr>
       <th style="width: 10%;"><span style="font-size: 11px;">to</span></th>
       <td style="border-right:none !important;"></td> 
       <td style="border-left:none !important;">/</td>  
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;"><span style="font-size: 11px;">from</span></th>
        <td style="border-right:none !important;"></td> 
        <td style="border-left:none !important;">/</td>  
        <td rowspan="2" style="width: 15%;"></td>
    </tr>
    <tr>
       <th style="width: 10%;"><span style="font-size: 11px;">to</span></th>
       <td style="border-right:none !important;"></td> 
       <td style="border-left:none !important;">/</td>  
    </tr>
</table>

<br><br>

<p for="" style="font-weight: bold;"> 9. 日本語学習経験　< Experience of studying Japanese ></p>
<p style="line-height: 11px;">(1)日本語学習時間　< Total study hours of Japanese Language ><span style="font-size: 10px;">Please describe your completed hours of studying Japanese. </span> </p>
<table style="width: 75%;">
    <tr >
        <th style="text-align:center;width:20%">学校名 <p style="font-size:11px;">Name of School(s)</p></th>
        <th style="text-align:center;width:40%">所在地(住所)  <p style="font-size:10px;">Location(Address) <br>Town, City, State/Province and Country</p></th>
        <th style="text-align:center;width:10%;">受講コース、<br>レベル <br> Name of <br>class/level </th>
        <th colspan="3" style="text-align:center;width:10%;">在籍年月(入学年月~卒業年月) <br>Dates of Attendance <br>Month     Year</th>
        <th style="text-align:center;width:10%;">コースの  <br>  総時間数 <br> total hours of the course </th>
        <th style="text-align:center;width:10%;">   既習時間数 <br>  総時間数 <br> Total completed hours (up to now)  </th>
        <th style="text-align:center;width:10%;">学習状況 <br> Status </th>
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;font-size:11px;">from</th>
        <td style="border-right:none !important;width: 10%;"></td> 
        <td style="border-left:none !important;width: 10%;">/</td>  
        <td rowspan="2" style="width: 15%;text-align:center;"> -<br/>hours</td>
        <td rowspan="2" style="width: 15%;text-align:center;"> -<br/>hours</td>
        <td rowspan="2" style="width: 15%;">
       <input type="checkbox"><span style="font-size: 11px;">Completed</span><br>
       <input type="checkbox"><span style="font-size: 11px;">Still Studying</span><br>
      </td>
    </tr>
    <tr>
       <th style="width: 10%;font-size:11px;">to</th>
       <td style="border-right:none !important;width: 10%;"></td> 
       <td style="border-left:none !important;width: 10%;">/</td>  
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;font-size:11px;">from</th>
        <td style="border-right:none !important;width: 10%;"></td> 
        <td style="border-left:none !important;width: 10%;">/</td>  
        <td rowspan="2" style="width: 15%;text-align:center;"> -<br/>hours</td>
        <td rowspan="2" style="width: 15%;text-align:center;"> -<br/>hours</td>
        <td rowspan="2" style="width: 15%;">
       <input type="checkbox"><span style="font-size: 11px;">Completed</span><br>
       <input type="checkbox"><span style="font-size: 11px;">Still Studying</span><br>
      </td>
    </tr>
    <tr>
       <th style="width: 10%;font-size:11px;">to</th>
       <td style="border-right:none !important;width: 10%;"></td> 
       <td style="border-left:none !important;width: 10%;">/</td>  
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;font-size:11px;">from</th>
        <td style="border-right:none !important;width: 10%;"></td> 
        <td style="border-left:none !important;width: 10%;">/</td>  
        <td rowspan="2" style="width: 15%;text-align:center;"> -<br/>hours</td>
        <td rowspan="2" style="width: 15%;text-align:center;"> -<br/>hours</td>
        <td rowspan="2" style="width: 15%;">
       <input type="checkbox"><span style="font-size: 11px;">Completed</span><br>
       <input type="checkbox"><span style="font-size: 11px;">Still Studying</span><br>
      </td>
    </tr>
    <tr>
       <th style="width: 10%;font-size:11px;">to</th>
       <td style="border-right:none !important;width: 10%;"></td> 
       <td style="border-left:none !important;width: 10%;">/</td>  
    </tr>
 
</table>

<br><br>
<p style="line-height: 2px;"> (2)日本語能力試験合格　< Japanese Language Tests (JLPT, NAT-TEST, J.TEST, TOP-J etc. )></p>
<p style="padding-left: 9px;line-height: 3px;">Please write name(s) of Japanese Proficiency Test you have taken and the passed level(s).  </p>
<table style="width: 100%;">
   <tr>
    <th colspan="2">受験日(Month/Year of the Test)</th>
    <th rowspan="2">  試験名　< Name of the test(s) ></th>
    <th rowspan="2">合格した級 <br> level passed </th>
   </tr>
   <tr>
    <th>月Month</th>
    <th>年 Year</th>
   </tr>
   <tr>
    <td style="border-right: none !important;; "></td>
    <td style="border-left: none !important">/</td>
    <td></td>
    <td></td>
   </tr>
   <tr>
    <td style="border-right: none !important;; "></td>
    <td style="border-left: none !important">/</td>
    <td></td>
    <td></td>
   </tr>
</table>
</form>
</section>

<section class="personal-info" style="width:100%;padding-top:22px;">
<div class="personal" style="width: 100%;display:inline-block;">
<div style="width: 100%;">
<h4 style="width:50%;float:left;font-weight:bold;padding-left:10px;margin:0px;font-family: sjis;">10. 仕事の経験 < Vocational experience(s) ></h4>
<p style="width:40%;font-size: 14px;text-align:left;float:right;">
<input type="checkbox"><label for="" style="font-size: 14px;">あり(Yes)・</label>
<input type="checkbox"><label for="" style="font-size: 14px;">なし (No)</label>
</p>
</div>
    <table style="width:100%;">
      <tr style="text-align: center;">
        <th rowspan="2" style="width:17%;text-align: center;">勤務先< 会社名 > <br/>Name of Company</th>
        <th rowspan="2" style="width:15%;text-align: center;">職種 <br>Occupation/type of job</th>
        <th rowspan="2" style="width:15%;text-align: center;">所在地 <br>Place/Location</th>
        <th colspan="3" style="width:20%;text-align: center;">入社年月   <br>Starting</th>
        <th colspan="3" style="width:20%;text-align: center;">退社年月 <br> Leaving</th>
      </tr>
    <tr>
      <th style="text-align: center;">Day</th>
      <th style="text-align: center;">Month</th>
      <th style="text-align: center;">Year</th>
      <th style="text-align: center;">Day</th>
      <th style="text-align: center;">Month</th>
      <th style="text-align: center;">Year</th>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td style="border-right: none !important;"></td>
      <td style="border-left: none !important;border-right: none !important;">/</td>
      <td style="border-left: none !important;">/</td>
      <td style="border-right: none !important;"></td>
      <td style="border-left: none !important;border-right: none !important;">/</td>
      <td style="border-left: none !important;">/</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td style="border-right: none !important;"></td>
      <td style="border-left: none !important;border-right: none !important;">/</td>
      <td style="border-left: none !important;">/</td>
      <td style="border-right: none !important;"></td>
      <td style="border-left: none !important;border-right: none !important;">/</td>
      <td style="border-left: none !important;">/</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td style="border-right: none !important;"></td>
      <td style="border-left: none !important;border-right: none !important;">/</td>
      <td style="border-left: none !important;">/</td>
      <td style="border-right: none !important;"></td>
      <td style="border-left: none !important;border-right: none !important;">/</td>
      <td style="border-left: none !important;">/</td>
    </tr>
    </table>
</div>
</section>


<section class="personal-info" style="width:100%;padding-top:22px;">
<div class="personal" style="width: 100%;display:inline-block;padding:0px;margin:0px;">
<div style="width: 100%;">
<h4 style="width:50%;float:left;font-weight:bold;padding-left:10px;margin:0px;font-family: sjis;">11. 来日歴 < Experience of stay in Japan ></h4>
<p style="width:40%;font-size: 14px;text-align:left;float:right;">
<input type="checkbox"><label for="" style="font-size: 14px;">あり(Yes)・</label>
<input type="checkbox"><label for="" style="font-size: 14px;">なし (No)</label>
</p>
</div>
    <table style="width:100%;">
      <tr style="text-align: center;">
        <th rowspan="2" style="width:17%;text-align: center;">滞在理由/場所 <br>Purpose and Place of stay </th>
        <th rowspan="2" style="width:15%;text-align: center;">在留資格  <br>Visa</th>
        <th colspan="3" style="width:20%;text-align: center;">入国年月日   <br>Date of Arrival</th>
        <th colspan="3" style="width:20%;text-align: center;">出国年月日 <br> Date of Departure </th>
      </tr>
    <tr>
      <th style="text-align: center;">Day</th>
      <th style="text-align: center;">Month</th>
      <th style="text-align: center;">Year</th>
      <th style="text-align: center;">Day</th>
      <th style="text-align: center;">Month</th>
      <th style="text-align: center;">Year</th>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td style="border-right: none !important;"></td>
      <td style="border-left: none !important;border-right: none !important;">/</td>
      <td style="border-left: none !important;">/</td>
      <td style="border-right: none !important;"></td>
      <td style="border-left: none !important;border-right: none !important;">/</td>
      <td style="border-left: none !important;">/</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td style="border-right: none !important;"></td>
      <td style="border-left: none !important;border-right: none !important;">/</td>
      <td style="border-left: none !important;">/</td>
      <td style="border-right: none !important;"></td>
      <td style="border-left: none !important;border-right: none !important;">/</td>
      <td style="border-left: none !important;">/</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td style="border-right: none !important;"></td>
      <td style="border-left: none !important;border-right: none !important;">/</td>
      <td style="border-left: none !important;">/</td>
      <td style="border-right: none !important;"></td>
      <td style="border-left: none !important;border-right: none !important;">/</td>
      <td style="border-left: none !important;">/</td>
    </tr>
    </table>
    <p style="padding-left: 9px;padding-top: 5px;">●４回以上来日した場合、下欄に記入してください。
    <span style="font-size: 9px;"> If you have stayed in Japan more than four times, please use the blank below.</span>
    <hr><hr><hr>
  </p>
    
</div>
</section>

<div style="width: 100%;padding-top:12px;">
<h4  style="font-family: sjis;">12. 母国や日本での犯罪(交通違反を含む)による処分・強制送還歴はありますか？<span style="font-size: 11px;">< Regarding Criminal record etc. ></span></h4>
<p style="width:70%;float:left;font-family: sjis;"> (1) 犯罪歴　<span style="font-size: 11px;"> "Criminal record in your home country or Japan including dispositions due to traffic violations, etc."	</span></p>
<p style="width:28%;font-size: 14px;text-align:left;float:right;">
<input type="radio"><label for="" style="font-size: 14px;">あり Yes</label>
<input type="radio"><label for="" style="font-size: 14px;">なし No </label>
</p>
<p style="width:70%;float:left;font-family: sjis;"> (2) 強制送還歴   Departure by deportation or departure order</p>
<p style="width:28%;font-size: 14px;text-align:left;float:right;">
<input type="radio"><label for="" style="font-size: 14px;">あり Yes</label>
<input type="radio"><label for="" style="font-size: 14px;">なし No </label>
</p>
</div>

<div style="width: 100%;padding-top:15px;">
<h4  style="font-family: sjis;padding:0px;margin:0px;">13.  この学校を卒業した後の予定 < Future plan after graduating from this school.></h4>
 <input type="radio"><label for="">A. 進学　< Advancing to higher education></label><br><br>
 <p style="width: 50%;float:left">
 <input type="checkbox"><label for="">大学院< Master's degree / Doctoral course</label><br>
 <input type="checkbox"><label for=""> 短期大学< Junior College>  </label><br>
 <input type="checkbox"><label for="">その他 < Other > </label><br>
 </p>
 <p style="width: 40%;float:right;padding-top:8px;">
 <input type="checkbox"><label for="">大学< Undergraduate(Bachelor) > </label><br>
 <input type="checkbox"><label for="">専門学校< Vocational School ></label>
 </p>
 <input type="radio"><label for="">B. 就職 < Planning  to work></label><br>
 <input type="radio"><label for="">C. 帰国 < Returning home> </label><br>
 <input type="radio"><label for="">D. その他 < Other> (Specify)</label><br>
 <textarea name="" id="" cols="30" rows="3" style="width:100%;border: 1px solid #000000;">-</textarea>
</div>

<div style="width: 100%;padding-top:15px;">
 <h4 style="font-family: sjis;">14. 日本語学習目的〈Purpose of Learning Japanese in Japan Kokusai Kotoba Gakuin JLS)〉</h4>
<hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>
</div>
<br>
<p>この履歴書は私が自分自身で書いたものであり、その内容はすべて事実であることを誓います。<br>
 I hereby swear that the all above is true and that I wrote this personal history myself.
</p>

<div>
  <p style="width:25%;float: left;padding-left:40%;">日付 Date:</p>
     <p style="width:5%;float: right;">日　<br>day</p>
     <p style="width:15%;float: right;">月 <br>month</p>
     <p style="width:15%;float: right;">年 <br>year</p>
     
</div>
<br>
<div style="width: 60%;float:right">
  <p>署名 Signature:<span>_______________________________________</span></p>
</div>

</body>
</html>
</html>';
