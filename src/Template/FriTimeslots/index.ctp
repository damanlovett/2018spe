<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FriTimeslot[]|\Cake\Collection\CollectionInterface $friTimeslots
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<h2>Manager Dashboard</h2>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fri Timeslot'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fri Schedules'), ['controller' => 'FriSchedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fri Schedule'), ['controller' => 'FriSchedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="friTimeslots index large-9 medium-8 columns content">
    <h3><?= __('Fri Timeslots') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fri_schedule_id') ?></th>
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
            <?php foreach ($friTimeslots as $friTimeslot) : ?>
            <tr>
                <td><?= $this->Number->format($friTimeslot->id) ?></td>
                <td><?= $friTimeslot->has('employer') ? $this->Html->link($friTimeslot->employer->id, ['controller' => 'Employers', 'action' => 'view', $friTimeslot->employer->id]) : '' ?></td>
                <td><?= $friTimeslot->has('fri_schedule') ? $this->Html->link($friTimeslot->fri_schedule->id, ['controller' => 'FriSchedules', 'action' => 'view', $friTimeslot->fri_schedule->id]) : '' ?></td>
                <td><?= $friTimeslot->has('user') ? $this->Html->link($friTimeslot->user->id, ['controller' => 'Users', 'action' => 'view', $friTimeslot->user->id]) : '' ?></td>
                <td><?= h($friTimeslot->start_time) ?></td>
                <td><?= h($friTimeslot->end_time) ?></td>
                <td><?= h($friTimeslot->length) ?></td>
                <td><?= $friTimeslot->has('job') ? $this->Html->link($friTimeslot->job->title, ['controller' => 'Jobs', 'action' => 'view', $friTimeslot->job->id]) : '' ?></td>
                <td><?= h($friTimeslot->modified_by) ?></td>
                <td><?= h($friTimeslot->created) ?></td>
                <td><?= h($friTimeslot->modified) ?></td>
                <td><?= h($friTimeslot->visible) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $friTimeslot->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $friTimeslot->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $friTimeslot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $friTimeslot->id)]) ?>
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
