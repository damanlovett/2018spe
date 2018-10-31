<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FavCandidate $favCandidate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $favCandidate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $favCandidate->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fav Candidates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="favCandidates form large-9 medium-8 columns content">
    <?= $this->Form->create($favCandidate) ?>
    <fieldset>
        <legend><?= __('Edit Fav Candidate') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('employer_id', ['options' => $employers]);
            echo $this->Form->control('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
