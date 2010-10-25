<?php
/*
Plugin Name: Simple Timed Content
Plugin URI: http://www.artiss.co.uk/simple-timed-content
Description: Force post or page content to appear or expire
Version: 1.1.1
Author: David Artiss
Author URI: http://www.artiss.co.uk
*/
add_shortcode('timed','simple_timed_content_sc');
define('simple_timed_content_version','1.1.1');

// Shortcode function to display or hide content
function simple_timed_content_sc($paras="",$content="") {
    extract(shortcode_atts(array('ondate'=>'','ontime'=>'','onday'=>'','offdate'=>'','offtime'=>'','offday'=>''),$paras));
    if (timed_content_code($ondate,$ontime,$onday,$offdate,$offtime,$offday)) {
        return "<!-- Simple Timed Content v".simple_timed_content_version." | http://www.artiss.co.uk/simple-timed-content -->\n".$content."<!-- End of Simple Timed Content -->\n";
    } else {
        return;
    }
}

// Function which will return true or false to caller, depending on whether content
// should be shown or not
function simple_timed_content($paras) {
    $ondate=get_timed_content_parameters($paras,"ondate");
    $ontime=get_timed_content_parameters($paras,"ontime");
    $onday=get_timed_content_parameters($paras,"onday");
    $offdate=get_timed_content_parameters($paras,"offdate");
    $offtime=get_timed_content_parameters($paras,"offtime");
    $offday=get_timed_content_parameters($paras,"offday");
    return timed_content_code($ondate,$ontime,$onday,$offdate,$offtime,$offday); 
}

// Function to process supplied dates and time and decide if content should be shown
// Shouldn't be called directly, but instead by shortcode and function code
function timed_content_code($ondate,$ontime,$onday,$offdate,$offtime,$offday) {
    // Get current date and time information
    $local_time=strtotime(current_time('mysql'));
    $current_date=date("Ymd",$local_time);
    $current_time=date("His",$local_time);
    $current_day=date("N",$local_time);

    if ($ondate!="") {$ontrigger="date";} else {$ontrigger="day";}
    if ($offdate!="") {$offtrigger="date";} else {$offtrigger="day";}

    // If ondate or offdate specified, blank out their day equivalent (can't specify both)
    if ($ondate!="") {$onday="";}
    if ($offdate!="") {$offday="";}

    // Set the default days
    if (($onday=="")&&($offday=="")) {$onday=$current_day; $offday=$current_day;}
    if (($onday=="")&&(offday!="")) {$onday=$offday;}
    if (($onday!="")&&(offday=="")) {$offday=$onday;}

    // Set the default dates
    if ($ondate=="") {
        if ($offdate=="") {
            $ondate=$current_date;
            $offdate=$current_date;
        } else {
            if ($offdate<$current_date) {
                $ondate=$offdate;
            } else {
                $ondate=$current_date;
            }
        }
    }
    if ($offdate=="") {$offdate=$current_date;}

    // Set the default times
    if ($ontime=="") {$ontime="0000";}
    if ($offtime=="") {$offtime="2359";}

    //Work out if the days have been reached
    if (($onday!="")or($offday!="")) {
        $dayon=false;
        if ($offday<$onday) {
            if (($current_day>=$onday)or($current_day<=$offday)) {$dayon=true;}
        } else {
            if (($current_day>=$onday)&&($current_day<=$offday)) {$dayon=true;}
        }
    } else {
        $dayon=true;
    }

    // Work out if the date has been reached
    if (($current_date<$ondate)or($current_date>$offdate)) {$dateon=false;} else {$dateon=true;}

    // Work out if the time has been reached
    $timeon=true;
    if (($ontrigger=="date")&&($ondate==$current_date)&&($current_time<$ontime."00")) {$timeon=false;}
    if (($ontrigger=="day")&&($onday==$current_day)&&($current_time<$ontime."00")) {$timeon=false;}
    if (($offtrigger=="date")&&($offdate==$current_date)&&($current_time>$offtime."59")) {$timeon=false;}
    if (($offtrigger=="day")&&($offday==$current_day)&&($current_time>$offtime."59")) {$timeon=false;}

    // If all conditions are met, return true
    if (($timeon)&&($dayon)&&($dateon)) {
        return true;
    } else {
        return false;
    }
}

// Function to extract parameters from an input string (1.0)
function get_timed_content_parameters($input,$para) {
    $start=strpos(strtolower($input),$para."=");
    $content="";
    if ($start!==false) {
        $start=$start+strlen($para)+1;
        $end=strpos(strtolower($input),"&",$start);
        if ($end!==false) {$end=$end-1;} else {$end=strlen($input);}
        $content=substr($input,$start,$end-$start+1);
    }
    return $content;
}