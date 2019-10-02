Laravel package for validate Us street address
# Installation 
Open Your Terminal and run the following command on your laravel installaing directory 
#
composer require zahidcse/us-address
#
Or add the   "zahidcse/us-address": "*"  to your root composer.json file and run 
#
composer install

# How does it work
This package will validate Only us address with zip code and street number other wise it will not validate.
# How to use
 <?php 
 Use Zahidcse\Usaddress\Address;
 $str = "345 Park Avenue New York, NY 10019";
 if(Address::validateUsStreet($str)){
    /* Valid */
 }
 ?>

