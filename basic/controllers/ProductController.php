<?php
/**
 * Created by PhpStorm.
 * User: 余灏然
 * Date: 2018/1/19
 * Time: 12:44
 */
namespace app\controllers;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'layout2';
        //views/product/index.php
        return $this->render("index");
    }
    public function actionDetail()
    {
        $this->layout = 'layout2';
        return $this->render("detail");
    }
}