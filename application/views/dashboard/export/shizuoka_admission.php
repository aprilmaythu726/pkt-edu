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
th{
    background-color: #e6e4e3;
}
        
</style>
</head>

<body>
<section class="header" style="display: inline;position:absolute;">
	<div class="application-title" style="text-align:center;font-family:sjis;margin-left:80px;">
		<h2 style="font-family: sjis;padding:0px;margin:10px;">国際ことば学院日本語学校　入学願書</h2>
        <p>Application for Admission to<br/> Kokusai Kotoba Gakuin Japanese Language School</p>
	</div>
</section>
<section class="header">
<div class="application-title" style="width:20%;height:160px;border:1px solid #000000;margin-left:550px;">
		<p>Photo</p>
        <p>4cm×3cm</p>
</div>
</section>
<section class="personal-info" style="width:100%;padding-top:22px;">
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
<p style="font-family: sjis;font-size:11px;text-align:right;">
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

<section class="personal-info" style="width:100%;padding-top:22px;">
<div class="personal" style="width: 100%;display:inline-block;">
<h4 style="margin:0px;font-family: sjis;">3.現在の状況　Current Status　＜あなたは現在何をしていますか？＞</h4>
<div style="width: 100%;">
<p style="font-size:12px; width:27%;float:left;font-weight:bold;padding-left:10px;">A. 学校在学中（日本語学校を除く）</p>
<p style="width:70%;font-size: 10px;text-align:left;float:right;">If you are currently being enrolled and registered as a student at a school (except private Japanese Language schools/intitues), please fill in the blanks below.</p>
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

<section class="personal-info" style="width:100%;padding-top:22px;">
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
<br><br>
<section class="personal-info" style="width:100%;padding-top:22px;">
<div class="personal" style="width: 100%;display:inline-block;">
<p style="font-size:13px; width:100%;float:left;font-weight:bold;padding-left:10px;">
    C.その他（日本語学校の学生や、上記のA,B以外の場合、状況を詳しく書いて下さい。) 
</p>
<p style="font-size:11px;padding-left:10px;">
    Others (If your are a student of Japanese language course, or neither a student nor a worker, explain your current situation in detail. )
</p>
<table style="width: 100%;border:1px solid #000000;">
<tr>
    <td style="width: 100%;height:200px;border:1px solid #000000;"></td>
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
<section class="header" style="display: inline;padding-top:20px;">
	<div class="application-title" style="text-align:center;font-family:sjis;margin-left:80px;">
		<h2 style="font-family: sjis;padding:0px;margin:10px;">≪履 歴 書≫ PERSONAL HISTORY </h2>
	</div>
</section>
<section class="header" style="display: inline;padding-top:20px;">
<form style="border:none !important;border-bottom:2px solid red !important;">
  <label for="">1. 氏名　< Name ></label>
  <span>-</span>
<br/><br/><br/>
  <label for="">2. 生年月日　< Date of birth ></label>
  <span>-</span>
<br/><br/><br/>
<label for="">4.現住所 < current housing address ></label>
  <span>-</span>
  <br/><br/><br/>
  <p style="font-size: 11px;">(the place you are living now)</p>
<label for=""> 5. 電話番号 < Phone number ></label>
  <span>-</span>
  <br/><br/><br/>
<label for=""> 6.  Eメール < E-Mail address ></label>
  <span>-</span>
  <br/><br/><br/><br/>
<label for=""> 7.配偶者の有無 <br>< Marital Status > </label>
<span style="width:40%;font-size: 14px;text-align:left;float:left;">
    <input type="radio"><label for="" style="font-size: 14px;">あり < Married ></label>
    <input type="radio"><label for="" style="font-size: 14px;">なし < Single ></label>
</span>
<label for=""> 配偶者名 < Name of your spouse > </label>
<br/><br/><br/>
<label for=""> 8. 学歴  小学校～最終学歴 < Academic Accomplishments ></label>
  <span>-</span>
  <br/><br/><br/>
</form>
</section>
<p style="font-size:12px ;">Please complete your detailed educational backgrounds from elementary to your most recent academic record.</p>
<table>
    <tr >
        <th style="text-align:center;">学校名 <br>Name of School</th>
        <th style="text-align:center;">所在地(住所) <br>Location(Address) <br>Town, City, State/Province and Country</th>
        <th colspan="3" style="text-align:center;">在籍年月(入学年月~卒業年月) <br>Dates of Attendance <br>Month     Year</th>
        <th style="text-align:center;">期間  <br>Duration total years</th>
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;">from</th>
        <td style="border-right:none !important;"></td> 
        <td style="border-left:none !important;">/</td>  
        <td rowspan="2" style="width: 15%;"></td>
    </tr>
    <tr>
       <th style="width: 10%;">to</th>
       <td style="border-right:none !important;"></td> 
       <td style="border-left:none !important;">/</td>  
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;">from</th>
        <td style="border-right:none !important;"></td> 
        <td style="border-left:none !important;">/</td>  
        <td rowspan="2" style="width: 15%;"></td>
    </tr>
    <tr>
       <th style="width: 10%;">to</th>
       <td style="border-right:none !important;"></td> 
       <td style="border-left:none !important;">/</td>  
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;">from</th>
        <td style="border-right:none !important;"></td> 
        <td style="border-left:none !important;">/</td>  
        <td rowspan="2" style="width: 15%;"></td>
    </tr>
    <tr>
       <th style="width: 10%;">to</th>
       <td style="border-right:none !important;"></td> 
       <td style="border-left:none !important;">/</td>  
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;">from</th>
        <td style="border-right:none !important;"></td> 
        <td style="border-left:none !important;">/</td>  
        <td rowspan="2" style="width: 15%;"></td>
    </tr>
    <tr>
       <th style="width: 10%;">to</th>
       <td style="border-right:none !important;"></td> 
       <td style="border-left:none !important;">/</td>  
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;">from</th>
        <td style="border-right:none !important;"></td> 
        <td style="border-left:none !important;">/</td>  
        <td rowspan="2" style="width: 15%;"></td>
    </tr>
    <tr>
       <th style="width: 10%;">to</th>
       <td style="border-right:none !important;"></td> 
       <td style="border-left:none !important;">/</td>  
    </tr>
    <tr>
        <td rowspan="2" style="width: 15%;"></td>
        <td rowspan="2" style="width: 25%;"></td>
        <th style="width: 10%;">from</th>
        <td style="border-right:none !important;"></td> 
        <td style="border-left:none !important;">/</td>  
        <td rowspan="2" style="width: 15%;"></td>
    </tr>
    <tr>
       <th style="width: 10%;">to</th>
       <td style="border-right:none !important;"></td> 
       <td style="border-left:none !important;">/</td>  
    </tr>
</table>
</body>
</html>
</html>';
