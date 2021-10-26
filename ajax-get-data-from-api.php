<?php

$uuid = $_GET['uuid'];

$uuid = trim($uuid);

$curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, 'https://docs.getgrist.com/api/docs/sFgrq6JVEmRhUcjJdJmzCm/tables/All_Quotes/records?filter={"UUID":["'.$uuid.'"]}');
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

//print_r($uuids);








$curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, 'https://docs.getgrist.com/api/docs/sFgrq6JVEmRhUcjJdJmzCm/tables/Quoting_persons/records');
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
    
curl_setopt($curlSession, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer 96c63a4955c4cbd4224a0cb1640c593d3bccdf46',
));

    $jsonData2 = json_decode(curl_exec($curlSession), true);
    curl_close($curlSession);

    //print_r($jsonData2['records']);

foreach( $jsonData2['records'] as $data )
{
    
    if( !empty( $data['fields']['name'] ) )
    {
    $qps_name .= "<option>". $data['fields']['name']."</option>";
    }

}




?>










    
    
<input type="hidden" name="row_id" value="<?php echo $jsonData['records'][0]['id']; ?>" />

 
   <div class="table-responsive">

 <table class="table">
 <tbody>
  <!--<tr class="title_row">
   <td scope="col" colspan="7" class="title"></td>
   </tr> -->
   
   <tr class="second_row">
   <td scope="col" class="">Email <br><br>  <input type="text" name="name" id="name" value="<?php echo $jsonData['records'][0]['fields']['Email2']; ?>"  disabled  />
 

<input type="hidden" name="selected_name" id="selected_name" />
   
   
   
   </td>
   <td scope="col" class="" colspan="1">Targeted Countries &amp; Shipping time <br><br> <input type="text" name="shipping" id="shipping" value="<?php echo $jsonData['records'][0]['fields']['Target_Countries']; ?>"  disabled  /></td>
   <td scope="col" class="">Monthly Orders <br><br /> <input type="text" name="orders" id="orders" value="<?php echo $jsonData['records'][0]['fields']['Monthly_Orders']; ?>"  disabled  /></td>
   <td scope="col" class="">Quoting Person <br><br> <input value="<?php echo $jsonData['records'][0]['fields']['Quoting_Person']; ?>" name="qp" id="qp" list="qpnames" />
   
   <datalist id="qpnames">
   <?php echo $qps_name; ?>
   </datalist>
   
   </td>
   <td scope="col" class="">SDR <br><br> <input type="text" name="sdr" id="sdr" value="<?php echo $jsonData['records'][0]['fields']['SDR']; ?>"  disabled  />
   
  
   
   
   
   </td>
   <td scope="col" class="">Date <br><br> <input type="text" name="date" id="date" value="<?php echo date('m/d/Y', $jsonData['records'][0]['fields']['Date']); ?>"  disabled  /></td>


   
   </tr>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <tr class="r1" id="first-prod" style="display: table-row;">
   <td scope="col"> <b>Image 1</b>  <br>
   <?php if( $jsonData['records'][0]['fields']['Product_Image_1'] != "" ) { ?>
   <img src="<?php echo $jsonData['records'][0]['fields']['Product_Image_1']; ?>" class="pimg" id="pimg1" />
   <?php } else { ?>
   No image
   <?php } ?>
   </td>
      <td scope="col" colspan="2"> 


<div class="row mb-8">
  <div class="column"> <b>Variant 1</b>  <br> <input class="less_width" type="text" name="var_1" id="var_1" value="<?php echo $jsonData['records'][0]['fields']['Variant_1']; ?>"  disabled  /> <br /> <br /> <b> Product Link </b> <br>
 <input type="text" name="pl1" id="pl1" class="less_width" value="<?php echo $jsonData['records'][0]['fields']['Link_1']; ?>"  disabled  />  </div>
 <div class="column"> <b>Current Price 1</b> <br> <input class="less_width" type="text" name="curr_prc_1" id="curr_prc_1" value="<?php echo $jsonData['records'][0]['fields']['Current_Price_1']; ?>" disabled  /> <br /> <br /> <b> Note </b> <br>
 <input type="text" name="note_1" id="note_1" class="less_width" value="<?php echo $jsonData['records'][0]['fields']['Note_1']; ?>" disabled  /> </div>
 <div class="column"> <b>Our Price</b> <br><input class="less_width" type="text" name="our_price_1" id="our_price_1"  value="<?php echo $jsonData['records'][0]['fields']['Our_Price_1']; ?>"   />  <br> <br> <b>VAT</b> <br> <input class="less_width" type="text" name="vat_1" id="vat_1" value="<?php echo $jsonData['records'][0]['fields']['VAT_1']; ?>"   />  </div>


</div>



	   </td>
	  
	  
      <td scope="col" colspan="5"> 
	  
	  
	  
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="country_1" id="country_1" value="<?php echo $jsonData['records'][0]['fields']['Country1_1']; ?>"    disabled />   </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="s1_1" id="s1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method1_1']; ?>"   /> <br> <input type="text" name="s1_2" id="s1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method1_2']; ?>"   /> <br> <input type="text" name="s1_3" id="s1_3" value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method1_3']; ?>"  />   </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="st1_1" id="st1_1"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time1_1']; ?>"   />  <br> 
	  <input type="text" name="st1_2" id="st1_1"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time1_2']; ?>"   />  <br>
	  <input type="text" name="st1_3" id="st1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time1_3']; ?>"    />   </td>
	  
	  <td scope="col"> <b>Shipping Fee</b> <br>
	  <input type="text" name="sf1_1" id="sf1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee1_1']; ?>"   />  <br>
	  <input type="text" name="sf1_2" id="sf1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee1_2']; ?>" /> <br> 
	  <input type="text" name="sf1_3" id="sf1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee1_3']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="country_2" id="country_2"  value="<?php echo $jsonData['records'][0]['fields']['Country1_2']; ?>"  disabled  /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="s2_1" id="s2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method2_1_2']; ?>"    /> <br> <input type="text" name="s2_2" id="s2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method2_2_2']; ?>"    /> <br> <input type="text" name="s2_3" id="s2_3"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method2_3_2']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="st2_1" id="st2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time2_1']; ?>"    />  <br>
	  <input type="text" name="st2_2" id="st2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time2_2_2']; ?>"    />  <br> 
	  <input type="text" name="st2_3" id="st2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time2_3_2']; ?>"    />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br>
	  <input type="text" name="sf2_1" id="sf2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee2_1_2']; ?>"   />  <br> 
	  <input type="text" name="sf2_2" id="sf2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee2_2']; ?>"   /> <br> 
	  <input type="text" name="sf2_3" id="sf2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee2_3_2']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="country_3" id="country_3"  value="<?php echo $jsonData['records'][0]['fields']['Country1_3']; ?>" disabled  /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="s3_1" id="s3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method3_1_2']; ?>" /> <br> <input type="text" name="s3_2" id="s3_2"    value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method3_2_2']; ?>" /> <br> <input type="text" name="s3_3" id="s3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method3_3_2']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> 
	  <input type="text" name="st3_1" id="st3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time3_1_2']; ?>"    />  <br> 
	  <input type="text" name="st3_2" id="st3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time3_2_2']; ?>"    />  <br>
	  <input type="text" name="st3_3" id="st3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time3_3_2']; ?>"    />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br>
	  <input type="text" name="sf3_1" id="sf3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee3_1_2']; ?>"   />  <br>
	  <input type="text" name="sf3_2" id="sf3_2"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee3_2_2']; ?>"  /> <br> 
	  <input type="text" name="sf3_3" id="sf3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee3_3_2']; ?>" /> </td>
	  </tr>
	  </tbody></table>
	  
	 </td>
      
   </tr>
   
   
   
   
   
   
   
   
   
   <!--  Second Product row  -->
   
   
   
   
   
   
   
   
   
   
   
   
      <tr class="r1" id="second-prod" style="display: table-row;">
   <td scope="col"><b>Image 2</b>  <br> <img src="<?php echo $jsonData['records'][0]['fields']['Product_Image_2']; ?>" class="pimg" id="pimg2" /></td>
      <td scope="col" colspan="2"> 


<div class="row mb-8">
  <div class="column"> <b>Variant 2</b>  <br> <input class="less_width" type="text" name="second_var_1" id="second_var_1" value="<?php echo $jsonData['records'][0]['fields']['Variant_2']; ?>" disabled />  <br /> <br /> <b> Product Link </b> <br>
 <input type="text" name="pl2" id="pl2" class="less_width"  value="<?php echo $jsonData['records'][0]['fields']['Link_2']; ?>"  disabled />  </div>
 <div class="column"> <b>Current Price 2</b> <br> <input class="less_width" type="text" name="second_curr_prc_1" id="second_curr_prc_1"  value="<?php echo $jsonData['records'][0]['fields']['Current_Price_2']; ?>"  disabled /> <br /> <br /> <b> Note </b> <br>
 <input type="text" name="second_note_1" id="second_note_1" class="less_width"  value="<?php echo $jsonData['records'][0]['fields']['Note_2']; ?>" disabled />  </div>
 <div class="column"> <b>Our Price</b> <br><input class="less_width" type="text" name="second_our_price_1" id="second_our_price_1"  value="<?php echo $jsonData['records'][0]['fields']['Our_Price_2']; ?>"    />  <br> <br> <b>VAT</b> <br> <input class="less_width" type="text" name="second_vat_1" id="second_vat_1"  value="<?php echo $jsonData['records'][0]['fields']['VAT_2']; ?>"    />  </div>
</div>


	   </td>
	  
	  
      <td scope="col" colspan="5"> 
	  
	  
	  
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="second_country_1" id="second_country_1"  value="<?php echo $jsonData['records'][0]['fields']['Country2_1']; ?>"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="second_s1_1" id="second_s1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method2_1_1']; ?>"   /> <br> <input type="text" name="second_s1_2" id="second_s1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method2_1_2_2']; ?>"   /> <br> <input type="text" name="second_s1_3" id="second_s1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method2_1_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="second_st1_1" id="second_st1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time2_1_1']; ?>"    />  <br>
	  <input type="text" name="second_st1_2" id="second_st1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time2_1_2']; ?>"    />  <br>
	  <input type="text" name="second_st1_3" id="second_st1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time2_1_3']; ?>"    />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> 
	  <input type="text" name="second_sf1_1" id="second_sf1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee2_1_1']; ?>"   />  <br>
	  <input type="text" name="second_sf1_2" id="second_sf1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee2_1_2_2']; ?>"   /> <br>
	  <input type="text" name="second_sf1_3" id="second_sf1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee2_1_3']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="second_country_2" id="second_country_2" value="<?php echo $jsonData['records'][0]['fields']['Country2_2']; ?>"   disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="second_s2_1" id="second_s2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method2_2_1']; ?>"   /> <br> <input type="text" name="second_s2_2" id="second_s2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method2_2_2_2']; ?>"   /> <br> <input type="text" name="second_s2_3" id="second_s2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method2_2_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="second_st2_1" id="second_st2_1" value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time2_2_1']; ?>"   />  <br> 
	  <input type="text" name="second_st2_2" id="second_st2_2" value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time2_2_2_2']; ?>"     />  <br> 
	  <input type="text" name="second_st2_3" id="second_st2_3" value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time2_2_3']; ?>"     />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> 
	  <input type="text" name="second_sf2_1" id="second_sf2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee2_2_1']; ?>" />  <br>
	  <input type="text" name="second_sf2_2" id="second_sf2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee2_2_2']; ?>"  /> <br>
	  <input type="text" name="second_sf2_3" id="second_sf2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee2_2_3']; ?>" /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="second_country_3" id="second_country_3" value="<?php echo $jsonData['records'][0]['fields']['Country2_3']; ?>"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="second_s3_1" id="second_s3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method2_3_1']; ?>"  /> <br> <input type="text" name="second_s3_2" id="second_s3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method2_3_2_2']; ?>"   /> <br> <input type="text" name="second_s3_3" id="second_s3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method2_3_3']; ?>" />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="second_st3_1" id="second_st3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time2_3_1']; ?>"  />  <br>
	  <input type="text" name="second_st3_2" id="second_st3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time2_3_2_2']; ?>"   />  <br> 
	  <input type="text" name="second_st3_3" id="second_st3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time2_3_3']; ?>"  />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> 
	  <input type="text" name="second_sf3_1" id="second_sf3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee2_3_1']; ?>" />  <br> 
	  <input type="text" name="second_sf3_2" id="second_sf3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee2_3_2_2']; ?>"   /> <br> 
	  <input type="text" name="second_sf3_3" id="second_sf3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee2_3_3']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	 </td>
      
   </tr>
   
   
   
   
   
   
   
   
   
   
   
   
    <!--  Third Product row  -->
   
   
   
   
   
   
   
   
   
   
   
   
      <tr class="r1" id="third-prod">
   <td scope="col"> <b>Image 3</b>  <br> <img src="<?php echo $jsonData['records'][0]['fields']['Product_Image_3']; ?>" class="pimg" id="pimg3" /></td>
      <td scope="col" colspan="2"> 


<div class="row mb-8">
  <div class="column"> <b>Variant 3</b>  <br> <input class="less_width" type="text" name="third_var_1" id="third_var_1" value="<?php echo $jsonData['records'][0]['fields']['Variant_3']; ?>"  disabled />  <br /> <br /> <b> Product Link </b> <br>
 <input type="text" name="pl3" id="pl3" class="less_width" value="<?php echo $jsonData['records'][0]['fields']['Link_3']; ?>"  disabled  />  </div>
 <div class="column"> <b>Current Price 3</b> <br> <input class="less_width" type="text" name="third_curr_prc_1" id="third_curr_prc_1"  value="<?php echo $jsonData['records'][0]['fields']['Current_Price_3']; ?>"  disabled /> <br /> <br /> <b> Note </b> <br>
<input type="text" name="third_note_1" id="third_note_1" class="less_width"  value="<?php echo $jsonData['records'][0]['fields']['Note_3']; ?>" disabled />  </div>
 <div class="column"> <b>Our Price</b> <br><input class="less_width" type="text" name="third_our_price_1" id="third_our_price_1"  value="<?php echo $jsonData['records'][0]['fields']['Our_Price_3']; ?>"    />  <br> <br> <b>VAT</b> <br> <input class="less_width" type="text" name="third_vat_1" id="third_vat_1"  value="<?php echo $jsonData['records'][0]['fields']['VAT_3']; ?>"    />  </div>
</div>


	   </td>
	  
	  
      <td scope="col" colspan="5"> 
	  
	  
	  
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="third_country_1"  value="<?php echo $jsonData['records'][0]['fields']['Country3_1']; ?>"  id="third_country_1"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="third_s1_1" id="third_s1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method3_1_1']; ?>"   /> <br> <input type="text" name="third_s1_2" id="third_s1_2"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method3_1_2_2']; ?>"  /> <br> <input type="text" name="third_s1_3" id="third_s1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method3_1_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="third_st1_1" id="third_st1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time3_1_1']; ?>"  />  <br>
	  <input type="text" name="third_st1_2" id="third_st1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time3_1_2_2']; ?>"   />  <br>
	  <input type="text" name="third_st1_3" id="third_st1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time3_1_3']; ?>"   />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br>
	  <input type="text" name="third_sf1_1" id="third_sf1_1" value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee3_1_1']; ?>"  />  <br>
	  <input type="text" name="third_sf1_2" id="third_sf1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee3_1_2_2']; ?>"  /> <br>
	  <input type="text" name="third_sf1_3" id="third_sf1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee3_1_3']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="third_country_2" id="third_country_2"  value="<?php echo $jsonData['records'][0]['fields']['Country3_2']; ?>"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br><input type="text" name="third_s2_1" id="third_s2_1"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method3_2_1']; ?>"  /> <br> <input type="text" name="third_s2_2" id="third_s2_2"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method3_2_2_2']; ?>"  /> <br> <input type="text" name="third_s2_3" id="third_s2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method3_2_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="third_st2_1" id="third_st2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time3_2_1']; ?>"  />  <br>
	  <input type="text" name="third_st2_2" id="third_st2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time3_2_2_2']; ?>"  />  <br> 
	  <input type="text" name="third_st2_3" id="third_st2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time3_2_3']; ?>"  />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br>
	  <input type="text" name="third_sf2_1" id="third_sf2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee3_2_1']; ?>"   />  <br> 
	  <input type="text" name="third_sf2_2" id="third_sf2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee3_2_2_2']; ?>"   /> <br>
	  <input type="text" name="third_sf2_3" id="third_sf2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee3_2_3']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="third_country_3" id="third_country_3" value="<?php echo $jsonData['records'][0]['fields']['Country3_3']; ?>"   disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="third_s3_1" id="third_s3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method3_3_1']; ?>"   /> <br> <input type="text" name="third_s3_2" id="third_s3_2"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method3_3_2_2']; ?>"  /> <br> <input type="text" name="third_s3_3" id="third_s3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method3_3_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="third_st3_1" id="third_st3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time3_3_1']; ?>"  /> <br> 
	  <input type="text" name="third_st3_2" id="third_st3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time3_3_2_2']; ?>"   />  <br>
	  <input type="text" name="third_st3_3" id="third_st3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time3_3_3']; ?>"   />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br>
	  <input type="text" name="third_sf3_1" id="third_sf3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee3_3_1']; ?>"   />  <br>
	  <input type="text" name="third_sf3_2" id="third_sf3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee3_3_2_2']; ?>"   /> <br> 
	  <input type="text" name="third_sf3_3" id="third_sf3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee3_3_3']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	 </td>
      
   </tr>
   
   
   
   
   
   
   
   
   
   
   
   
    <!--  Fourth Product row  -->
   
   
   
   
   
   
   
   
   
   
   
   
      <tr class="r1" id="fourth-prod">
   <td scope="col"><b>Image 4</b>  <br> <img src="<?php echo $jsonData['records'][0]['fields']['Product_Image_4']; ?>" class="pimg" id="pimg4" /></td>
      <td scope="col" colspan="2"> 


<div class="row mb-8">
  <div class="column"> <b>Variant 4</b>  <br> <input class="less_width" type="text" name="fourth_var_1" id="fourth_var_1" value="<?php echo $jsonData['records'][0]['fields']['Variant_4']; ?>" disabled />  <br /> <br /> <b> Product Link </b> <br>
 <input type="text" name="pl4" id="pl4" class="less_width"  value="<?php echo $jsonData['records'][0]['fields']['Link_4']; ?>" disabled />  </div>
 <div class="column"> <b>Current Price 4</b> <br> <input class="less_width" type="text" name="fourth_curr_prc_1" id="fourth_curr_prc_1"  value="<?php echo $jsonData['records'][0]['fields']['Current_Price_4']; ?>"  disabled /> <br /> <br /> <b> Note </b> <br>
<input type="text" name="fourth_note_1" id="fourth_note_1" class="less_width"  value="<?php echo $jsonData['records'][0]['fields']['Note_4']; ?>" disabled /> </div>
 <div class="column"> <b>Our Price</b> <br><input class="less_width" type="text" name="fourth_our_price_1" id="fourth_our_price_1"  value="<?php echo $jsonData['records'][0]['fields']['Our_Price_4']; ?>"   />  <br> <br> <b>VAT</b> <br> <input class="less_width" type="text" name="fourth_vat_1" id="fourth_vat_1"  value="<?php echo $jsonData['records'][0]['fields']['VAT_4']; ?>"   />  </div>
</div>


	   </td>
	  
	  
      <td scope="col" colspan="5"> 
	  
	  
	  
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="fourth_country_1" id="fourth_country_1"  value="<?php echo $jsonData['records'][0]['fields']['Country4_1']; ?>"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="fourth_s1_1" id="fourth_s1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method4_1_1']; ?>"   /> <br> <input type="text" name="fourth_s1_2" id="fourth_s1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method4_1_2']; ?>"   /> <br> <input type="text" name="fourth_s1_3" id="fourth_s1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method4_1_3']; ?>"  />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="fourth_st1_1" id="fourth_st1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time4_1_1']; ?>"   />  <br>
	  <input type="text" name="fourth_st1_2" id="fourth_st1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time4_1_2']; ?>"   />  <br>
	  <input type="text" name="fourth_st1_3" id="fourth_st1_3" value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time4_1_3']; ?>"  />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> 
	  <input type="text" name="fourth_sf1_1" id="fourth_sf1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee4_1_1']; ?>"   />  <br>
	  <input type="text" name="fourth_sf1_2" id="fourth_sf1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee4_1_2']; ?>"   /> <br> 
	  <input type="text" name="fourth_sf1_3" id="fourth_sf1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee4_1_3']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="fourth_country_2" id="fourth_country_2"  value="<?php echo $jsonData['records'][0]['fields']['Country4_2']; ?>"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="fourth_s2_1" id="fourth_s2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method4_2_1']; ?>"   /> <br> <input type="text" name="fourth_s2_2" id="fourth_s2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method4_2_2']; ?>"   /> <br> <input type="text" name="fourth_s2_3" id="fourth_s2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method4_2_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="fourth_st2_1" id="fourth_st2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time4_2_1']; ?>"   />  <br>
	  <input type="text" name="fourth_st2_2" id="fourth_st2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time4_2_2']; ?>"   />  <br>
	  <input type="text" name="fourth_st2_3" id="fourth_st2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time4_2_3']; ?>"   />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br>
	  <input type="text" name="fourth_sf2_1" id="fourth_sf2_1"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee4_2_1']; ?>"  />  <br>
	  <input type="text" name="fourth_sf2_2" id="fourth_sf2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee4_2_2']; ?>"   /> <br>
	  <input type="text" name="fourth_sf2_3" id="fourth_sf2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee4_2_3']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="fourth_country_3" id="fourth_country_3"  value="<?php echo $jsonData['records'][0]['fields']['Country4_3']; ?>"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="fourth_s3_1" id="fourth_s3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method4_3_1']; ?>"   /> <br> <input type="text" name="fourth_s3_2" id="fourth_s3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method4_3_2']; ?>"   /> <br> <input type="text" name="fourth_s3_3" id="fourth_s3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method4_3_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> 
	  <input type="text" name="fourth_st3_1" id="fourth_st3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time4_3_1']; ?>"   />  <br>
	  <input type="text" name="fourth_st3_2" id="fourth_st3_2"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time4_3_2']; ?>"  />  <br>
	  <input type="text" name="fourth_st3_3" id="fourth_st3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time4_3_3']; ?>"   />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> 
	  <input type="text" name="fourth_sf3_1" id="fourth_sf3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee4_3_1']; ?>"   />  <br>
	  <input type="text" name="fourth_sf3_2" id="fourth_sf3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee4_3_2']; ?>"   /> <br>
	  <input type="text" name="fourth_sf3_3" id="fourth_sf3_3"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee4_3_3']; ?>"  /> </td>
	  </tr>
	  </tbody></table>
	  
	 </td>
      
   </tr>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    
   
   
   
   
   
   
   
   
    <!--  Fifth Product row  -->
   
   
   
   
   
   
   
   
   
   
   
   
      <tr class="r1" id="fifth-prod">
   <td scope="col"><b>Image 5</b>  <br> <img src="<?php echo $jsonData['records'][0]['fields']['Product_Image_5']; ?>" class="pimg" id="pimg5" /></td>
      <td scope="col" colspan="2"> 


<div class="row mb-8">
  <div class="column"> <b>Variant 5</b>  <br> <input class="less_width" type="text" name="fifth_var_1" id="fifth_var_1" value="<?php echo $jsonData['records'][0]['fields']['Variant_5']; ?>"  disabled />  <br /> <br /> <b> Product Link </b> <br>
 <input type="text" name="pl5" id="pl5" class="less_width"  value="<?php echo $jsonData['records'][0]['fields']['Link_5']; ?>" disabled  />  </div>
 <div class="column"> <b>Current Price 5</b> <br> <input class="less_width" type="text" name="fifth_curr_prc_1" id="fifth_curr_prc_1"  value="<?php echo $jsonData['records'][0]['fields']['Current_Price_5']; ?>"  disabled /> <br /> <br /> <b> Note </b> <br>
<input type="text" name="fifth_note_1" id="fifth_note_1" class="less_width"  value="<?php echo $jsonData['records'][0]['fields']['Note_5']; ?>" disabled /> </div>
 <div class="column"> <b>Our Price</b> <br><input class="less_width" type="text" name="fifth_our_price_1" id="fifth_our_price_1"   value="<?php echo $jsonData['records'][0]['fields']['Our_Price_5']; ?>"   />  <br> <br> <b>VAT</b> <br> <input class="less_width" type="text" name="fifth_vat_1" id="fifth_vat_1"  value="<?php echo $jsonData['records'][0]['fields']['VAT_5']; ?>"  />  </div>
</div>



	   </td>
	  
	  
      <td scope="col" colspan="5"> 
	  
	  
	  
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="fifth_country_1" id="fifth_country_1"  value="<?php echo $jsonData['records'][0]['fields']['Country5_1']; ?>"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="fifth_s1_1" id="fifth_s1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method5_1_1']; ?>"   /> <br> <input type="text" name="fifth_s1_2" id="fifth_s1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method5_1_2']; ?>"   /> <br> <input type="text" name="fifth_s1_3" id="fifth_s1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method5_1_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="fifth_st1_1" id="fifth_st1_1"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time5_1_1']; ?>"  />  <br>
	  <input type="text" name="fifth_st1_2" id="fifth_st1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time5_1_2']; ?>"   />  <br>
	  <input type="text" name="fifth_st1_3" id="fifth_st1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time5_1_3']; ?>"  />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br>
	  <input type="text" name="fifth_sf1_1" id="fifth_sf1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee5_1_1']; ?>"   />  <br>
	  <input type="text" name="fifth_sf1_2" id="fifth_sf1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee5_1_2']; ?>"   /> <br> 
	  <input type="text" name="fifth_sf1_3" id="fifth_sf1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee5_1_3']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="fifth_country_2" id="fifth_country_2"  value="<?php echo $jsonData['records'][0]['fields']['Country5_2']; ?>"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="fifth_s2_1" id="fifth_s2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method5_2_1']; ?>"  /> <br> <input type="text" name="fifth_s2_2" id="fifth_s2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method5_2_2']; ?>"   /> <br> <input type="text" name="fifth_s2_3" id="fifth_s2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method5_2_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="fifth_st2_1" id="fifth_st2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time5_2_1']; ?>"   />  <br>
	  <input type="text" name="fifth_st2_2" id="fifth_st2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time5_2_2']; ?>"   />  <br>
	  <input type="text" name="fifth_st2_3" id="fifth_st2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time5_2_3']; ?>"   />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> 
	  <input type="text" name="fifth_sf2_1" id="fifth_sf2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee5_2_1']; ?>"   />  <br> 
	  <input type="text" name="fifth_sf2_2" id="fifth_sf2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee5_2_2']; ?>"   /> <br> 
	  <input type="text" name="fifth_sf2_3" id="fifth_sf2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee5_2_3']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="fifth_country_3" id="fifth_country_3"  value="<?php echo $jsonData['records'][0]['fields']['Country5_3']; ?>"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="fifth_s3_1" id="fifth_s3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method5_3_1']; ?>"   /> <br> <input type="text" name="fifth_s3_2" id="fifth_s3_2"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method5_3_2']; ?>"  /> <br> <input type="text" name="fifth_s3_3" id="fifth_s3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method5_3_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="fifth_st3_1" id="fifth_st3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time5_3_1']; ?>"   />  <br>
	  <input type="text" name="fifth_st3_2" id="fifth_st3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time5_3_2']; ?>"   />  <br>
	  <input type="text" name="fifth_st3_3" id="fifth_st3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time5_3_3']; ?>"   />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br>
	  <input type="text" name="fifth_sf3_1" id="fifth_sf3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee5_3_1']; ?>"   />  <br>
	  <input type="text" name="fifth_sf3_2" id="fifth_sf3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee5_3_2']; ?>"   /> <br>
	  <input type="text" name="fifth_sf3_3" id="fifth_sf3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee5_3_3']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	 </td>
      
   </tr>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    
   
   
   
   
   
   
   
   
    <!--  Sixth Product row  -->
   
   
   
   
   
   
   
   
   
   
   
   
      <tr class="r1" id="sixth-prod">
   <td scope="col"><b>Image 6</b>  <br> <img src="<?php echo $jsonData['records'][0]['fields']['Product_Image_6']; ?>" class="pimg" id="pimg6" /></td>
      <td scope="col" colspan="2"> 


<div class="row mb-8">
  <div class="column"> <b>Variant 6</b>  <br> <input class="less_width" type="text" name="sixth_var_1" id="sixth_var_1" value="<?php echo $jsonData['records'][0]['fields']['Variant_6']; ?>"  disabled />  <br /> <br /> <b> Product Link </b> <br>
 <input type="text" name="pl6" id="pl6" class="less_width"  value="<?php echo $jsonData['records'][0]['fields']['Link_6']; ?>" disabled  />  </div>
 <div class="column"> <b>Current Price 6</b> <br> <input class="less_width" type="text" name="sixth_curr_prc_1" id="sixth_curr_prc_1"  value="<?php echo $jsonData['records'][0]['fields']['Current_Price_6']; ?>"  disabled  /> <br /> <br /> <b> Note </b> <br>
<input type="text" name="sixth_note_1" id="sixth_note_1" class="less_width"  value="<?php echo $jsonData['records'][0]['fields']['Note_6']; ?>" disabled /> </div>
 <div class="column"> <b>Our Price</b> <br><input class="less_width" type="text" name="sixth_our_price_1" id="sixth_our_price_1"  value="<?php echo $jsonData['records'][0]['fields']['Our_Price_6']; ?>"    />  <br> <br> <b>VAT</b> <br> <input class="less_width" type="text" name="sixth_vat_1" id="sixth_vat_1"  value="<?php echo $jsonData['records'][0]['fields']['VAT_6']; ?>"  />  </div>
</div>


	   </td>
	  
	  
      <td scope="col" colspan="5"> 
	  
	  
	  
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="sixth_country_1" id="sixth_country_1"  value="<?php echo $jsonData['records'][0]['fields']['Country6_1']; ?>"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="sixth_s1_1" id="sixth_s1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method6_1_1']; ?>"   /> <br> <input type="text" name="sixth_s1_2" id="sixth_s1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method6_1_2']; ?>"   /> <br> <input type="text" name="sixth_s1_3" id="sixth_s1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method6_1_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="sixth_st1_1" id="sixth_st1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time6_1_1']; ?>"    />  <br>
	  <input type="text" name="sixth_st1_2" id="sixth_st1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time6_1_2']; ?>"    />  <br>
	  <input type="text" name="sixth_st1_3" id="sixth_st1_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time6_1_3']; ?>"    />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> 
	  <input type="text" name="sixth_sf1_1" id="sixth_sf1_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee6_1_1']; ?>"    />  <br>
	  <input type="text" name="sixth_sf1_2" id="sixth_sf1_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee6_1_2']; ?>"   /> <br>
	  <input type="text" name="sixth_sf1_3" id="sixth_sf1_3"   value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee6_1_3']; ?>"   /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="second_table">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="sixth_country_2" id="sixth_country_2"  value="<?php echo $jsonData['records'][0]['fields']['Country6_2']; ?>"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="sixth_s2_1" id="sixth_s2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method6_2_1']; ?>"   /> <br> <input type="text" name="sixth_s2_2" id="sixth_s2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method6_2_2']; ?>"   /> <br> <input type="text" name="sixth_s2_3" id="sixth_s2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method6_2_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br> 
	  <input type="text" name="sixth_st2_1" id="sixth_st2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time6_2_1']; ?>"   />  <br>
	  <input type="text" name="sixth_st2_2" id="sixth_st2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time6_2_2']; ?>"   />  <br>
	  <input type="text" name="sixth_st2_3" id="sixth_st2_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time6_2_3']; ?>"  />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br>
	  <input type="text" name="sixth_sf2_1" id="sixth_sf2_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee6_2_1']; ?>"   />  <br>
	  <input type="text" name="sixth_sf2_2" id="sixth_sf2_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee6_2_2']; ?>"   /> <br>
	  <input type="text" name="sixth_sf2_3" id="sixth_sf2_3" value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee6_2_3']; ?>"  /> </td>
	  </tr>
	  </tbody></table>
	  
	  <table class="">
	  <tbody><tr>
	  <td scope="col"><b>Country</b> <br>  <input list="country_list" type="text" name="sixth_country_3" id="sixth_country_3"  value="<?php echo $jsonData['records'][0]['fields']['Country6_3']; ?>"  disabled /> </td>
	  <td scope="col"><b>Shipping Method</b> <br> <input type="text" name="sixth_s3_1" id="sixth_s3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method6_3_1']; ?>"   /> <br> <input type="text" name="sixth_s3_2" id="sixth_s3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method6_3_2']; ?>"   /> <br> <input type="text" name="sixth_s3_3" id="sixth_s3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Method6_3_3']; ?>"   />  </td>
	  <td scope="col"> <b>Shipping Time</b> <br>
	  <input type="text" name="sixth_st3_1" id="sixth_st3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time6_3_1']; ?>"   />  <br>
	  <input type="text" name="sixth_st3_2" id="sixth_st3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time6_3_2']; ?>"   />  <br>
	  <input type="text" name="sixth_st3_3" id="sixth_st3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Time6_3_3']; ?>"   />   </td>
	  <td scope="col"> <b>Shipping Fee</b> <br> 
	  <input type="text" name="sixth_sf3_1" id="sixth_sf3_1"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee6_3_1']; ?>"   />  <br>
	  <input type="text" name="sixth_sf3_2" id="sixth_sf3_2"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee6_3_2']; ?>"   /> <br> 
	  <input type="text" name="sixth_sf3_3" id="sixth_sf3_3"  value="<?php echo $jsonData['records'][0]['fields']['Shipping_Fee6_3_3']; ?>"   /> </td>
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





