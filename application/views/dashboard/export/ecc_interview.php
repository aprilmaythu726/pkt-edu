

$html = '
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="asset/css/style.css">
<style>
    @font-face {
            font-family: 'Firefly';
            font-style: normal;
            font-weight: normal;
            src: url('dompdf/dompdf/libs/fonts/DejaVuSans-Bold.ttf') format('truetype');
        }
   
    body {
                    font-size: 12px;
                    color: #111;
                    font-weight: normal;
                    font-family:firefly, DejaVu Sans, sans-serif;
                    font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", Osaka, メイリオ, Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", "ＭＳ ゴシック" , "MS Gothic", "Noto Sans CJK JP", TakaoPGothic, sans-serif;
                    /* font-family: "Lucida Console", "Courier New", monospace;
                    font-family: 'MS PGothic', Arial, sans-serif; */
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
                    padding-left: 5px;
                    padding-top: 5px;
                    padding-bottom: 5px;
                    /* text-align: center; */
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
                    padding: 0px;
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
                
                .logo {
                    width: 250px;
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
                    float: left;
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
            .ecc_date{
                width: 100%;
                padding: 20px;
                margin: 20px;
            }
            .ecc_dates{
                display: inline;
            }
        
                </style>
</head>
<body>
<section class="header">
	<div class="logo">
	</div>
	<div class="application-title" style="text-align:center;">
		<h3>Entry Questionnaire</h3>
	</div><br/>
    <div style="display: inline;">
        <span class="ecc_date"  style="padding: 20px;margin:20px;">Date:</span>
        <span class="ecc_date"  style="padding: 20px;margin:20px;"><span>2022</span>year</span>
        <span class="ecc_date"  style="padding: 20px;margin:20px;"><span>10</span>month</span>
        <span class="ecc_date"  style="padding: 20px;margin:20px;"><span>09</span>date</span>
    </div>
</section>
<section class="eligibility">	
<div class="eligibility-status" style="padding: 10px 0px;">        
    </div>																	
		<table style="width: 100%;">
            <tr>
                <th rowspan="2" class="ecc_stu_name" style="width:10%;border-right:none !important;">				
                   Name:
                </th>
                <td  colspan="2" rowspan="2" style="border-left:none !important;"></td>
                <th style="width:20%;border-right:none !important;">			
                   Date of Birth:											                                                                                                                                                                 
                </th>
                <td colspan="1.5" style="border-left:none !important;"></td>
            </tr>
            <tr>
                <th style="width:20%;border-right:none !important;">	
                Sex:		
                </th>
                <td colspan="1.5" style="border-left:none !important;"> 
                </td>
            </tr>
            <tr>
                <th class="ecc_stu_name" style="width:10%;border-right:none !important;">				
                   Address:
                </th>
                <td  colspan="2" style="border-left:none !important;border-right:none !important;"></td>
                <th style="width:30%;" style="border-right:none !important;border-left:none !important;">			
                  (Married/Unmarried):											                                                                                                                                                                 
                </th>
                <td colspan="1.5" style="border-left:none !important;"> </td>
            </tr>
            <tr>
                <th class="ecc_stu_name" style="width:15%;border-right:none !important;">				
                Phone number:
                </th>
                <td  colspan="2" style="border-left:none !important;border-right:none !important;"></td>
                <th style="width:20%;" style="width:20%;border-right:none !important;border-left:none !important;">			
                Email:											                                                                                                                                                                 
                </th>
                <td colspan="1.5" style="border-left:none !important;"> </td>
            </tr>
        </table>																
</section>
<section class="personal-info" style="width:100%;padding-top:22px;">
    <div class="personal" style="width: 100%;display:inline-block;">
    <h4 style="margin:0px;">Educational History : from Elementary School to the Most Recent School</h4>
      <table style="width:100%;" class="tbl">
        <thead style="background: #f5f5f5; text-align:center;padding:1px;">
            <tr class="text-center" style="font-size: 12px;">
                <th scope="col" style="width:35% !important; text-align: center; ">Name of Institution</th>
                <th scope="col" class="align-middle" style="width: 10%; text-align: center;">Starting<br>Year/Month </th>
                <th scope="col" style="width: 10%;border-left: none;text-align: center;">Finishing<br>Year/Month</th>	
                <th scope="col" style="width: 10%;;">Term of Study </th>
            </tr>
        </thead>
        <tbody id="stockList">
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: right;border-left: none;">year</td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: right;border-left: none;">year</td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: right;border-left: none;">year</td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: right;border-left: none;">year</td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: right;border-left: none;">year</td>
            </tr>
            
        </tbody>
      </table>
    </div>
    </section> 
    <section class="personal-info" style="width:100%;padding-top:22px;">
    <div class="personal" style="width: 100%;display:inline-block;">
    <h4 style="margin:0px;">Previous Japanese Language Study</h4>
      <table style="width:100%;" class="tbl">
        <thead style="background: #f5f5f5; text-align:center;padding:1px;">
            <tr class="text-center" style="font-size: 12px;">
                <th scope="col" style="width:35% !important; text-align: center; ">Name of Institution</th>
                <th scope="col" class="align-middle" style="width: 10%; text-align: center;">Starting<br>Year/Month </th>
                <th scope="col" style="width: 10%;border-left: none;text-align: center;">Finishing<br>Year/Month		
                </th>
                <th scope="col" style="width: 10%;;">Total Hours of Study </th>
            </tr>
        </thead>
        <tbody id="stockList">
            <tr>
                <td style="font-size: 11px; text-align: right;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: right;">hours</td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: right;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: right;">hours</td>
            </tr>
        
        </tbody>
      </table>
    </div>
    </section> 
    <section class="personal-info" style="width:100%;display:flex;padding-top:22px;">
    <div style="width:50%;float:left;">
    <div class="personal" style="width: 100%;">
    <h4 style="margin:0px;">Previous Japanese Language Study</h4>
      <table style="width:95%;" class="tbl">
        <thead style="background: #f5f5f5;text-align:center;padding:1px;">
            <tr class="text-center" style="font-size: 12px;">
                <th scope="col" style="width:60% !important; text-align: center; ">Name of Japanese language test </th>
                <th colspan="2" scope="col" style="width: 40%;text-align:center;">Level</th>
            </tr>
        </thead>
        <tbody id="stockList">
            <tr>
                <td style="font-size: 11px; text-align: left;border-left: none;"></td>
                <td style="font-size: 11px; text-align: left;border-right:none !important;"><p style="text-align: left;padding:0px;margin:0px;display:flex;">Level:</p></td>
                <td style="font-size: 11px; text-align: left;border-left:none !important;"><p style="text-align: left;padding:0px;margin:0px;display:flex;">year:</p></td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;border-left: none;"></td>
                <td style="font-size: 11px; text-align: left;border-right:none !important;"><p style="text-align: left;padding:0px;margin:0px;display:flex;">Level:</p></td>
                <td style="font-size: 11px; text-align: left;border-left:none !important;"><p style="text-align: left;padding:0px;margin:0px;display:flex;">year:</p></td>
            </tr>
        
        </tbody>
      </table>
    </div>
    </div>
    <div style="width:50%;float:right;">
    <div class="personal" style="width: 100%;">
    <h4 style="margin:0px;">Name of Japanese language tests you are going to take</h4>
      <table style="width:100%;padding-left:10px;" class="tbl">
        <thead style="background: #f5f5f5;text-align:center;padding:1px;padding-left:10px;">
            <tr class="text-center" style="font-size: 12px;">
                <th scope="col" style="width:60% !important; text-align: center; ">Name of Japanese language test </th>
                <th colspan="2" scope="col" style="width: 40%;text-align:center;">Level</th>
            </tr>
        </thead>
        <tbody id="stockList">
            <tr>
                <td style="font-size: 11px; text-align: left;border-left: none;"></td>
                <td style="font-size: 11px; text-align: left;border-right:none !important;"><p style="text-align: left;padding:0px;margin:0px;display:flex;">Level:</p></td>
                <td style="font-size: 11px; text-align: left;border-left:none !important;"><p style="text-align: left;padding:0px;margin:0px;display:flex;">Date:</p></td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;border-left: none;"></td>
                <td style="font-size: 11px; text-align: left;border-right:none !important;"><p style="text-align: left;padding:0px;margin:0px;display:flex;">Level:</p></td>
                <td style="font-size: 11px; text-align: left;border-left:none !important;"><p style="text-align: left;padding:0px;margin:0px;display:flex;">Date:</p></td>
            </tr>
        
        </tbody>
      </table>
    </div>
    </div>
    </section>
    <section class="personal-info" style="width:100%;padding-top:22px;">
    <div class="personal" style="width: 100%;display:inline-block;">
    <h4 style="margin:0px;">History of Employment (Write in order, ending with the most recent employment.):</h4>
      <table style="width:100%;" class="tbl">
        <thead style="background: #f5f5f5; text-align:center;padding:1px;">
            <tr class="text-center" style="font-size: 12px;">
                <th scope="col" style="width:35% !important; text-align: center; ">Place of Employment</th>
                <th scope="col" class="align-middle" style="width: 10%; text-align: center;">Starting<br>Year/Month ~</th>
                <th scope="col" style="width: 10%;border-left: none;text-align: center;">Finishing<br>Year/Month		
                </th>
                <th scope="col" style="width: 10%;;">Job Description </th>
            </tr>
        </thead>
        <tbody id="">
            <tr>
                <td style="font-size: 11px; text-align: right;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: left;"></td>
                
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: right;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: left;"></td>
                
            </tr>
            
            
        </tbody>
      </table>
    </div>
    </section> 
<br><br>
    <div>
<h4 style="padding: 0px;margin:0px;">Have you visited Japan?</h4> 	

<div style="width:100%;display: inline;">
<p  style="width:100%;display:inline;">
    <p style="width:50px;float:left"> Yes / No</p>
    <p style="width:120px;float:left"> ( Status :</p> 
    <p style="width:150px;float:left;">Date of Entry:</p>
    <p style="width:120px;float:left;">Date of Departure:</p>
    <p style="width:100px;float:right;"> ) </p>
</p> 
</div>

<h4 style="padding: 0px;margin:0px;">Have you applied for Certificate of Eligibility? </h4>	
<div style="width:100%;display: inline;">
<p>
    <p style="width:50px;float:left"> Yes / No</p>
    <p style="width:120px;float:left">(times : </p>                 
    <p style="width:180px;float:left;">Purpose of Entry:</p>
    <p style="width:60px;float:left;"> When: </p> 
    <p style="width:150px;float:right;"> ) </p>
 </p> 
</div>	
<h4 style="width:400px;float:left;">Is it possible to provide all required documents in English? 	</h4>
<p style="width:250px;float:right;">   Yes / No	</p>							
<h4 style="padding: 0px;margin:0px;width:400px;float:left;">Your future plan after completing a course in ECC:	</h4>								
<p style="padding: 0px;margin:0px;width:400px;float:left;">
    <p style="width:400px;float: left;">(	</p>
    <p style="width:100px;float: right;">	)</p>	
</p>
<h4 style="padding: 0px;margin:0px;">Is there any your family member who understands at least one of the languages which we understand? And, who? </h4>		

<p style="width:400px;float:left;">( Language : English / Chinese / Korean / Thai / Vietnamese / Japanese  </p>
<p style="width:280px;float:left;">Relationship:<span style="width:200px;float:right;"> )</span></p>	


</div>   
<section class="personal-info" class="personal-info" style="width:100%;padding-top:22px;">
    <h4 style="margin:0px;">Family Member</h4>	
    <div class="personal" style="width: 100%;display:inline-block;">
    <table style="width:100%;" class="tbl">
        <thead style="background: #f5f5f5;padding:1px;">
            <tr class="text-center" style="font-size: 12px;">
                <th scope="col" style="width:20%;text-align:center;" >Name</th>
                <th scope="col" style="width:10%;text-align:center;">Relationship</th>
                <th scope="col" style="width:10%;text-align:center;">Work Place</th>
                <th scope="col" style="width:10%;text-align:center;">Occupation </th>
                <th scope="col" style="width: 10%;text-align:center;">Length of Service </th>
                <th scope="col" style="width: 10%;text-align:center;" >Annual Income</th>
            </tr>
        </thead>
        <tbody id="">
           <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"> </td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;">-</td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"> </td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;">-</td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;">-</td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"> </td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;">-</td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"> </td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;">-</td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"> </td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;">-</td>
            </tr>
        </tbody>
    </table>
    </div>
</section>


<section class="eligibility"  style="width:100%;padding-top:22px;">	
    <h4 style="margin:0px;">Financial Sponsor</h4>			
    <div class="personal" style="width: 100%;display:inline-block;">													
		<table style="width: 100%;">
            <tr>
                <th  class="ecc_stu_name" style="width: 10%;border-right:none !important;">				
                   Name:
                </th>
                <td  colspan="3" style="width:30%;text-align:left;border-left:none !important;"></td>
                <th style="width:10%;border-right:none !important;">			
                  Age:										                                                                                                                                                                 
                </th>
                <td colspan="1" style="border-left:none !important;"> </td>
                <th style="width:20%;border-right:none !important;">			
                Relationship:											                                                                                                                                                                 
                </th>
                <td colspan="1" style="border-left:none !important;"> </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <th class="ecc_stu_name" style="width: 10%;border-right:none !important;border-top:none !important;border-bottom:none !important;">				
                   Address:
                </th>
                <td  colspan="7" style="width:100%;border-left:none !important;text-align:left;border-top:none !important;border-bottom:none !important;"></td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
			  <th style="width: 20%;border-right:none !important;">Phone Number:</th>
			  <td colspan="3" style="width: 30%;border-left:none !important;"></td>
              <th style="width: 10%;border-right:none !important;">Email:</th>
			  <td colspan="3" style="width: 30%;border-left:none !important;"></td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
			  <th style="width: 20%;border-right:none !important;border-top:none !important;border-bottom:none !important;">Occupation:</th>
			  <td colspan="3" style="width: 30%;border-left:none !important;border-top:none !important;border-bottom:none !important;"></td>
              <th style="width: 15%;border-right:none !important;border-top:none !important;border-bottom:none !important;">Work Place:</th>
			  <td colspan="3" style="width: 30%;border-left:none !important;border-top:none !important;border-bottom:none !important;"></td>
            </tr>
        </table>
            <table style="width: 100%;">
            <tr>
                <th  rowspan="2" class="ecc_stu_name" style="width: 15%;border-right:none !important;">Annual Income:</th>
                <td  rowspan="2" style="text-align:left;border-left:none !important;"></td>
                <th style="width:40%;border-right:none !important;">The amount of saving  which can be proved:</th>
                <td colspan="1" style="border-left:none !important;"> </td>
                <th rowspan="2" style="width:20%;border-right:none !important;">Start of work date:</th>
                <td rowspan="2" colspan="1" style="border-left:none !important;"> </td>
            </tr>
            <tr>
                <th style="width:40%;border-right:none !important;">The amount of saving  for study abroad:</th>
                <td colspan="1" style="border-left:none !important;"> </td>
            </tr>
        </table>
    </div>																
</section>
<br><br>
<section class="personal-info" style="width:100%;">
<h4 style="width:500px;float:left;margin:0px;">Family in Japan (Father, Mother, Spouse, Child, Brother and Sisters, or Others) :</h4>
<p style="width:100px;float:right;">   Yes / No	</p>	
    <p style="padding: 0px;margin:0px;width:400px;float:left;">If yes, fill in all the family members in Japan.</p>
    <p style="padding: 0px;margin:0px;width:400px;float:left;">Are you planning to stay with them in Japan? :   Yes / No</p>
    <section class="personal-info" style="width:100%;">
    <div class="personal" style="width: 100%;display:inline-block;">	
    <table style="width:100%;" class="tbl">
        <thead style="background: #f5f5f5;padding:1px;">
            <tr class="text-center" style="font-size: 12px;">
                <th scope="col" style="width:20%;text-align:center;" >Name</th>
                <th scope="col" style="width:10%;text-align:center;">Age</th>
                <th scope="col" style="width:10%;text-align:center;">Relationship</th>
                <th scope="col" style="width:10%;text-align:center;">Nationality </th>
                <th scope="col" style="width: 10%;text-align:center;">Visa Status</th>
                <th scope="col" style="width: 10%;text-align:center;" >Work Place</th>
            </tr>
        </thead>
        <tbody id="">
           <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;">-</td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;">-</td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 11px; text-align: left;">-</td>
            </tr>
        </tbody>
    </table>
    </div>
</section>
</body>
</html>


</html>';
