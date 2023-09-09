# Cognac Box

A super-simple LAMP stack for Vagrant.

A pre-configured Vagrant Box with a full array of features to get you up and running with Vagrant in no time.

## Features

* OS: Ubuntu-22.04-LTS (Jammy Jellyfish) ** Long term support through 2027
* APACHE: 2.4 with headers, rewrite, includes, expires
* PHP: PHP 8.2 with Zend Engine v4.2 (Zend OPCache v8.2)
  * PHP Modules: bcmath, bz2, cgi, gd, imap, intl, mbstring, odbc, pspell, tidy, xmlrpc, zip
  * Other stuff: Enchant 1.60, Curl 7.81, ImageMagick 6.9, Composer 2.6
* VIM: 8.2
* Databases: MySQL 8.0, SQLite 3.37, Redis 6.0, MEMCACHE 
* Beanstalkd, NGROK,  Mailhog
* NodeJS: 18-TLS (NPM 6.14.4)
  * gulp, grunt, bower, yo, browser-sync, browserify, pm2, webpack
* GoLang: 1.21
* Python: 3.10
* OpenSSL: 3.0.2
* VirtualBox Host Additions for version 7.0


## Supports
* All major PHP frameworks including Laravel & Symfony!


## Release Notes

# Version 4.0
* NEW: Ubuntu 22 LTS (Long Term Support)
* NEW: PHP 8.2 and Composer 2.6
* HTTPS/SSL: Self Signed https enabled by default and valid through September 2028
* General update of all features to latest available as of September 2023


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