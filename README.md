wordpress-sha256hasher
======================

Wordpress plugin to hash passwords using standard crypt sha256.

Copyright 2014 by Jason Campbell
License: GPLv2
Contact: dochin@campound.org
Web: https://github.com/dochin/wordpress-sha256hasher

Use at your own risk!  I know it's barely enough code to even call a plugin,
but maybe someone will find it useful.

Purpose
=======

This replaces the password hashing function built into wordpress in pluggable.php.

An SHA256 hash is convenient because:
a.	An SHA256 hash with salt will fit in the default wordpress user 
	database without making the password field larger
b.	Using standard crypt() sha256 lets you use the wordpress password
   	database for lots of other applications, like file servers, http
	password protected directories, mail servers, etc.

Sure there are stronger hashes, but none I could find that fit both
a. and b. above and are available in binary format for popular Linux 
distros.   

Critique of the salt generation is welcome as long as it includes 
suggestions to improve security.  Feel free to issue a pull request
with your changes.


Installation
=========================

1. Copy the "sha256hasher" folder to /wp-content/plugins/
2. Log into your wordpress admin interface
3. Browse to the plugins page
4. Select the sha256hasher plugin and choose "Activate"
5. Change your password.
*NOTE: If you log out before you complete step 5 you will have to reset your password
6. Inform your users they must reset their passwords.

You may want to use something like this to reset user passwords:
https://wordpress.org/plugins/emergency-password-reset/faq/

An even better strategy is to activate this plugin before you start adding users to your site.
