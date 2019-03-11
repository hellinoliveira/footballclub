<?php
$this->breadcrumbs=array(
	'Players'=>array('index'),
	'Create',
);
?>

<h1>Create Player</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>