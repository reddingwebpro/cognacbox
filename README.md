# Cognac Box

A super-simple LAMP stack for Vagrant.

A pre-configured Vagrant Box with a full array of features to get you up and running with Vagrant in no time.


## Features

* OS: Ubuntu-18.04-LTS (Bionic) ** Long term support through 2028
* APACHE: 2.4.46 with headers, rewrite, includes, expires
* PHP: PHP 8.0.3 with Zend Engine v4.0.3 (Zend OPCache v8.0.3)
  * PHP Modules: bcmath, bz2, cgi, gd, imap, intl, mbstring, odbc, pspell, tidy, xmlrpc, zip
  * Other stuff: Enchant 1.60, Curl 7.58, ImageMagick 3.4.4 (6.9.7-4), Composer 2.0
* VIM: 8.2
* Databases: MySQL 8.0.20, SQLite 3.22, Redis 5.2.1, MEMCACHE 3.1.4
* Beanstalkd, NGROK,  Mailhog
* NodeJS: 14.16.0 (NPM 6.14.4)
  * gulp, grunt, bower, yo, browser-sync, browserify, pm2, webpack
* GoLang: 1.16
* Python: 2.7.17
* OpenSSL: 1.1.1j
* VirtualBox Host Additions for version 6.1.18


## Supports
* All major PHP frameworks including Laravel & Symfony!


## Release Notes

# Version 3.0
* NEW: PHP 8.0 and Composer 2.0 and Yarn 0.32
* HTTPS/SSL: Self Signed https enabled by default (access either http or https content)
* PHP sendmail now defaults to use Mailhog 
* General update of all features to latest available as of March 2021

# Version 2.3
* General update of all features to latest available as of June 2020

# Version 2.2
* Updated to fix the issue with "failed to create the raw output file"

# Version 2.0
* General update of all features to latest available as of March 2020
