<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="sui">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="English">
    <meta name="description" content="Timestamp Online: eporh time, unix time, current unix timestamp, from unix timestamp, to unix timestamp, unix timestamp converter, timestamp converter, unix timestamp to time">
    <meta name="title" content="Timestamp Online: decode or encode">
    <meta name="keywords" content="converter, units, encode, decoder, easy converter, timestamp encode. timestamp decode, timestamp, time">
    <meta name="theme-color" content="#131313">
    	<link rel="canonical" href="https://easyconverter.org/timestamp">
    <meta name="format-detection" content="telephone=no" />
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
    <title>Timestamp Online</title>
</head>
<?php
include_once('includes/header.php');
?>
<ul class="breadcrumb bg-dark">
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="/?category=ed">Encoders/Decoders</a></li>
<li class="breadcrumb-item active">Timestamp</li>
</ul> 

<div class="alert alert-dark text-center">
<strong>Current Time:</strong> <?php echo date("Y-m-d h:i:sa") ?><br>
<strong>Timestamp:</strong> <?php echo time() ?>
</div>
<h3>Timestamp Encoder</h3>
<hr>
<form method="post" action="" id="encode"> 
<div class="form-group">
    <label for="text">Date to Encode</label>
<input type="datetime-local" class="form-control bg-dark" value="<?php echo date("Y-m-d\Th:i") ?>" id="text" name="encode" required></input>
</div>
<div class="form-group">
    <input id="type" type="hidden" value="timestamp" required></input>
</div>
<div class="form-group">
<input type="submit" class="btn btn-dark" name="submit" value="Submit">  
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
<h3>Timestamp Decoder</h3>
<hr>
<form method="post" action="" id="decode">
<div class="form-group">
    <label for="decode">Date to Decode</label>
<input type="number" id="text2" class="form-control bg-dark" name="decode" required>
</div>
<div class="form-group">
    <input id="type" type="hidden" value="timestamp" required></input>
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
<?php include_once('includes/footer.php'); ?>