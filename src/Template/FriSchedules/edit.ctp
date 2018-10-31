<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FriSchedule $friSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $friSchedule->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $friSchedule->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fri Schedules'), ['action' => 'index']) ?></li>
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
<div class="friSchedules form large-9 medium-8 columns content">
    <?= $this->Form->create($friSchedule) ?>
    <fieldset>
        <legend><?= __('Edit Fri Schedule') ?></legend>
        <?php
            echo $this->Form->control('employer_id', ['options' => $employers, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('location');
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
