<?php
// Подключаем класс для работы с разметкой
use yii\helpers\Html;

// Устанавливаем title
$this->title = 'Просмотр дела';
// Добавляем title в дорогу (хлебные крошки)
$this->params['breadcrumbs'][] = $this->title;
?>
    <!-- Отображыем title -->
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="list-group">
    <?php
    // Для указнной записи выводим значения полей, в соответствующие места в разметке
    // Ссылки указывают на действия контроллера, которые нужно выполнить, и ключи записей, к которым их нужно применить
    ?>
        <div class='list-group-item'>
            <div class="col-sm-2">
                <?= $model['date']?>
            </div>
            <div class="col-sm-8">
                <?= $model['text']?>
            </div>
            <div class="col-sm-1">
                <a href="/?r=task/update&id=<?= $model['id']?>"><span class="glyphicon glyphicon-pencil"></span></a>
            </div>
            <div class="col-sm-1">
                <a href="/?r=task/remove&id=<?= $model['id']?>"><span class="glyphicon glyphicon-trash"></a>
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
    <a class="btn btn-success" href="/?r=task/">Вернуться к списку</a>
</div>
