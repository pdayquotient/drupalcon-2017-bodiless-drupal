DrupalCon: Baltimore 2017  
_Sponsored by [Quotient, Inc.](http://www.quotient-inc.com)_  
[Visit our DrupalCon: Baltimore 2017 page](http://www.quotient-inc.com/drupalcon)

**Quick Recap:**  
_FRONT END DRUPAL_

|---
| | Bodiless | Headless | Bodiless & Headless |
|---|:---:|:---:|:---:|
|Content| |&#10004;| |
|Display|&#10004;| | |
|Logic|&#10004;|&#10004;| |
|Security|&#10004;|&#10004;| |

_BACK END DRUPAL_

|---
| | Bodiless | Headless | Bodiless & Headless |
|---|:---:|:---:|:---:|
|Content| |&#10004;|x/&#10004;|
|Display|&#10004;|&#10004;|&#10004;|
|Logic|&#10004;|&#10004;|&#10004;|
|Security|&#10004;|&#10004;|&#10004;|

- _Bodiless Drupal:_ Drupal owns the display; does not own the data  
- _Headless Drupal:_ Drupal owns the data; does not own the display
- _Bodiless & Headless:_ Drupal does not own the data; does not own the display

# Environment Setup

All examples were developed against Drupal 8.3 using Acquia Dev Desktop Version 2, built on March 23, 2017.

Acquia Dev Desktop Downloads  
- [Mac](https://dev.acquia.com/sites/default/files/downloads/dev-desktop/AcquiaDevDesktop-2-2017-03-23.dmg)  
- [Windows](https://dev.acquia.com/sites/default/files/downloads/dev-desktop/AcquiaDevDesktop-2-2017-03-23.exe)  

**PLEASE NOTE:**  The examples below use a text file to demonstrate an external data source for Drupal and non-Drupal applications. In the real world, this text file would most likely be replaced by a database, RESTful API, JSON file, XML file, CSV file, or other structured and unstructured files. You would also want to add in validation, stronger security measures, and error checking. These examples are not exhaustive solutions - they simply demonstrate the concept of Bodiless Drupal.

## Prerequisites
- node.js (v4.6.0)

## Code
- Move the files in [repo]/nodejs-bodiless-headless-drupal to your node.js application root
- Copy the folders under [repo]/modules to your Drupal 8 modules folder
- Copy the [repo]/soulful.php file to your root Drupal 8 folder

# Bodiless Example

This example demonstrates a Drupal page which renders content stored in an external file. All functional features of Drupal are available and may be used, with the exception of the database.

```
Before installing the module
----------------------------
You will need to make a minor modification to the code to ensure
Drupal knows where the external file lives. Edit the file path on
Line 17 of modules/bodiless/src/Controller/BodilessController.php
```
## Demo  
- Front end: [drupal-url]/bodiless
- Admin (to edit external data file): [drupal-url]/admin/bodiless_and_headless/edit

# Bodiless & Headless Example

This example demonstrates using Drupal for Form API and Permissions. The bodiless_and_headless module builds the form to edit an external file (located in the node-bodiless-headless-drupal directory). The file is rendered by a small node.js application.

```
Before installing the module
----------------------------
You will need to make a minor modification to the code to ensure
Drupal knows where the external file lives. Edit the file path on
Line 20 of modules/bodiless_and_headless/src/Form/ContentForm.php
```
## Demo  
- Front end: [nodejs-url]/app.js
- Admin (to edit external data file): [drupal-url]/admin/bodiless_and_headless/edit

# Soulful Example

This example demonstrates using Drupal's routing system to pass content through Drupal to an external PHP script. The PHP script (our external application) calls a URL routed by Drupal, which returns a Symfony Response object after reading an external file for its contents.

## Demo  
- Front end: [drupal-url]/soulful.php
