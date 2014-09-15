<?php
/*
  Plugin Name: Youngwhan's Simple Latex
  Plugin URI: http://blog.breadncup.com/yw-latex-wp-plugin/
  Description: Present Latex PNG image with [math] LATEX CONTEXT [/math].
  Version: 1.5.4
  Author: Youngwhan Song
  Author URI: http://blog.breadncup.com/

  Copyright: Youngwhan Song
  License: GPL2+
*/
/*  Copyright 2009 Youngwhan Song  (email : breadncup@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( !defined('ABSPATH') ) exit;

add_option('yw_latex_mathtex', 'http://www.forkosh.com/mathtex.cgi');

class YW_LATEX {
    function yw_init() {
#        remove_filter( 'the_content', 'wpautop' );
        add_filter( 'the_content', array(&$this, 'yw_pre_process_shortcode') , 7);
#        add_filter( 'the_content', 'wpautop' , 12);
        add_shortcode('math', array(&$this, 'yw_get_math'));
    }

    // Reference: http://wpforce.com/prevent-wpautop-filter-shortcode/
    function yw_pre_process_shortcode($content) {
        global $shortcode_tags;

        // Backup current registered shortcodes and clear them all out
        $orig_shortcode_tags = $shortcode_tags;
        $shortcode_tags = array();

        add_shortcode('math', array(&$this, 'yw_get_math'));

        // Do the shortcode (only the one above is registered)
        $content = do_shortcode($content);

        // Put the original shortcodes back
        $shortcode_tags = $orig_shortcode_tags;

        return $content;
    }

    function yw_init_comment_shortcodes() {
        remove_all_shortcodes();
        $this->yw_init();
        add_filter('comment_text', 'do_shortcode');
    }

    function yw_get_math($atts, $syntax, $shortcode ) {
        extract(shortcode_atts(array(
                                   'pre' => '0',
                                   'align' => 'top',
                                   ), $atts));
        if (!$pre) {
            $mathtexurl = get_option('yw_latex_mathtex');
            $syntax = preg_replace('/\s/', '', $syntax);
            $yw_url='<img src="'.$mathtexurl.'?'.$syntax.'" style="float:'.$align.';" border="0px" />';
        } else if ($pre=='1') {
            $yw_url="[".$shortcode."]".$syntax."[/".$shortcode."]";
        } else {
            $yw_url=$syntax;
        }
        return $yw_url;
    }
}

/* Main */
if (is_admin()) {
    require(dirname( __FILE__ ).'/yw-latex-admin.php');
    $yw_latex = new YW_LATEX_ADMIN;
    add_action( 'init', array(&$yw_latex,'yw_admin_init'));
} else {
    $yw_latex = new YW_LATEX;
    add_action( 'init', array(&$yw_latex,'yw_init'));
    add_filter('comments_template', array(&$yw_latex,'yw_init_comment_shortcodes'));
}

?>
