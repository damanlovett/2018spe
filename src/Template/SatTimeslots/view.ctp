<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SatTimeslot $satTimeslot
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sat Timeslot'), ['action' => 'edit', $satTimeslot->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sat Timeslot'), ['action' => 'delete', $satTimeslot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $satTimeslot->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sat Timeslots'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sat Timeslot'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sat Schedules'), ['controller' => 'SatSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sat Schedule'), ['controller' => 'SatSchedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="satTimeslots view large-9 medium-8 columns content">
    <h3><?= h($satTimeslot->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $satTimeslot->has('employer') ? $this->Html->link($satTimeslot->employer->id, ['controller' => 'Employers', 'action' => 'view', $satTimeslot->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sat Schedule') ?></th>
            <td><?= $satTimeslot->has('sat_schedule') ? $this->Html->link($satTimeslot->sat_schedule->id, ['controller' => 'SatSchedules', 'action' => 'view', $satTimeslot->sat_schedule->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $satTimeslot->has('user') ? $this->Html->link($satTimeslot->user->id, ['controller' => 'Users', 'action' => 'view', $satTimeslot->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Length') ?></th>
            <td><?= h($satTimeslot->length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job') ?></th>
            <td><?= $satTimeslot->has('job') ? $this->Html->link($satTimeslot->job->title, ['controller' => 'Jobs', 'action' => 'view', $satTimeslot->job->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= h($satTimeslot->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($satTimeslot->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $this->Number->format($satTimeslot->visible) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Time') ?></th>
            <td><?= h($satTimeslot->start_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Time') ?></th>
            <td><?= h($satTimeslot->end_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($satTimeslot->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($satTimeslot->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($satTimeslot->notes)); ?>
    </div>
</div>
