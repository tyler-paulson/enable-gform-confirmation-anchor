<?php
/*
Plugin Name: Enable Gravity Forms Confirmation Anchors
Description: Enables Gravity Forms confirmation anchors on all forms
Version:     1.0.0
Author:      Tyler Paulson Design & Development, Inc
Author URI:  https://tylerpaulson.com
License:     GPLv3
*/

defined( 'ABSPATH' ) or die('No script kiddies please!');

add_filter( 'gform_confirmation_anchor', '__return_true' );