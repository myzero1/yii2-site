<?php

namespace myzero1\site\controllers;

use yii\web\Controller;

/**
 * Default controller for the `captcha` module
 */
class SiteController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        // $this->layout = 'layout'; // using the view of module
        if ($this->module->theme == 'adminlteiframe') {
            // $this->layout = '//layout'; // using the view of app
            $this->layout = $this->module->indexLayout;
        }
        return $this->render('index'); // using the view of module
        // return $this->render('//index');  // using the view of app
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionLogin()
    {
        var_dump('expression');exit;
        return $this->render('index');
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionHome()
    {
        return $this->render('index');
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionRbacp403()
    {
        return $this->render('rbacp403');
    }

}
