<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SatTimeslot[]|\Cake\Collection\CollectionInterface $satTimeslots
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<h2>Employer Interviews</h2>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sat Timeslot'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sat Schedules'), ['controller' => 'SatSchedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sat Schedule'), ['controller' => 'SatSchedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="satTimeslots index large-9 medium-8 columns content">
    <h3><?= __('Sat Timeslots') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sat_schedule_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('length') ?></th>
                <th scope="col"><?= $this->Paginator->sort('job_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visible') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($satTimeslots as $satTimeslot) : ?>
            <tr>
                <td><?= $this->Number->format($satTimeslot->id) ?></td>
                <td><?= $satTimeslot->has('employer') ? $this->Html->link($satTimeslot->employer->id, ['controller' => 'Employers', 'action' => 'view', $satTimeslot->employer->id]) : '' ?></td>
                <td><?= $satTimeslot->has('sat_schedule') ? $this->Html->link($satTimeslot->sat_schedule->id, ['controller' => 'SatSchedules', 'action' => 'view', $satTimeslot->sat_schedule->id]) : '' ?></td>
                <td><?= $satTimeslot->has('user') ? $this->Html->link($satTimeslot->user->id, ['controller' => 'Users', 'action' => 'view', $satTimeslot->user->id]) : '' ?></td>
                <td><?= h($satTimeslot->start_time) ?></td>
                <td><?= h($satTimeslot->end_time) ?></td>
                <td><?= h($satTimeslot->length) ?></td>
                <td><?= $satTimeslot->has('job') ? $this->Html->link($satTimeslot->job->title, ['controller' => 'Jobs', 'action' => 'view', $satTimeslot->job->id]) : '' ?></td>
                <td><?= h($satTimeslot->modified_by) ?></td>
                <td><?= h($satTimeslot->created) ?></td>
                <td><?= h($satTimeslot->modified) ?></td>
                <td><?= $this->Number->format($satTimeslot->visible) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $satTimeslot->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $satTimeslot->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $satTimeslot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $satTimeslot->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
