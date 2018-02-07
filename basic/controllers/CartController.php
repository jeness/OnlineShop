<?php
/**
 * Created by PhpStorm.
 * User: 余灏然
 * Date: 2018/1/19
 * Time: 18:40
 */
namespace app\controllers;
use yii\web\Controller;

class CartController extends Controller
{
    public function actionIndex()
    {
        $this->layout='layout1';
        //views/cart/index.php
        return $this->render('index');
    }
}