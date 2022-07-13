<?php
session_start();

function get_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$customerId = '1001';
$applied_amount = $firstname = $lastname = $email = '';
$applied_amount = "0";
if(isset($_REQUEST['s1'])){
	$s1=$_SESSION['s1']= $_REQUEST['s1'];
}elseif(isset($_SESSION['s1'])){
	$s1=$_SESSION['s1'];
}else{
	if(isset($_REQUEST['utm_campaign'])){
		$s1Array = explode(':', $_REQUEST['utm_campaign']);
		$s1=$s1Array[0];
	}elseif(isset($_SESSION['utm_campaign'])){
		$s1Array = explode(':', $_SESSION['utm_campaign']);
		$s1=$s1Array[0];
	}else{
		$s1='';
	}
}
if(isset($_REQUEST['s2'])){
  $s2=$_SESSION['s2']= $_REQUEST['s2'];
}elseif(isset($_SESSION['s2'])){
  $s2=$_SESSION['s2'];
}else{
  $s2='';
}


if (isset($_REQUEST['uid'])) {
   $uid = $_SESSION['uid'] = $_REQUEST['uid'];
}elseif(isset($_SESSION['uid'])){
	$uid=$_SESSION['uid'];
}else{
	if(isset($_REQUEST['utm_source'])){
		$uid=$_REQUEST['utm_source'];
	}elseif(isset($_SESSION['utm_source'])){
		$uid=$_SESSION['utm_source'];
	}else{
		$uid='';
	}
}

if (isset($_REQUEST['utm_source'])) {
   $utm_source = $_SESSION['utm_source'] = $_REQUEST['utm_source'];
}else{
	$utm_source='';
}
if (isset($_REQUEST['utm_medium'])) {
   $utm_medium = $_SESSION['utm_medium'] = $_REQUEST['utm_medium'];
}else{
	$utm_medium='';
}
if (isset($_REQUEST['utm_campaign'])) {
   $utm_campaign = $_SESSION['utm_campaign'] = $_REQUEST['utm_campaign'];
}else{
	$utm_campaign='';
}

if (isset($_REQUEST['amount']))
    $applied_amount = $_REQUEST['amount'];
if (isset($_REQUEST['firstname']))
    $firstname = $_REQUEST['firstname'];
if (isset($_REQUEST['lastname']))
    $lastname = $_REQUEST['lastname'];
if (isset($_REQUEST['email']))
    $email = $_REQUEST['email'];

// if(! empty($_SERVER['HTTP_USER_AGENT'])){
//     $useragent = $_SERVER['HTTP_USER_AGENT'];
//     if( preg_match('@(iPad|iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)@', $useragent)   && (!isset($_GET['device']) || $_GET['device'] != 'desktop')   ){
//       header('Location: https://m.quikcashloan.com/?s1='.$s1.'&s2='.$s2.'&uid='.$uid.'&utm_source='.$utm_source.'&utm_medium='.$utm_medium.'&utm_campaign='.$utm_campaign.'');
//     }
// }
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quik Cash Loan</title>
        <link rel="manifest" href="/manifest.json">
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet"> -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-208184410-1"></script>
        
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-208184410-1');
        </script>
        <script src="https://api.pushnami.com/scripts/v1/push/614ad4eba9a7840ba7bee308"></script>
    </head>
    <body>  
      <nav class="navbar navbar-light">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <a href="index.php"><img src="assets/images/logo.png" class="img-responsive logo"/></a>
            </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            <li><a data-toggle="modal" data-target="#how-it-works" href="#">How it works</a></li>
            <li><a data-toggle="modal" href="#" data-target="#rates" href="#">Rates and Fee</a></li>  
            <li><a data-toggle="modal" href="#" data-target="#contact-us" href="#">Contact us</a></li>               
            </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav> 
    <div class="clearfix"></div>