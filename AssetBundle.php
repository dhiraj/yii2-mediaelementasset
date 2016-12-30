<?php
/**
 * AssetBundle.php
 * @author Dhiraj Gupta
 * @link http://traversient.com
 */

namespace traversient\yii\mediaelement;
use yii\web\View;

/**
 * Class AssetBundle
 * @package dhiraj\yii\pagepiling
 */
class AssetBundle extends \yii\web\AssetBundle
{

    /**
     * @inherit
     */
    public $sourcePath = '@bower/mediaelement/build';

    public $js = [
        'mediaelement-and-player.js',
    ];

    public $css = [
        'mediaelementplayer.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
    ];

}