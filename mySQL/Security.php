<?php 
/* SQL injection is a method used to sanitize data to stop
// users putting commands into files that SQL will interpret and can harm the site

We do this by using a command in our 'create' function:

    mysqli_real_escape_string($connection,$password);


this escapes any punctuation characters which tidies up our entries to the password field



PASSWORD ENCRYPTION:
====================

How to we make passwords secure? We encrypt their password so that if there was a data leak the encrypted passwords will protect the user's actual password

We change the maximum length of the User's password to 200 


the function we use to encrypt is crypt, used in conjunction with salt which adds security

specifically, crypt_blowfish which produces another style of encryption which is more secure than md5 and less secure than Sha-256 


     */




?>