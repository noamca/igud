<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>הוספת משתמש</legend>
        <?php echo $this->Form->input('username',array('label'=> 'שם משתמש'));
        echo $this->Form->input('password',array('label'=> 'סיסמה'));
        echo $this->Form->input('role', array(
            'options' => array('Admin' => 'Admin', 'Customer Manager' => 'Customer Manager'),
            'label' =>'תפקיד'
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end('שלח'); ?>
</div>