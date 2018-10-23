<?php

namespace myzero1\site;

use Yii;

/**
 * Site module definition class
 */
class Module extends \yii\base\Module implements \yii\base\BootstrapInterface
{
    /**
     * {@inheritdoc}
     */
    public function bootstrap($app)
    {
        if ($app instanceof \yii\web\Application) {
            $app->controllerMap['site'] = [
                'class'=>'myzero1\site\controllers\SiteController'
            ];
        } elseif ($app instanceof \yii\console\Application) {
            //
        }
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

}
