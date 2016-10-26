# HackLog
[![Travis Build Status](https://travis-ci.org/brolaugh/hacklog.svg?branch=master)](https://travis-ci.org/brolaugh/hacklog)
[![Code Climate](https://codeclimate.com/github/brolaugh/hacklog/badges/gpa.svg)](https://codeclimate.com/github/brolaugh/hacklog)
[![Semaphore Build Status](https://semaphoreci.com/api/v1/brolaugh/hacklog/branches/master/badge.svg)](https://semaphoreci.com/brolaugh/hacklog)

A multiuser blog portal with support for blogs and personalities per user.

# Conceive

## What should you be able to do
  * Post blog posts
  * Have multiple personalities (personal, hobby, professional etc.)
  * Comment on blog posts
  * Schedule the publishing of a blog post
  * Upload pictures
  * Upload videos
  * Request forgot password link
  * Mobile friendly
  * Multiple possible skins to choose from
  * 18+ filter
  * Multiple language support
  * Ability to select the language a post is written in (Google Translate API?)

## Technical details
  * General
    * Use composer
    * Minimal reloading -> Ajax
      * URL is updated accordingly
    * Ability to switch between GET variables and SEO optimized url
      * As follows
        * SEO domain.tld/blogname/post/postname
        * GET domain.tld?b=blogname&url=/post/postname
      * This would probably help with building API in future
  * Security
    * XSS safe
    * CSRF safe
    * SQL injection safe
    * Validated links
    * Swedish PUL compliant
  * Language and processing
    * Processed by the HHVM engine
    * Written in HackLang (or atleast PHP 7 typed)
    * Primarily uses nginx
  * Backend
    * MVC structure
    * Can use both cookies and sessions to check login
    * Media (Image, video, sound)
      * Media is saved to filesystem
      * File location stored in database
      * Hack does stuff and tells nginx to deliver file
    * Hashed and salted password
    * Relational database
    * Single database, no cluster, backups possible
  * Frontend
    * Uses twig for rendering of html
    * Bootstrap
    * Posts are written in markdown. (Alternatives org-mode)
    * Primarily jQuery, plain JavaScript, TYPESCRIPT(???) or CoffeeScript(???)?
  * Fullstack
    * Recaptcha
    * Uses JSON for data transfer with Ajax and eventual other frontend
    * XML supported in the future?

# Goals
## For the project
  * Create a functioning and expandable blogging portal
  * Easily expandable

## Personal
  * Learn HackLang
  * Learn how to combine multiple services together eg. media uploading service
  * Figure out how git submodules work
  * Get a deeper programming experience
  * Learn how to use PHPUnit/HackUnit

# Libraries
## For running
  * [facebook/hhvm](https://github.com/facebook/hhvm)
  * [composer/composer](https://github.com/composer/composer)
  * [alexgarett/violin](https://github.com/alexgarrett/violin)
  * [erusev/parsedown](https://github.com/erusev/parsedown)
  * [erusev/parsedown-extra](https://github.com/erusev/parsedown-extra)?
  * Error flasher, develop on my own?
  * [sybio/image-workshop](https://github.com/Sybio/ImageWorkshop)

## For developing
  * [phpunit/phpunit](https://github.com/sebastanbergmann/phpunit)
  * [hackpack/hackunit](https://github.com/HackPack/HackUnit)
  * [joseph-lenton/php-error](https://github.com/JosephLenton/PHP-Error/)? (if it works with HackLang)
