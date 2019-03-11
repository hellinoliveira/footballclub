<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>
<div class="offset-lg-3 col-lg-6 col-xs-12 text-center">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    )); ?>
    <?php echo $form->labelEx($model, 'username', array('class' => 'sr-only')); ?>
    <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'username')); ?>
    <?php echo $form->error($model, 'username'); ?>

    <?php echo $form->labelEx($model, 'password', array('class' => 'sr-only')); ?>
    <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'password')); ?>
    <?php echo $form->error($model, 'password'); ?>

    <div class="checkbox mb-3">
        <label>
            <?php echo $form->checkBox($model, 'rememberMe'); ?>
            <?php echo $form->error($model, 'rememberMe'); ?>
        </label>
    </div>
    <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-lg btn-primary btn-block')); ?>


    <?php $this->endWidget(); ?>
</div><!-- form -->
