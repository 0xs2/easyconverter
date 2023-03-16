<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="sui">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="English">
    <meta name="description" content="easyconverter.org is a service that provides free and easy to use tools that convert things online with no ads or popups!">
    <meta name="title" content="Easy Converter">
    <meta name="keywords" content="converter, units, encode, decoder, easy converter, generator, generate, random">
    <meta name="theme-color" content="#131313">
    
    <link rel="canonical" href="https://easyconverter.org">
    <link rel="icon" href="/favicon.ico">
<link rel="sitemap" type="application/xml" href="/sitemap.xml"/>
<meta name="robots" content="index, follow">
    <link rel="stylesheet" href="assets/bootstrap.min.css">    
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.navbar.min.js"></script>
<script src="assets/js/clipboard.min.js"></script><?php include_once("includes/head.php"); ?>

    <title>Easy Converter</title>
</head>
<?php
include_once('lib/backbone.php');
include_once('includes/header.php');
?>



<?php

if($_GET && isset($_GET['category'])) {
?>

<ul class="breadcrumb bg-dark">
  <li class="breadcrumb-item"><a href="/">Home</a></li>
<?php
if(!isset($_GET['type']) && $_GET['category'] == 'converters') {
    echo '<li class="breadcrumb-item active">Converters</li>';
}
if($_GET['category'] == 'converters' && $_GET['type'] == 'number') {
    echo '<li class="breadcrumb-item"><a href="?category=converters">Converters</a></li>';
    echo '<li class="breadcrumb-item active">Number</li>';
}

elseif($_GET['category'] == 'converters' && $_GET['type'] == 'unit') {
    echo '<li class="breadcrumb-item"><a href="?category=converters">Converters</a></li>';
    echo '<li class="breadcrumb-item active">Unit</li>';
}


if($_GET['category'] == 'ed') {
    echo '<li class="breadcrumb-item active">Encoders/Decoders</li>';
}

elseif($_GET['category'] == 'formatters') {
    echo '<li class="breadcrumb-item active">Formatters</li>';
}
?>
</ul> 
<?php

}

if($_GET['category'] == 'converters' && $_GET['type'] == 'unit' || !isset($_GET['category']) || !isset($_GET['type']) && $_GET['category'] == 'converters') {

?>
<h3>Unit Converters</h3>
<hr>
<ul id="artlist">
<li><a href="/temperature">Temperature</a></li>
<li><a href="/mass">Mass</a></li>
<li><a href="/area">Area</a></li>
<li><a href="/volume">Volume</a></li>
<li><a href="/speed">Speed</a></li>
<li><a href="/length">Length</a></li>
<li><a href="/frequency">Frequency</a></li>
<li><a href="/energy">Energy</a></li>
<li><a href="/pressure">Pressure</a></li>
<li><a href="/fuel">Fuel</a></li>
<li><a href="/bytes">Bytes</a></li>
<li><a href="/time">Time</a></li>
</ul>
<?php
}
?>


<?php

if($_GET['category'] == 'converters' && $_GET['type'] == 'number' || !isset($_GET['category']) || !isset($_GET['type']) && $_GET['category'] == 'converters') {

?>
<h3>Number Converters</h3>
<hr>
<ul id="artlist">
<li><a href="/btd">Binary to Decimal</a></li>
<li><a href="/dtb">Decimal to Binary</a></li>
<li><a href="/htd">Hex to Decimal</a></li>
<li><a href="/dth">Decimal to Hex</a></li>
<li><a href="/otd">Octal to Decimal</a></li>
<li><a href="/dto">Decimal to Octal</a></li>
</ul>

<?php
}
?>

<?php

if($_GET['category'] == 'ed' || !isset($_GET['category'])) {

?>

<h3>Encoders/Decoders</h3>
<hr>
<ul id="artlist">
<li><a href="/email">E-Mail</a></li>
<li><a href="/url">URL</a></li>
<li><a href="/html">HTML</a></li>
<li><a href="/ascii">ASCII</a></li>
<li><a href="/binary">Binary</a></li>
<li><a href="/base64">Base64</a></li>
<li><a href="/md5">MD5</a></li>
<li><a href="/hex">Hex</a></li>
<li><a href="/uu">UU</a></li>
<li><a href="/rot13">Rot13</a></li>
<li><a href="/caesar">Caesar</a></li>
<li><a href="/morse">Morse</a></li>
<li><a href="/sha1">SHA1</a></li>
<li><a href="/sha256">SHA256</a></li>
<li><a href="/sha512">SHA512</a></li>
<li><a href="/timestamp">Timestamp</a></li>
</ul>

<?php
}
?>


<?php

if($_GET['category'] == 'formatters' || !isset($_GET['category'])) {

?>

<h3>Formatters</h3>
<hr>
<ul id="artlist">
<li><a href="/stringformatter">String</a></li>
<li><a href="/listformatter">List</a></li>
</ul>

<?php
}
?>
<?php
include_once('includes/footer.php');
?>
