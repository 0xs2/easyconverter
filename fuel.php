<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="sui">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="English">
    <meta name="description" content="Convert fuel units online">
    <meta name="title" content="Easy Converter | fuel Converter">
    <meta name="keywords" content="converter, units, encode, decoder, easy converter, fuel, fuel Converter">
    <meta name="theme-color" content="#131313">
    	<link rel="canonical" href="https://easyconverter.org/fuel">
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
    <title>Easy Converter | fuel Converter</title>
</head>
<?php
include_once('lib/backbone.php');
include_once('includes/header.php');
?>
<ul class="breadcrumb bg-dark">
  <li class="breadcrumb-item"><a href="/">Home</a></li>
  <li class="breadcrumb-item"><a  href="/?category=converters">Converters</a></li>
  <li class="breadcrumb-item"><a href="/?category=converters&type=unit">Unit</a></li>
  <li class="breadcrumb-item active">Fuel</li>
</ul> 
<h3>Fuel Converter</h3>
<hr>
<form method="post" action="" id="convert">  
<div class="row">
<div class="col-md-6">
<div class="form-group">
    <label for="from">From</label>
    <select name="from" class="form-control bg-dark" id="from" required size="<?php echo count($converters['fuel']); ?>">
    <?php
    foreach($converters['fuel'] as $k => $a) {
    ?>
    <option value="<?php echo $k; ?>"><?php echo $a; ?></option>
    <?php
    }
    ?>
    </select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
    <label for="to">To</label>
    <select name="to" class="form-control bg-dark" id="to" required size="<?php echo count($converters['fuel']); ?>">
    <?php
    foreach($converters['fuel'] as $k => $a) {
    ?>
    <option value="<?php echo $k; ?>"><?php echo $a; ?></option>
    <?php
    }
    ?>
</select>
</div>
</div>
</div>
<div class="form-group">
    <label for="Converter">Value</label>
    <input id="Converter" type="number" class="form-control bg-dark" name="Converter" step="any" required></input>
</div>
<div class="form-group">
    <input id="type" type="hidden" value="fuel" required></input>
</div>
<div class="form-group">
    <input type="submit" name="submit" class="btn btn-dark" value="Submit">  
</div>
</form>
<div class="card convert bg-dark">
        <div class="card-header d-flex justify-content-between align-items-center">
    <span class="convert-title">
    </span>
    <button class="btn btn-dark copybtn" data-clipboard-target=".convert-result"><img class="clippy" src="assets/clippy.svg" alt="Copy to clipboard" width="13"></button>
    </div>
    <div class="card-body convert-result"></div>
</div>

<script src="assets/js/app.js"></script>
<?php include_once('includes/footer.php'); ?>

