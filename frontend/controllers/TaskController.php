<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
// Подключаем модель
use frontend\models\Task;

class TaskController extends Controller {

    // Отображение списка задач
    public function actionIndex() {
        // Получаем все записи из таблицы в виде массиса и сортируем их по дате
        $model = Task::find()->orderBy('date')->asArray()->all();
        // Отображаем шаблон (1-й параметр) и передаем в него данные из модели (2-й параметр)
        return $this->render('index', [
            'model' => $model
        ]);
    }

    // Добавление задачи в список
    public function actionCreate() {
        // Создаем новую запись в таблице
        $model = new Task();
        // Если есть данные переданные через $_POST, они загружены в модель и сохранены б БД, то...
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // Переходим на шаблон index
            return $this->redirect(['index']);
        } else {
            // Иначе отображаем шаблон добавления задачи и загружаем в него данные из модели (поля новой записи)
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    // Редактирование задачи
    public function actionUpdate($id = null) {
        // Находим запись по ключу
        $model = Task::findOne($id);
        // Если есть данные переданные через $_POST, они загружены в модель и сохранены б БД, то...
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // Переходим на шаблон index
            return $this->redirect(['index']);
        } else {
            // Иначе отображаем шаблон редактирования задачи и загружаем в него данные из модели (поля изменяемой записи)
            return $this->render('update', [
                'model' => $model,
            ]);
        }

    }

    // Удаление задачи
    public function actionRemove($id = null) {
        // Находим запись по ключу и удалаем её
        $model = Task::findOne($id)->delete();
        // Переходим на шаблон index
        return $this->redirect(['index']);
    }
}
