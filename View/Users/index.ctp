<div class="users index">
    <h2>משתמשים</h2>
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('username','שם משתמש'); ?></th>
            <th><?php echo $this->Paginator->sort('role','תפקיד'); ?></th>
            <th class="actions">פעולות</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
        <td><?php echo h($user['User']['role']); ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link('ערוך', array('action' => 'edit', $user['User']['id'])); ?>
            <?php echo $this->Form->postLink('מחק', array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
        </td>
    </tr>
<?php endforeach; ?>
    </table>
    
    <? echo $this->element('paginator'); ?>
    </div>
</div>