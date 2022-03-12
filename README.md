# Cognac Box

A super-simple LAMP stack for Vagrant.

A pre-configured Vagrant Box with a full array of features to get you up and running with Vagrant in no time.

*** Update Imagick

## Features

* OS: Ubuntu-18.04-LTS (Bionic) ** Long term support through 2028
* APACHE: 2.4.52 with headers, rewrite, includes, expires
* PHP: 
  * PHP 8.1.3 with Zend Engine v4.1.3 (Zend OPCache v8.1.3) 
  * PHP 8.0.16 with Zend Engine v4.0.16 (Zend OPCache v8.0.16) 		
  * PHP Modules: bcmath, bz2, cgi, gd, imap, intl, mbstring, odbc, pspell, tidy, xmlrpc, zip
  * Other stuff: Curl 7.58, ImageMagick 3.6.0 (6.9.7-4)
* Composer 2.2.7 
* VIM: 8.2.343
* Databases: MySQL 8.0.28, SQLite 3.22, Redis 5.3.6, MEMCACHE 3.1.5
* Beanstalkd, NGROK,  Mailhog
* NodeJS: 14.16.0 (NPM 6.14.4)
  * gulp, grunt, bower, yo, browser-sync, browserify, pm2, webpack
* GoLang: 1.17
* Python: 3
* OpenSSL: 1.1.1
* VirtualBox Host Additions for version 6.1.28


## Supports
* All major PHP frameworks including Laravel & Symfony!


## Release Notes

# Version 3.1
* Updated to latest apt updates/upgrades
* Resolved known MySQL PGP key signature [https://github.com/reddingwebpro/cognacbox/issues/12]
* Resolved MySQL access issue [https://github.com/reddingwebpro/cognacbox/issues/9]

# Version 3.0.1
* Resolved cosmetic motd bug #8
* Updated to latest apt updates/upgrades

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

## Known Issues
* MySQL PGP key issue when running apt-get update, will be fixed in next release