<html lang="en"><head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Data</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
  <body>
  



<style>td{height:131px}.title{font-size:30px;font-weight:bold;color:#000}.footer_row{}.title_row td{padding:5px 4px;height:auto}.second_row{font-weight:bold}#name{font-weight:normal}#orders{font-weight:normal}#shipping{font-weight:normal}.logo{float:right} button {border:none;background:#0e0ebc;color:#fff;padding:10px 17px;font-weight:bold;margin:0 auto;display:block;font-size:27px;}.product_image{width:100px}.column{float:left;width:33.33%;padding:10px}.row:after{content:"";display:table;clear:both}@media screen and (max-width:600px){.column{width:100%}}.second_table td{border-top:none!important}.note{}tr.second_row{background:#e3e0fe}@media print{.no-print{display:none}table{table-layout:fixed;width:max-content!important}body{-webkit-print-color-adjust:exact}tr.second_row{background-color:#e3e0fe!important;-webkit-print-color-adjust:exact!important}} .less_width { width: 110px; }</style> 


<style>

.table-responsive { width: auto;  }

.less_width { width: 110px; }
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: #7e7e7e;
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-responsive{
    margin: 5px 5px 5px 5px;
        border-radius: 10px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.table td, .table th {
    text-align: center;
    padding: 8px;
}

.table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.table tr:nth-child(even) {
    background: #f9f9f9;
}







.table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.table td, .table th {
  border: 1px solid #c5baba;
  padding: 8px;
  border-top: 1px solid #c5baba !important;
}

.table tr:nth-child(even){background-color: #f2f2f2;}


.table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}









input {
    margin-top: 6px;
    border: 1px solid #bababa;
        height: 24px;

}


tr.second_row input {
    margin-top: -3px;
}


tr.second_row td {
    height: auto;
    border-bottom: 5px solid #7d7d7d;
    padding-bottom: 20px !important;

}


input[type="file"] {
    display: block;
    width: 179px;
    height: 22px;
    margin: 0 auto;
    margin-top: 9px;
    background: #e3e0fe;
    font-weight: bold;
}


table {
    width: -webkit-fill-available;
    background-color: transparent;
}


.full_width { width: -webkit-fill-available; }

.mb-8 { margin-bottom: 8px; }


</style>



<?php




if( $_POST )
{
    
    $name = $_POST['selected_name'];
	$shipping = $_POST['shipping'];
	$orders = $_POST['orders'];
	$qp = $_POST['qp'];
	$sdr = $_POST['sdr'];
	$date = $_POST['date'];
//	$uuid = $_POST['uuid'];
	
	//product 1
	
	$var_1 = $_POST['var_1'];
	$curr_prc_1 = $_POST['curr_prc_1'];
	$our_price_1 = $_POST['our_price_1'];
	$vat_1 = $_POST['vat_1'];
    $note_1 = $_POST['note_1'];
    $pl_1 = $_POST['pl1'];
	
	$country_1 = $_POST['country_1'];
	$s1_1 = $_POST['s1_1'];
	$s1_2 = $_POST['s1_2'];
	$s1_3 = $_POST['s1_3'];
	$st1_1 = $_POST['st1_1'];
	$st1_2 = $_POST['st1_2'];
	$st1_3 = $_POST['st1_3'];
	$sf1_1 = $_POST['sf1_1'];
	$sf1_2 = $_POST['sf1_2'];
	$sf1_3 = $_POST['sf1_3'];
	
	$country_2 = $_POST['country_2'];
	$s2_1 = $_POST['s2_1'];
	$s2_2 = $_POST['s2_2'];
	$s2_3 = $_POST['s2_3'];
	$st2_1 = $_POST['st2_1'];
	$st2_2 = $_POST['st2_2'];
	$st2_3 = $_POST['st2_3'];
	$sf2_1 = $_POST['sf2_1'];
	$sf2_2 = $_POST['sf2_2'];
	$sf2_3 = $_POST['sf2_3'];
	
	$country_3 = $_POST['country_3'];
	$s3_1 = $_POST['s3_1'];
	$s3_2 = $_POST['s3_2'];
	$s3_3 = $_POST['s3_3'];
	$st3_1 = $_POST['st3_1'];
	$st3_2 = $_POST['st3_2'];
	$st3_3 = $_POST['st3_3'];
	$sf3_1 = $_POST['sf3_1'];
	$sf3_2 = $_POST['sf3_2'];
	$sf3_3 = $_POST['sf3_3'];
	
	
	
	
	//product 2
	
	$second_var_1 = $_POST['second_var_1'];
	$second_curr_prc_1 = $_POST['second_curr_prc_1'];
	$second_our_price_1 = $_POST['second_our_price_1'];
	$second_vat_1 = $_POST['second_vat_1'];
    $second_note_1 = $_POST['second_note_1'];
    $pl_2 = $_POST['pl2'];
	
	$second_country_1 = $_POST['second_country_1'];
	$second_s1_1 = $_POST['second_s1_1'];
	$second_s1_2 = $_POST['second_s1_2'];
	$second_s1_3 = $_POST['second_s1_3'];
	$second_st1_1 = $_POST['second_st1_1'];
	$second_st1_2 = $_POST['second_st1_2'];
	$second_st1_3 = $_POST['second_st1_3'];
	$second_sf1_1 = $_POST['second_sf1_1'];
	$second_sf1_2 = $_POST['second_sf1_2'];
	$second_sf1_3 = $_POST['second_sf1_3'];
	
	$second_country_2 = $_POST['second_country_2'];
	$second_s2_1 = $_POST['second_s2_1'];
	$second_s2_2 = $_POST['second_s2_2'];
	$second_s2_3 = $_POST['second_s2_3'];
	$second_st2_1 = $_POST['second_st2_1'];
	$second_st2_2 = $_POST['second_st2_2'];
	$second_st2_3 = $_POST['second_st2_3'];
	$second_sf2_1 = $_POST['second_sf2_1'];
	$second_sf2_2 = $_POST['second_sf2_2'];
	$second_sf2_3 = $_POST['second_sf2_3'];
	
	$second_country_3 = $_POST['second_country_3'];
	$second_s3_1 = $_POST['second_s3_1'];
	$second_s3_2 = $_POST['second_s3_2'];
	$second_s3_3 = $_POST['second_s3_3'];
	$second_st3_1 = $_POST['second_st3_1'];
	$second_st3_2 = $_POST['second_st3_2'];
	$second_st3_3 = $_POST['second_st3_3'];
	$second_sf3_1 = $_POST['second_sf3_1'];
	$second_sf3_2 = $_POST['second_sf3_2'];
	$second_sf3_3 = $_POST['second_sf3_3'];
	
	
	
	//product 3
	
	$third_var_1 = $_POST['third_var_1'];
	$third_curr_prc_1 = $_POST['third_curr_prc_1'];
	$third_our_price_1 = $_POST['third_our_price_1'];
	$third_vat_1 = $_POST['third_vat_1'];
    $third_note_1 = $_POST['third_note_1'];
    $pl_3 = $_POST['pl3'];
	
	$third_country_1 = $_POST['third_country_1'];
	$third_s1_1 = $_POST['third_s1_1'];
	$third_s1_2 = $_POST['third_s1_2'];
	$third_s1_3 = $_POST['third_s1_3'];
	$third_st1_1 = $_POST['third_st1_1'];
	$third_st1_2 = $_POST['third_st1_2'];
	$third_st1_3 = $_POST['third_st1_3'];
	$third_sf1_1 = $_POST['third_sf1_1'];
	$third_sf1_2 = $_POST['third_sf1_2'];
	$third_sf1_3 = $_POST['third_sf1_3'];
	
	$third_country_2 = $_POST['third_country_2'];
	$third_s2_1 = $_POST['third_s2_1'];
	$third_s2_2 = $_POST['third_s2_2'];
	$third_s2_3 = $_POST['third_s2_3'];
	$third_st2_1 = $_POST['third_st2_1'];
	$third_st2_2 = $_POST['third_st2_2'];
	$third_st2_3 = $_POST['third_st2_3'];
	$third_sf2_1 = $_POST['third_sf2_1'];
	$third_sf2_2 = $_POST['third_sf2_2'];
	$third_sf2_3 = $_POST['third_sf2_3'];
	
	$third_country_3 = $_POST['third_country_3'];
	$third_s3_1 = $_POST['third_s3_1'];
	$third_s3_2 = $_POST['third_s3_2'];
	$third_s3_3 = $_POST['third_s3_3'];
	$third_st3_1 = $_POST['third_st3_1'];
	$third_st3_2 = $_POST['third_st3_2'];
	$third_st3_3 = $_POST['third_st3_3'];
	$third_sf3_1 = $_POST['third_sf3_1'];
	$third_sf3_2 = $_POST['third_sf3_2'];
	$third_sf3_3 = $_POST['third_sf3_3'];
	
	
	
	
	
	
	
	
	//product 4
	
	$fourth_var_1 = $_POST['fourth_var_1'];
	$fourth_curr_prc_1 = $_POST['fourth_curr_prc_1'];
	$fourth_our_price_1 = $_POST['fourth_our_price_1'];
	$fourth_vat_1 = $_POST['fourth_vat_1'];
    $fourth_note_1 = $_POST['fourth_note_1'];
    $pl_4 = $_POST['pl4'];
	
	$fourth_country_1 = $_POST['fourth_country_1'];
	$fourth_s1_1 = $_POST['fourth_s1_1'];
	$fourth_s1_2 = $_POST['fourth_s1_2'];
	$fourth_s1_3 = $_POST['fourth_s1_3'];
	$fourth_st1_1 = $_POST['fourth_st1_1'];
	$fourth_st1_2 = $_POST['fourth_st1_2'];
	$fourth_st1_3 = $_POST['fourth_st1_3'];
	$fourth_sf1_1 = $_POST['fourth_sf1_1'];
	$fourth_sf1_2 = $_POST['fourth_sf1_2'];
	$fourth_sf1_3 = $_POST['fourth_sf1_3'];
	
	$fourth_country_2 = $_POST['fourth_country_2'];
	$fourth_s2_1 = $_POST['fourth_s2_1'];
	$fourth_s2_2 = $_POST['fourth_s2_2'];
	$fourth_s2_3 = $_POST['fourth_s2_3'];
	$fourth_st2_1 = $_POST['fourth_st2_1'];
	$fourth_st2_2 = $_POST['fourth_st2_2'];
	$fourth_st2_3 = $_POST['fourth_st2_3'];
	$fourth_sf2_1 = $_POST['fourth_sf2_1'];
	$fourth_sf2_2 = $_POST['fourth_sf2_2'];
	$fourth_sf2_3 = $_POST['fourth_sf2_3'];
	
	$fourth_country_3 = $_POST['fourth_country_3'];
	$fourth_s3_1 = $_POST['fourth_s3_1'];
	$fourth_s3_2 = $_POST['fourth_s3_2'];
	$fourth_s3_3 = $_POST['fourth_s3_3'];
	$fourth_st3_1 = $_POST['fourth_st3_1'];
	$fourth_st3_2 = $_POST['fourth_st3_2'];
	$fourth_st3_3 = $_POST['fourth_st3_3'];
	$fourth_sf3_1 = $_POST['fourth_sf3_1'];
	$fourth_sf3_2 = $_POST['fourth_sf3_2'];
	$fourth_sf3_3 = $_POST['fourth_sf3_3'];
	
	
	
	
	
	
	//product 5
	
$fifth_var_1 = $_POST['fifth_var_1'];
	$fifth_curr_prc_1 = $_POST['fifth_curr_prc_1'];
	$fifth_our_price_1 = $_POST['fifth_our_price_1'];
	$fifth_vat_1 = $_POST['fifth_vat_1'];
    $fifth_note_1 = $_POST['fifth_note_1'];
    $pl_5 = $_POST['pl5'];
	
	$fifth_country_1 = $_POST['fifth_country_1'];
	$fifth_s1_1 = $_POST['fifth_s1_1'];
	$fifth_s1_2 = $_POST['fifth_s1_2'];
	$fifth_s1_3 = $_POST['fifth_s1_3'];
	$fifth_st1_1 = $_POST['fifth_st1_1'];
	$fifth_st1_2 = $_POST['fifth_st1_2'];
	$fifth_st1_3 = $_POST['fifth_st1_3'];
	$fifth_sf1_1 = $_POST['fifth_sf1_1'];
	$fifth_sf1_2 = $_POST['fifth_sf1_2'];
	$fifth_sf1_3 = $_POST['fifth_sf1_3'];
	
	$fifth_country_2 = $_POST['fifth_country_2'];
	$fifth_s2_1 = $_POST['fifth_s2_1'];
	$fifth_s2_2 = $_POST['fifth_s2_2'];
	$fifth_s2_3 = $_POST['fifth_s2_3'];
	$fifth_st2_1 = $_POST['fifth_st2_1'];
	$fifth_st2_2 = $_POST['fifth_st2_2'];
	$fifth_st2_3 = $_POST['fifth_st2_3'];
	$fifth_sf2_1 = $_POST['fifth_sf2_1'];
	$fifth_sf2_2 = $_POST['fifth_sf2_2'];
	$fifth_sf2_3 = $_POST['fifth_sf2_3'];
	
	$fifth_country_3 = $_POST['fifth_country_3'];
	$fifth_s3_1 = $_POST['fifth_s3_1'];
	$fifth_s3_2 = $_POST['fifth_s3_2'];
	$fifth_s3_3 = $_POST['fifth_s3_3'];
	$fifth_st3_1 = $_POST['fifth_st3_1'];
	$fifth_st3_2 = $_POST['fifth_st3_2'];
	$fifth_st3_3 = $_POST['fifth_st3_3'];
	$fifth_sf3_1 = $_POST['fifth_sf3_1'];
	$fifth_sf3_2 = $_POST['fifth_sf3_2'];
	$fifth_sf3_3 = $_POST['fifth_sf3_3'];
	
	
	
	
	
	//product 6
	
	$sixth_var_1 = $_POST['sixth_var_1'];
	$sixth_curr_prc_1 = $_POST['sixth_curr_prc_1'];
	$sixth_our_price_1 = $_POST['sixth_our_price_1'];
	$sixth_vat_1 = $_POST['sixth_vat_1'];
    $sixth_note_1 = $_POST['sixth_note_1'];
    $pl_6 = $_POST['pl6'];
	
	$sixth_country_1 = $_POST['sixth_country_1'];
	$sixth_s1_1 = $_POST['sixth_s1_1'];
	$sixth_s1_2 = $_POST['sixth_s1_2'];
	$sixth_s1_3 = $_POST['sixth_s1_3'];
	$sixth_st1_1 = $_POST['sixth_st1_1'];
	$sixth_st1_2 = $_POST['sixth_st1_2'];
	$sixth_st1_3 = $_POST['sixth_st1_3'];
	$sixth_sf1_1 = $_POST['sixth_sf1_1'];
	$sixth_sf1_2 = $_POST['sixth_sf1_2'];
	$sixth_sf1_3 = $_POST['sixth_sf1_3'];
	
	$sixth_country_2 = $_POST['sixth_country_2'];
	$sixth_s2_1 = $_POST['sixth_s2_1'];
	$sixth_s2_2 = $_POST['sixth_s2_2'];
	$sixth_s2_3 = $_POST['sixth_s2_3'];
	$sixth_st2_1 = $_POST['sixth_st2_1'];
	$sixth_st2_2 = $_POST['sixth_st2_2'];
	$sixth_st2_3 = $_POST['sixth_st2_3'];
	$sixth_sf2_1 = $_POST['sixth_sf2_1'];
	$sixth_sf2_2 = $_POST['sixth_sf2_2'];
	$sixth_sf2_3 = $_POST['sixth_sf2_3'];
	
	$sixth_country_3 = $_POST['sixth_country_3'];
	$sixth_s3_1 = $_POST['sixth_s3_1'];
	$sixth_s3_2 = $_POST['sixth_s3_2'];
	$sixth_s3_3 = $_POST['sixth_s3_3'];
	$sixth_st3_1 = $_POST['sixth_st3_1'];
	$sixth_st3_2 = $_POST['sixth_st3_2'];
	$sixth_st3_3 = $_POST['sixth_st3_3'];
	$sixth_sf3_1 = $_POST['sixth_sf3_1'];
	$sixth_sf3_2 = $_POST['sixth_sf3_2'];
	$sixth_sf3_3 = $_POST['sixth_sf3_3'];
	
	
	
	
	

$file1 = "../getgrist-images-subdomain/images/" . basename($_FILES["product_image1"]["name"]);
$file2 = "../getgrist-images-subdomain/images/" . basename($_FILES["second_product_image1"]["name"]);
$file3 = "../getgrist-images-subdomain/images/" . basename($_FILES["third_product_image1"]["name"]);
$file4 = "../getgrist-images-subdomain/images/" . basename($_FILES["fourth_product_image1"]["name"]);
$file5 = "../getgrist-images-subdomain/images/" . basename($_FILES["fifth_product_image1"]["name"]);
$file6 = "../getgrist-images-subdomain/images/" . basename($_FILES["sixth_product_image1"]["name"]);



 move_uploaded_file($_FILES["product_image1"]["tmp_name"], $file1);
 move_uploaded_file($_FILES["second_product_image1"]["tmp_name"], $file2);
 move_uploaded_file($_FILES["third_product_image1"]["tmp_name"], $file3);
 move_uploaded_file($_FILES["fourth_product_image1"]["tmp_name"], $file4);
 move_uploaded_file($_FILES["fifth_product_image1"]["tmp_name"], $file5);
 move_uploaded_file($_FILES["sixth_product_image1"]["tmp_name"], $file6);
 
 
		$product_image1 = "https://getgrist-images.noschools.life/images/".$_FILES["product_image1"]["name"];
		$second_product_image1 = "https://getgrist-images.noschools.life/images/".$_FILES["second_product_image1"]["name"];
		$third_product_image1 = "https://getgrist-images.noschools.life/images/".$_FILES["third_product_image1"]["name"];
		$fourth_product_image1 = "https://getgrist-images.noschools.life/images/".$_FILES["fourth_product_image1"]["name"];
		
		$fifth_product_image1 = "https://getgrist-images.noschools.life/images/".$_FILES["fifth_product_image1"]["name"];
			
		$sixth_product_image1 = "https://getgrist-images.noschools.life/images/".$_FILES["sixth_product_image1"]["name"];

	
	
	
	
//https://docs.getgrist.com/api/docs/7r6ZcK4NtJ5JQHaYX93DBi/tables/Before_Quotes/records
//96c63a4955c4cbd4224a0cb1640c593d3bccdf46


// Convert the PHP array into a JSON format
$payload = '{"records": [


{"fields": {
	"Email2": '.$name.' ,
	"Monthly_Orders": "'.$orders.'" ,
	"Target_Countries": "'.$shipping.'" ,
	"Current_Shipping_Time": "'.$shipping.'" ,
	"Quoting_Person": "'.$qp.'" ,
	"Date": "'.$date.'" ,
	
	
	"Country1_1": "'.$country_1.'" ,
	"Country1_2": "'.$country_2.'" ,
	"Country1_3": "'.$country_3.'" ,
	"Product_Image_1": "'.$product_image1.'" ,
	"Variant_1": "'.$var_1.'" ,
	"Current_Price_1": "'.$curr_prc_1.'" ,
	"Our_Price_1": "'.$our_price_1.'" ,
	"VAT_1": "'.$vat_1.'" ,
	"Note_1": "'.$note_1.'" ,
	"Link_1": "'.$pl_1.'" ,
	
	
	"Shipping_Method1_1": "'.$s1_1.'" ,
	"Shipping_Method1_2": "'.$s1_2.'" ,
	"Shipping_Method1_3": "'.$s1_3.'" ,
	"Shipping_Time1_1": "'.$st1_1.'" ,
	"Shipping_Time1_2": "'.$st1_2.'" ,
	"Shipping_Time1_3": "'.$st1_3.'" ,
	"Shipping_Fee1_1": "'.$sf1_1.'" ,
	"Shipping_Fee1_2": "'.$sf1_2.'" ,
	"Shipping_Fee1_3": "'.$sf1_3.'" ,
	"Shipping_Method2_1_2": "'.$s2_1.'" ,
	"Shipping_Method2_2_2": "'.$s2_2.'" ,
	"Shipping_Method2_3_2": "'.$s2_3.'" ,
	"Shipping_Time2_1": "'.$st2_1.'" ,
	"Shipping_Time2_2_2": "'.$st2_2.'" ,
	"Shipping_Time2_3_2": "'.$st2_3.'" ,
	"Shipping_Fee2_1_2": "'.$sf2_1.'" ,
	"Shipping_Fee2_2": "'.$sf2_2.'" ,
	"Shipping_Fee2_3_2": "'.$sf2_3.'" ,
	"Shipping_Method3_1_2": "'.$s3_1.'" ,
	"Shipping_Method3_2_2": "'.$s3_2.'" ,
	"Shipping_Method3_3_2": "'.$s3_3.'" ,
	"Shipping_Time3_1_2": "'.$st3_1.'" ,
	"Shipping_Time3_2_2": "'.$st3_2.'" ,
	"Shipping_Time3_3_2": "'.$st3_3.'" ,
	"Shipping_Fee3_1_2": "'.$sf3_1.'" ,
	"Shipping_Fee3_2_2": "'.$sf3_2.'" ,
	"Shipping_Fee3_3_2": "'.$sf3_3.'" ,
	
	
	
	
	"Country2_1": "'.$second_country_1.'" ,
	"Country2_2": "'.$second_country_2.'" ,
	"Country2_3": "'.$second_country_3.'" ,
	"Product_Image_2": "'.$second_product_image1.'" ,
	"Variant_2": "'.$second_var_1.'" ,
	"Current_Price_2": "'.$second_curr_prc_1.'" ,
	"Our_Price_2": "'.$second_our_price_1.'" ,
	"VAT_2": "'.$second_vat_1.'" ,
	"Note_2": "'.$second_note_1.'" ,
	"Link_2": "'.$pl_2.'" ,
	
	"Shipping_Method2_1_1": "'.$second_s1_1.'" ,
	"Shipping_Method2_1_2_2": "'.$second_s1_2.'" ,
	"Shipping_Method2_1_3": "'.$second_s1_3.'" ,
	"Shipping_Time2_1_1": "'.$second_st1_1.'" ,
	"Shipping_Time2_1_2": "'.$second_st1_2.'" ,
	"Shipping_Time2_1_3": "'.$second_st1_3.'" ,
	"Shipping_Fee2_1_1": "'.$second_sf1_1.'" ,
	"Shipping_Fee2_1_2_2": "'.$second_sf1_2.'" ,
	"Shipping_Fee2_1_3": "'.$second_sf1_3.'" ,
	"Shipping_Method2_2_1": "'.$second_s2_1.'" ,
	"Shipping_Method2_2_2_2": "'.$second_s2_2.'" ,
	"Shipping_Method2_2_3": "'.$second_s2_3.'" ,
	"Shipping_Time2_2_1": "'.$second_st2_1.'" ,
	"Shipping_Time2_2_2_2": "'.$second_st2_2.'" ,
	"Shipping_Time2_2_3": "'.$second_st2_3.'" ,
	"Shipping_Fee2_2_1": "'.$second_sf2_1.'" ,
	"Shipping_Fee2_2_2": "'.$second_sf2_2.'" ,
	"Shipping_Fee2_2_3": "'.$second_sf2_3.'" ,
	"Shipping_Method2_3_1": "'.$second_s3_1.'" ,
	"Shipping_Method2_3_2_2": "'.$second_s3_2.'" ,
	"Shipping_Method2_3_3": "'.$second_s3_3.'" ,
	"Shipping_Time2_3_1": "'.$second_st3_1.'" ,
	"Shipping_Time2_3_2_2": "'.$second_st3_2.'" ,
	"Shipping_Time2_3_3": "'.$second_st3_3.'" ,
	"Shipping_Fee2_3_1": "'.$second_sf3_1.'" ,
	"Shipping_Fee2_3_2_2": "'.$second_sf3_2.'" ,
	"Shipping_Fee2_3_3": "'.$second_sf3_3.'" ,

	
	
	
	
	
	"Country3_1": "'.$third_country_1.'" ,
	"Country3_2": "'.$third_country_2.'" ,
	"Country3_3": "'.$third_country_3.'" ,
	"Product_Image_3": "'.$third_product_image1.'" ,
	"Variant_3": "'.$third_var_1.'" ,

	"Current_Price_3": "'.$third_curr_prc_1.'" ,
	"Our_Price_3": "'.$third_our_price_1.'" ,
	"VAT_3": "'.$third_vat_1.'" ,
	"Note_3": "'.$third_note_1.'" ,
	"Link_3": "'.$pl_3.'" ,
	
	"Shipping_Method3_1_1": "'.$third_s1_1.'" ,
	"Shipping_Method3_1_2_2": "'.$third_s1_2.'" ,
	"Shipping_Method3_1_3": "'.$third_s1_3.'" ,
	"Shipping_Time3_1_1": "'.$third_st1_1.'" ,
	"Shipping_Time3_1_2_2": "'.$third_st1_2.'" ,
	"Shipping_Time3_1_3": "'.$third_st1_3.'" ,
	"Shipping_Fee3_1_1": "'.$third_sf1_1.'" ,
	"Shipping_Fee3_1_2_2": "'.$third_sf1_2.'" ,
	"Shipping_Fee3_1_3": "'.$third_sf1_3.'" ,
	"Shipping_Method3_2_1": "'.$third_s2_1.'" ,
	"Shipping_Method3_2_2_2": "'.$third_s2_2.'" ,
	"Shipping_Method3_2_3": "'.$third_s2_3.'" ,
	"Shipping_Time3_2_1": "'.$third_st2_1.'" ,
	"Shipping_Time3_2_2_2": "'.$third_st2_2.'" ,
	"Shipping_Time3_2_3": "'.$third_st2_3.'" ,
	"Shipping_Fee3_2_1": "'.$third_sf2_1.'" ,
	"Shipping_Fee3_2_2_2": "'.$third_sf2_2.'" ,
	"Shipping_Fee3_2_3": "'.$third_sf2_3.'" ,
	"Shipping_Method3_3_1": "'.$third_s3_1.'" ,
	"Shipping_Method3_3_2_2": "'.$third_s3_2.'" ,
	"Shipping_Method3_3_3": "'.$third_s3_3.'" ,
	"Shipping_Time3_3_1": "'.$third_st3_1.'" ,
	"Shipping_Time3_3_2_2": "'.$third_st3_2.'" ,
	"Shipping_Time3_3_3": "'.$third_st3_3.'" ,
	"Shipping_Fee3_3_1": "'.$third_sf3_1.'" ,
	"Shipping_Fee3_3_2_2": "'.$third_sf3_2.'" ,
	"Shipping_Fee3_3_3": "'.$third_sf3_3.'" ,



	
	
	
	
	"Country4_1": "'.$fourth_country_1.'" ,
	"Country4_2": "'.$fourth_country_2.'" ,
	"Country4_3": "'.$fourth_country_3.'" ,
	"Product_Image4": "'.$fourth_product_image1.'" ,
	"Variant_4": "'.$fourth_var_1.'" ,

	"Current_Price_4": "'.$fourth_curr_prc_1.'" ,
	"Our_Price_4": "'.$fourth_our_price_1.'" ,
	"VAT_4": "'.$fourth_vat_1.'" ,
	"Note_4": "'.$fourth_note_1.'" ,
	"Link_4": "'.$pl_4.'" ,
	
	"Shipping_Method4_1_1": "'.$fourth_s1_1.'" ,
	"Shipping_Method4_1_2": "'.$fourth_s1_2.'" ,
	"Shipping_Method4_1_3": "'.$fourth_s1_3.'" ,
	"Shipping_Time4_1_1": "'.$fourth_st1_1.'" ,
	"Shipping_Time4_1_2": "'.$fourth_st1_2.'" ,
	"Shipping_Time4_1_3": "'.$fourth_st1_3.'" ,
	"Shipping_Fee4_1_1": "'.$fourth_sf1_1.'" ,
	"Shipping_Fee4_1_2": "'.$fourth_sf1_2.'" ,
	"Shipping_Fee4_1_3": "'.$fourth_sf1_3.'" ,
	"Shipping_Method4_2_1": "'.$fourth_s2_1.'" ,
	"Shipping_Method4_2_2": "'.$fourth_s2_2.'" ,
	"Shipping_Method4_2_3": "'.$fourth_s2_3.'" ,
	"Shipping_Time4_2_1": "'.$fourth_st2_1.'" ,
	"Shipping_Time4_2_2": "'.$fourth_st2_2.'" ,
	"Shipping_Time4_2_3": "'.$fourth_st2_3.'" ,
	"Shipping_Fee4_2_1": "'.$fourth_sf2_1.'" ,
	"Shipping_Fee4_2_2": "'.$fourth_sf2_2.'" ,
	"Shipping_Fee4_2_3": "'.$fourth_sf2_3.'" ,
	"Shipping_Method4_3_1": "'.$fourth_s3_1.'" ,
	"Shipping_Method4_3_2": "'.$fourth_s3_2.'" ,
	"Shipping_Method4_3_3": "'.$fourth_s3_3.'" ,
	"Shipping_Time4_3_1": "'.$fourth_st3_1.'" ,
	"Shipping_Time4_3_2": "'.$fourth_st3_2.'" ,
	"Shipping_Time4_3_3": "'.$fourth_st3_3.'" ,
	"Shipping_Fee4_3_1": "'.$fourth_sf3_1.'" ,
	"Shipping_Fee4_3_2": "'.$fourth_sf3_2.'" ,
	"Shipping_Fee4_3_3": "'.$fourth_sf3_3.'" ,







"Country5_1": "'.$fifth_country_1.'" ,
	"Country5_2": "'.$fifth_country_2.'" ,
	"Country5_3": "'.$fifth_country_3.'" ,
	"Product_Image5": "'.$fifth_product_image1.'" ,
	"Variant_5": "'.$fifth_var_1.'" ,

	"Current_Price_5": "'.$fifth_curr_prc_1.'" ,
	"Our_Price_5": "'.$fifth_our_price_1.'" ,
	"VAT_5": "'.$fifth_vat_1.'" ,
	"Note_5": "'.$fifth_note_1.'" ,
	"Link_5": "'.$pl_5.'" ,
	
	"Shipping_Method5_1_1": "'.$fifth_s1_1.'" ,
	"Shipping_Method5_1_2": "'.$fifth_s1_2.'" ,
	"Shipping_Method5_1_3": "'.$fifth_s1_3.'" ,
	"Shipping_Time5_1_1": "'.$fifth_st1_1.'" ,
	"Shipping_Time5_1_2": "'.$fifth_st1_2.'" ,
	"Shipping_Time5_1_3": "'.$fifth_st1_3.'" ,
	"Shipping_Fee5_1_1": "'.$fifth_sf1_1.'" ,
	"Shipping_Fee5_1_2": "'.$fifth_sf1_2.'" ,
	"Shipping_Fee5_1_3": "'.$fifth_sf1_3.'" ,
	"Shipping_Method5_2_1": "'.$fifth_s2_1.'" ,
	"Shipping_Method5_2_2": "'.$fifth_s2_2.'" ,
	"Shipping_Method5_2_3": "'.$fifth_s2_3.'" ,
	"Shipping_Time5_2_1": "'.$fifth_st2_1.'" ,
	"Shipping_Time5_2_2": "'.$fifth_st2_2.'" ,
	"Shipping_Time5_2_3": "'.$fifth_st2_3.'" ,
	"Shipping_Fee5_2_1": "'.$fifth_sf2_1.'" ,
	"Shipping_Fee5_2_2": "'.$fifth_sf2_2.'" ,
	"Shipping_Fee5_2_3": "'.$fifth_sf2_3.'" ,
	"Shipping_Method5_3_1": "'.$fifth_s3_1.'" ,
	"Shipping_Method5_3_2": "'.$fifth_s3_2.'" ,
	"Shipping_Method5_3_3": "'.$fifth_s3_3.'" ,
	"Shipping_Time5_3_1": "'.$fifth_st3_1.'" ,
	"Shipping_Time5_3_2": "'.$fifth_st3_2.'" ,
	"Shipping_Time5_3_3": "'.$fifth_st3_3.'" ,
	"Shipping_Fee5_3_1": "'.$fifth_sf3_1.'" ,
	"Shipping_Fee5_3_2": "'.$fifth_sf3_2.'" ,
	"Shipping_Fee5_3_3": "'.$fifth_sf3_3.'" ,





"Country6_1": "'.$sixth_country_1.'" ,
	"Country6_2": "'.$sixth_country_2.'" ,
	"Country6_3": "'.$sixth_country_3.'" ,
	"Product_Image6": "'.$sixth_product_image1.'" ,
	"Variant_6": "'.$sixth_var_1.'" ,

	"Current_Price6": "'.$sixth_curr_prc_1.'" ,
	"Our_Price_6": "'.$sixth_our_price_1.'" ,
	"VAT_6": "'.$sixth_vat_1.'" ,
	"Note_6": "'.$sixth_note_1.'" ,
	"Link_6": "'.$pl_6.'" ,
	
	"Shipping_Method6_1_1": "'.$sixth_s1_1.'" ,
	"Shipping_Method6_1_2": "'.$sixth_s1_2.'" ,
	"Shipping_Method6_1_3": "'.$sixth_s1_3.'" ,
	"Shipping_Time6_1_1": "'.$sixth_st1_1.'" ,
	"Shipping_Time6_1_2": "'.$sixth_st1_2.'" ,
	"Shipping_Time6_1_3": "'.$sixth_st1_3.'" ,
	"Shipping_Fee6_1_1": "'.$sixth_sf1_1.'" ,
	"Shipping_Fee6_1_2": "'.$sixth_sf1_2.'" ,
	"Shipping_Fee6_1_3": "'.$sixth_sf1_3.'" ,
	"Shipping_Method6_2_1": "'.$sixth_s2_1.'" ,
	"Shipping_Method6_2_2": "'.$sixth_s2_2.'" ,
	"Shipping_Method6_2_3": "'.$sixth_s2_3.'" ,
	"Shipping_Time6_2_1": "'.$sixth_st2_1.'" ,
	"Shipping_Time6_2_2": "'.$sixth_st2_2.'" ,
	"Shipping_Time6_2_3": "'.$sixth_st2_3.'" ,
	"Shipping_Fee6_2_1": "'.$sixth_sf2_1.'" ,
	"Shipping_Fee6_2_2": "'.$sixth_sf2_2.'" ,
	"Shipping_Fee6_2_3": "'.$sixth_sf2_3.'" ,
	"Shipping_Method6_3_1": "'.$sixth_s3_1.'" ,
	"Shipping_Method6_3_2": "'.$sixth_s3_2.'" ,
	"Shipping_Method6_3_3": "'.$sixth_s3_3.'" ,
	"Shipping_Time6_3_1": "'.$sixth_st3_1.'" ,
	"Shipping_Time6_3_2": "'.$sixth_st3_2.'" ,
	"Shipping_Time6_3_3": "'.$sixth_st3_3.'" ,
	"Shipping_Fee6_3_1": "'.$sixth_sf3_1.'" ,
	"Shipping_Fee6_3_2": "'.$sixth_sf3_2.'" ,
	"Shipping_Fee6_3_3": "'.$sixth_sf3_3.'" 





}}


]}';
 
// Initialise new cURL session
$ch = curl_init('https://docs.getgrist.com/api/docs/sFgrq6JVEmRhUcjJdJmzCm/tables/All_Quotes/records');

// Return result of POST request
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Get information about last transfer
curl_setopt($ch, CURLINFO_HEADER_OUT, true);

// Use POST request
curl_setopt($ch, CURLOPT_POST, true);

// Set payload for POST request
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
 
// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer 96c63a4955c4cbd4224a0cb1640c593d3bccdf46',
    'Content-Length: ' . strlen($payload))
);
 
// Execute a cURL session
$result = curl_exec($ch);
 //print_r($result);
// Close cURL session
curl_close($ch);






	
	
	
	?>
	
	<div class="alert alert-success" role="alert">
  Record added successfully
</div>
	
	<?php
	
    
    
}














$names = "";
$sdr = "";

 $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, 'https://docs.getgrist.com/api/docs/sFgrq6JVEmRhUcjJdJmzCm/tables/CRM/records');
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curlSession, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer 96c63a4955c4cbd4224a0cb1640c593d3bccdf46',
));

    $jsonData = json_decode(curl_exec($curlSession), true);
    curl_close($curlSession);

    //print_r($jsonData['records']);
//echo $jsonData['records'][0]['Name'];
foreach( $jsonData['records'] as $data )
{
    
    if( !empty( $data['fields']['Email'] ) )
    {
    $names .= "<option data-value='". $data['id']."'>". $data['fields']['Email']."</option>";
    }

}











$curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, 'https://docs.getgrist.com/api/docs/sFgrq6JVEmRhUcjJdJmzCm/tables/SDR/records');
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curlSession, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer 96c63a4955c4cbd4224a0cb1640c593d3bccdf46',
));

    $jsonData = json_decode(curl_exec($curlSession), true);
    curl_close($curlSession);

    //print_r($jsonData['records']);
//echo $jsonData['records'][0]['Name'];
foreach( $jsonData['records'] as $data )
{
     if( !empty( $data['fields']['sdr'] ) )
    {
    $sdr .= "<option value='". $data['fields']['sdr']."'>". $data['fields']['sdr']."</option>";
}

}







//Get countries



 $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, 'https://docs.getgrist.com/api/docs/sFgrq6JVEmRhUcjJdJmzCm/tables/Countries/records');
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curlSession, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer 96c63a4955c4cbd4224a0cb1640c593d3bccdf46',
));

    $jsonData = json_decode(curl_exec($curlSession), true);
    curl_close($curlSession);

    //print_r($jsonData['records']);
//echo $jsonData['records'][0]['Name'];
foreach( $jsonData['records'] as $data )
{
    
   
    $country_names .= "<option value='". $data['fields']['country_name']."'>". $data['fields']['country_name']."</option>";
    
   // echo $data['fields']['country_name'];
    
    
    

}






?>








<form method="post" action="" enctype="multipart/form-data">
    
    


 
   <div class="table-responsive">

 <table class="table">
 <tbody>
  <!--<tr class="title_row">
   <td scope="col" colspan="7" class="title"></td>
   </tr> -->
   
   <tr class="second_row">
   <td scope="col" class="">Email <br><br>  <input list="names" type="text" name="name" id="name" required />
   
   
   <datalist id="names">
  <?php echo $names; ?>
 
</datalist>

<input type="hidden" name="selected_name" id="selected_name" value="" />
   
   
   
   </td>
   <td scope="col" class="" colspan="1">Targeted Countries &amp; Shipping time <br><br> <input type="text" name="shipping" id="shipping" required /></td>
   <td scope="col" class="">Monthly Orders <br><br /> <input type="text" name="orders" id="orders" required /></td>
   <td scope="col" class="">Quoting Person <br><br> <input type="text" name="qp" id="qp"  disabled /></td>
   <td scope="col" class="">SDR <br><br> <input list="sdr_values" type="text" name="sdr" id="sdr" required />
   
    <datalist id="sdr_values">
  <?php echo $sdr; ?>
 
</datalist>
   
   
   
   </td>
   <td scope="col" class="">Date <br><br> <input type="date" name="date" id="date" required /></td>


   
   </tr>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <tr class="r1" id="first-prod" style="display: table-row;">
   <td scope="col"> <b>Image 1</b>  <br> <input type="file" name="product_image1" id="product_image1" required /></td>
      <td scope="col" colspan="2"> 


<div class="row mb-8">
  <div class="column"> <b>Variant 1</b>  <br> <input class="less_width" type="text" name="var_1" id="var_1" required /> <br /> <br /> <b> Product Link </b> <br>
 <input type="text" name="pl1" id="pl1" class="less_width" required />  </div>
 <div class="column"> <b>Current Price 1</b> <br> <input class="less_width" type="text" name="curr_prc_1" id="curr_prc_1" required /> <br /> <br /> <b> Note </b> <br>
 <input type="text" name="note_1" id="note_1" class="less_width" required /> </div>
 <div class="column"> <b>Our Price</b> <br><input class="less_width" type="text" name="our_price_1" id="our_price_1"  disabled />  <br> <br> <b>VAT</b> <br> <input class="less_width" type="text" name="vat_1" id="vat_1"  disabled />  </div>


</div>



	   </td>
	  
	  
      <td scope="col" colspan="5"> 
	  
	  
	  
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="country_1" id="country_1" required />  <datalist id="country_list">
  <?php echo $country_names; ?>
 
</datalist> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="s1_1" id="s1_1"  disabled /> <br> <input type="text" name="s1_2" id="s1_2"  disabled /> <br> <input type="text" name="s1_3" id="s1_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="st1_1" id="st1_1"  disabled />  <br> <input type="text" name="st1_2" id="st1_1"  disabled />  <br> <input type="text" name="st1_3" id="st1_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="sf1_1" id="sf1_1"  disabled />  <br> <input type="text" name="sf1_2" id="sf1_2"  disabled /> <br> <input type="text" name="sf1_3" id="sf1_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="country_2" id="country_2" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="s2_1" id="s2_1"  disabled /> <br> <input type="text" name="s2_2" id="s2_2"  disabled /> <br> <input type="text" name="s2_3" id="s2_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="st2_1" id="st2_1"  disabled />  <br> <input type="text" name="st2_2" id="st2_2"  disabled />  <br> <input type="text" name="st2_3" id="st2_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="sf2_1" id="sf2_1"  disabled />  <br> <input type="text" name="sf2_2" id="sf2_2"  disabled /> <br> <input type="text" name="sf2_3" id="sf2_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="country_3" id="country_3" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="s3_1" id="s3_1"  disabled /> <br> <input type="text" name="s3_2" id="s3_2"  disabled /> <br> <input type="text" name="s3_3" id="s3_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="st3_1" id="st3_1"  disabled />  <br> <input type="text" name="st3_2" id="st3_2"  disabled />  <br> <input type="text" name="st3_3" id="st3_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="sf3_1" id="sf3_1"  disabled />  <br> <input type="text" name="sf3_2" id="sf3_2"  disabled /> <br> <input type="text" name="sf3_3" id="sf3_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	 </td>
      
   </tr>
   
   
   
   
   
   
   
   
   
   <!--  Second Product row  -->
   
   
   
   
   
   
   
   
   
   
   
   
      <tr class="r1" id="second-prod" style="display: table-row;">
   <td scope="col"><b>Image 2</b>  <br> <input type="file" name="second_product_image1" id="second_product_image1" /></td>
      <td scope="col" colspan="2"> 


<div class="row mb-8">
  <div class="column"> <b>Variant 2</b>  <br> <input class="less_width" type="text" name="second_var_1" id="second_var_1" />  <br /> <br /> <b> Product Link </b> <br>
 <input type="text" name="pl2" id="pl2" class="less_width" />  </div>
 <div class="column"> <b>Current Price 2</b> <br> <input class="less_width" type="text" name="second_curr_prc_1" id="second_curr_prc_1" /> <br /> <br /> <b> Note </b> <br>
 <input type="text" name="second_note_1" id="second_note_1" class="less_width" />  </div>
 <div class="column"> <b>Our Price</b> <br><input class="less_width" type="text" name="second_our_price_1" id="second_our_price_1"  disabled />  <br> <br> <b>VAT</b> <br> <input class="less_width" type="text" name="second_vat_1" id="second_vat_1"  disabled />  </div>
</div>


	   </td>
	  
	  
      <td scope="col" colspan="5"> 
	  
	  
	  
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="second_country_1" id="second_country_1" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="second_s1_1" id="second_s1_1"  disabled /> <br> <input type="text" name="second_s1_2" id="second_s1_2"  disabled /> <br> <input type="text" name="second_s1_3" id="second_s1_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="second_st1_1" id="second_st1_1"  disabled />  <br> <input type="text" name="second_st1_2" id="second_st1_2" disabled  />  <br> <input type="text" name="second_st1_3" id="second_st1_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="second_sf1_1" id="second_sf1_1"  disabled />  <br> <input type="text" name="second_sf1_2" id="second_sf1_2"  disabled /> <br> <input type="text" name="second_sf1_3" id="second_sf1_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="second_country_2" id="second_country_2" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="second_s2_1" id="second_s2_1"  disabled /> <br> <input type="text" name="second_s2_2" id="second_s2_2"  disabled /> <br> <input type="text" name="second_s2_3" id="second_s2_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="second_st2_1" id="second_st2_1"  disabled />  <br> <input type="text" name="second_st2_2" id="second_st2_2"  disabled />  <br> <input type="text" name="second_st2_3" id="second_st2_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="second_sf2_1" id="second_sf2_1"  disabled />  <br> <input type="text" name="second_sf2_2" id="second_sf2_2"  disabled /> <br> <input type="text" name="second_sf2_3" id="second_sf2_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="second_country_3" id="second_country_3" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="second_s3_1" id="second_s3_1"  disabled /> <br> <input type="text" name="second_s3_2" id="second_s3_2"  disabled /> <br> <input type="text" name="second_s3_3" id="second_s3_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="second_st3_1" id="second_st3_1"  disabled />  <br> <input type="text" name="second_st3_2" id="second_st3_2"  disabled />  <br> <input type="text" name="second_st3_3" id="second_st3_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="second_sf3_1" id="second_sf3_1"  disabled />  <br> <input type="text" name="second_sf3_2" id="second_sf3_2"  disabled /> <br> <input type="text" name="second_sf3_3" id="second_sf3_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	 </td>
      
   </tr>
   
   
   
   
   
   
   
   
   
   
   
   
    <!--  Third Product row  -->
   
   
   
   
   
   
   
   
   
   
   
   
      <tr class="r1" id="third-prod">
   <td scope="col"> <b>Image 3</b>  <br> <input type="file" name="third_product_image1" id="third_product_image1" /></td>
      <td scope="col" colspan="2"> 


<div class="row mb-8">
  <div class="column"> <b>Variant 3</b>  <br> <input class="less_width" type="text" name="third_var_1" id="third_var_1" />  <br /> <br /> <b> Product Link </b> <br>
 <input type="text" name="pl3" id="pl3" class="less_width" />  </div>
 <div class="column"> <b>Current Price 3</b> <br> <input class="less_width" type="text" name="third_curr_prc_1" id="third_curr_prc_1" /> <br /> <br /> <b> Note </b> <br>
<input type="text" name="third_note_1" id="third_note_1" class="less_width" />  </div>
 <div class="column"> <b>Our Price</b> <br><input class="less_width" type="text" name="third_our_price_1" id="third_our_price_1"  disabled />  <br> <br> <b>VAT</b> <br> <input class="less_width" type="text" name="third_vat_1" id="third_vat_1"  disabled />  </div>
</div>


	   </td>
	  
	  
      <td scope="col" colspan="5"> 
	  
	  
	  
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="third_country_1" id="third_country_1" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="third_s1_1" id="third_s1_1"  disabled /> <br> <input type="text" name="third_s1_2" id="third_s1_2" disabled  /> <br> <input type="text" name="third_s1_3" id="third_s1_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="third_st1_1" id="third_st1_1"  disabled />  <br> <input type="text" name="third_st1_2" id="third_st1_2"  disabled />  <br> <input type="text" name="third_st1_3" id="third_st1_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="third_sf1_1" id="third_sf1_1"  disabled />  <br> <input type="text" name="third_sf1_2" id="third_sf1_2"  disabled /> <br> <input type="text" name="third_sf1_3" id="third_sf1_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="third_country_2" id="third_country_2"  /> </td>
	  <td scope="col"><b>Shipping Method</b> <br><input type="text" name="third_s2_1" id="third_s2_1"  disabled /> <br> <input type="text" name="third_s2_2" id="third_s2_2"  disabled /> <br> <input type="text" name="third_s2_3" id="third_s2_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="third_st2_1" id="third_st2_1"  disabled />  <br> <input type="text" name="third_st2_2" id="third_st2_2"  disabled />  <br> <input type="text" name="third_st2_3" id="third_st2_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="third_sf2_1" id="third_sf2_1"  disabled />  <br> <input type="text" name="third_sf2_2" id="third_sf2_2"  disabled /> <br> <input type="text" name="third_sf2_3" id="third_sf2_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="third_country_3" id="third_country_3" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="third_s3_1" id="third_s3_1"  disabled /> <br> <input type="text" name="third_s3_2" id="third_s3_2"  disabled /> <br> <input type="text" name="third_s3_3" id="third_s3_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="third_st3_1" id="third_st3_1"  disabled /> <br> <input type="text" name="third_st3_2" id="third_st3_2"  disabled />  <br> <input type="text" name="third_st3_3" id="third_st3_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="third_sf3_1" id="third_sf3_1"  disabled />  <br> <input type="text" name="third_sf3_2" id="third_sf3_2"  disabled /> <br> <input type="text" name="third_sf3_3" id="third_sf3_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	 </td>
      
   </tr>
   
   
   
   
   
   
   
   
   
   
   
   
    <!--  Fourth Product row  -->
   
   
   
   
   
   
   
   
   
   
   
   
      <tr class="r1" id="fourth-prod">
   <td scope="col"><b>Image 4</b>  <br> <input type="file" name="fourth_product_image1" id="fourth_product_image1" /></td>
      <td scope="col" colspan="2"> 


<div class="row mb-8">
  <div class="column"> <b>Variant 4</b>  <br> <input class="less_width" type="text" name="fourth_var_1" id="fourth_var_1" />  <br /> <br /> <b> Product Link </b> <br>
 <input type="text" name="pl4" id="pl4" class="less_width" />  </div>
 <div class="column"> <b>Current Price 4</b> <br> <input class="less_width" type="text" name="fourth_curr_prc_1" id="fourth_curr_prc_1" /> <br /> <br /> <b> Note </b> <br>
<input type="text" name="fourth_note_1" id="fourth_note_1" class="less_width" /> </div>
 <div class="column"> <b>Our Price</b> <br><input class="less_width" type="text" name="fourth_our_price_1" id="fourth_our_price_1"  disabled />  <br> <br> <b>VAT</b> <br> <input class="less_width" type="text" name="fourth_vat_1" id="fourth_vat_1" disabled />  </div>
</div>


	   </td>
	  
	  
      <td scope="col" colspan="5"> 
	  
	  
	  
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="fourth_country_1" id="fourth_country_1" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="fourth_s1_1" id="fourth_s1_1"  disabled /> <br> <input type="text" name="fourth_s1_2" id="fourth_s1_2"  disabled /> <br> <input type="text" name="fourth_s1_3" id="fourth_s1_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br><input type="text" name="fourth_st1_1" id="fourth_st1_1"  disabled />  <br><input type="text" name="fourth_st1_2" id="fourth_st1_2"  disabled />  <br><input type="text" name="fourth_st1_3" id="fourth_st1_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="fourth_sf1_1" id="fourth_sf1_1"  disabled />  <br> <input type="text" name="fourth_sf1_2" id="fourth_sf1_2"  disabled /> <br> <input type="text" name="fourth_sf1_3" id="fourth_sf1_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="fourth_country_2" id="fourth_country_2" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="fourth_s2_1" id="fourth_s2_1"  disabled /> <br> <input type="text" name="fourth_s2_2" id="fourth_s2_2"  disabled /> <br> <input type="text" name="fourth_s2_3" id="fourth_s2_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="fourth_st2_1" id="fourth_st2_1"  disabled />  <br><input type="text" name="fourth_st2_2" id="fourth_st2_2"  disabled />  <br><input type="text" name="fourth_st2_3" id="fourth_st2_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="fourth_sf2_1" id="fourth_sf2_1"  disabled />  <br> <input type="text" name="fourth_sf2_2" id="fourth_sf2_2"  disabled /> <br> <input type="text" name="fourth_sf2_3" id="fourth_sf2_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="fourth_country_3" id="fourth_country_3" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="fourth_s3_1" id="fourth_s3_1"  disabled /> <br> <input type="text" name="fourth_s3_2" id="fourth_s3_2"  disabled /> <br> <input type="text" name="fourth_s3_3" id="fourth_s3_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="fourth_st3_1" id="fourth_st3_1"  disabled />  <br> <input type="text" name="fourth_st3_2" id="fourth_st3_2"  disabled />  <br> <input type="text" name="fourth_st3_3" id="fourth_st3_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="fourth_sf3_1" id="fourth_sf3_1"  disabled />  <br> <input type="text" name="fourth_sf3_2" id="fourth_sf3_2"  disabled /> <br> <input type="text" name="fourth_sf3_3" id="fourth_sf3_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	 </td>
      
   </tr>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    
   
   
   
   
   
   
   
   
    <!--  Fifth Product row  -->
   
   
   
   
   
   
   
   
   
   
   
   
      <tr class="r1" id="fifth-prod">
   <td scope="col"><b>Image 5</b>  <br> <input type="file" name="fifth_product_image1" id="fifth_product_image1" /></td>
      <td scope="col" colspan="2"> 


<div class="row mb-8">
  <div class="column"> <b>Variant 5</b>  <br> <input class="less_width" type="text" name="fifth_var_1" id="fifth_var_1" />  <br /> <br /> <b> Product Link </b> <br>
 <input type="text" name="pl5" id="pl5" class="less_width" />  </div>
 <div class="column"> <b>Current Price 5</b> <br> <input class="less_width" type="text" name="fifth_curr_prc_1" id="fifth_curr_prc_1" /> <br /> <br /> <b> Note </b> <br>
<input type="text" name="fifth_note_1" id="fifth_note_1" class="less_width" /> </div>
 <div class="column"> <b>Our Price</b> <br><input class="less_width" type="text" name="fifth_our_price_1" id="fifth_our_price_1"  disabled />  <br> <br> <b>VAT</b> <br> <input class="less_width" type="text" name="fifth_vat_1" id="fifth_vat_1" disabled />  </div>
</div>



	   </td>
	  
	  
      <td scope="col" colspan="5"> 
	  
	  
	  
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="fifth_country_1" id="fifth_country_1" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="fifth_s1_1" id="fifth_s1_1"  disabled /> <br> <input type="text" name="fifth_s1_2" id="fifth_s1_2"  disabled /> <br> <input type="text" name="fifth_s1_3" id="fifth_s1_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br><input type="text" name="fifth_st1_1" id="fifth_st1_1"  disabled />  <br><input type="text" name="fifth_st1_2" id="fifth_st1_2"  disabled />  <br><input type="text" name="fifth_st1_3" id="fifth_st1_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="fifth_sf1_1" id="fifth_sf1_1"  disabled />  <br> <input type="text" name="fifth_sf1_2" id="fifth_sf1_2"  disabled /> <br> <input type="text" name="fifth_sf1_3" id="fifth_sf1_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="fifth_country_2" id="fifth_country_2" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="fifth_s2_1" id="fifth_s2_1"  disabled /> <br> <input type="text" name="fifth_s2_2" id="fifth_s2_2"  disabled /> <br> <input type="text" name="fifth_s2_3" id="fifth_s2_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="fifth_st2_1" id="fifth_st2_1"  disabled />  <br><input type="text" name="fifth_st2_2" id="fifth_st2_2"  disabled />  <br><input type="text" name="fifth_st2_3" id="fifth_st2_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="fifth_sf2_1" id="fifth_sf2_1"  disabled />  <br> <input type="text" name="fifth_sf2_2" id="fifth_sf2_2"  disabled /> <br> <input type="text" name="fifth_sf2_3" id="fifth_sf2_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="fifth_country_3" id="fifth_country_3" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="fifth_s3_1" id="fifth_s3_1"  disabled /> <br> <input type="text" name="fifth_s3_2" id="fifth_s3_2"  disabled /> <br> <input type="text" name="fifth_s3_3" id="fifth_s3_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="fifth_st3_1" id="fifth_st3_1"  disabled />  <br> <input type="text" name="fifth_st3_2" id="fifth_st3_2"  disabled />  <br> <input type="text" name="fifth_st3_3" id="fifth_st3_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="fifth_sf3_1" id="fifth_sf3_1"  disabled />  <br> <input type="text" name="fifth_sf3_2" id="fifth_sf3_2"  disabled /> <br> <input type="text" name="fifth_sf3_3" id="fifth_sf3_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	 </td>
      
   </tr>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    
   
   
   
   
   
   
   
   
    <!--  Sixth Product row  -->
   
   
   
   
   
   
   
   
   
   
   
   
      <tr class="r1" id="sixth-prod">
   <td scope="col"><b>Image 6</b>  <br> <input type="file" name="sixth_product_image1" id="sixth_product_image1" /></td>
      <td scope="col" colspan="2"> 


<div class="row mb-8">
  <div class="column"> <b>Variant 6</b>  <br> <input class="less_width" type="text" name="sixth_var_1" id="sixth_var_1" />  <br /> <br /> <b> Product Link </b> <br>
 <input type="text" name="pl6" id="pl6" class="less_width" />  </div>
 <div class="column"> <b>Current Price 6</b> <br> <input class="less_width" type="text" name="sixth_curr_prc_1" id="sixth_curr_prc_1" /> <br /> <br /> <b> Note </b> <br>
<input type="text" name="sixth_note_1" id="sixth_note_1" class="less_width" /> </div>
 <div class="column"> <b>Our Price</b> <br><input class="less_width" type="text" name="sixth_our_price_1" id="sixth_our_price_1"  disabled />  <br> <br> <b>VAT</b> <br> <input class="less_width" type="text" name="sixth_vat_1" id="sixth_vat_1" disabled />  </div>
</div>


	   </td>
	  
	  
      <td scope="col" colspan="5"> 
	  
	  
	  
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="sixth_country_1" id="sixth_country_1" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="sixth_s1_1" id="sixth_s1_1"  disabled /> <br> <input type="text" name="sixth_s1_2" id="sixth_s1_2"  disabled /> <br> <input type="text" name="sixth_s1_3" id="sixth_s1_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br><input type="text" name="sixth_st1_1" id="sixth_st1_1"  disabled />  <br><input type="text" name="sixth_st1_2" id="sixth_st1_2"  disabled />  <br><input type="text" name="sixth_st1_3" id="sixth_st1_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="sixth_sf1_1" id="sixth_sf1_1"  disabled />  <br> <input type="text" name="sixth_sf1_2" id="sixth_sf1_2"  disabled /> <br> <input type="text" name="sixth_sf1_3" id="sixth_sf1_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="sixth_country_2" id="sixth_country_2" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="sixth_s2_1" id="sixth_s2_1"  disabled /> <br> <input type="text" name="sixth_s2_2" id="sixth_s2_2"  disabled /> <br> <input type="text" name="sixth_s2_3" id="sixth_s2_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="sixth_st2_1" id="sixth_st2_1"  disabled />  <br><input type="text" name="sixth_st2_2" id="sixth_st2_2"  disabled />  <br><input type="text" name="sixth_st2_3" id="sixth_st2_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="sixth_sf2_1" id="sixth_sf2_1"  disabled />  <br> <input type="text" name="sixth_sf2_2" id="sixth_sf2_2"  disabled /> <br> <input type="text" name="sixth_sf2_3" id="sixth_sf2_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="sixth_country_3" id="sixth_country_3" /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="sixth_s3_1" id="sixth_s3_1"  disabled /> <br> <input type="text" name="sixth_s3_2" id="sixth_s3_2"  disabled /> <br> <input type="text" name="sixth_s3_3" id="sixth_s3_3"  disabled />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> <input type="text" name="sixth_st3_1" id="sixth_st3_1"  disabled />  <br> <input type="text" name="sixth_st3_2" id="sixth_st3_2"  disabled />  <br> <input type="text" name="sixth_st3_3" id="sixth_st3_3"  disabled />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> <input type="text" name="sixth_sf3_1" id="sixth_sf3_1"  disabled />  <br> <input type="text" name="sixth_sf3_2" id="sixth_sf3_2"  disabled /> <br> <input type="text" name="sixth_sf3_3" id="sixth_sf3_3"  disabled /> </td>
	  </tr>
	  </tbody></table>
	  
	 </td>
      
   </tr>
   
   
   
   <tr>
       
       <td colspan="6"><button type="submit">Save</button>
</td>
       
   </tr>
   
   
    
	
   
  </tbody>
</table>
</div>





</form>







<script>
    
    
    $('#name').on('change', function() {
 // alert( $("#names option:selected").attr('data-value') );
  
  var val = $('#name').val()
    var vl = $('#names option').filter(function() {
        return this.value == val;
    }).data('value');
    
    $('#selected_name').val(vl);
 
 

  
});
    
    
</script>






</body></html>