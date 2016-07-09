
 



<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo "נא להכנס עם שם וסיסמה"; ?></legend>
        <?php echo $this->Form->input('username',array("label"=>"שם משתמש"));
        echo $this->Form->input('password',array("label"=>"סיסמה"));
    ?>
    </fieldset>
<?php echo $this->Form->end('היכנס'); ?>
</div>

 