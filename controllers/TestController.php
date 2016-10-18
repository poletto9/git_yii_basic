<?php

namespace app\controllers;

/**
 * Created by IntelliJ IDEA.
 * User: tewapong
 * Date: 18/10/2559
 * Time: 15:39
 */

use \yii\web\Controller;

class TestController extends Controller  {

    public function actionFirst()
    {
        $str = 'Hello test controller';
        return $this->render('first',['str' => $str]);
    }
}