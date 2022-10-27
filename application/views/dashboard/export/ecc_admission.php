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
                    font-size: 12px;
                    color: #111;
                    font-weight: normal;
                    font-family: sjis;
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
            .applicant_image {
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
        
                </style>
</head>
<body>
<section class="header">
	<div class="logo">
	</div>
	<div class="application-title" style="text-align:center;font-family:sjis;">
		<h2 style="font-family: sjis;">入　学　願　書 </h2>
	</div>
    <div class="application-title" style="text-align:center;">
       <h2>Application for Admission</h2>
    </div>
</section>

<section class="eligibility">	
<div style="width:120px;height:104px;float: right;border:1px solid #000000;margin:0px;padding:0px;">
    </div>    	
    <div style="width: 558px;float: left;margin:0px;padding:0px;">
	<table style="border-bottom:none !important;">
      <tr style="border-bottom:none !important;">
        <th style="width: 50%;border-right:none !important;">氏名 Name in Full (Family → Given):</th>
        <td style="width: 40%;border-left:none !important;">123</td>
        <th style="width: 15%;border-right:none !important;">性別 SEX</th>
        <td style="width: 15%;border-left:none !important;">123</td>
      </tr>
    </table> 
    <table style="border-top:none !important;">
      <tr>
        <th style="border-bottom:none !important;width: 10%;text-align:center;">アルファベット<br>Alphabet</th>
        <td style="width: 65%;"></td>
      </tr>
      <tr>
        <th style="border-top:none !important;width: 10%;text-align:center;">漢字<br/>Chinese Character</th>
        <td style="width: 65%;"></td>
      </tr>
    </table>    
    </div>
</section>
</body>
</html>


</html>';
