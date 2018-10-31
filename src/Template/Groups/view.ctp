<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usersold'), ['controller' => 'Usersold', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usersold'), ['controller' => 'Usersold', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usersold3'), ['controller' => 'Usersold3', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usersold3'), ['controller' => 'Usersold3', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groups view large-9 medium-8 columns content">
    <h3><?= h($group->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($group->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($group->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Permissions') ?></h4>
        <?php if (!empty($group->permissions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($group->permissions as $permissions): ?>
            <tr>
                <td><?= h($permissions->id) ?></td>
                <td><?= h($permissions->name) ?></td>
                <td><?= h($permissions->created) ?></td>
                <td><?= h($permissions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Permissions', 'action' => 'view', $permissions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Permissions', 'action' => 'edit', $permissions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Permissions', 'action' => 'delete', $permissions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permissions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($group->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Group Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Bday') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Email Verified') ?></th>
                <th scope="col"><?= __('Last Login') ?></th>
                <th scope="col"><?= __('Ip Address') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($group->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->user_group_id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->first_name) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->gender) ?></td>
                <td><?= h($users->photo) ?></td>
                <td><?= h($users->bday) ?></td>
                <td><?= h($users->active) ?></td>
                <td><?= h($users->email_verified) ?></td>
                <td><?= h($users->last_login) ?></td>
                <td><?= h($users->ip_address) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td><?= h($users->created_by) ?></td>
                <td><?= h($users->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usersold') ?></h4>
        <?php if (!empty($group->usersold)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Can Num') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Zip') ?></th>
                <th scope="col"><?= __('Institution') ?></th>
                <th scope="col"><?= __('Degree') ?></th>
                <th scope="col"><?= __('Website') ?></th>
                <th scope="col"><?= __('Employer Ids') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Access') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($group->usersold as $usersold): ?>
            <tr>
                <td><?= h($usersold->id) ?></td>
                <td><?= h($usersold->can_num) ?></td>
                <td><?= h($usersold->first_name) ?></td>
                <td><?= h($usersold->last_name) ?></td>
                <td><?= h($usersold->name) ?></td>
                <td><?= h($usersold->username) ?></td>
                <td><?= h($usersold->password) ?></td>
                <td><?= h($usersold->address) ?></td>
                <td><?= h($usersold->city) ?></td>
                <td><?= h($usersold->state) ?></td>
                <td><?= h($usersold->zip) ?></td>
                <td><?= h($usersold->institution) ?></td>
                <td><?= h($usersold->degree) ?></td>
                <td><?= h($usersold->website) ?></td>
                <td><?= h($usersold->employer_ids) ?></td>
                <td><?= h($usersold->group_id) ?></td>
                <td><?= h($usersold->access) ?></td>
                <td><?= h($usersold->type) ?></td>
                <td><?= h($usersold->active) ?></td>
                <td><?= h($usersold->created) ?></td>
                <td><?= h($usersold->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usersold', 'action' => 'view', $usersold->can_num]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usersold', 'action' => 'edit', $usersold->can_num]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usersold', 'action' => 'delete', $usersold->can_num], ['confirm' => __('Are you sure you want to delete # {0}?', $usersold->can_num)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usersold3') ?></h4>
        <?php if (!empty($group->usersold3)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Can Num') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Zip') ?></th>
                <th scope="col"><?= __('Institution') ?></th>
                <th scope="col"><?= __('Degree') ?></th>
                <th scope="col"><?= __('Website') ?></th>
                <th scope="col"><?= __('Employer Ids') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Access') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($group->usersold3 as $usersold3): ?>
            <tr>
                <td><?= h($usersold3->id) ?></td>
                <td><?= h($usersold3->can_num) ?></td>
                <td><?= h($usersold3->first_name) ?></td>
                <td><?= h($usersold3->last_name) ?></td>
                <td><?= h($usersold3->name) ?></td>
                <td><?= h($usersold3->username) ?></td>
                <td><?= h($usersold3->password) ?></td>
                <td><?= h($usersold3->address) ?></td>
                <td><?= h($usersold3->city) ?></td>
                <td><?= h($usersold3->state) ?></td>
                <td><?= h($usersold3->zip) ?></td>
                <td><?= h($usersold3->institution) ?></td>
                <td><?= h($usersold3->degree) ?></td>
                <td><?= h($usersold3->website) ?></td>
                <td><?= h($usersold3->employer_ids) ?></td>
                <td><?= h($usersold3->group_id) ?></td>
                <td><?= h($usersold3->access) ?></td>
                <td><?= h($usersold3->type) ?></td>
                <td><?= h($usersold3->active) ?></td>
                <td><?= h($usersold3->created) ?></td>
                <td><?= h($usersold3->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usersold3', 'action' => 'view', $usersold3->can_num]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usersold3', 'action' => 'edit', $usersold3->can_num]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usersold3', 'action' => 'delete', $usersold3->can_num], ['confirm' => __('Are you sure you want to delete # {0}?', $usersold3->can_num)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
