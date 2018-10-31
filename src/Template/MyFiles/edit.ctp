<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MyFile $myFile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $myFile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $myFile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List My Files'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="myFiles form large-9 medium-8 columns content">
    <?= $this->Form->create($myFile) ?>
    <fieldset>
        <legend><?= __('Edit My File') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('type');
            echo $this->Form->control('size');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
