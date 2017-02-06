<?php

namespace PaladinDigital\Composer\Plugin\LaravelTheme;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Installer\InstallerInterface;
use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;


class Installer extends LibraryInstaller
{
    public $packageType = 'laravel-community-theme';

    public function getInstallPath(PackageInterface $package)
    {
        return 'resources/themes/' . $package->getPrettyName() ;
    }

    public function supports($packageType)
    {
        return $this->packageType === $packageType;
    }
}
