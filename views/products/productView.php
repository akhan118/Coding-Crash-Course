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

/**/
    //results holds all the info you just clicked on.  A question migbt be how do I use it...
    //here;s how to use it...
    //
/*     if ($results) {

  echo $results["ProductName"];

    //the below tags make it into a presentation...adds styling.  Saying just dump everything into the resulat
    //array.
echo '<pre>';
  var_dump($results);
  echo '</pre>';
}*/
/*

  "Follow the White Rabbit" -Alice in Wonderland
*/



if ($results) {

?>

<div class="row" id="result" >

<div class="col-md-6 text-center">
      <div class="thumbnail">
          <img src="<? echo $results["ProductThumb"];?>" >
      </div>
</div>

<div class="col-md-6">

    <div class="row" id="result-description" >
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
        <h3> <? echo $results["ProductName"]; ?>  </h3>
        <br>
        <h4> <?  echo 'Price: $'  ; echo $results["ProductPrice"]; ?>  </h4>
        <br>
        <h4> Product Description </h4>
        <p>  <? echo $results["ProductLongDesc"]; ?>  </p>
      </div>
      <div class="col-md-2">
      </div>
    </div>

    <div class="row" id="purchase-button-row" >
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
        <button  class="btn btn-primary btn-block">
          <span class="glyphicon glyphicon-shopping-cart"></span>
          Add To Cart
        </button>
      </div>
      <div class="col-md-2">
      </div>
    </div>

  </div>
</div>

<? } ?>


</div>
