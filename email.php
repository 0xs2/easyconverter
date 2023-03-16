<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="sui">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="English">
    <meta name="description" content="Email Encoder Online: encode email address, email encode, keep email safe, antispam email">
    <meta name="title" content="Easy Converter | E-Mail Encode">
    <meta name="keywords" content="converter, units, encode, decoder, easy converter, email, email address, mail, e mail, e-mail, email encode, generator, security">
    <meta name="theme-color" content="#131313">
    	<link rel="canonical" href="https://easyconverter.org/email">
    <link rel="icon" href="/favicon.ico">
<link rel="sitemap" type="application/xml" href="/sitemap.xml"/>
<meta name="robots" content="index, follow">
    <link rel="stylesheet" href="assets/bootstrap.min.css">    
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.navbar.min.js"></script>
<script src="assets/js/clipboard.min.js"></script><title>Easy Converter | E-Mail Encoder</title>
</head>
<?php
include_once('lib/backbone.php');
include_once('includes/header.php');
?>
<ul class="breadcrumb bg-dark">
  <li class="breadcrumb-item"><a href="/">Home</a></li>
  <li class="breadcrumb-item"><a href="/?category=ed">Encoders/Decoders</a></li>
  <li class="breadcrumb-item active">E-Mail</li>
</ul> 
<h3>E-Mail Encoder</h3>
<hr>
<form method="post" action="" id="encode">  

<div class="form-group">
    <label for="text">Email to Encode</label>
    <input id="text" type="email" class="form-control bg-dark"name="encode" required></input>
</div>
<div class="form-group">
    <input id="type" type="hidden" value="email" required></input>
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
</div>
<script src="assets/js/app.js"></script>
<?php include_once('includes/footer.php'); ?>
