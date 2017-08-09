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

/*

  "Follow the White Rabbit" -Alice in Wonderland
*/

if ($results) {

  echo $results["ProductName"];

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
