<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Store Front';

?>

<div class="row search-row">
  <div class="col-md-7"></div>
  <div class="col-md-5">
    <form  role="search" method="get" action="<?php echo Url::to(['site/test']) ?>" >
    <div class="col-md-10">

      <input type="text" class="form-control" id="exampleInputAmount" name="searchBox" placeholder="Search Catalog">
    </div>
    <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Search</button>
     </div>
   </form>
  </div>
</div>


<div class="row" >

    <!--Selection BAR -->
    <div class="col-md-3">
        <p class="lead">Categories</p>
        <div class="list-group">

          <a  class="list-group-item " href=<?php echo Url::to(['site/findbytype', 'type'=> 1]) ?>>
            MEN'S</a>
          <a  class="list-group-item " href=<?php echo Url::to(['site/findbytype', 'type'=> 2]) ?>>
            LADIES'</a>
        <a  class="list-group-item " href=<?php echo Url::to(['site/findbytype', 'type'=> 3]) ?>>
          KIDS'</a>
          <a  class="list-group-item " href=<?php echo Url::to(['site/index']) ?>>
            ALL</a>
        </div>
        <p class="lead">Type</p>
        <div class="list-group">
          <a class="list-group-item">T-SHIRT</a>
          <a class="list-group-item">KNIT</a>
          <a class="list-group-item">JACKET</a>
        </div>
        <p class="lead">Size</p>
        <div class="list-group">
          <a class="list-group-item">S</a>
          <a class="list-group-item">M</a>
          <a class="list-group-item">L</a>
        </div>

    </div>

      <div class="col-md-9">

      <?

      if ($results) {

        for($i=0; $i < count($results); $i++)
        {
        //  var_dump($results[$i]);

      ?>

        <?
          if ( $i == 0) {
        ?>
          <div class="row">
        <?
            }
        ?>

          <!-- "Follow the White Rabbit" -Alice in Wonderland -->
          <a href=<?php echo Url::to(['products/product/'.$results[$i]["ProductID"]]) ?>>

          <div class="col-sm-4 col-lg-4 col-md-4" >
              <div class="thumbnail" >
                  <img src="<? echo $results[$i]["ProductThumb"];?>" alt="">
                  <div class="caption">
                    <h5>  <?  echo $results[$i]["ProductName"]; ?>  </h5>
                  </div>
              </div>
          </div>
        </a>

        <?
          if (  ($i+1)  == count($results)) {
        ?>
          </div>
        <?
      } elseif(($i+1) % 3 == 0) {
        ?>
          </div>
          <div class="row">
        <?
        }
        ?>

      <?
        }
      }
       ?>

     </div>
</div>
