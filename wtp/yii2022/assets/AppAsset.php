<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
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
        'css/customize.css',
        'css/flexslider.css',
        'css/responsive.css',
        'css/site.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery.carouFredSel-5.6.2.js',
        'js/jquery.contact.js',
        'jquery.easing.1.3.js',
        'jquery.flexslider.min.js',
        'jquery.func.js',
        'jquery.tweet.js',
        'modernizr.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
