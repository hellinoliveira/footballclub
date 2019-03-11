<?php
$this->breadcrumbs = array(
    'Players' => array('index'),
    'Manage',
);
?>
<style>
    .action > i {
        margin-right: 0.2rem;
    }
</style>
<h1 class="h5 mt-3">Manage Players</h1>


<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th colspan="6">Players</th>
        </tr>
        <tr class="text-center">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($players as $player) { ?>
            <tr>
                <td><?php echo $player->firstname ?></td>
                <td><?php echo $player->lastname ?></td>
                <td><?php echo $player->position ?></td>
                <td class="action">
                    <a href="index.php?r=player/update&id=<?php echo $player->id ?>">
                        <i class="fa fa-user-edit"
                           title="edit player"></i>
                    </a>
                    <i class="fa fa-user-times"
                       title="delete player"
                       id="deletePlayer<?php echo $player->id ?>"></i>
                </td>
            </tr>
            <script>

                $('#deletePlayer<?php echo $player->id ?>').click(function () {
                    if (confirm("Are you sure you want delete this register?")) {
                        $.ajax({
                            url: 'index.php?r=player/delete&id=<?php echo $player->id?>',
                            dataType: 'json',
                            type: 'post'
                        }).always(function () {
                            location.reload()
                        });
                    }
                });

            </script>
        <?php } ?>
        </tbody>
    </table>
</div>

