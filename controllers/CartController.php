<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use Yii;
use app\models\Product;
use app\models\Cart;
use app\models\Orders;
use app\models\OrderItems;

/**
 * Description of CartController
 *
 * @author Letalis
 */
class CartController extends AppController 
{
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $qty = !$qty ? 1 : $qty;
        $product = Product::findOne($id);
        if (empty($product)) { return false; }
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product, $qty);
        if ( !Yii::$app->request->isAjax )
        {
            return $this->redirect(Yii::$app->request->referrer);
        }
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }
    
    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }
    
    public function actionDelItem()
    {
        $id = Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart;
        $cart->recalc($id);
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }
    
    public function actionShow()
    {
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }
    
    public function actionView()
    {
        $session = Yii::$app->session;
        $session->open();
        $this->setMeta('Корзина');
        $order = new Orders;
        if ( $order->load(Yii::$app->request->post()) )
        {
            $order->qty = $session['cart.qty'];
            $order->sum = $session['cart.sum'];
            if ( $order->save() )
            {
                $this->saveOrderItems($session['cart'], $order->id);
                Yii::$app->session->setFlash('success', "All is ok!");
                Yii::$app->mailer->compose('order', ['session' => $session])
                        ->setFrom(['test@mail.ru' => 'yii2shop'])
                        ->setTo($order->email)
                        ->setSubject('order')
                        ->send();
                $session->remove('cart');
                $session->remove('cart.qty');
                $session->remove('cart.sum');
                return $this->refresh();
                //debug($order);
                
            }
            else
            {
                Yii::$app->session->setFlash('error', "Something went wrong!");
            }
        }
        return $this->render('view', compact('session', 'order'));
    }
    
    protected function saveOrderItems($items, $order_id) 
    {
        foreach ($items as $id => $item)
        {
            
            $order_items = new OrderItems();
            $order_items->order_id = $order_id;
            $order_items->product_id = $id;
            $order_items->name = $item['name'];
            $order_items->price = $item['price'];
            $order_items->qty_item = $item['qty'];
            $order_items->sum_item = $item['qty'] * $item['price'];
            $order_items->save();
        }
    }
}
