<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css',
        "template/vendor/bootstrap/css/bootstrap.min.css",
        "template/vendor/bootstrap-icons/bootstrap-icons.css",
        "template/vendor/glightbox/css/glightbox.min.css",
        "template/vendor/swiper/swiper-bundle.min.css",
        "template/css/main.css",
];
    public $js = [
        "template/vendor/bootstrap/js/bootstrap.bundle.min.js",
        "template/vendor/php-email-form/validate.js",
        "template/vendor/aos/aos.js",
        "template/vendor/glightbox/js/glightbox.min.js",
        "template/vendor/swiper/swiper-bundle.min.js",
        "template/vendor/waypoints/noframework.waypoints.js",
        "template/vendor/imagesloaded/imagesloaded.pkgd.min.js",
        "template/vendor/isotope-layout/isotope.pkgd.min.js",
        "template/js/main.js",
        "template/vendor/jquery/jquery-3.2.1.min.js",
        "template/vendor/bootstrap/js/popper.js",
        "template/vendor/bootstrap/js/bootstrap.js/bootstrap.min.js",
        "template/vendor/select2/select2.js/select2.min.js",
        "template/vendor/tilt/tilt.jquery.min.js",
        "template/vendor/tilt/tilt.jquery.min.js",
        "template/js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
