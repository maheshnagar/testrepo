<?php

session_start();
include 'dbconfig.php';

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

if (isset($_REQUEST['email'])) {
    $ip = get_ip();
    $table = "website_apply_loan";
    $website_name = "quikcashloan.com";
    $first_name = $last_name = $email = $mobile_no = $amount = $zip_code = $subid = $clickid = $mobile_verify = '';
    if (isset($_REQUEST['firstName']))
        $first_name = trim($_REQUEST['firstName']);
    if (isset($_REQUEST['lastName']))
        $last_name = trim($_REQUEST['lastName']);
    if (isset($_REQUEST['email']))
        $email = $_REQUEST['email'];
    if (isset($_REQUEST['mobile']))
        $mobile_no = $_REQUEST['mobile'];
    if (isset($_REQUEST['amount']))
        $amount = $_REQUEST['amount'];
    if (isset($_REQUEST['zip']))
        $zip_code = $_REQUEST['zip'];
    if (isset($_SESSION['s3'])) {
        $subid = $_SESSION['s3'];
    }
    if (isset($_SESSION['s5'])) {
        $clickid = $_SESSION['s5'];
    }
    if (isset($_REQUEST['s2'])) {
        $s2 = $_REQUEST['s2'];
    }else{
        $s2='';
    }
    if (isset($_REQUEST['s3'])) {
        $s3 = $_REQUEST['s3'];
    }else{
        $s3='';
    }
	if (isset($_REQUEST['uid'])) {
        $uid = $_REQUEST['uid'];
    }else{
        $uid='';
    }
    if (isset($_REQUEST['s1'])) {
        $s1 = $_REQUEST['s1'];
    }else{
        $s1='';
    }
    if (isset($_REQUEST['mobile_verify'])) {
        $mobile_verify = $_REQUEST['mobile_verify'];
    }
    $query = "insert ignore into $table (first_name,last_name,email,mobile_no,amount,zip_code,ip,agree_mobile,subid,clickid,date,website_name) values ('$first_name','$last_name','$email','$mobile_no','$amount','$zip_code','$ip','$mobile_verify','$subid','$clickid',NOW(),'$website_name')";
    iud($query);
    header("location:form.php?firstname=$first_name&lastname=$last_name&email=$email&zip=$zip_code&amount=$amount&s1=$s1&s2=$s2&s3=$s3&uid=$uid");
}



if (isset($_REQUEST['unsubmail'])) {
    $email = $_REQUEST['unsubmail'];
    $table = "website_unsub";
    $website_name = "quikcashloan.com";
    $query = "insert ignore into $table (email,date,website_name) values ('$email',NOW(),'$website_name')";
    iud($query);
    // header("location:index.php");
    header("location:index.php?message=success");
}
if (isset($_REQUEST['subscriber'])) {
    $email = $_REQUEST['subscriber'];
    $table = "website_subscribe";
    $website_name = "quikcashloan.com";
    $ip = get_ip();
    $query = "insert ignore into $table (email,date,ip,website_name) values ('$email',NOW(),'$ip','$website_name')";
    iud($query);
    header("location:index.php");
    
}
if (isset($_REQUEST['contact_us'])) {
    $email = $_REQUEST['email'];
    $first_name = $_REQUEST['firstname'];
    $last_name = $_REQUEST['lastname'];
    $message = $_REQUEST['message'];

    $table = "website_getinitouch";
    $website_name = "quikcashloan.com";
    $ip = get_ip();
    $query = "insert ignore into $table (name, email, text, date, website_name) values ('$first_name $last_name','$email','$message',NOW(),'$website_name')";
    iud($query);
    // header("location:index.php");
    header("location:index.php?message=success");
}

?>