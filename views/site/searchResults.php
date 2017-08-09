<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Results';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">

    <h1><? Html::encode($this->title) ?></h1>


<?

if ($results) {

  for($i=0; $i < count($results); $i++)
  {
  //  var_dump($results[$i]);

?>
<div class="row" id="result" >

    <!-- "Follow the White Rabbit" -Alice in Wonderland -->
  <a href=<?php echo Url::to(['products/product/'.$results[$i]["ProductID"]]) ?>>
    <!-- "Follow the White Rabbit" -Alice in Wonderland -->




    

    <div class="col-md-4" >
      <img class="img-responsive" src="<? echo $results[$i]["ProductThumb"];?>" style="width:256px;height:256px; border: 1px solid grey;">

    </div>
    <!-- ProductID -->

    <div class="col-md-8 ">
      <h4> <? echo 'Product Name: ' ; echo $results[$i]["ProductName"]; ?>  </h4>
      <p>  <?  echo 'Product Price: ' ; echo $results[$i]["ProductPrice"]; ?>  </p>
      <p>  <?  echo 'Product Desc: ' ; echo $results[$i]["ProductCartDesc"]; ?>  </p>
    </div>

  </a>
  </div>

  <br><br>



<?
  }
}
 ?>

</div>
