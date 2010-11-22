<?php
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

class YW_LATEX_ADMIN extends YW_LATEX {
    function yw_admin_init() {
        parent::yw_init();
        add_action('admin_menu', array(&$this,'yw_admin_option'));
    }
    function yw_admin_option() {
        add_options_page('Youngwhan\'s Simple Latex Plugin Options', 'YW Latex', 10, dirname( __FILE__ ).'/yw-latex-options.php');
    }
}
?>