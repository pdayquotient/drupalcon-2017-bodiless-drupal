# Bodiless Drupal Showcase  
DrupalCon: Baltimore 2017  
_Sponsored by [Quotient, Inc.](http://www.quotient-inc.com)_

## Environment Setup

All examples were developed against Drupal 8.3 using Acquia Dev Desktop Version 2, built on March 23, 2017.

Acquia Dev Desktop Downloads  
- [Mac](https://dev.acquia.com/sites/default/files/downloads/dev-desktop/AcquiaDevDesktop-2-2017-03-23.dmg)  
- [Windows](https://dev.acquia.com/sites/default/files/downloads/dev-desktop/AcquiaDevDesktop-2-2017-03-23.exe)  

## Headless Example

## Bodiless Example

## Bodiless and Headless Example

This example demonstrates an extreme case of using Drupal merely for the Form API and Permissions. The bodiless_and_headless module builds the form to edit an external file (located in the node-bodiless-and-headless directory). The file is rendered by a small node.js application.

```
Before installing the module
----------------------------
You will need to make a minor modification to the code to ensure
Drupal knows where the external file lives. Edit the file path on
Line 29 of modules/bodiless_and_headless/src/Form/ContentForm.php
```

### Prerequisites
- node.js (v4.6.0)

