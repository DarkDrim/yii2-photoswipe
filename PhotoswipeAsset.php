<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017 Power Kernel
 */

namespace darkdrim\photoswipe;


use yii\web\AssetBundle;

/**
 * Class PhotoswipeAsset
 * @package darkdrim\photoswipe
 */
class PhotoswipeAsset extends AssetBundle
{
    public $sourcePath = '@bower/photoswipe/dist';
    public $js = [
        'photoswipe.min.js',
        'photoswipe-ui-default.min.js'
    ];
    public $css = [
        'photoswipe.css',
        'default-skin/default-skin.css'
    ];
} 
