<?php

namespace backend\controllers;

use Yii;
use app\models\Order;
use backend\models\OrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderController implements the CRUD actions for Order model.
 */
class PengirimanController extends Controller
{
    public $layout = 'sidebar';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function beforeAction($action) 
    { 
        $this->enableCsrfValidation = false; 
        return parent::beforeAction($action); 
    }

    /**
     * Lists all Order models.
     * @return mixed
     */
    public function actionIndex()
    {
        // $searchModel = new OrderSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);

        $Order = Order::find()->where(['stok'=>1])->all();

        $tempviewkirim = array();
        foreach($Order as $key){
            array_push($tempviewkirim,[
                'id_order' => $key['id_order'],
                'nama_barang' => $key['nama_barang'],
                'quantity' => $key['quantity'],
                'lokasi' => $key['lokasi'],
                'stok' => $key['stok'],
                'status_kirim' => $key['status_kirim'],
            ]);
        }
        return $this->render('index',
        ['tempviewkirim'=>$tempviewkirim,
        ]);
    }

    public function actionUbah()
    {
    //    var_dump(Yii::$app->request->post()['id']);
    //    die();
        
        $id = (int) Yii::$app->request->post()['id'];
        // $model = $this->findModel($id);
        $model = Order::find($id)->one();
        $request = Yii::$app->request->post();
        $kirim = Order::find()->where(['id_order'=>$id])->one();

        $kirim->status_kirim = Yii::$app->request->post()['status_kirim'];
        if($kirim->save())
            return 'status telah berubah';
        else
            return 'gagal ubah status';
    }

    /**
     * Displays a single Order model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Order model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Order();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_order]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Order model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_order]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Order model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Order model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Order the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Order::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
