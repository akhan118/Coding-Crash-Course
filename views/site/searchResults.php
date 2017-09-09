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
      <!-- using php to echo the Url to indexing into an array.  Last week the class
basically, were at a point of having an array of results.  After typing in a search box we got these structures.  But we want to gey the structure out of there.  Created a for loop in ine 21 to count how many results you got and loop over it.  Once we know that we will esserntially start writing out HTML and CSS. We will write this out for every result in our structure.  -->
    <!-- "Follow the White Rabbit" -Alice in Wonderland -->






    <div class="col-md-4">
          <div class="thumbnail">
              <img src="<? echo $results[$i]["ProductThumb"];?>" >
          </div>
    </div>
    <!-- ProductID -->

    <div class="col-md-8">
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
else
{

 ?>

<p> No Products matches your search term </p>


 <? 
 
}
 ?>

</div>
