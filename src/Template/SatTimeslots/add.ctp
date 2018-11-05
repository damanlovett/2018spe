<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SatTimeslot $satTimeslot
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<h2>Manager Add</h2>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sat Timeslots'), ['action' => 'index']) ?></li>
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
<div class="satTimeslots form large-9 medium-8 columns content">
    <?= $this->Form->create($satTimeslot) ?>
    <fieldset>
        <legend><?= __('Add Sat Timeslot') ?></legend>
        <?php
        echo $this->Form->control('employer_id', ['options' => $employers, 'empty' => true]);
        echo $this->Form->control('sat_schedule_id', ['options' => $satSchedules]);
        echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
        echo $this->Form->control('start_time', ['empty' => true]);
        echo $this->Form->control('end_time', ['empty' => true]);
        echo $this->Form->control('length');
        echo $this->Form->control('job_id', ['options' => $jobs, 'empty' => true]);
        echo $this->Form->control('modified_by');
        echo $this->Form->control('visible');
        echo $this->Form->control('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
