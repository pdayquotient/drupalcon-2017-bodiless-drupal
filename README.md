DrupalCon: Baltimore 2017  
_Sponsored by [Quotient, Inc.](http://www.quotient-inc.com)_

# Environment Setup

All examples were developed against Drupal 8.3 using Acquia Dev Desktop Version 2, built on March 23, 2017.

Acquia Dev Desktop Downloads  
- [Mac](https://dev.acquia.com/sites/default/files/downloads/dev-desktop/AcquiaDevDesktop-2-2017-03-23.dmg)  
- [Windows](https://dev.acquia.com/sites/default/files/downloads/dev-desktop/AcquiaDevDesktop-2-2017-03-23.exe)  

# Bodiless Example

This example demonstrates a Drupal page which renders content stored in an external file. All functional features of Drupal are available and may be used, with the exception of the database.

```
Before installing the module
----------------------------
You will need to make a minor modification to the code to ensure
Drupal knows where the external file lives. Edit the file path on
Line 17 of modules/bodiless/src/Controller/BodilessController.php
```

# Bodiless & Headless Example

This example demonstrates using Drupal for Form API and Permissions. The bodiless_and_headless module builds the form to edit an external file (located in the node-bodiless-headless-drupal directory). The file is rendered by a small node.js application.

```
Before installing the module
----------------------------
You will need to make a minor modification to the code to ensure
Drupal knows where the external file lives. Edit the file path on
Line 20 of modules/bodiless_and_headless/src/Form/ContentForm.php
```

Copy the files in the nodejs-bodiless-headless-drupal folder to your node.js application's root folder. The path to sample.txt is the path you need to put into line 20 referenced above.

## Prerequisites
- node.js (v4.6.0)

# Soulful Example

This example makes use of only Drupal's routing.
