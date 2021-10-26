<?php

//https://docs.getgrist.com/api/docs/7r6ZcK4NtJ5JQHaYX93DBi/tables/Before_Quotes/records
//96c63a4955c4cbd4224a0cb1640c593d3bccdf46


 $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, 'https://docs.getgrist.com/api/docs/7r6ZcK4NtJ5JQHaYX93DBi/tables/CRM/records');
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
foreach( $jsonData['records'] as $name )
{
    echo $name['fields']['Name']."<br />";
    
    
}

?>