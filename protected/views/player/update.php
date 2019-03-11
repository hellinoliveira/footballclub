<?php
$this->breadcrumbs = array(
    'Players' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);
?>
    <h1>Update Player <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>