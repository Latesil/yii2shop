<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;
use yii\db\ActiveRecord;

/**
 * Description of Cart
 *
 * @author Letalis
 */
class Cart extends ActiveRecord 
{
    public function addToCart($product, $qty = 1 )
    {
        echo 'Worked!';
    }
}
