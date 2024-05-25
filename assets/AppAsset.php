<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
        'css/style2.css',
        'css/style3.css',
        'js/owlcar/css/owl.theme.default.min.css',
        'js/owlcar/css/owl.carousel.min.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/owlcar/js/owl.carousel.min.js',
        'js/main.js',
        'js/load.js',
        'js/carus.js',
        'js/stars.js',

        'js/burg.js',
        'js/load_cart.js',
        'js/stars.js',
        'js/stars_cart.js',
        'js/stars_item.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
