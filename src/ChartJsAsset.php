<?php

/*
 * This file is part of the 2amigos/yii2-chartjs-widget project.
 * (c) 2amigOS! <http://2amigos.us/>
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace dosamigos\chartjs;

use yii\web\AssetBundle;

/**
 *
 * ChartPluginAsset
 */
class ChartJsAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@npm/chart.js/dist';

    /**
     * @inheritdoc
     */
    public $js = [
        'chart.umd.js'
    ];

    /**
     * @inheritdoc
     */
    public $publishOptions = [
        'only' => ['chart.umd.*']
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
