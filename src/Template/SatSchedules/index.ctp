<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SatSchedule[]|\Cake\Collection\CollectionInterface $satSchedules
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sat Schedule'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sat Timeslots'), ['controller' => 'SatTimeslots', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sat Timeslot'), ['controller' => 'SatTimeslots', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="satSchedules index large-9 medium-8 columns content">
    <h3><?= __('Sat Schedules') ?></h3>
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
            <?php foreach ($satSchedules as $satSchedule): ?>
            <tr>
                <td><?= $this->Number->format($satSchedule->id) ?></td>
                <td><?= $satSchedule->has('employer') ? $this->Html->link($satSchedule->employer->id, ['controller' => 'Employers', 'action' => 'view', $satSchedule->employer->id]) : '' ?></td>
                <td><?= $satSchedule->has('user') ? $this->Html->link($satSchedule->user->id, ['controller' => 'Users', 'action' => 'view', $satSchedule->user->id]) : '' ?></td>
                <td><?= h($satSchedule->location) ?></td>
                <td><?= h($satSchedule->length) ?></td>
                <td><?= $satSchedule->has('job') ? $this->Html->link($satSchedule->job->title, ['controller' => 'Jobs', 'action' => 'view', $satSchedule->job->id]) : '' ?></td>
                <td><?= h($satSchedule->modified_by) ?></td>
                <td><?= h($satSchedule->created) ?></td>
                <td><?= h($satSchedule->modified) ?></td>
                <td><?= h($satSchedule->visible) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $satSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $satSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $satSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $satSchedule->id)]) ?>
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
