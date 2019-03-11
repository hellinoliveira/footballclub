<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/profile.css"
      media="screen, projection"/>
<?php
$this->breadcrumbs = array(
    'Players' => array('index'),
    $model->id,
);
?>
<style>
</style>

<h1>View Player #<?php echo $model->id; ?></h1>
<div class="container emp-profile">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
                <img src="<?php echo Yii::app()->getAssetManager()->baseUrl; ?>/image/upload/<?php echo empty($model->profileimage) ? 'empty.jpg' : $model->profileimage; ?>"
                     class="img-fluid" alt="Player image" style="width: 100%;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="profile-head">
                <h5>
                    <?php echo $model->firstname; ?>
                </h5>
                <h6>
                    <?php echo $model->position; ?>
                </h6>
                <p class="proile-rating">NUMBER : <span><?php echo $model->shirtnumber; ?></span></p>
                <a class="btn btn-sm btn-outline-secondary"
                   href="index.php?r=player/update&id=<?php echo $model->id; ?>">Edit
                    Player</a>
            </div>
        </div>
    </div>
</div>
