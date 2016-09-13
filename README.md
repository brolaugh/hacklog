
# HackLog
A multiuser blog portal with support for blogs and personalities per user.

# Conceive

## What should you be able to do
* Post blogposts
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

## Technical details
* General
  * Use composer
  * Minimal reloading -> Ajax
* Security
  * XSS safe
  * CSRF safe
  * SQL injection safe
  * Validated links
  * Swedish PUL compliant
* Language and processing
  * Processed by the HHVM engine
  * Written in HackLang
  * Primarily uses nginx
* Backend
  * MVC structure
  * Can use both cookies and sessions to check login
  * Separate *non text media* uploading service
  * Hashed and salted password
  * Relational database
  * Single database, no cluster, backups possible
* Frondend
  * Uses twig for rendering of html
  * Bootstrap
  * Posts are written in markdown. (Alternatives org-mode)
  * Primarily jQuery, plain javascript, TYPESCRIPT(???) or CoffieScript(???)?
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

## For developing
* [phpunit/phpunit](https://github.com/sebastianbergmann/phpunit)
* [hackpack/hackunit](https://github.com/HackPack/HackUnit)
* [joseph-lenton/php-error](https://github.com/JosephLenton/PHP-Error/)? (if it works with HackLang)
