#!/usr/bin/env php
<?php

/**
 * This script helps us to reset the current version of all assets we are loading.
 * It will run right after a deploy to assure that all browsers reload all assets
 * so that all users always have the latest version.
 */

$assetsFile = __DIR__ . '/../src/Views/AppPageTemplate.phtml';
$version = 'v=' . time();

file_put_contents(
    $assetsFile,
    str_replace(
        'define(\'ASSET_VERSION\', \'v=\' . time());',
        'define(\'ASSET_VERSION\', \'v=' . time() . '\');',
        file_get_contents($assetsFile)
    )
);

echo "RESET ASSET VERSION TO ... $version\n";