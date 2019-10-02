Laravel package for validate Us street address
# Installation 
Open Your Terminal and run the following command on your laravel installaing directory 
```bash
composer require zahidcse/us-address
```
If not work   add
```bash
"zahidcse/us-address": "*" 
```
to your root composer.json file and run 
```bash
composer install
```
# How does it work
This package will validate only United State address with zip code and street. 
# How to use
 ```php
 Use Zahidcse\Usaddress\Address;
 $str = "345 Park Avenue New York, NY 10019";
 if(Address::validateUsStreet($str)){
    /* Valid */
 }
 ```


