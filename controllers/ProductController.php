<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use Yii;
use app\models\Category;
use app\models\Product;

/**
 * Description of ProductController
 *
 * @author Letalis
 */
class ProductController extends AppController 
{
    public function actionView($id)
    {
//        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if (empty($product))
        {
            throw new \yii\web\HttpException(404, 'Silence... Nothing more... ');
        }
//        $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();
        $hits = Product::find()->where(['hit' => '1'])->limit(5)->all();
        $this->setMeta('E-SHOPPER | '. $product->name, $product->keyword, $product->description);
        return $this->render('view', compact('product', 'hits'));
    }
}
