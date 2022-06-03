<?php
echo "<title>Marapi examples</title>";
$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.from-mar.com/",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
"cache-control: no-cache"
),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
echo $err;
echo "<p style='background-color: yellow'>hey, this is a request example! We'll call to home at 'https://api.from-mar.com/' and should get ourselves the \"this is not a web site\"-page.</p> <hr>\n\n\n\n\n<div style=\"border: 1px solid orange;\">";
echo $response;
echo "</div>";
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.from-mar.com/getvar.php?get=marapihost",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
echo $err;
echo "<p style='background-color: yellow'>Another example can be found if we send a GET request for <i>'get=marapihost'</i> to <a href=\"https://api.from-mar.com/getvar.php?get=marapihost\">https://api.from-mar.com/getvar.php?get=marapihost</a></p> <hr>\n\n\n\n\n<pre style=\"border: 5px solid orange; background-color: black; color: yellow\">";
echo $response;
echo "</pre>";
