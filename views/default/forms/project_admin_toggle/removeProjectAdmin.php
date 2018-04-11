<?php

?>

<div class="formBox">
    <div>
        <?php

        echo elgg_view('input/hidden', array(
            'name' => 'userGuid',
            'value' => $vars['userGuid'],
        ));

        echo elgg_view('input/submit', array('name' => 'submit', 'value' => 'Remove me as Project Admin'));
        ?>
    </div>
</div>
