<?php

namespace app\controllers;

use Yii;
use app\models\Products;
use app\models\CreateProductForm;

use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

          'access' => [
              'class' => AccessControl::className(),
              'only' => ['index'],
              'rules' => [
                  [
                      'actions' => ['index'],
                      'allow' => true,
                      'roles' => ['@'],
                  ],
              ],
          ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Products::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


        /**
         * Creates a new Products model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreateproduct()
        {
           $model = new CreateProductForm();
           //$model->CreateProduct();


              return $this->render('createProduct', [
                  'model' => $model,
              ]);


            // $model = new Products();
            //
            // if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //     return $this->redirect(['view', 'id' => $model->ProductID]);
            // } else {
            //     return $this->render('create', [
            //         'model' => $model,
            //     ]);
            // }
        }



        public function actionSaveproduct()
        {
          $model = new Products();
            //   $model->ProductName = 'monkey shirt';
            //   $model->productcategories_CategoryID = 1;
            //   $model->save();

$model->attributes = Yii::$app->request->post('CreateProductForm');
if ($model->validate()&& $model->save()) {
     return $this->redirect(['view', 'id' => $model->ProductID]);

    // all inputs are valid
} else {
    // validation failed: $errors is an array containing error messages
    var_dump(Yii::$app->request->post());
    $errors = $model->errors;
    var_dump($errors);

}


            // if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //     return $this->redirect(['view', 'id' => $model->ProductID]);
            // } else {
            //   $errors = $model->errors;
            //
            //   var_dump($errors);
            //   var_dump($model->save());

                // return $this->render('create', [
                //     'model' => $model,
                // ]);
            //}
        }



    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ProductID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ProductID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }




    /**
     * Finds the Products using findModel based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * when the model is found, it will sent it to productView.Php under
     * views/products/
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */

     /*

       "Follow the White Rabbit" -Alice in Wonderland
     */

    public function actionProduct($id){ //
          $product=$this->findModel($id);
          return $this->render('productView', [
              'results' => $product,
          ]);


          //var_dump($product);
  }

}
