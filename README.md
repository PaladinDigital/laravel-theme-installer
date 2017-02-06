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
        "paladindigital/laravel-theme-installer": "*"
      }
    }

### Slots, Yields

In order to enable user switching of themes they should use a consistent set of yields, slots and if applicable components.

We have defined some common ones below and welcome further community discussion on this via the issue board.

TODO