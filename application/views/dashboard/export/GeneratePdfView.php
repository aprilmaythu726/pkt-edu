<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
                padding-left: 2px;
            }
        
                </style>
</head>
<body>
<section class="header" style="display: flex;display:block;">
	<div class="logo">
	</div>
	<div class="application-title">
		<h3>Entry Questionnaire</h3>
	</div><br/>
    <div style="padding-top:12px;">
        <p style="display: inline;">Date:</p>
        <span>2022</span><span class="ecc_date">year</span>
        <span>10</span><span class="ecc_date">month</span>
        <span>25</span> <span class="ecc_date">date</span>
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
                <th style="width:20%;" style="width:20%;border-right:none !important;border-left:none !important;">			
                (Married / Unmarried ):											                                                                                                                                                                 
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
<section class="personal-info" style="width:100%;">
    <h4>Educational History : from Elementary School to the Most Recent School</h4>
    <div class="personal" style="width: 100%;display:inline-block;">
      <table style="width:100%;" class="tbl">
        <thead style="background: #f5f5f5; text-align:center;padding:1px;">
            <tr class="text-center" style="font-size: 12px;">
                <th scope="col" style="width:35% !important; text-align: center; ">Name of Institution</th>
                <th scope="col" class="align-middle" style="width: 10%; text-align: center;">Starting<br>Year/Month ~</th>
                <th scope="col" style="width: 10%;border-left: none;text-align: center;">Finishing<br>Year/Month</th>	
                <th scope="col" style="width: 10%;;">Term of Study </th>
            </tr>
        </thead>
        <tbody id="stockList">
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: left;"><p style="text-align: right;padding:0px;margin:0px;">year</p></td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: left;"><p style="text-align: right;padding:0px;margin:0px;">year</p></td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: left;"><p style="text-align: right;padding:0px;margin:0px;">year</p></td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: left;"><p style="text-align: right;padding:0px;margin:0px;">year</p></td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: left;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: left;"><p style="text-align: right;padding:0px;margin:0px;">year</p></td>
            </tr>
            
        </tbody>
      </table>
    </div>
    </section> 
    <section class="personal-info" style="width:100%;">
    <h4>Previous Japanese Language Study</h4>
    <div class="personal" style="width: 100%;display:inline-block;">
      <table style="width:100%;" class="tbl">
        <thead style="background: #f5f5f5; text-align:center;padding:1px;">
            <tr class="text-center" style="font-size: 12px;">
                <th scope="col" style="width:35% !important; text-align: center; ">Name of Institution</th>
                <th scope="col" class="align-middle" style="width: 10%; text-align: center;">Starting<br>Year/Month ~</th>
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
                <td style="font-size: 11px; text-align: left;"><p style="text-align: right;padding:0px;margin:0px;">hours</p></td>
            </tr>
            <tr>
                <td style="font-size: 11px; text-align: right;"></td>
                <td style="font-size: 12px; text-align: left;border-right: none;"></td>
                <td style="font-size: 11px; text-align: left;border-left: none;"> ~ </td>
                <td style="font-size: 11px; text-align: left;"><p style="text-align: right;padding:0px;margin:0px;">hours</p></td>
            </tr>
        
        </tbody>
      </table>
    </div>
    </section> 
    <section class="personal-info" style="width:100%;display:flex;">
    <div class="position:relative;">
    <h4>Previous Japanese Language Study</h4>
    <div class="personal" style="width: 100%;">
      <table style="width:48%;" class="tbl">
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
    <div style="width:100%;position:absolute;top:0px;left:50%;">
    <h4>Name of Japanese language tests you are going to take</h4>
    <div class="personal" style="width: 100%;">
      <table style="width:50%;" class="tbl">
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
    <section class="personal-info" style="width:100%;">
    <h4>History of Employment (Write in order, ending with the most recent employment.):</h4>
    <div class="personal" style="width: 100%;display:inline-block;">
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
<h4>Have you visited Japan?</h4> 									
<p>Yes / No ( <span> Status :                 </span><span style="padding-left: 100px;">Date of Entry:                            </span><span style="padding-left: 100px;padding-right: 100px;">Date of Departure:                     	</span>  )  </p>  								
<h4>Have you applied for Certificate of Eligibility? </h4>		
<p>Yes / No ( <span> times :                 </span><span style="padding-left: 100px;">Purpose of Entry:                         </span><span style="padding-left: 100px;padding-right: 100px;"> When:                    	</span>  )  </p> 
<h4 style="display:inline;">Is it possible to provide all required documents in English?</h4>  <span>   Yes / No	</span>								
<h4>Your future plan after completing a course in ECC:	</h4>								
<p><span style="float: left;">(	</span><span style="float: right;">	)</span>	</p><br>
<h4 style="padding: 0px;margin:0px;">Is there any your family member who understands at least one of the languages which we understand? And, who? </h4>									
<p>( Language : English / Chinese / Korean / Thai / Vietnamese / Japanese  Relationship:                  <span style="padding-left: 100px;">   ) 	</span>  	</p>							
</div>   
<section class="personal-info" style="width:100%;">
    <h4>Family Member</h4>	
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
</section>


<section class="eligibility">	
<div class="eligibility-status" >        
    </div>	
    <h4>Financial Sponsor</h4>																
		<table style="width: 100%;">
            <tr>
                <th  class="ecc_stu_name" style="width: 10%;border-right:none !important;">				
                   Name:
                </th>
                <td  colspan="3" style="width:30%;text-align:left;border-left:none !important;">Yoon</td>
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
                <td  colspan="7" style="width:100%;border-left:none !important;text-align:left;border-top:none !important;border-bottom:none !important;">sxds</td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
			  <th style="width: 20%;border-right:none !important;">Phone Number:</th>
			  <td colspan="3" style="width: 30%;border-left:none !important;">xdasdc</td>
              <th style="width: 10%;border-right:none !important;">E-mail:</th>
			  <td colspan="3" style="width: 30%;border-left:none !important;">asdcdas</td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
			  <th style="width: 20%;border-right:none !important;border-top:none !important;border-bottom:none !important;">Occupation:</th>
			  <td colspan="3" style="width: 30%;border-left:none !important;border-top:none !important;border-bottom:none !important;">xdasdc</td>
              <th style="width: 15%;border-right:none !important;border-top:none !important;border-bottom:none !important;">Work Place:</th>
			  <td colspan="3" style="width: 30%;border-left:none !important;border-top:none !important;border-bottom:none !important;">asdcdas</td>
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
</section>
<br><br>
<section class="personal-info" style="width:100%;">
    <h4 style="display:inline;">Family in Japan (Father, Mother, Spouse, Child, Brother and Sisters, or Others) : </h4><span>  Yes / No</span>  
    <p>If yes, fill in all the family members in Japan.</p>
    <p>Are you planning to stay with them in Japan? :   Yes / No</p>
    <section class="personal-info" style="width:100%;">
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
</section>
</body>
</html>

