<?php
/**
 * Created by IntelliJ IDEA.
 * User: tewapong
 * Date: 18/10/2559
 * Time: 16:11
 */

namespace app\controllers;

use \yii\web\Controller;

class AnamaiController extends Controller{

    public function actionTest(){

        $a = 3;
        $b = 5;
        $multi = $a*$b;

        return $this->render('test',['result'=>$multi]);
    }
}