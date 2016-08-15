<?php

namespace backend\controllers;

use Yii;
use backend\models\Teachers;
use backend\models\ProfessionalData;
use backend\models\TeachersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;



/**
 * TeachersController implements the CRUD actions for Teachers model.
 */
class TeachersController extends Controller
{
    /**
     * @inheritdoc
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

    /**
     * Lists all Teachers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TeachersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Teachers model.
     * @param integer $teacherId
     * @param integer $ComputerNo
     * @return mixed
     */
    public function actionView($teacherId, $ComputerNo)
    {
        return $this->render('view', [
            'model' => $this->findModel($teacherId, $ComputerNo),
        ]);
    }

    /**
     * Creates a new Teachers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Teachers();
		//$professionaldata = new ProfessionalData();
		

        if ($model->load(Yii::$app->request->post()) && $professionaldata->load(Yii::$app->request->post())) {
			
			//Get instance of the uploaded file
            $imageName = $model->NIC;
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file->saveAs('uploads/' .$imageName. '.' .$model->file->extension);
            
            //Save the path in the db column
			$model->Image = 'uploads/' .$imageName. '.' .$model->file->extension;
			$model->save();
			//$professionaldata-> teachers_teacherId = $model-> teacherId;
			//$professionaldata->save();
            return $this->redirect(['view', 'teacherId' => $model->teacherId, 'ComputerNo' => $model->ComputerNo]);
			
        } else {
            return $this->render('create', [
                'model' => $model,
				//'professionaldata'=> $professionaldata,
            ]);
        }
    }

    /**
     * Updates an existing Teachers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $teacherId
     * @param integer $ComputerNo
     * @return mixed
     */
    public function actionUpdate($teacherId, $ComputerNo)
    {
        $model = $this->findModel($teacherId, $ComputerNo);
		
		//$professionaldata = $model->teacherId;

        if ($model->load(Yii::$app->request->post())) {
			
			//Get instance of the uploaded file
            $imageName = $model->NIC;
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file->saveAs('uploads/' .$imageName. '.' .$model->file->extension);
            
            //Save the path in the db column
			$model->Image = 'uploads/' .$imageName. '.' .$model->file->extension;
			$model->save();
			
            return $this->redirect(['view', 'teacherId' => $model->teacherId, 'ComputerNo' => $model->ComputerNo]);
        } else {
            return $this->render('update', [
                'model' => $model,
		   ]);
        }
    }

    /**
     * Deletes an existing Teachers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $teacherId
     * @param integer $ComputerNo
     * @return mixed
     */
    public function actionDelete($teacherId, $ComputerNo)
    {
        $this->findModel($teacherId, $ComputerNo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Teachers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $teacherId
     * @param integer $ComputerNo
     * @return Teachers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($teacherId, $ComputerNo)
    {
        if (($model = Teachers::findOne(['teacherId' => $teacherId, 'ComputerNo' => $ComputerNo])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	
	
}
