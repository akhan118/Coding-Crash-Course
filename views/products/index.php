<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
      <?= Html::a('Create Products 2', ['createproduct'], ['class' => 'btn btn-success']) ?>

        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProductID',
            'ProductSKU',
            'ProductName',
            'ProductPrice',
            'ProductWeight',
            // 'ProductCartDesc',
            // 'ProductShortDesc',
            // 'ProductLongDesc:ntext',
            // 'ProductThumb',
            // 'ProductImage',
            // 'ProductCategoryID',
            // 'ProductUpdateDate',
            // 'ProductStock',
            // 'ProductLive',
            // 'ProductUnlimited',
            // 'ProductLocation',
            // 'productcategories_CategoryID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
