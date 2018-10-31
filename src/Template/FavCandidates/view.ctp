<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FavCandidate $favCandidate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fav Candidate'), ['action' => 'edit', $favCandidate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fav Candidate'), ['action' => 'delete', $favCandidate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $favCandidate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fav Candidates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fav Candidate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="favCandidates view large-9 medium-8 columns content">
    <h3><?= h($favCandidate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $favCandidate->has('user') ? $this->Html->link($favCandidate->user->id, ['controller' => 'Users', 'action' => 'view', $favCandidate->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $favCandidate->has('employer') ? $this->Html->link($favCandidate->employer->id, ['controller' => 'Employers', 'action' => 'view', $favCandidate->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($favCandidate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($favCandidate->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($favCandidate->notes)); ?>
    </div>
</div>
