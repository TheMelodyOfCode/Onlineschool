<?php require_once __DIR__ . "../../../../../mainsrc/Design/header.php"; ?>

    <article id="article" class="col-md-8">


<div class="usersContainer">
    <?php     foreach ($getmembers AS $user):  ?>
        <a href="/Users/userlink?userid=<?php echo $user->userid ?>"><h3><?php echo $user->username ?></h3></a>
        <?php endforeach; 
        ?>    
</div>
        

    
    </article>
<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>
