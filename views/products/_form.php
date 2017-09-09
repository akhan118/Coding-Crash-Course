<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProductSKU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductPrice')->textInput() ?>

    <?= $form->field($model, 'ProductWeight')->textInput() ?>

    <?= $form->field($model, 'ProductCartDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductShortDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductLongDesc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ProductThumb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductImage')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'ProductUpdateDate')->textInput() ?>

    <?= $form->field($model, 'ProductStock')->textInput() ?>

    <?= $form->field($model, 'ProductLive')->textInput() ?>

    <?= $form->field($model, 'ProductUnlimited')->textInput() ?>

    <?= $form->field($model, 'ProductLocation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'productcategories_CategoryID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
