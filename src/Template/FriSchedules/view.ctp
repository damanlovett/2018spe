<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FriSchedule $friSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fri Schedule'), ['action' => 'edit', $friSchedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fri Schedule'), ['action' => 'delete', $friSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $friSchedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fri Schedules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fri Schedule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fri Timeslots'), ['controller' => 'FriTimeslots', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fri Timeslot'), ['controller' => 'FriTimeslots', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="friSchedules view large-9 medium-8 columns content">
    <h3><?= h($friSchedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $friSchedule->has('employer') ? $this->Html->link($friSchedule->employer->id, ['controller' => 'Employers', 'action' => 'view', $friSchedule->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $friSchedule->has('user') ? $this->Html->link($friSchedule->user->id, ['controller' => 'Users', 'action' => 'view', $friSchedule->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($friSchedule->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Length') ?></th>
            <td><?= h($friSchedule->length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job') ?></th>
            <td><?= $friSchedule->has('job') ? $this->Html->link($friSchedule->job->title, ['controller' => 'Jobs', 'action' => 'view', $friSchedule->job->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= h($friSchedule->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($friSchedule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($friSchedule->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($friSchedule->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $friSchedule->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($friSchedule->notes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fri Timeslots') ?></h4>
        <?php if (!empty($friSchedule->fri_timeslots)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('Fri Schedule Id') ?></th>
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
            <?php foreach ($friSchedule->fri_timeslots as $friTimeslots): ?>
            <tr>
                <td><?= h($friTimeslots->id) ?></td>
                <td><?= h($friTimeslots->employer_id) ?></td>
                <td><?= h($friTimeslots->fri_schedule_id) ?></td>
                <td><?= h($friTimeslots->user_id) ?></td>
                <td><?= h($friTimeslots->start_time) ?></td>
                <td><?= h($friTimeslots->end_time) ?></td>
                <td><?= h($friTimeslots->length) ?></td>
                <td><?= h($friTimeslots->job_id) ?></td>
                <td><?= h($friTimeslots->modified_by) ?></td>
                <td><?= h($friTimeslots->created) ?></td>
                <td><?= h($friTimeslots->modified) ?></td>
                <td><?= h($friTimeslots->visible) ?></td>
                <td><?= h($friTimeslots->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FriTimeslots', 'action' => 'view', $friTimeslots->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FriTimeslots', 'action' => 'edit', $friTimeslots->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FriTimeslots', 'action' => 'delete', $friTimeslots->id], ['confirm' => __('Are you sure you want to delete # {0}?', $friTimeslots->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
