```<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>PHP cURL Demo</title>
</head>
<body>

<h1>PHP cURL Demo</h1>

<?php
// PHP cURL is a great tool for interacting with REST APIs as it enables you to send and receive data across various protocols.
// It supports different HTTP request methods (e.g. GET, POST, PUT).
// It simplifies the process of making HTTP requests, handling authentication, and managing responses.

// initialize cURL session
$curl = curl_init();

// The curl_setopt() function in PHP is used to set options for a cURL session,
// it allows you to configure parameters for HTTP requests, such as URLs, headers, POST data, and timeouts.
// It is essential for defining how the request behaves before execution with curl_exec().
// curl_setopt($curl, CURLOPT_URL, 'http://localhost/project/frogs.json');
curl_setopt($curl, CURLOPT_URL, 'https://week-10-amber.vercel.app/');

// When set to true (or 1), this option tells cURL to return the response from the server as a string, allowing you to store it in a variable.
// If it is set to false (or 0) or not set at all, curl_exec() will output the result directly to the browser (or standard output) and return a boolean true on success, or false on failure
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// execute cURL request
$response = curl_exec($curl);

// curl_error is a PHP function that returns a clear-text string description of the last cURL operation failure,
// usually caused by network issues, invalid URLs, or outdated server software. It is used alongside curl_errno()
// (which returns the error code number) to debug API connections or remote data requests
$error = curl_error($curl);
$error_no = curl_errno($curl);

if($response) { // response returns true -> show images

    // convert json into associative array (true) or object (false)
    $data = json_decode($response, true);
    // print_r($data);

    foreach($data as $arr) { // id, alt, title, src
        list(,,, $dims) = getimagesize($arr["src"]);
        $dims = strtr($dims, '"', "'");
        echo"<img src='", $arr["src"], "' ", $dims, " alt='", $arr["alt"], "' />";
    }

} else { // save error message to file

    $error = $error . " error code: " . $error_no . "\r\n";
    $log_file = "./errors.log";
    error_log($error, 3, $log_file);
}
// close cURL session // free memory
curl_close($curl);

// DATABASE QUERY -----------
// db connection strings
$user = 'root'; // username
$pass = ''; // password
$dbName = 'demo'; // database name

// local database connection
$db = new mysqli('localhost', $user, $pass, $dbName) or die("unable to connect");
// if connection is not successful, code breaks with an error, otherwise it continues

echo"<h2>SQL Database Connection and Query</h2>";
// show that we are connected  
echo"<p class='connected'>Connected!</p>";

// query database using SQL and database connection $db
$result = mysqli_query($db, "SELECT demo_text AS text FROM php_demo");

// display results returned
while($row = mysqli_fetch_assoc($result)) { 

    // show table row as raw data (associative array)
    echo"<p class='results'>Raw data returned from our SQL query (associative array):</p>";
    echo"<code>", print_r($row, true), "</code>";
    // display all results from the query in html 'p' element
    echo "<p class='results'>", $row['text'], "</p>";
}
?>

</body>
</html>```