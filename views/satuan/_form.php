<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Satuan */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="satuan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>