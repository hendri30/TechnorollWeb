<?php

class PagesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/admin';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','url'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','inlinesave'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	// untuk inline save
	public function actionInlineSave($id)
	{
		$model=Pages::model()->findByPk($id);
		if(isset($_POST)):
			$nama_field=$_POST['editorID'];
			$model->{$nama_field}=$_POST['editabledata'];
			$model->save();
		endif;
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	// kustomisasi url
	public function actionUrl($key)
	{
		$this->layout='main';

		if($key)
		{

			$key=implode(' ', explode('-', $key));
			$model=Pages::model()->findByAttributes(array('key'=>$key));
			// var_dump($model);

			if ($model==null)
				throw new CHttpException(404, 'Page Not Found');
			// var_dump($model);
			$services = [];
			// die('aaa');
			// die('bbbccc');
			// var_dump($key);
			if(preg_match('/service_/', $key)){
				// die('aaa000');
				$q = new CDbCriteria();
				$q->addSearchCondition("'key'", 'service_');
				 
				$services = Pages::model()->findAllByAttributes([],"meta_tag like 'Services'");

				// var_dump($services);
			}
			$this->render('view',array('model'=>$model,'services'=>$services));
		}
		else
			throw new CHttpException(404, 'Page Not Found');
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	const URLUPLOAD='/../images/pages/';
	public function actionCreate()
	{
		$model=new Pages;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pages']))
		{
			$model->attributes=$_POST['Pages'];
			$uploadedFile=CUploadedFile::getInstance($model,'thumb_image');
			$rnd=rand(0,999999);
			$wkt=date('m-d-Y-h-i-s',time());
			$fileName="{$wkt}_{$rnd}_{$uploadedFile}";
			$model->thumb_image=$fileName;
			$model->last_update=new CDbExpression('NOW()');
			if($model->save()){
				if(isset($uploadedFile)){
					$uploadedFile->saveAs(Yii::app()->basePath.self::URLUPLOAD.$model->thumb_image);
				}
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pages']))
		{
			if(file_exists(Yii::app()->basePath.self::URLUPLOAD.$model->thumb_image)){
				unlink(Yii::app()->basePath.self::URLUPLOAD.$model->thumb_image);
			}
			$model->attributes=$_POST['Pages'];
			$uploadedFile=CUploadedFile::getInstance($model,'thumb_image');
			$rnd=rand(0,999999);
			$wkt=date('m-d-Y-h-i-s',time());
			$fileName="{$wkt}_{$rnd}_{$uploadedFile}";
			$model->thumb_image=$fileName;
			$model->last_update=new CDbExpression('NOW()');
			if($model->save()){
				if($uploadedFile !== null){
					$uploadedFile->saveAs(Yii::app()->basePath.self::URLUPLOAD.$model->thumb_image);
				}
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model=$this->loadModel($id);
		if(Yii::app()->request->isPostRequest)
		{
			if($model['key']=='about' || $model['key']=='features'){
				throw new CHttpException(400, "This page cannot be deleted.");
			} else {
				if(!file_exists(Yii::app()->basePath.self::URLUPLOAD.$model->thumb_image)){
					$this->loadModel($id)->delete();
					if(!isset($_GET['ajax']))
						$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
				}
				if(file_exists(Yii::app()->basePath.self::URLUPLOAD.$model->thumb_image)){
					unlink(Yii::app()->basePath.self::URLUPLOAD.$model->thumb_image);
					$this->loadModel($id)->delete();
					if(!isset($_GET['ajax']))
						$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
				}
			}		
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Pages');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pages('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pages']))
			$model->attributes=$_GET['Pages'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pages the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pages::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pages $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pages-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
