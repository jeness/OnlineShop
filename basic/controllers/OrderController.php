<?php
/**
 * Created by PhpStorm.
 * User: 余灏然
 * Date: 2018/1/19
 * Time: 18:49
 */
namespace app\controllers;
use yii\web\Controller;

class OrderController extends Controller
{
    public function actionIndex()
    {
        $this -> layout = 'layout2';
        return $this->render("index");
    }
    public function actionCheck()
    {
        $this->layout = 'layout1';
        return $this->render("check");
    }
}