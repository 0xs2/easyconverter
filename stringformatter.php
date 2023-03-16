<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="sui">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="English">
    <meta name="description" content="String formatter online: format your text in many ways. Text converter. Uppercare converter. Lowercase converter. Capitalized case converter.">
    <meta name="title" content="Easy Converter | String formatter">
    <meta name="keywords" content="converter, units, text, decoder, easy converter, md5, String formatter">
    <meta name="theme-color" content="#131313">
    	<link rel="canonical" href="https://easyconverter.org/derpy">
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
    <title>Easy Converter | String formatter</title>
</head>
<?php

include_once('lib/backbone.php');
include_once('includes/header.php');

$error = '';

?>
<ul class="breadcrumb bg-dark">
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="/?category=formatters">Formatters</a></li>
  <li class="breadcrumb-item active">String</li>
</ul> 
<h3>String formatter</h3>
<hr>
<form method="post" action="" id="string">  

<div class="form-group">
    <label for="text">Text</label>
    <textarea id="text" class="form-control bg-dark"name="text" rows="6" cols="35" required></textarea>
</div>

<div class="form-group">
  <label for="type">Select Format:</label>
  <select class="form-control bg-dark" id="type">
    <option value="uppercase">UPPERCASE</option>
    <option value="lowercase">lowercase</option>
    <option value="sentencecase">Sentence case</option>
    <option value="alternatingcase">AlTeRnAtInG CaSe</option>
    <option value="capitalizedcase">Capitalized Case</option>
    <option value="brainfuck">Bbbrainfuck.</option>
    <option value="flip">flip</option>
  </select>
</div> 

<div class="form-group">
    <input type="submit" name="submit" class="btn btn-dark" value="Submit">  
</div>
</form>

<div class="card string bg-dark">
        <div class="card-header d-flex justify-content-between align-items-center">
    <span class="string-title">
    </span>
    <button class="btn btn-dark copybtn" data-clipboard-target=".string-result"><img class="clippy" src="assets/clippy.svg" alt="Copy to clipboard" width="13"></button>
    </div>
    <div class="card-body"><pre class="string-result"></pre></div>
</div>

<script src="assets/js/app.js"></script>
<?php include_once('includes/footer.php'); ?>

