<?php
// Подключаем класс для работы с разметкой
use yii\helpers\Html;

// Устанавливаем title
$this->title = 'Добавить задачу';
// Добавляем title в дорогу (хлебные крошки)
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Отображыем title -->
<h1><?= Html::encode($this->title) ?></h1>

<?=
// Подключаем отдельный шаблон для формы и передаем в него данные модели
$this->render('_form', [
    'model' => $model
]);
?>
