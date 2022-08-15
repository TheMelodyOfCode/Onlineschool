<?php

if (!empty($singleUser)) : ?>

    <?php echo $singleUser->username;?>
    <?php // echo $singleUser["username"];?>
    <?php echo "<br>" . $singleUser["mail"];?>
    <?php echo "<br>" . $singleUser["bio"]; ?>
    <?php echo "<br>" . $age; ?>
    
<?php endif ;