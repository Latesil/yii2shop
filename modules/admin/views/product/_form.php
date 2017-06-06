<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->textInput() ?>
    
    <div class="form-group field-product-category_id">
        <label class="control-label" for="product-category_id">Parent ID</label>
        <select id="category-parent_id" class="form-control" name="Product[category_id]">
            <?= app\components\MenuWidget::widget(['tpl' => 'product_select', 'model' => $model]) ?>
        </select>
    </div>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyword')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hit')->checkbox(['0', '1'], ['prompt' => '']) ?>

    <?= $form->field($model, 'sale')->checkbox(['0', '1'], ['prompt' => '']) ?>

    <?= $form->field($model, 'new')->checkbox(['0', '1'], ['prompt' => '']) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
