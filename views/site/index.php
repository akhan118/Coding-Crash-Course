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
        <p class="lead">Type</p>
        <div class="list-group">
            <a class="list-group-item">MEN'S</a>
            <a class="list-group-item">LADIES'</a>
            <a class="list-group-item">KIDS'</a>
        </div>
        <p class="lead">Categories</p>
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

   <!--Items list -->
    <div class="col-md-9">
        <div class="row">
            <div class="col-sm-4 col-lg-4 col-md-4" >
                <div class="thumbnail" >
                    <img src="https://bape.com/test/mania/images/product/002TED801087_NVY_A_M.jpg" alt="">
                    <div class="caption">
                        <p>It's a Shirt!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-lg-4 col-md-4" >
                <div class="thumbnail" >
                    <img src="https://bape.com/test/mania/images/product/002TED801087_NVY_A_M.jpg" alt="">
                    <div class="caption">
                        <p>It's a Shirt!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-lg-4 col-md-4" >
                <div class="thumbnail" >
                    <img src="https://bape.com/test/mania/images/product/002TED801087_NVY_A_M.jpg" alt="">
                    <div class="caption">
                        <p>It's a Shirt!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 col-lg-4 col-md-4" >
                <div class="thumbnail" >
                    <img src="https://bape.com/test/mania/images/product/002TED801087_NVY_A_M.jpg" alt="">
                    <div class="caption">

                        <p>It's a Shirt!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
