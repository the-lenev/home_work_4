<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="row col-sm-12">
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'date')->label('Дата');?>
        <?= $form->field($model, 'text')->label('Задача'); ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
