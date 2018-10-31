<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activity $activity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Activity'), ['action' => 'edit', $activity->activity_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Activity'), ['action' => 'delete', $activity->activity_id], ['confirm' => __('Are you sure you want to delete # {0}?', $activity->activity_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Activity'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Activity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="activity view large-9 medium-8 columns content">
    <h3><?= h($activity->activity_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $activity->has('user') ? $this->Html->link($activity->user->id, ['controller' => 'Users', 'action' => 'view', $activity->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Browser') ?></th>
            <td><?= h($activity->user_browser) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Ip') ?></th>
            <td><?= h($activity->user_ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($activity->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action') ?></th>
            <td><?= h($activity->action) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clicked From') ?></th>
            <td><?= h($activity->clicked_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activity Id') ?></th>
            <td><?= $this->Number->format($activity->activity_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($activity->created) ?></td>
        </tr>
    </table>
</div>
