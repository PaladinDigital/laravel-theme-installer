# Laravel Theme Installer

This packages enables themes to be installed using composer - in a consistant place seperate from an applications view directory.

Themes installed using this installer package creates a themes folder within the resources folder and thus can be used regardless of which actual laravel version is used (some laravel versions may need to add additional loading configuration for this path, eg. Laravel 4).
 
## Creating a theme

WIP:

### Composer.json
    {
      "name": "yournamespace/laravel-theme-name",
      "type": "laravel-community-theme",
      "require": {
        "paladindigital/laravel-theme-installer": "dev-master"
        "paladindigital/laravel-theme-loader": "dev-master"
      }
    }

### Slots, Yields

In order to enable user switching of themes they should use a consistent set of yields, slots and if applicable components.

This idea is inspired by wordpress hooks, laravel community themes should create standardised area's to allow custom 'plugins' to also interact with the theme.

We have defined some common ones below and welcome further community discussion on this via the issue board.

#### Yields

 - head
 - meta
 - styles
 - navigation (The themes primary navigation area)
 - secondary_navigation (Optional: May not be used on all themes, in which case output should be along side the primary navigation).
 - content
 - footer
 - sidebar (Optional: Again, some themes may not have a sidebar as such, however they should still yield the content somewhere.)
 - widgets
 - scripts (Scripts which are usually output before the closing body tag.)

#### Components

TODO