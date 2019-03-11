<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'player-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    )); ?>

    <div class="offset-lg-2 col-lg-8">
        <?php echo $form->errorSummary($model); ?>
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <?php echo $form->labelEx($model, 'firstname', array('class' => 'sr-only')); ?>
                <?php echo $form->textField($model, 'firstname', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'First Name')); ?>
                <?php echo $form->error($model, 'firstname'); ?>
            </div>
            <div class="col-lg-6 col-xs-12">

                <?php echo $form->labelEx($model, 'lastname', array('class' => 'sr-only')); ?>
                <?php echo $form->textField($model, 'lastname', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'Last Name')); ?>
                <?php echo $form->error($model, 'lastname'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <?php echo $form->labelEx($model, 'position', array('class' => 'sr-only')); ?>
                <?php echo $form->textField($model, 'position', array('class' => 'form-control', 'required' => 'required', 'placeholder' => 'Position')); ?>
                <?php echo $form->error($model, 'position'); ?>
            </div>
            <div class="col-lg-6 col-xs-12">
                <?php echo $form->labelEx($model, 'datebirth', array('class' => 'sr-only')); ?>
                <?php
                $this->widget('CMaskedTextField', array(
                    'model' => $model,
                    'attribute' => 'datebirth',
                    'mask' => '9999-99-99',
                    'htmlOptions' => array('size' => 12, 'class' => 'form-control', 'placeholder' => 'Date of birth')
                ));
                ?>
                <?php echo $form->error($model, 'datebirth'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <?php echo $form->labelEx($model, 'shirtnumber', array('class' => 'sr-only')); ?>
                <?php echo $form->textField($model, 'shirtnumber', array('class' => 'form-control', 'placeholder' => 'Shirt number')); ?>
                <?php echo $form->error($model, 'shirtnumber'); ?>
            </div>

            <div class="col-lg-6 col-xs-12">
                <?php echo $form->labelEx($model, 'profileimage', array('class' => 'sr-only')); ?>
                <?php echo $form->fileField($model, 'profileimage', array('class' => 'btn btn-lg btn-default btn-block', 'placeholder' => 'Profile Image')); ?>
                <?php echo $form->error($model, 'profileimage'); ?>
            </div>
        </div>

        <div class="row buttons">
            <div class="offset-lg-3 col-lg-6 col-xs-12">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-lg btn-primary btn-block')); ?>
            </div>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div>