<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $content
 * @property string $img
 * @property string $keyword
 * @property string $description
 * @property integer $hit
 * @property integer $sale
 * @property integer $new
 * @property string $price
 * @property string $name
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }
    
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'content', 'price', 'name'], 'required'],
            [['category_id', 'hit', 'sale', 'new'], 'integer'],
            [['content', 'keyword', 'description', 'name'], 'string'],
            [['price'], 'number'],
            [['img'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'content' => 'Content',
            'img' => 'Img',
            'keyword' => 'Keyword',
            'description' => 'Description',
            'hit' => 'Hit',
            'sale' => 'Sale',
            'new' => 'New',
            'price' => 'Price',
            'name' => 'Name',
        ];
    }
}
