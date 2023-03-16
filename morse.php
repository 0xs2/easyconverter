<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="sui">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="English">
    <meta name="description" content="Morse Code Online: text to morse code, morse code to text, morse code">
    <meta name="title" content="Morse Code Online">
    <meta name="keywords" content="converter, units, encode, decoder, easy converter, Morse Code, base 64, Morse Code encode, Morse Code decode, generator, security">
    <meta name="theme-color" content="#131313">
    	<link rel="canonical" href="https://easyconverter.org/morse">
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
    <title>Morse Code Online</title>
</head>
<?php
include_once('lib/backbone.php');
include_once('includes/header.php');
?>
<ul class="breadcrumb bg-dark">
  <li class="breadcrumb-item"><a href="/">Home</a></li>
  <li class="breadcrumb-item"><a href="/?category=ed">Encoders/Decoders</a></li>
  <li class="breadcrumb-item active">Morse Code</li>
</ul> 
<h3>Morse Code Encoder</h3>
<hr>
<form method="post" action="" id="encode"> 

<div class="form-group">
    <label for="encode">Text to Encode</label>
    <textarea id="text" class="form-control bg-dark"name="encode" rows="6" cols="35"  required></textarea>
</div>
<div class="form-group">
    <input id="type" type="hidden" value="morse" required></input>
</div>
<div class="form-group">
    <input type="submit" name="submit" class="btn btn-dark" value="Submit">  
</div>
</form>
<div class="card encode bg-dark">
        <div class="card-header d-flex justify-content-between align-items-center">
    <span class="encode-title">
    </span>
    <button class="btn btn-dark copybtn" data-clipboard-target=".encode-result"><img class="clippy" src="assets/clippy.svg" alt="Copy to clipboard" width="13"></button>
    </div>
    <div class="card-body encode-result"></div>
</div><br>
<h3>Morse Code Decoder</h3>
<hr>
<form method="post" action="" id="decode">  
<div class="form-group">
    <label for="text">Text to Decode</label>
    <textarea id="text2" class="form-control bg-dark"name="decode" rows="6" cols="35" required></textarea>
</div>
<div class="form-group">
    <input id="type" type="hidden" value="morse" required></input>
</div>
<div class="form-group">
    <input type="submit" name="submit" class="btn btn-dark" value="Submit">  
</div>
</form>
<div class="card decode bg-dark">
        <div class="card-header d-flex justify-content-between align-items-center">
    <span class="decode-title">
    </span>
    <button class="btn btn-dark copybtn2" data-clipboard-target=".decode-result"><img class="clippy" src="assets/clippy.svg" alt="Copy to clipboard" width="13"></button>
    </div>
    <div class="card-body decode-result"></div>
</div>
<script src="assets/js/app.js"></script>
<?php include_once('includes/footer.php');

?>
