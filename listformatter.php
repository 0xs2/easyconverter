<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="sui">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="English">
    <meta name="description" content="List Formatter Online: list to array, convert to array, list to array, remove dupes">
    <meta name="title" content="List Formatter Online">
    <meta name="keywords" content="converter, units, list, decoder, easy converter, sha1, sha1 list">
    <meta name="theme-color" content="#131313">
    	<link rel="canonical" href="https://easyconverter.org/listformatter">
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
    <title>Easy Converter | List Formatter</title>
</head>
<?php
include_once('includes/header.php');
?>
<ul class="breadcrumb bg-dark">
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="/?category=formatters">Formatters</a></li>
  <li class="breadcrumb-item active">List</li>
</ul> 

<h3>List Formatter</h3>
<hr>

<form method="post" action="" id="l">  

<div class="form-group">
    <label for="list">List here</label>
    <textarea id="list" class="form-control bg-dark"name="list" rows="6" cols="35" required></textarea>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="output">Select Output Format:</label>
<select class="form-control bg-dark" id="output">
  <option value="nl">New line</option>
  <option value="s">Space</option>
  <option value="c">Comma</option>
  <option value="pa">PHP Array</option>
  <option value="json">JSON Array</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
  <label for="method">Select Method:</label>
  <select class="form-control bg-dark" id="method">
  <option value="" selected disabled></option>
  <option value="dupes">Remove Duplicates</option>
  <option value="flip">Flip List</option>
</select>
</div> 
</div>
</div>
<div class="form-group">
    <input type="submit" name="submit" class="btn btn-dark" value="Submit">  
</div>

</form>
<div class="card list bg-dark">
        <div class="card-header d-flex justify-content-between align-items-center">
    <span class="list-title">
    </span>
    <button class="btn btn-dark copybtn" data-clipboard-target=".list-result"><img class="clippy" src="assets/clippy.svg" alt="Copy to clipboard" width="13"></button>
    </div>
    <div class="card-body"><pre class="list-result"></pre></div>
</div>
<script src="assets/js/app.js"></script>
<?php include_once('includes/footer.php'); ?>

