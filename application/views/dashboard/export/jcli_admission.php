$html = '
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <link rel="stylesheet" href="asset/css/style.css">             
</head>
<body>

<section class="header" style="display: flex;height:100px;">
        <img src="asset/admin/images/jcli-header.png">
	<!-- <div class="logo" style="float:left;">
    <img src="asset/admin/images/jcli-logo.png">
	</div>
	<div class="application-title" style="width:180px;margin: 0 auto;">
		<h3 style="font-family: sun-exta, gb;font-size:30px;font-weight:bold;margin:0 0 10px;">入 学 願 書</h3>
		<p style="">Application Form for Admission</p>
	</div>
	<div class="school-addr" style="width:300px;float:right;">
		<h4 style="font-family: sun-exta, gb;">JCLI日本語学校	</h4>													
		<h5>JCLI JAPANESE LANGUAGE SCHOOL	</h5>													
		<p>〒114-0003 東京都北区豊島８丁目４番１号</p>
		<p>TEL：03-5902-5151</p>
		<p>FAX：03-5902-5152</p>														
														
														
	</div> -->
    </section>
    <section class="personal-info" style="width:100%;display:block;">
        <img src="asset/admin/images/personal.png" style="width:30px;float:left;margin-right:10px;">
        <h5 style="font-family: sun-exta, gb;margin-bottom:10px;">申請者情報　/　Personal Information</h5>
        <div class="personal" style="width:73%;margin-right:10px;">
        <table style="">
            <tr>
                <th style="width: 20%;font-family: frutiger;background:#f5f5f5;">氏名(ローマ字)
                    <br>Name(s) as shown
                    <br>on your passport
                </th>
                <td colspan="5"></td>
            </tr>
            <tr>

                <th style="width: 20%;background:#f5f5f5;">氏名　（漢字)
                    <br>Name(s) in
                    <br>Chinese characterｓ　</th>
                    <td colspan="5"></td>
                </tr>
            <tr>
                <th style="width: 20%;background:#f5f5f5;">				
                    国籍・地域<br>Nationality/Region
                </th>
                <td style="width: 15%;">
                
                </td>
                <th style="width: 15%;background:#f5f5f5;">				
                性別 <br>Sex
                </th>
                <td style="width: 15%;">
                
                </td>
                <th style="width: 15%;background:#f5f5f5;">			
                婚姻 <br> Marital Status
                </th>
                <td style="width: 20%;">
                
                </td>
            </tr>
            <tr>

                <th style="width: 20%;background:#f5f5f5;">
                    入学希望コース <br> Course of Admission			
                </th>
                <td style="width: 20%;"></td>
                <th style="width: 20%;background:#f5f5f5;">
                    生年月日 <br> Date of birth	
                </th>
                <td colspan="3"></td>
                </tr>
            <tr>

            <th style="width: 20%;border-bottom:0px;background:#f5f5f5;">出生地 <br> Place of  birth			
                </th>
            <td colspan="5" style="border-bottom:0px;"></td>
            </tr>
            </table>
        </div>
        <span class="applicant_image">
            <p style="width:150px;height:100px;border:1p solid #000000;margin-left:20px;float:right;padding:10px 0px 10px 5px;font-size:11px;line-height:15px;">写真貼付欄${student_photo}
            <br>Photo
            <br>（４ｃｍ×３ｃm ）
            <br><br>・最近３ヶ月以内
            　<br>・上半身正面
            　<br>・脱帽のもの（ 2枚 ）
            　<br><br>・Within ３ months
            　<br>・Full　face
            　<br>・Without hat
            　<br>・2 copies 
              <br>
            </p>
        </span>
    </section>
    <section class="address" style="width:100%;">
		<table style="width:100%;">
        <tr>
			<th style="width: 20%;border-top:0px;background:#f5f5f5;">本国の戸籍住所 <br>Home address</th>
			<td colspan="3"></td>
            </tr>
        <tr>
			<th style="width: 20%;border-top:0px;background:#f5f5f5;">現在の住所 <br> Present address</th>
			<td colspan="3"></td>
            </tr>
		<tr>
			<th style="width: 20%;background:#f5f5f5;">電話番号 <br>Phone Number</th>
			<td></td>
            <th style="width: 20%;background:#f5f5f5;">Ｅメール <br> E-mail</th>
			<td></td>
            </tr>
		<tr>
			<th style="width: 20%;background:#f5f5f5;">旅券番号 <br>Passport No</th>
			<td></td>
            <th style="width: 20%;background:#f5f5f5;">有効期限 <br> Date of expiration</th>
			<td></td>
            </tr>
		<tr>
			<th style="width: 20%;background:#f5f5f5;">職業 <br> Occupation</th>
			<td colspan="3"></td>
           
            </tr>
        </table>
		
</section>
<section class="eligibility">	
<div class="eligibility-status" style="padding: 10px 0px 0px;">	
<img src="asset/admin/images/past-history.png" style="width:30px;float:left;margin-right:10px;margin-top:10px;">																
        <p class="badge badge-danger" style="float:left;width: 60%;"> 過去の在留資格認定証明書交付申請歴 <br>
            Past history of applying for a certificate of eligibility</p>
        <div class="radio" style="width:200px;float:right;margin-top:20px;">
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="1" checked="checked"> あり　Yes
            </label>
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="0" >なし　 No
            </label>
        </div>	
    </div>																	
		<table style="width: 100%;">
            <tr>
                <th style="width: 20%;background:#f5f5f5;">				
                回数 <br> No. of times
                </th>
                <td colspan="1">
                   
                </td>
                <th style="width: 30%;background:#f5f5f5;">			
                    うち不交付となった回数<br>
                    Of these applications, the number of times of non-issuance																	                                                                                                                                                                 
                </th>
                <td colspan="1">
                   
                </td>
            </tr>
        </table>																
</section>
<section class="eligibility">	
<div class="eligibility-status" style="padding: 10px 0px 0px;">		
        <img src="asset/admin/images/record_japan.png" style="width:30px;float:left;margin-right:10px;">															
        <p class="badge badge-danger" style="float:left;width: 30%;"> 過去の来日歴　/　<br>Record of entry to Japan</p>
        <div class="radio" style="width:200px;float:right;margin-top:20px;">
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="1" checked="checked"> あり　Yes
            </label>
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="0" >なし　 No
            </label>
        </div>	
    </div>																	
		<table style="width: 100%;">
            <tr>
                <th style="width: 20%;background:#f5f5f5;">				
                    回数 <br> No. of times
                </th>
                <td colspan="1">
                   
                </td>
                <th style="width: 20%;background:#f5f5f5;">			
                    直近の出入国歴 <br>The latest entry																                                                                                                                                                                 
                </th>
                <td colspan="1">
                   
                </td>
            </tr>
        </table>																
</section>
<section class="family-japan">
    <div class="clearfix mb-5"></div>

                        <table style="width:100%; padding_top:20px" class="tbl">
                            <thead style="background: #f5f5f5; text-align:center;padding:1px;">
                                <tr class="text-center" style="font-size: 12px;">
                                    <th scope="col" colspan="2" style="width:40%">出入国年月日 <br>Previos dates of entering and leaving Japan</th>
                                    <th scope="col" class="align-middle" style="width: 20%">在留資格 <br>Residential Status</th>
                                    <th scope="col" style="width: 40%;">入国目的 <br>Previos purpose of entering Japan</th>
                                   
                                </tr>
                            </thead>
                            <tbody id="stockList">
                                    <tr>
                                    <td style="font-size: 11px; text-align: right;border-right:none;"> ~ </td>
                                        <td style="font-size: 11px; text-align: right;border-left:none;">  </td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                    </tr>
                                    <tr>
                                    <td style="font-size: 11px; text-align: right;border-right:none;"> ~ </td>
                                        <td style="font-size: 11px; text-align: right;border-left:none;">  </td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                    </tr>
                                    <tr>
                                    <td style="font-size: 11px; text-align: right;border-right:none;"> ~ </td>
                                        <td style="font-size: 11px; text-align: right;border-left:none;"> </td>
                                        <td style="font-size: 12px; text-align: left;"> </td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                    </tr>
                               
                            </tbody>
                        </table>
</section>
<section class="family-japan">
    <div class="clearfix mb-5"></div>
    <div class="eligibility-status" style="height:45px;">	
        <img src="asset/admin/images/family.png" style="width:40px;float:left;margin-right:10px;margin-top:10px">															
        <p class="badge badge-danger" style="float:left;width: 75%;">在日親族（父・母・配偶者・子・兄弟姉妹・祖父母・叔(伯)父・叔(伯)母など）及び同居者 <br>
            Family in Japan (father, mother, spouse, children, <br>siblings,grandparents,uncle, aunt or others) and cohabitants</p>
        <div class="radio" style="width:170px;float:right;margin-top:20px;">
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="1" checked="checked"> あり　Yes
            </label>
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="0" >なし　 No
            </label>
        </div>	
    </div>		
                        <table style="width:100%; padding_top:20px" class="tbl">
                            <thead style="background: #f5f5f5; text-align:center;padding:1px;">
                                <tr class="text-center" style="font-size: 12px;">
                                    <th scope="col">続柄<br>Relationship</th>
                                    <th scope="col" class="align-middle">氏名 <br>Name</th>
                                    <th scope="col">生年月日<br>Date of Birth</th>
                                    <th scope="col">国籍<br> Nationality</th>
                                    <th scope="col">住所／電話<br> Address / Telephond</th>
                                    <th scope="col">勤務先・通学先<br>Place of<br> Employment / School</th>
                                    <th scope="col">在留カード番号<br>（在留資格種類）<br>Residence card number <br>(Type of status)</th>
                                </tr>
                            </thead>
                            <tbody id="stockList">
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                    </tr>
                               
                            </tbody>
                        </table>
</section>
<section class="edu-background" style="margin-top: 20px;">
    <div class="clearfix mb-5"></div>	
    <div class="eligibility-status" style="padding: 10px 0px 0px;">	
        <div class="edu-logo" style="width: 180px;">      
        <img src="asset/admin/images/jcli-logo.png">
        </div>		
        <img src="asset/admin/images/edu.png" style="width:30px;float:left;margin-right:10px;">												
        <span class="badge badge-danger" style="float:left;width: 50%;">学歴　/　Educational background</span>
    </div>	
                        <table style="width:100%; padding_top:20px" class="tbl">
                            <thead style="background: #f5f5f5; text-align:center;padding:1px;">
                                <tr class="text-center" style="font-size: 12px;">
                                    <th scope="col" style="width:25% !important">学校名 <br>Name of School</th>
                                    <th scope="col" class="align-middle" style="width: 10%;">入学年月<br> Enrollment<br>Year/Month ~</th>
                                    <th scope="col" style="width: 10%;border-left: none">卒業年月<br>Completion<br>Year/Month		
                                    </th>
                                    <th scope="col" style="width: 10%;;">修学年数 <br>Total school years</th>
                                    <th scope="col" style="width: 35%;">"所在地 <br>Location</th>
                                </tr>
                            </thead>
                            <tbody id="stockList">
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;border-left: none;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;border-left: none;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;border-left: none;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                    </tr>
                                    
                               
                            </tbody>
                        </table>
</section>
<section class="edu-background">
                        <table style="width:100%; padding_top:20px;border-top:none;" class="tbl">
                            <tbody>
                                <tr class="text-center" style="font-size: 12px;border-top:none;">
                                    <th scope="col" style="width:25% !important">在籍状況 <br> Registered enrollment</th>
                                    <td scope="col" class="align-middle" style="width: 15%;"></td>
                                    <td scope="col" style="width: 15%;border-left: none">		
                                    </td>
                                    <th scope="col" style="width: 25%;;">修学年数(小学校から最終学歴まで)<br>
 Total period of education (from elementary school to the last school attended). </th>
                                    <td scope="col" style="width: 15%;"></td>
                                    <td scope="col" style="width: 10%;">年<br>Years</td>
                                </tr>
                            </tbody>
                            
                        </table>
                        
</section>
<section class="edu-background">
    <div class="clearfix mb-5"></div>
    <div class="eligibility-status" style="padding: 10px 0px 0px;">	
        <img src="asset/admin/images/occupational.png" style="width:30px;float:left;margin-right:10px;">														
        <p class="badge badge-danger" style="float:left;width: 40%;">職歴　/　Occupational experience</p>
        <div class="radio" style="width:200px;float:right;">
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="1" checked="checked"> あり　Yes
            </label>
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="0" >なし　 No
            </label>
        </div>	
    </div>		
                        <table style="width:100%;" class="tbl">
                            <thead style="background: #f5f5f5; text-align:center;padding:1px;">
                                <tr class="text-center" style="font-size: 12px;">
                                    <th scope="col" style="width:35% !important;">"会社・事業所名 <br>Name of company</th>
                                    <th scope="col" class="align-middle" style="width: 10%;">入学年月<br> Enrollment<br>Year/Month ~</th>
                                    <th scope="col" style="width: 10%;border-left: none">卒業年月<br>Completion<br>Year/Month		
                                    </th>
                                    <th scope="col" style="width: 10%;;">修学年数 <br>職業 <br>Job content</th>
                                    <th scope="col" style="width: 35%;">"所在地 <br>Location</th>
                                </tr>
                            </thead>
                            <tbody id="stockList">
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                                        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                                        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                                        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                    </tr>
                                   
                               
                            </tbody>
                        </table>
</section>
<section class="edu-background">
    <div class="clearfix mb-5"></div>
    <div class="eligibility-status" style="padding: 10px 0px 0px;">		
        <img src="asset/admin/images/blank.png" style="width:30px;float:left;margin-right:10px;">														
        <p class="badge badge-danger" style="float:left;width: 50%;">空白期間／兵役　Blank period／Military service																	
        </p>
        <div class="radio" style="width:200px;float:right;">
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="1" checked="checked"> あり　Yes
            </label>
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="0" >なし　 No
            </label>
        </div>	
        
    </div>		
    <table>
        <tr style="width: 100%;">
            <th style="width: 5%;">				
                詳細 <br> Details
            </th>
            <td colspan="6" style="width:700px;">
               
            </td>
           
        </tr>
    </table>
    <div class="eligibility-status" style="padding: 10px 0px 0px;">	
        <img src="asset/admin/images/learn-exp.png" style="width:30px;float:left;margin-right:10px;">																
        <p class="badge badge-danger" style="float:left;width: 60%;">日本語学習歴　Learning experience for Japanese language																
        </p>
        <div class="radio" style="width:30%;float:right;">
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="1" checked="checked"> あり　Yes
            </label>
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="0" >なし　 No
            </label>
        </div>	
        
    </div>	
                        <table style="width:100%;" class="tbl">
                            <thead style="background: #f5f5f5; text-align:center;padding:1px;">
                                <tr class="text-center" style="font-size: 12px;">
                                    <th scope="col" style="width:25%;text-align: center;">学校名及び所在地 <br>Name of Institution and location</th>
                                    
                                       
                                   
                                    <th scope="col" class="align-middle" style="width: 10%;border-right: none;">
                                        
                                        <span>入学年月<br> Enrollment<br>Year/Month ~ </span>
                                     </th>
                                    <th scope="col" style="width: 10%;border-left: none">卒業年月<br>Completion<br>Year/Month		
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="stockList">
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                                        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                                        
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                                        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                                        
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                                        <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                                        
                                    </tr>
                                   
                               
                            </tbody>
                        </table>
</section>
<section class="family-japan">
    <div class="clearfix mb-5"></div>
    <div class="eligibility-status" style="padding: 10px 0px 0px;">		
    <img src="asset/admin/images/proficiency.png" style="width:30px;float:left;margin-right:10px;">														
        <p class="badge badge-danger" style="float:left;width: 50%;">日本語能力　Japanese Language Proficiency																
        </p>
        <div class="radio" style="width:30%;float:right;">
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="1" checked="checked"> あり　Yes
            </label>
            <label class="col-md-4">
                <input type="radio" name="std_permission" value="0" >なし　 No
            </label>
        </div>	
    </div>		
                        <table style="width:100%;" class="tbl">
                            <thead style="background: #f5f5f5; text-align:center;padding:1px;">
                                <tr class="text-center" style="font-size: 12px;">
                                    
                                    <th colspan="2" scope="col" style="width:20%;">受験名称 <br> Examination</th>
                                    <th colspan="1" scope="col" class="align-middle" style="width: 15%;">受験年度 <br> Exam year</th>
                                    <th colspan="1" scope="col" style="width: 15%;">受験等級 <br> Exam Level</th>
                                    <th colspan="1" scope="col" style="width: 15%;">"受験点数 <br>Score</th>
                                    <th colspan="1" scope="col" style="width: 15%;">受験結果 <br> Result</th>
                                </tr>
                            </thead>
                            <tbody id="stockList">
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;width:50px;"></td>
                                        <td style="font-size: 12px; text-align: left;">JLPT（日本語能力試験</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;">J-TEST(実用日本語検定)</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;">NAT-TEST</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;">Other</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        
                                    </tr>
                            </tbody>
                        </table>
</section>
<section class="family-japan">
    <div class="clearfix mb-5"></div>
    <div class="eligibility-status" style="padding: 0px 0px;">	
        <img src="asset/admin/images/family-mem.png" style="width:30px;float:left;margin-right:10px;">															
        <p class="badge badge-danger" style="float:left;width: 50%;margin: 5px 10px 0px;">家族　Family members													
</p>       
    </div>		
                        <table style="width:100%;" class="tbl">
                            <thead style="background: #f5f5f5; text-align:center;padding:1px;">
                                <tr class="text-center" style="font-size: 12px;">
                                    <th scope="col" style="width:10%;">続柄<br>Relationship</th>
                                    <th scope="col" class="align-middle" style="width: 20%;">氏名 <br>Name</th>
                                    <th scope="col" style="width:10%;">生年月日<br>Date of Birth</th>
                                    <th scope="col" style="width:10%;">国籍<br> Nationality</th>
                                    <th scope="col" style="width: 10%;">職業 <br> Occupation</th>
                                    <th scope="col" style="width: 30%;">住所 <br>Address</th>
                                </tr>
                            </thead>
                            <tbody id="stockList">
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                    </tr>
                               
                            </tbody>
                        </table>
</section>
<section class="header" style="width:100%;display: flex;height:120px;margin-top: 20px;">
	<div class="logo">
       
    <img src="asset/admin/images/jcli-logo.png">
	</div>
	<div class="application-title" style="width:800px;margin:0 auto;text-align:center;">
		<h3 style="font-family: sun-exta, gb;margin:0 0 10px;font-size:30px;">留学理由書</h3>
		<span>Your purpose of study in Japan</span>
	</div>
</section>
<section class="personal-info" style="border: 1px solid #000000;">
    <table style="width:100%; float: left;">
        <tr>

			<th colspan="1" style="background:#f5f5f5;">氏名(ローマ字)
				<br>Name(s) as shown
				<br>on your passport</th>
				<td colspan="5"></td>
        </tr>
		<tr>
           
			<th colspan="1" style="background:#f5f5f5;">				
				国籍・地域<br>Nationality/Region
            </th>
			<td style="width: 20%;">
               
            </td>
            <th style="width: 10%;background:#f5f5f5;">				
            性別 <br> Sex
            </th>
			<td style="width: 20%;">
               
            </td>
            <th style="width: 20%;background:#f5f5f5;">			
             生年月日 <br> Date of birth
            </th>
			<td style="width: 20%;">
               
            </td>
		</tr>
       
		</table>
		
</section>
<section class="personal-info">
<img src="asset/admin/images/gradu.png" style="width:30px;float:left;margin-right:10px;margin:10px 0 0px;">
    <p style="padding: 15px 10px 0px;">卒業後の進路　Plans for after graduation																			</p>
    <table style="width:100%; float: left;">
        <tr>
			<th rowspan="3" style="width: 15%;background:#f5f5f5;">
				日本国内での進学 <br>Higher education in Japan
			</th>			
            <th colspan="1" style="width: 15%;background:#f5f5f5;">
				学校種別 <br> Type of schools
			</th>
            <td colspan="4"></td>
           
        </tr>
        <tr>
			<th colspan="1" style="width: 15%;background:#f5f5f5;">
				学校名 <br> Name of School	
			</th>			
            
			<td colspan="4"></td>
        </tr>
        <tr>
			<th colspan="1" style="width: 15%;background:#f5f5f5;">
				希望科目（専攻）<br> Major
			</th>			
           
			<td colspan="4"></td>
        </tr>
        <tr>
			<th colspan="1" style="width: 15%;background:#f5f5f5;">
                就職 <br> Employment								
			</th>			
            <th colspan="1" style="width: 15%;background:#f5f5f5;">
				希望する職種 <br> Aimed occupational category
			</th>	
			<td colspan="4"></td>
        </tr>
        <tr>
			<th colspan="1" style="width: 15%;background:#f5f5f5;">
				帰国・復学 <br> Return to home country
			</th>			
            <th colspan="1" style="width: 30%;background:#f5f5f5;">
				いつ頃帰国する予定ですか？<br> When will you return?
			</th>	
			<td colspan="4"></td>
        </tr>
        <tr>

			<th colspan="1" style="background:#f5f5f5;">その他 <br> Others</th>
				<td colspan="5"></td>
        </tr>		      
		</table>		
</section>
<section class="personal-info">
<img src="asset/admin/images/purpose.png" style="width:30px;float:left;margin-right:10px;padding:10px 0 0px;">
    <p style="padding: 10px 0px 0px;">志望理由　Statement of purpose</p>
    <p class="note" style="width: 100%;padding: 200px 50px;border: 1px solid #000000;
"></p>
    <p> 以上のことはすべて事実であり、私が記入したものです。また、本入学願書に記述した全ての内容、及びその他の出願に必要となる提出書類については、その情報の取り<br>扱いにつき、貴校の募集要項の内容に同意の上出願を行うものです。<br>
        I hereby declare the above statement that I wrote is true and correct. By signing below I give consent to all of the information stated in this application form. The <br> submitted documents will be treated in accordance with the enrollment guidelines.</p>
    <table style="width:100%; float: left;">
        <tr>
			<th colspan="1" style="width: 10%;background:#f5f5f5;">
				作成日 <br>Date	
			</th>	
            <td colspan="4"></td>		
            <th colspan="1" style="width: 15%;background:#f5f5f5;">
				署名 <br> Signature
			</th>	
			<td colspan="4"></td>
        </tr> 
		</table>	
</section>
</body>
<style>
    body {
                    font-size: 12px;
                    color: #111;
                    font-weight: normal;
                    /* font-family:firefly, DejaVu Sans, sans-serif;
                    font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", Osaka, メイリオ, Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", "ＭＳ ゴシック" , "MS Gothic", "Noto Sans CJK JP", TakaoPGothic, sans-serif; */
                    /* font-family: "Lucida Console", "Courier New", monospace;*/               
                    font-family: sjis;
                    /* font-family: 'Open Sans', sans-serif; */
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
                    padding-top: 5px;
                    padding-bottom: 5px;
                    text-align: center;
                    /* border:1px solid gray;      */
                }

                td {
                    white-space: normal;
                    padding: 8px 0px 8px 0px;
                }

                .page-break {
                    page-break-after: always;
                }

                /* .tbl,
                .tbl td,td
                .tbl th th{
                    border: solid black;
                    border-width: 1px 1px 0 0;
                }

                .tbl th,th,
                .tbl td,td{
                    border: solid black;
                    border-width: 0 0 1px 1px;
                    padding: 10px 5px;
                } */
                tr,td,th {
                    border-top: 1px solid #000000;
                    border-bottom: 1px solid #000000;
                    border-left: 1px solid #000000;
                    border-right: 1px solid #000000;
                    text-align: left;
                    padding: 8px;
                }
                
                .sp01 {
                    width: 200px;
                    display: inline-block;
                }

                .sp001 {
                    width: 90px;
                    display: inline-block;
                    vertical-align: bottom;
                    text-align: left;
                }

                .sp003 {
                    width: 130px;
                    display: inline-block;
                    vertical-align: bottom;
                    text-align: left;
                }

                .sp002 {
                    width: 120px;
                    display: inline-block;
                    vertical-align: bottom;
                    text-align: left;
                }

                .col-12 {
                    width: 100%;
                    clear: both;
                }
                section.header,.personal-info,.family-japan,.eligibility,.edu-background,.address {
                    width: 100%;
                    position: relative;
                    margin: 0 auto;
                }
                section.personal-info {
                    /* margin-bottom: 20px; */
                }
                .logo {
                    width: 200px;
                    position: absolute;
                    left: 0;
                    float: left;
                }
                .application-title {
                    width: 500px;
                    margin: 0 auto;
                    float: left;
                }
                .school-addr {
                    width: 400px;
                    right: 0;
                    position: absolute;
                    text-align: right;
                    float: right;
                }
                .personal{
                    width:70%;
                    float:left;
                }
                img{
                    width: 100%;;
                }
				.applicant_image{
				width: 100px;
				height: 200px;
				display: block;
				border: 1px solid #000000;
				display: block;
				float: right;
				/* text-align: center; */
				padding: 15px;
				/* margin-right: 5px; */
				display: block;
			}
            .note{
                /* width: 100%;
                height: 500px;
                border: 1px solid #000000; */
            }
</style>
</html>';

