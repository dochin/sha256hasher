wordpress-sha256hasher
======================

Wordpress plugin to hash passwords using standard crypt sha256.

This is convenient because:
a. An SHA256 hash with salt will fit in the default wordpress user 
   database without making the password field larger
b. Using standard crypt() sha256 lets you use the wordpress password
   database for lots of other applications, like file servers, http
   password protected directories, mail servers, etc.

Sure there are stronger hashes, but none I could find that fit both
a. and b. above and are available in binary format for popular Linux 
distros.   

!!!Use at your own risk!!!

Critique of the salt generation is welcome as long as it includes 
suggestions to improve security.  Feel free to issue a pull request
with your changes.
