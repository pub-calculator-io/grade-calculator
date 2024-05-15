<?php
/*
Plugin Name: CI Grade calculator
Plugin URI: https://www.calculator.io/grade-calculator/
Description: Our weighted grade calculator shows your average and what to earn for the final grade you want. A timesaver if you don't know how to calculate grades!
Version: 1.0.0
Author: Grade Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_grade_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Grade Calculator by www.calculator.io";

function display_calcio_ci_grade_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Grade Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_grade_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_grade_calculator', 'display_calcio_ci_grade_calculator' );