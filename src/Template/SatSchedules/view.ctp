<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SatSchedule $satSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sat Schedule'), ['action' => 'edit', $satSchedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sat Schedule'), ['action' => 'delete', $satSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $satSchedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sat Schedules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sat Schedule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sat Timeslots'), ['controller' => 'SatTimeslots', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sat Timeslot'), ['controller' => 'SatTimeslots', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="satSchedules view large-9 medium-8 columns content">
    <h3><?= h($satSchedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $satSchedule->has('employer') ? $this->Html->link($satSchedule->employer->id, ['controller' => 'Employers', 'action' => 'view', $satSchedule->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $satSchedule->has('user') ? $this->Html->link($satSchedule->user->id, ['controller' => 'Users', 'action' => 'view', $satSchedule->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($satSchedule->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Length') ?></th>
            <td><?= h($satSchedule->length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job') ?></th>
            <td><?= $satSchedule->has('job') ? $this->Html->link($satSchedule->job->title, ['controller' => 'Jobs', 'action' => 'view', $satSchedule->job->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= h($satSchedule->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($satSchedule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($satSchedule->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($satSchedule->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $satSchedule->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($satSchedule->notes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sat Timeslots') ?></h4>
        <?php if (!empty($satSchedule->sat_timeslots)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('Sat Schedule Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Start Time') ?></th>
                <th scope="col"><?= __('End Time') ?></th>
                <th scope="col"><?= __('Length') ?></th>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($satSchedule->sat_timeslots as $satTimeslots): ?>
            <tr>
                <td><?= h($satTimeslots->id) ?></td>
                <td><?= h($satTimeslots->employer_id) ?></td>
                <td><?= h($satTimeslots->sat_schedule_id) ?></td>
                <td><?= h($satTimeslots->user_id) ?></td>
                <td><?= h($satTimeslots->start_time) ?></td>
                <td><?= h($satTimeslots->end_time) ?></td>
                <td><?= h($satTimeslots->length) ?></td>
                <td><?= h($satTimeslots->job_id) ?></td>
                <td><?= h($satTimeslots->modified_by) ?></td>
                <td><?= h($satTimeslots->created) ?></td>
                <td><?= h($satTimeslots->modified) ?></td>
                <td><?= h($satTimeslots->visible) ?></td>
                <td><?= h($satTimeslots->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SatTimeslots', 'action' => 'view', $satTimeslots->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SatTimeslots', 'action' => 'edit', $satTimeslots->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SatTimeslots', 'action' => 'delete', $satTimeslots->id], ['confirm' => __('Are you sure you want to delete # {0}?', $satTimeslots->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
