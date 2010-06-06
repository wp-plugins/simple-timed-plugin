<?php
/*
Plugin Name: Simple Timed Content
Plugin URI: http://www.artiss.co.uk/simple-timed-content
Description: Force post or page content to appear or expire
Version: 1.0
Author: David Artiss
Author URI: http://www.artiss.co.uk
*/
add_shortcode('timed','simple_timed_content');
function simple_timed_content($paras="",$content="") {
    extract(shortcode_atts(array('ondate'=>'','ontime'=>'','offdate'=>'','offtime'=>''),$paras));
    $current_date=date("Ymd");
    $current_time=date("Hi");
    // Set the on date
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
    // Set the other date and time values
    if ($offdate=="") {$offdate=$current_date;}
    if ($ontime=="") {$ontime="0000";}
    if ($offtime=="") {$offtime="2400";}
    $display=1;
    // Date out of range
    if (($current_date<$ondate)or($current_date>$offdate)) {
        $display=0;
    } else {
        // Start time not yet met
        if (($current_date==$ondate)&&($current_time<$ontime)) {
            $display=0;
        } else {
            // End time has been passed
            if (($current_date==$offdate)&&($current_time>$offtime)) {
                $display=0;
            }
        }
    }    
    // Clear the content, if necessary
    if ($display!=1) {$content="";}   
    return $content;
}