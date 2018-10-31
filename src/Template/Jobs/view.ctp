<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Favorites'), ['controller' => 'Favorites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Favorite'), ['controller' => 'Favorites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fri Schedules'), ['controller' => 'FriSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fri Schedule'), ['controller' => 'FriSchedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fri Timeslots'), ['controller' => 'FriTimeslots', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fri Timeslot'), ['controller' => 'FriTimeslots', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sat Schedules'), ['controller' => 'SatSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sat Schedule'), ['controller' => 'SatSchedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sat Timeslots'), ['controller' => 'SatTimeslots', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sat Timeslot'), ['controller' => 'SatTimeslots', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jobs view large-9 medium-8 columns content">
    <h3><?= h($job->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($job->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $job->has('employer') ? $this->Html->link($job->employer->id, ['controller' => 'Employers', 'action' => 'view', $job->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $job->has('user') ? $this->Html->link($job->user->id, ['controller' => 'Users', 'action' => 'view', $job->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($job->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($job->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($job->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($job->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Requirements') ?></h4>
        <?= $this->Text->autoParagraph(h($job->requirements)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Favorites') ?></h4>
        <?php if (!empty($job->favorites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($job->favorites as $favorites): ?>
            <tr>
                <td><?= h($favorites->id) ?></td>
                <td><?= h($favorites->user_id) ?></td>
                <td><?= h($favorites->job_id) ?></td>
                <td><?= h($favorites->notes) ?></td>
                <td><?= h($favorites->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Favorites', 'action' => 'view', $favorites->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Favorites', 'action' => 'edit', $favorites->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Favorites', 'action' => 'delete', $favorites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $favorites->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fri Schedules') ?></h4>
        <?php if (!empty($job->fri_schedules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('Length') ?></th>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($job->fri_schedules as $friSchedules): ?>
            <tr>
                <td><?= h($friSchedules->id) ?></td>
                <td><?= h($friSchedules->employer_id) ?></td>
                <td><?= h($friSchedules->user_id) ?></td>
                <td><?= h($friSchedules->location) ?></td>
                <td><?= h($friSchedules->length) ?></td>
                <td><?= h($friSchedules->job_id) ?></td>
                <td><?= h($friSchedules->modified_by) ?></td>
                <td><?= h($friSchedules->created) ?></td>
                <td><?= h($friSchedules->modified) ?></td>
                <td><?= h($friSchedules->visible) ?></td>
                <td><?= h($friSchedules->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FriSchedules', 'action' => 'view', $friSchedules->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FriSchedules', 'action' => 'edit', $friSchedules->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FriSchedules', 'action' => 'delete', $friSchedules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $friSchedules->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fri Timeslots') ?></h4>
        <?php if (!empty($job->fri_timeslots)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('Fri Schedule Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Start Time') ?></th>
                <th scope="col"><?= __('End Time') ?></th>
                <th scope="col"><?= __('Length') ?></th>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($job->fri_timeslots as $friTimeslots): ?>
            <tr>
                <td><?= h($friTimeslots->id) ?></td>
                <td><?= h($friTimeslots->employer_id) ?></td>
                <td><?= h($friTimeslots->fri_schedule_id) ?></td>
                <td><?= h($friTimeslots->user_id) ?></td>
                <td><?= h($friTimeslots->start_time) ?></td>
                <td><?= h($friTimeslots->end_time) ?></td>
                <td><?= h($friTimeslots->length) ?></td>
                <td><?= h($friTimeslots->job_id) ?></td>
                <td><?= h($friTimeslots->modified_by) ?></td>
                <td><?= h($friTimeslots->created) ?></td>
                <td><?= h($friTimeslots->modified) ?></td>
                <td><?= h($friTimeslots->visible) ?></td>
                <td><?= h($friTimeslots->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FriTimeslots', 'action' => 'view', $friTimeslots->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FriTimeslots', 'action' => 'edit', $friTimeslots->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FriTimeslots', 'action' => 'delete', $friTimeslots->id], ['confirm' => __('Are you sure you want to delete # {0}?', $friTimeslots->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sat Schedules') ?></h4>
        <?php if (!empty($job->sat_schedules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('Length') ?></th>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($job->sat_schedules as $satSchedules): ?>
            <tr>
                <td><?= h($satSchedules->id) ?></td>
                <td><?= h($satSchedules->employer_id) ?></td>
                <td><?= h($satSchedules->user_id) ?></td>
                <td><?= h($satSchedules->location) ?></td>
                <td><?= h($satSchedules->length) ?></td>
                <td><?= h($satSchedules->job_id) ?></td>
                <td><?= h($satSchedules->modified_by) ?></td>
                <td><?= h($satSchedules->created) ?></td>
                <td><?= h($satSchedules->modified) ?></td>
                <td><?= h($satSchedules->visible) ?></td>
                <td><?= h($satSchedules->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SatSchedules', 'action' => 'view', $satSchedules->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SatSchedules', 'action' => 'edit', $satSchedules->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SatSchedules', 'action' => 'delete', $satSchedules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $satSchedules->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sat Timeslots') ?></h4>
        <?php if (!empty($job->sat_timeslots)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('Sat Schedule Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Start Time') ?></th>
                <th scope="col"><?= __('End Time') ?></th>
                <th scope="col"><?= __('Length') ?></th>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($job->sat_timeslots as $satTimeslots): ?>
            <tr>
                <td><?= h($satTimeslots->id) ?></td>
                <td><?= h($satTimeslots->employer_id) ?></td>
                <td><?= h($satTimeslots->sat_schedule_id) ?></td>
                <td><?= h($satTimeslots->user_id) ?></td>
                <td><?= h($satTimeslots->start_time) ?></td>
                <td><?= h($satTimeslots->end_time) ?></td>
                <td><?= h($satTimeslots->length) ?></td>
                <td><?= h($satTimeslots->job_id) ?></td>
                <td><?= h($satTimeslots->modified_by) ?></td>
                <td><?= h($satTimeslots->created) ?></td>
                <td><?= h($satTimeslots->modified) ?></td>
                <td><?= h($satTimeslots->visible) ?></td>
                <td><?= h($satTimeslots->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SatTimeslots', 'action' => 'view', $satTimeslots->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SatTimeslots', 'action' => 'edit', $satTimeslots->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SatTimeslots', 'action' => 'delete', $satTimeslots->id], ['confirm' => __('Are you sure you want to delete # {0}?', $satTimeslots->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
