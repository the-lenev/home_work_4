<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use frontend\models\Task;

class TaskController extends Controller {

    // Отображение списка задач
    public function actionIndex() {

        $model = Task::find()->orderBy('date')->asArray()->all();
        return $this->render('index', [
        'model' => $model
        ]);
    }

    // Добавление задачи в список
    public function actionCreate() {

        $model = new Task();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    // Редактирование задачи
    public function actionUpdate($id = null) {

    }

    // Удаление задачи
    public function actionRemove($id = null) {

        $model = Task::findOne($id)->delete();
        return $this->redirect(['index']);
    }
}
