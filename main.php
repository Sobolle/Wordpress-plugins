<?php
/*
Plugin Name: AJAX User list
Plugin URI: http://sobolle.ru
Description: Shortcode for displaying a list of users (include marks of on-line users) in PopUp window with AJAX
Version: 1.0
Author: Dmitriy Fedotov
Author URI: https:\\sobolle.ru
*/

/*  Copyright Dmitriy Fedotov  (email: mrsobolle@gmail.com)

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
add_shortcode ('sb-user-list', 'sb_show_list');
function sb_show_list() {
    $blogusers = get_users();
    $sb_list = ' ';
	foreach ($blogusers as $user) {
		$sb_list = $sb_list . '<li>' . $user->user_login . ' ' . $user->user_email . '</li>';
	};
	return $sb_list;

}
?>