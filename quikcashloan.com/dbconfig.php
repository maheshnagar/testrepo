<?php

/*  $dbserver = "gettrickle.com";
$dbuser = "trickle";
$dbpwd = "Y0BCfz4x+ulFvBaQus3O";
$dbname = "trickle";  */
$dbserver = "awswebsites.celwyaoa0np3.us-east-1.rds.amazonaws.com";
$dbuser = "dbadmin";
$dbpwd = "opossible123456";
$dbname = "trickle";

if (!mysqli_connect($dbserver, $dbuser, $dbpwd)) {
    header("location:database.php");
}

function connection() {
    global $dbserver, $dbuser, $dbpwd, $dbname;
    $cid = mysqli_connect($dbserver, $dbuser, $dbpwd, $dbname) or die("Connectivity Error Try Again");
//mysqli_select_db($cid,$dbname);   comment date 12-dec-2014
    return $cid;
}

function check_mysql() {
    global $mysql;
    if ($mysql == 0) {
        echo"Mysql Going To Restart Can't Execute Script.";
        exit;
    }
}

/* =================================function start========================== */

function iud($query) {
    $cid = connection();
    mysqli_query($cid, $query);
    $n = mysqli_affected_rows($cid);
    $_SESSION['lastid'] = mysqli_insert_id($cid);
    $error = mysqli_error($cid);
    $error_no = mysqli_errno($cid);
    mysqli_close($cid);
    if ($n >= 1)
        return $n;
    else {
        if (strlen(trim($error)) > 0) {
            //portal_mysql_error($error, $error_no, $query);
            echo "Mysql Error : " . $error . " : ";
        }
        return $error;
    }
}

/* =================================function end========================== */

/* =================================function start========================== */

function lastinsertid() {
    if (isset($_SESSION['lastid']))
        return $_SESSION['lastid'];
}

/* =================================function end========================== */


/* =================================function start========================== */

function select($query) {
    $cid = connection();
    $rs = mysqli_query($cid, $query);
    @$n = mysqli_num_rows($rs);
    $error = mysqli_error($cid);
    $error_no = mysqli_errno($cid);
    mysqli_close($cid);
    if ($n >= 1)
        return $rs;
    else {
        if (strlen(trim($error)) > 0) {
            //portal_mysql_error($error, $error_no, $query);
            echo "Mysql Error : " . $error . " : ";
        }
        return $error;
    }
}

/* =================================function end========================== */

/* =================================function start========================== */

function one($query) {
    $cid = connection();
    $rs = mysqli_query($cid, $query);
    @$n = mysqli_num_rows($rs);
    $row = mysqli_fetch_array($rs);
    $error = mysqli_error($cid);
    $error_no = mysqli_errno($cid);
    mysqli_close($cid);
    if ($n >= 1)
        return $row[0];
    else {
        if (strlen(trim($error)) > 0) {
            //portal_mysql_error($error, $error_no, $query);
            echo "Mysql Error : " . $error . " : ";
        }
        return $error;
    }
}

/* =================================function end========================== */
?>
