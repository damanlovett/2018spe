<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job[]|\Cake\Collection\CollectionInterface $jobs
 */
?>
<h2>Employer Positions</h2>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Favorites'), ['controller' => 'Favorites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Favorite'), ['controller' => 'Favorites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fri Schedules'), ['controller' => 'FriSchedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fri Schedule'), ['controller' => 'FriSchedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fri Timeslots'), ['controller' => 'FriTimeslots', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fri Timeslot'), ['controller' => 'FriTimeslots', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sat Schedules'), ['controller' => 'SatSchedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sat Schedule'), ['controller' => 'SatSchedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sat Timeslots'), ['controller' => 'SatTimeslots', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sat Timeslot'), ['controller' => 'SatTimeslots', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jobs index large-9 medium-8 columns content">
    <h3><?= __('Jobs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jobs as $job) : ?>
            <tr>
                <td><?= $this->Number->format($job->id) ?></td>
                <td><?= h($job->title) ?></td>
                <td><?= $job->has('employer') ? $this->Html->link($job->employer->id, ['controller' => 'Employers', 'action' => 'view', $job->employer->id]) : '' ?></td>
                <td><?= $job->has('user') ? $this->Html->link($job->user->id, ['controller' => 'Users', 'action' => 'view', $job->user->id]) : '' ?></td>
                <td><?= h($job->created) ?></td>
                <td><?= h($job->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $job->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $job->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?>
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
