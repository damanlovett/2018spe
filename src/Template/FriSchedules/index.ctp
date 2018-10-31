<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FriSchedule[]|\Cake\Collection\CollectionInterface $friSchedules
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fri Schedule'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fri Timeslots'), ['controller' => 'FriTimeslots', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fri Timeslot'), ['controller' => 'FriTimeslots', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="friSchedules index large-9 medium-8 columns content">
    <h3><?= __('Fri Schedules') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
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
            <?php foreach ($friSchedules as $friSchedule): ?>
            <tr>
                <td><?= $this->Number->format($friSchedule->id) ?></td>
                <td><?= $friSchedule->has('employer') ? $this->Html->link($friSchedule->employer->id, ['controller' => 'Employers', 'action' => 'view', $friSchedule->employer->id]) : '' ?></td>
                <td><?= $friSchedule->has('user') ? $this->Html->link($friSchedule->user->id, ['controller' => 'Users', 'action' => 'view', $friSchedule->user->id]) : '' ?></td>
                <td><?= h($friSchedule->location) ?></td>
                <td><?= h($friSchedule->length) ?></td>
                <td><?= $friSchedule->has('job') ? $this->Html->link($friSchedule->job->title, ['controller' => 'Jobs', 'action' => 'view', $friSchedule->job->id]) : '' ?></td>
                <td><?= h($friSchedule->modified_by) ?></td>
                <td><?= h($friSchedule->created) ?></td>
                <td><?= h($friSchedule->modified) ?></td>
                <td><?= h($friSchedule->visible) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $friSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $friSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $friSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $friSchedule->id)]) ?>
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
