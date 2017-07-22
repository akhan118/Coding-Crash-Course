<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Results';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

<p>
<? if ($results) {

  for($i=0; $i < count($results); $i ++)
  {

  //   echo "<pre>";
  //
  // var_dump ( $results[$i]);
  //
  // echo "</pre>";

  echo 'Product Name: ' ; echo $results[$i]["ProductName"];
  echo '</br>';
  echo 'Product Price: ' ; echo $results[$i]["ProductPrice"];
  echo '</br>';

  echo 'Product Desc: ' ; echo $results[$i]["ProductCartDesc"];
  echo '</br>';
  echo 'Product Thumb: ' ; echo $results[$i]["ProductThumb"];


  echo '<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="'.$results[$i]["ProductThumb"].'" alt="...">
    </a>
  </div>
  ...
</div>';
  }


//   echo "<pre>";
//
// var_dump ( $results);
//
// echo "</pre>";
//
//
//
//   var_dump($results);
//
// echo "</br>";
// echo "</br>";
//
// echo "</br>";
//
//   var_dump($results[0]);
//
//   echo "</br>";
//   echo "</br>";
//
//   echo "<pre>";
//
// var_dump ( $results[0]["ProductID"]);
//
// echo "</pre>";
//
//
// echo  $results[0]["ProductID"];


  // foreach($results as $obj)
  // {
  //   echo $obj->ProductName;
  //   // echo $obj->image;
  // }
} ?>
</p>

</div>
