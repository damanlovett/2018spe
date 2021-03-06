<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Announcement $announcement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Announcement'), ['action' => 'edit', $announcement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Announcement'), ['action' => 'delete', $announcement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $announcement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Announcements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Announcement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="announcements view large-9 medium-8 columns content">
    <h3><?= h($announcement->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $announcement->has('employer') ? $this->Html->link($announcement->employer->id, ['controller' => 'Employers', 'action' => 'view', $announcement->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $announcement->has('user') ? $this->Html->link($announcement->user->id, ['controller' => 'Users', 'action' => 'view', $announcement->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($announcement->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= h($announcement->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($announcement->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($announcement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($announcement->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($announcement->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($announcement->message)); ?>
    </div>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($announcement->notes)); ?>
    </div>
</div>
