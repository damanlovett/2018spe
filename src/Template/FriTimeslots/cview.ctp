<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FriTimeslot $friTimeslot
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<h2>Candidate View</h2>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fri Timeslot'), ['action' => 'edit', $friTimeslot->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fri Timeslot'), ['action' => 'delete', $friTimeslot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $friTimeslot->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fri Timeslots'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fri Timeslot'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fri Schedules'), ['controller' => 'FriSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fri Schedule'), ['controller' => 'FriSchedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="friTimeslots view large-9 medium-8 columns content">
    <h3><?= h($friTimeslot->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $friTimeslot->has('employer') ? $this->Html->link($friTimeslot->employer->id, ['controller' => 'Employers', 'action' => 'view', $friTimeslot->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fri Schedule') ?></th>
            <td><?= $friTimeslot->has('fri_schedule') ? $this->Html->link($friTimeslot->fri_schedule->id, ['controller' => 'FriSchedules', 'action' => 'view', $friTimeslot->fri_schedule->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $friTimeslot->has('user') ? $this->Html->link($friTimeslot->user->id, ['controller' => 'Users', 'action' => 'view', $friTimeslot->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Length') ?></th>
            <td><?= h($friTimeslot->length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job') ?></th>
            <td><?= $friTimeslot->has('job') ? $this->Html->link($friTimeslot->job->title, ['controller' => 'Jobs', 'action' => 'view', $friTimeslot->job->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= h($friTimeslot->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($friTimeslot->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Time') ?></th>
            <td><?= h($friTimeslot->start_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Time') ?></th>
            <td><?= h($friTimeslot->end_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($friTimeslot->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($friTimeslot->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $friTimeslot->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($friTimeslot->notes)); ?>
    </div>
</div>
