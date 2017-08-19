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
if ($results) {

  echo $results["ProductName"];

    //the below tags make it into a presentation...adds styling.  Saying just dump everything into the resulat
    //array.  
echo '<pre>';
  var_dump($results);
  echo '</pre>';
}
/*

  "Follow the White Rabbit" -Alice in Wonderland
*/


?>



<div class="row" id="result" >
    <div class="col-md-4" >

    </div>

  </a>
  </div>

  <br><br>




</div>
