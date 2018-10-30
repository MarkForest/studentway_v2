<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 24.10.2018
 * Time: 13:07
 */

namespace app\controllers;


use yii\web\Controller;

class TourController extends Controller
{
    public $layout = 'tours';
    public function actionIndex(){
        return $this->render('index',[]);
    }
}