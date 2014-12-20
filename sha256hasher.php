<?php
    
defined('ABSPATH') or die("No script kiddies please!");

/**
 * Plugin Name: sha256hasher
 * Description: Replaces default Wordpress hasher with SHA256-CRYPT compatible hasher
 * Version: 0.1
 * Author: dochin
 * License: GPL2 or later
 *
 * Replaces the MD5 multipass hasher in wordpress with an SHA256-CRYPT hash
 * with a salt.  This allows use of the password from the wordpress database
 * for authentication in non-PHP application that support crypt.  The salted
 * SHA256 password will fit in the default Wordpress database without increasing
 * the size of the password field.
 *
 * WARNING: You and your users will have to reset their passwords.  Ensure
 * e-mail addresses are correct.  If you are logged in you will stay logged in
 * but if you log out, you will have to reset your password before you can log
 * back in.
 *
 * @package WordPress
 */

/*  Copyright 2014
 
 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License, version 2, as
 published by the Free Software Foundation.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.
 
 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 * Create a hash (encrypt) of a plain text password.
 *
 * @global object $wp_hasher string
 *
 * @param string $password Plain text user password to hash
 * @return string The hash string of the password
 */

if ( !function_exists('wp_check_password') ) :
    
    function wp_hash_password($password) {

    global $wp_hasher;
        $wp_hasher = crypt($password, '$5$' . substr(sha1((string)rand().$user_email),2,18) ."$"); //uses the PHP crypt function compatible with libc.
        return $wp_hasher;
    }
    
endif;
