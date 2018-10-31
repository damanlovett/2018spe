<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content $content
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Content'), ['action' => 'edit', $content->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Content'), ['action' => 'delete', $content->id], ['confirm' => __('Are you sure you want to delete # {0}?', $content->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Content'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contents view large-9 medium-8 columns content">
    <h3><?= h($content->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($content->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($content->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($content->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Page Name') ?></h4>
        <?= $this->Text->autoParagraph(h($content->page_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Url Name') ?></h4>
        <?= $this->Text->autoParagraph(h($content->url_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Page Content') ?></h4>
        <?= $this->Text->autoParagraph(h($content->page_content)); ?>
    </div>
    <div class="row">
        <h4><?= __('Page Title') ?></h4>
        <?= $this->Text->autoParagraph(h($content->page_title)); ?>
    </div>
</div>
