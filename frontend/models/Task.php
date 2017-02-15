<?php

namespace frontend\models;
use yii\db\ActiveRecord;

class Task extends ActiveRecord {

    // Имя таблицы
    public static function tableName() {
        return 'task';
    }

    // Правила обработки полей
    public function rules() {
        return [
            [['date', 'text'], 'required'],
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
