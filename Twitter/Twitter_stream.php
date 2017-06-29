<?php 

require 'twitter_stream_server.php';

$t = new ctwitter_stream();

// Fill the details from your Twitter App Account
$t->login('Enter Consumer Key', 
'Enter Consumer Secret Key', 
'Enter Access Token', 
'Enter Access Token Secret');

// Fetching from URL
$query = $_GET['query'];
$t->start(array($query));


?>