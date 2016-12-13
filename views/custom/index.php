<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
    if (Yii::$app->session->hasFlash('success')){
        echo Yii::$app->session->getFlash('success');
    }
?>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'name'); ?>
<?php echo $form->field($model, 'email')->input('email'); ?>
<?php echo $form->field($model, 'subject'); ?>
<?php echo $form->field($model, 'body')->textArea(['rows' => '6']); ?>
<?php echo $form->field($model, 'url'); ?>
<?php echo $form->field($model, 'age'); ?>
<?php // echo $form->field($model, 'pass')->passwordInput(); ?>
<?php echo $form->field($model, 'verifyCode'); ?>

<?php echo Html::submitButton('Submit', ['class' => 'btn btn-success']); ?>

<?php ActiveForm::end(); ?>
