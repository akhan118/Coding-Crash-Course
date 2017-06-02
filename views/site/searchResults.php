<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Results';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

// if results array from database has been passed
// for each of the results get the price and image link

<p>
<? if ($results) {

  foreach($results as $obj)
  {
    echo $obj->price;
    echo $obj->image;
  }
} ?>
</p>

</div>
