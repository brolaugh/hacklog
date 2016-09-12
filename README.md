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

## Technical details
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
* Fullstack
  * Recaptcha
  * Uses JSON for data transfer with Ajax and eventual other frontend
  * XML supported in the future?
