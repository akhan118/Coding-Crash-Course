<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->ProductID;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ProductID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ProductID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ProductID',
            'ProductSKU',
            'ProductName',
            'ProductPrice',
            'ProductWeight',
            'ProductCartDesc',
            'ProductShortDesc',
            'ProductLongDesc:ntext',
            'ProductThumb',
            'ProductImage',
            // 'ProductCategoryID',
            'ProductUpdateDate',
            'ProductStock',
            'ProductLive',
            'ProductUnlimited',
            'ProductLocation',
            'productcategories_CategoryID',
        ],
    ]) ?>

</div>
