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


#select_uuid { margin: 0 auto;
    display: block;
    width: 303px;
    height: 49px;
    text-align: center;
    font-size: 14px;
    margin-top: 5px;
    border-radius: 2px;
    border: 4px solid #e3e0fe; }
    
    input::-webkit-calendar-picker-indicator {
              opacity: 100;
           }
           
           
    #loading { display: none;color: white;     color: white;
    margin: 0 auto;
    text-align: center;
    margin-top: 12px;
    font-size: 23px; } 
    
    
    .pimg { width: 80px; }
    
    
    .select-heading { text-align: center;
    color: white;
    font-size: 21px; }


</style>



<?php




if( $_POST )
{
    
   
	$qp = $_POST['qp'];

	
	//product 1
	


	$our_price_1 = $_POST['our_price_1'];
	$vat_1 = $_POST['vat_1'];
   
   
	

	$s1_1 = $_POST['s1_1'];
	$s1_2 = $_POST['s1_2'];
	$s1_3 = $_POST['s1_3'];
	$st1_1 = $_POST['st1_1'];
	$st1_2 = $_POST['st1_2'];
	$st1_3 = $_POST['st1_3'];
	$sf1_1 = $_POST['sf1_1'];
	$sf1_2 = $_POST['sf1_2'];
	$sf1_3 = $_POST['sf1_3'];
	

	$s2_1 = $_POST['s2_1'];
	$s2_2 = $_POST['s2_2'];
	$s2_3 = $_POST['s2_3'];
	$st2_1 = $_POST['st2_1'];
	$st2_2 = $_POST['st2_2'];
	$st2_3 = $_POST['st2_3'];
	$sf2_1 = $_POST['sf2_1'];
	$sf2_2 = $_POST['sf2_2'];
	$sf2_3 = $_POST['sf2_3'];
	

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
	


	$second_our_price_1 = $_POST['second_our_price_1'];
	$second_vat_1 = $_POST['second_vat_1'];
    
    
	

	$second_s1_1 = $_POST['second_s1_1'];
	$second_s1_2 = $_POST['second_s1_2'];
	$second_s1_3 = $_POST['second_s1_3'];
	$second_st1_1 = $_POST['second_st1_1'];
	$second_st1_2 = $_POST['second_st1_2'];
	$second_st1_3 = $_POST['second_st1_3'];
	$second_sf1_1 = $_POST['second_sf1_1'];
	$second_sf1_2 = $_POST['second_sf1_2'];
	$second_sf1_3 = $_POST['second_sf1_3'];
	

	$second_s2_1 = $_POST['second_s2_1'];
	$second_s2_2 = $_POST['second_s2_2'];
	$second_s2_3 = $_POST['second_s2_3'];
	$second_st2_1 = $_POST['second_st2_1'];
	$second_st2_2 = $_POST['second_st2_2'];
	$second_st2_3 = $_POST['second_st2_3'];
	$second_sf2_1 = $_POST['second_sf2_1'];
	$second_sf2_2 = $_POST['second_sf2_2'];
	$second_sf2_3 = $_POST['second_sf2_3'];
	

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
	


	$third_our_price_1 = $_POST['third_our_price_1'];
	$third_vat_1 = $_POST['third_vat_1'];
    
    
	

	$third_s1_1 = $_POST['third_s1_1'];
	$third_s1_2 = $_POST['third_s1_2'];
	$third_s1_3 = $_POST['third_s1_3'];
	$third_st1_1 = $_POST['third_st1_1'];
	$third_st1_2 = $_POST['third_st1_2'];
	$third_st1_3 = $_POST['third_st1_3'];
	$third_sf1_1 = $_POST['third_sf1_1'];
	$third_sf1_2 = $_POST['third_sf1_2'];
	$third_sf1_3 = $_POST['third_sf1_3'];
	

	$third_s2_1 = $_POST['third_s2_1'];
	$third_s2_2 = $_POST['third_s2_2'];
	$third_s2_3 = $_POST['third_s2_3'];
	$third_st2_1 = $_POST['third_st2_1'];
	$third_st2_2 = $_POST['third_st2_2'];
	$third_st2_3 = $_POST['third_st2_3'];
	$third_sf2_1 = $_POST['third_sf2_1'];
	$third_sf2_2 = $_POST['third_sf2_2'];
	$third_sf2_3 = $_POST['third_sf2_3'];
	

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
	


	$fourth_our_price_1 = $_POST['fourth_our_price_1'];
	$fourth_vat_1 = $_POST['fourth_vat_1'];
   
   
	
	$fourth_s1_1 = $_POST['fourth_s1_1'];
	$fourth_s1_2 = $_POST['fourth_s1_2'];
	$fourth_s1_3 = $_POST['fourth_s1_3'];
	$fourth_st1_1 = $_POST['fourth_st1_1'];
	$fourth_st1_2 = $_POST['fourth_st1_2'];
	$fourth_st1_3 = $_POST['fourth_st1_3'];
	$fourth_sf1_1 = $_POST['fourth_sf1_1'];
	$fourth_sf1_2 = $_POST['fourth_sf1_2'];
	$fourth_sf1_3 = $_POST['fourth_sf1_3'];
	
	$fourth_s2_1 = $_POST['fourth_s2_1'];
	$fourth_s2_2 = $_POST['fourth_s2_2'];
	$fourth_s2_3 = $_POST['fourth_s2_3'];
	$fourth_st2_1 = $_POST['fourth_st2_1'];
	$fourth_st2_2 = $_POST['fourth_st2_2'];
	$fourth_st2_3 = $_POST['fourth_st2_3'];
	$fourth_sf2_1 = $_POST['fourth_sf2_1'];
	$fourth_sf2_2 = $_POST['fourth_sf2_2'];
	$fourth_sf2_3 = $_POST['fourth_sf2_3'];
	
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
	

	$fifth_our_price_1 = $_POST['fifth_our_price_1'];
	$fifth_vat_1 = $_POST['fifth_vat_1'];
    
	

	$fifth_s1_1 = $_POST['fifth_s1_1'];
	$fifth_s1_2 = $_POST['fifth_s1_2'];
	$fifth_s1_3 = $_POST['fifth_s1_3'];
	$fifth_st1_1 = $_POST['fifth_st1_1'];
	$fifth_st1_2 = $_POST['fifth_st1_2'];
	$fifth_st1_3 = $_POST['fifth_st1_3'];
	$fifth_sf1_1 = $_POST['fifth_sf1_1'];
	$fifth_sf1_2 = $_POST['fifth_sf1_2'];
	$fifth_sf1_3 = $_POST['fifth_sf1_3'];
	

	$fifth_s2_1 = $_POST['fifth_s2_1'];
	$fifth_s2_2 = $_POST['fifth_s2_2'];
	$fifth_s2_3 = $_POST['fifth_s2_3'];
	$fifth_st2_1 = $_POST['fifth_st2_1'];
	$fifth_st2_2 = $_POST['fifth_st2_2'];
	$fifth_st2_3 = $_POST['fifth_st2_3'];
	$fifth_sf2_1 = $_POST['fifth_sf2_1'];
	$fifth_sf2_2 = $_POST['fifth_sf2_2'];
	$fifth_sf2_3 = $_POST['fifth_sf2_3'];
	

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
	


	$sixth_our_price_1 = $_POST['sixth_our_price_1'];
	$sixth_vat_1 = $_POST['sixth_vat_1'];
   
   
	

	$sixth_s1_1 = $_POST['sixth_s1_1'];
	$sixth_s1_2 = $_POST['sixth_s1_2'];
	$sixth_s1_3 = $_POST['sixth_s1_3'];
	$sixth_st1_1 = $_POST['sixth_st1_1'];
	$sixth_st1_2 = $_POST['sixth_st1_2'];
	$sixth_st1_3 = $_POST['sixth_st1_3'];
	$sixth_sf1_1 = $_POST['sixth_sf1_1'];
	$sixth_sf1_2 = $_POST['sixth_sf1_2'];
	$sixth_sf1_3 = $_POST['sixth_sf1_3'];
	

	$sixth_s2_1 = $_POST['sixth_s2_1'];
	$sixth_s2_2 = $_POST['sixth_s2_2'];
	$sixth_s2_3 = $_POST['sixth_s2_3'];
	$sixth_st2_1 = $_POST['sixth_st2_1'];
	$sixth_st2_2 = $_POST['sixth_st2_2'];
	$sixth_st2_3 = $_POST['sixth_st2_3'];
	$sixth_sf2_1 = $_POST['sixth_sf2_1'];
	$sixth_sf2_2 = $_POST['sixth_sf2_2'];
	$sixth_sf2_3 = $_POST['sixth_sf2_3'];
	

	$sixth_s3_1 = $_POST['sixth_s3_1'];
	$sixth_s3_2 = $_POST['sixth_s3_2'];
	$sixth_s3_3 = $_POST['sixth_s3_3'];
	$sixth_st3_1 = $_POST['sixth_st3_1'];
	$sixth_st3_2 = $_POST['sixth_st3_2'];
	$sixth_st3_3 = $_POST['sixth_st3_3'];
	$sixth_sf3_1 = $_POST['sixth_sf3_1'];
	$sixth_sf3_2 = $_POST['sixth_sf3_2'];
	$sixth_sf3_3 = $_POST['sixth_sf3_3'];
	
	$row_id = $_POST['row_id'];
	
	
	
//https://docs.getgrist.com/api/docs/7r6ZcK4NtJ5JQHaYX93DBi/tables/Before_Quotes/records
//96c63a4955c4cbd4224a0cb1640c593d3bccdf46

//echo $row_id;
// Convert the PHP array into a JSON format
$payload = '{"records": [



{

"id": '.$row_id.'  , 

"fields": {
	
	"Quoting_Person": "'.$qp.'" ,
	
	
	


	"Our_Price_1": "'.$our_price_1.'" ,
	"VAT_1": "'.$vat_1.'" ,

	
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
	
	
	
	

	"Our_Price_2": "'.$second_our_price_1.'" ,
	"VAT_2": "'.$second_vat_1.'" ,
	
	
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

	
	
	
	


	"Our_Price_3": "'.$third_our_price_1.'" ,
	"VAT_3": "'.$third_vat_1.'" ,

	
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



	
	
	


	"Our_Price_4": "'.$fourth_our_price_1.'" ,
	"VAT_4": "'.$fourth_vat_1.'" ,

	
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









	"Our_Price_5": "'.$fifth_our_price_1.'" ,
	"VAT_5": "'.$fifth_vat_1.'" ,
	
	
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







	"Our_Price_6": "'.$sixth_our_price_1.'" ,
	"VAT_6": "'.$sixth_vat_1.'" ,

	
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





} 
    

}

]}';
 
// Initialise new cURL session
$ch = curl_init('https://docs.getgrist.com/api/docs/sFgrq6JVEmRhUcjJdJmzCm/tables/All_Quotes/records');

// Return result of POST request
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Get information about last transfer
curl_setopt($ch, CURLINFO_HEADER_OUT, true);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');

// Use POST request

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
  Record updated successfully
</div>
	
	<?php
	
    
    
}














$uuids = "";
 $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, 'https://docs.getgrist.com/api/docs/sFgrq6JVEmRhUcjJdJmzCm/tables/All_Quotes/records');
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
    
    if( !empty( $data['fields']['UUID'] ) )
    {
    $uuids .= "<option data-value='". $data['fields']['UUID']."'>". $data['fields']['UUID']."</option>";
    }

}



//print_r($uuids);







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
    curl_setopt($curlSession, CURLOPT_URL, 'https://docs.getgrist.com/api/docs/7r6ZcK4NtJ5JQHaYX93DBi/tables/Countries/records');
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






<h4 class="select-heading"> Please select UUID </h4>
<input list="uuids" type="text" name="select_uuid" id="select_uuid" required />
   <datalist id="uuids">
  <?php echo $uuids; ?>
  
</datalist>



<div id="loading">Loading data...</div>




<form method="post" action="" id="form">

</form>






<script>
    
    
    $('#select_uuid').on('change', function() {
 // alert( $("#names option:selected").attr('data-value') );
  
  var val = $('#select_uuid').val()
    var vl = $('#uuids option').filter(function() {
        return this.value == val;
    }).data('value');
   
   if( vl == "" )
   {  }
   else
   {
   send_api_req(vl); 
}
 //alert(vl);
 

  
});




function send_api_req(vl)
{
    document.getElementById("form").innerHTML = "";
    document.getElementById("loading").style.display = "block";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        
        //alert(this.responseText);
         document.getElementById("form").innerHTML = this.responseText;
    document.getElementById("loading").style.display = "none";
        

    }
  };
  xhttp.open("GET", "ajax-get-data-from-api.php?uuid="+vl, true);
  xhttp.send();

    
    
}
    
    
</script>






</body></html>