<?php
/*
Plugin Name: Lightbox with PhotoSwipe
Plugin URI: https://wordpress.org/plugins/lightbox-photoswipe/
Description: Lightbox with PhotoSwipe
Version: 3.4.2
Author: Arno Welzel
Author URI: http://arnowelzel.de
Text Domain: lightbox-photoswipe
*/
namespace LightboxPhotoSwipe;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use LightboxPhotoSwipe\LightboxPhotoSwipe;

defined('ABSPATH') or die();

require(__DIR__ . '/vendor/autoload.php');

// Initialize plugin

$lightbox_photoswipe = new LightboxPhotoSwipe(__FILE__);
