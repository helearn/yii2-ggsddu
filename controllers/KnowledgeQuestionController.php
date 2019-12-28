<?php

namespace helearn\ggsddu\controllers;

use Yii;
use helearn\ggsddu\models\KnowledgeQuestion;
use helearn\ggsddu\models\KnowledgeQuestionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KnowledgeQuestionController implements the CRUD actions for KnowledgeQuestion model.
 */
class KnowledgeQuestionController extends Controller
{
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

    /**
     * Lists all KnowledgeQuestion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KnowledgeQuestionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KnowledgeQuestion model.
     * @param string $question_type
     * @param integer $question_id
     * @param integer $knowledge_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($question_type, $question_id, $knowledge_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($question_type, $question_id, $knowledge_id),
        ]);
    }

    /**
     * Creates a new KnowledgeQuestion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new KnowledgeQuestion();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'question_type' => $model->question_type, 'question_id' => $model->question_id, 'knowledge_id' => $model->knowledge_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KnowledgeQuestion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $question_type
     * @param integer $question_id
     * @param integer $knowledge_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($question_type, $question_id, $knowledge_id)
    {
        $model = $this->findModel($question_type, $question_id, $knowledge_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'question_type' => $model->question_type, 'question_id' => $model->question_id, 'knowledge_id' => $model->knowledge_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KnowledgeQuestion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $question_type
     * @param integer $question_id
     * @param integer $knowledge_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($question_type, $question_id, $knowledge_id)
    {
        $this->findModel($question_type, $question_id, $knowledge_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KnowledgeQuestion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $question_type
     * @param integer $question_id
     * @param integer $knowledge_id
     * @return KnowledgeQuestion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($question_type, $question_id, $knowledge_id)
    {
        if (($model = KnowledgeQuestion::findOne(['question_type' => $question_type, 'question_id' => $question_id, 'knowledge_id' => $knowledge_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('helearn-yii2ggsddu', 'The requested page does not exist.'));
    }
}
