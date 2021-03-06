<?php
// Определяем пространство имен
namespace frontend\models;
// Подключаем базовый (родительский) класс
use yii\db\ActiveRecord;

class Task extends ActiveRecord {

    // Имя таблицы
    public static function tableName() {
        return 'task';
    }

    // Правила обработки полей
    public function rules() {
        return [
            [['date', 'text'], 'required', 'message' => 'Поле обязательно для заполнения'],
            [['date'], 'default', 'value' => null],
            [['date'], 'date', 'format' => 'yyyy-MM-dd', 'message' => 'Введена некорректная дата'],
            [['text'], 'string', 'max' => 255, 'message' => 'Превышено максимально допустимое количество символов'],
        ];
    }

    // Метки для полей
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'text' => 'Text',
        ];
    }
}
