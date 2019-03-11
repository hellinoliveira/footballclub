<h5>Players</h5>

<?php
$upDown = $angle == 'DESC' ? 'fa-angle-down' : 'fa-angle-up';
?>
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr class="text-center">
            <th>Player</th>
            <th>First Name</th>
            <th class="lastName text-nowrap">
                <i class="fa fa-2x <?php echo $upDown ?>"></i> Last Name
            </th>
            <th class="number text-nowrap">
                <i class="fa fa-2x <?php echo $upDown ?>"></i> Number
            </th>
            <th>Birth</th>
            <th>Position</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($players as $player) { ?>
            <tr class="text-nowrap">
                <td>
                    <img src="<?php echo Yii::app()->getAssetManager()->baseUrl; ?>/image/upload/<?php echo empty($player->profileimage) ? 'empty.jpg' : $player->profileimage; ?>"
                         class="img-fluid" alt="Profile image" style="width: 100%; max-width: 120px;max-height: 150px;">
                </td>
                <td><?php echo $player->firstname ?></td>
                <td><?php echo $player->lastname ?></td>
                <td><?php echo $player->shirtnumber ?></td>
                <td><?php echo $player->datebirth ?></td>
                <td><?php echo $player->position ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<form id="form" action="index.php?r=player/index" method="post">
    <input type="hidden" name="order" id="order" value="<?php echo $order; ?>">
    <input type="hidden" id="angle" name="angle" value="<?php echo $angle; ?>">
</form>
<script>
    var angle = $('#angle');
    var order = $('#order');
    $('.lastName').click(function () {
        if (order.val() === 'lastname') {
            newAngle = angle.val() === 'ASC' ? 'DESC' : 'ASC';
            angle.val(newAngle);
        } else {
            order.val('lastname');
            angle.val('ASC');
        }


        $('#form').submit();
    });
    $('.number').click(function () {
        if (order.val() === 'shirtnumber') {
            newAngle = angle.val() === 'ASC' ? 'DESC' : 'ASC';
            angle.val(newAngle);
        } else {
            order.val('shirtnumber');
            angle.val('ASC');
        }
        $('#form').submit();
    });
</script>