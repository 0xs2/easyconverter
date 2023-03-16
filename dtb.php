<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="sui">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="English">
    <meta name="description" content="Decimal to Binary Online: Convert Decimal to Binary">
    <meta name="title" content="Decimal to Binary Online">
    <meta name="keywords" content="converter, units, encode, decoder, easy converter, Binary Decimal, Binary to Decimal, Binary to Decimal">
    <meta name="theme-color" content="#131313">
    	<link rel="canonical" href="https://easyconverter.org/dtb">
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
    <title>Easy Converter | Decimal to Binary</title>
</head>
<?php
include_once('includes/header.php');
?>

<ul class="breadcrumb bg-dark">
  <li class="breadcrumb-item"><a href="/">Home</a></li>
  <li class="breadcrumb-item"><a  href="/?category=converters">Converters</a></li>
  <li class="breadcrumb-item"><a href="/?category=converters&type=number">Number</a></li>
  <li class="breadcrumb-item active">Decimal to Binary</li>
</ul> 
<h3>Decimal to Binary</h3>
<hr>
<form method="post" action="" id="number">  

<div class="form-group">
    <label for="num">Decimal</label>
    <input id="num" type="number" class="form-control bg-dark" name="number" step="any" required></input>
</div>
<div class="form-group">
    <input id="type" type="hidden" value="dtb" required></input>
</div>
<div class="form-group">
    <input type="submit" name="submit" class="btn btn-dark" value="Submit">  
</div>
</form>
<div class="card number bg-dark">
        <div class="card-header d-flex justify-content-between align-items-center">
    <span class="number-title">
    </span>
    <button class="btn btn-dark copybtn" data-clipboard-target=".number-result"><img class="clippy" src="assets/clippy.svg" alt="Copy to clipboard" width="13"></button>
    </div>
    <div class="card-body number-result"></div>
</div>
<script src="assets/js/app.js"></script>
<?php include_once('includes/footer.php'); ?>