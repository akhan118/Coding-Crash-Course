<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">


    <div class="body-content">

      <div class="jumbotron">
        <h1>Coding Crash Course</h1>
        <p>A Sunday Course</p>
        <p><a class="btn btn-primary btn-lg" href="<? echo \Yii::$app->request->BaseUrl ?>/project2.zip" role="button">Download Application</a></p>
        <p><a class="btn btn-primary btn-lg" href="<? echo \Yii::$app->request->BaseUrl ?>/user.sql" role="button">Download SQL</a></p>

      </div>
        <div class="row">
          <!-- <div class="jumbotron">
            <h1>Coding Crash Course</h1>
            <p>A Sunday Course</p>
            <p><a class="btn btn-primary btn-lg" href="<?php //echo \Yii::$app->request->BaseUrl?>/project2.zip" role="button">Download Application</a></p>
            <p><a class="btn btn-primary btn-lg" href="<?// echo \Yii::$app->request->BaseUrl?>/project2.sql" role="button">Download SQL</a></p>
            <p>Last Updated May 7th 2017 </p>

          </div> -->


        </div>

    </div>
</div>
