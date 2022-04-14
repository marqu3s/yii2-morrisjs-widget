<?php

/**
 * @link https://github.com/marqu3s/yii2-morrisjs-widget
 * @copyright Copyright (c) 2015
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace marqu3s\morrisjs;

use yii\web\AssetBundle;

/**
 * ChartPluginAsset.php
 * 
 */
class ChartPluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/marqu3s/yii2-morrisjs-widget/assets';

    public $depends = [
        'yii\web\YiiAsset',
    ];
    
    public function init()
    {
        $this->js = YII_DEBUG ? ['js/raphael.min.js', 'js/morris.js'] : ['js/raphael.min.js', 'js/morris.min.js'];
        $this->css = ['css/morris.css'];
    }
}
