<?php
use yii\helpers\Html;

$this->title = 'Список дел';
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="list-group">
    <?php foreach ($model as $task) {?>
        <div class='list-group-item'>
            <div class="col-sm-2"><?= $task['date']?></div>
            <div class="col-sm-8"><?= $task['text']?></div>
            <div class="col-sm-1">
                <a href="/?r=task/update&id=<?= $task['id']?>"><span class="glyphicon glyphicon-pencil"></span></a>
            </div>
            <div class="col-sm-1">
                <a href="/?r=task/remove&id=<?= $task['id']?>"><span class="glyphicon glyphicon-trash"></a>
            </div>
            <div style="clear:both"></div>
        </div>
    <?php }?>
    </div>
    <a class="btn btn-success" href="/?r=task/create">Добавить</a>
</div>
