<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employer $employer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employer'), ['action' => 'edit', $employer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employer'), ['action' => 'delete', $employer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Announcements'), ['controller' => 'Announcements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Announcement'), ['controller' => 'Announcements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fav Candidates'), ['controller' => 'FavCandidates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fav Candidate'), ['controller' => 'FavCandidates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fri Schedules'), ['controller' => 'FriSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fri Schedule'), ['controller' => 'FriSchedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fri Timeslots'), ['controller' => 'FriTimeslots', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fri Timeslot'), ['controller' => 'FriTimeslots', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Packages'), ['controller' => 'Packages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Package'), ['controller' => 'Packages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sat Schedules'), ['controller' => 'SatSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sat Schedule'), ['controller' => 'SatSchedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sat Timeslots'), ['controller' => 'SatTimeslots', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sat Timeslot'), ['controller' => 'SatTimeslots', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users2'), ['controller' => 'Users2', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users2'), ['controller' => 'Users2', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employers view large-9 medium-8 columns content">
    <h3><?= h($employer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($employer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Institution') ?></th>
            <td><?= h($employer->institution) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($employer->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($employer->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= h($employer->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Website') ?></th>
            <td><?= h($employer->website) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emp Num') ?></th>
            <td><?= $this->Number->format($employer->emp_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Interviewers') ?></th>
            <td><?= $this->Number->format($employer->interviewers) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Positions') ?></th>
            <td><?= $this->Number->format($employer->positions) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($employer->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($employer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($employer->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($employer->address)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Announcements') ?></h4>
        <?php if (!empty($employer->announcements)) : ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employer->announcements as $announcements) : ?>
            <tr>
                <td><?= h($announcements->id) ?></td>
                <td><?= h($announcements->employer_id) ?></td>
                <td><?= h($announcements->user_id) ?></td>
                <td><?= h($announcements->message) ?></td>
                <td><?= h($announcements->title) ?></td>
                <td><?= h($announcements->modified_by) ?></td>
                <td><?= h($announcements->created) ?></td>
                <td><?= h($announcements->created_by) ?></td>
                <td><?= h($announcements->modified) ?></td>
                <td><?= h($announcements->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Announcements', 'action' => 'view', $announcements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Announcements', 'action' => 'edit', $announcements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Announcements', 'action' => 'delete', $announcements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $announcements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fav Candidates') ?></h4>
        <?php if (!empty($employer->fav_candidates)) : ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employer->fav_candidates as $favCandidates) : ?>
            <tr>
                <td><?= h($favCandidates->id) ?></td>
                <td><?= h($favCandidates->user_id) ?></td>
                <td><?= h($favCandidates->employer_id) ?></td>
                <td><?= h($favCandidates->notes) ?></td>
                <td><?= h($favCandidates->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FavCandidates', 'action' => 'view', $favCandidates->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FavCandidates', 'action' => 'edit', $favCandidates->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FavCandidates', 'action' => 'delete', $favCandidates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $favCandidates->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fri Schedules') ?></h4>
        <?php if (!empty($employer->fri_schedules)) : ?>
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
            <?php foreach ($employer->fri_schedules as $friSchedules) : ?>
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
        <?php if (!empty($employer->fri_timeslots)) : ?>
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
            <?php foreach ($employer->fri_timeslots as $friTimeslots) : ?>
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
        <h4><?= __('Related Jobs') ?></h4>
        <?php if (!empty($employer->jobs)) : ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Requirements') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employer->jobs as $jobs) : ?>
            <tr>
                <td><?= h($jobs->id) ?></td>
                <td><?= h($jobs->title) ?></td>
                <td><?= h($jobs->description) ?></td>
                <td><?= h($jobs->requirements) ?></td>
                <td><?= h($jobs->employer_id) ?></td>
                <td><?= h($jobs->user_id) ?></td>
                <td><?= h($jobs->created) ?></td>
                <td><?= h($jobs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Jobs', 'action' => 'view', $jobs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Jobs', 'action' => 'edit', $jobs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Jobs', 'action' => 'delete', $jobs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Messages') ?></h4>
        <?php if (!empty($employer->messages)) : ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('From Emp') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Author Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employer->messages as $messages) : ?>
            <tr>
                <td><?= h($messages->id) ?></td>
                <td><?= h($messages->employer_id) ?></td>
                <td><?= h($messages->user_id) ?></td>
                <td><?= h($messages->from_emp) ?></td>
                <td><?= h($messages->message) ?></td>
                <td><?= h($messages->title) ?></td>
                <td><?= h($messages->author_id) ?></td>
                <td><?= h($messages->created) ?></td>
                <td><?= h($messages->created_by) ?></td>
                <td><?= h($messages->modified) ?></td>
                <td><?= h($messages->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Messages', 'action' => 'view', $messages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Messages', 'action' => 'edit', $messages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Messages', 'action' => 'delete', $messages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Packages') ?></h4>
        <?php if (!empty($employer->packages)) : ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Fee Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employer->packages as $packages) : ?>
            <tr>
                <td><?= h($packages->id) ?></td>
                <td><?= h($packages->employer_id) ?></td>
                <td><?= h($packages->user_id) ?></td>
                <td><?= h($packages->fee_id) ?></td>
                <td><?= h($packages->name) ?></td>
                <td><?= h($packages->description) ?></td>
                <td><?= h($packages->amount) ?></td>
                <td><?= h($packages->created) ?></td>
                <td><?= h($packages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Packages', 'action' => 'view', $packages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Packages', 'action' => 'edit', $packages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Packages', 'action' => 'delete', $packages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Positions') ?></h4>
        <?php if (!empty($employer->positions)) : ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Brief Description') ?></th>
                <th scope="col"><?= __('Full Description') ?></th>
                <th scope="col"><?= __('Degree') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employer->positions as $positions) : ?>
            <tr>
                <td><?= h($positions->id) ?></td>
                <td><?= h($positions->employer_id) ?></td>
                <td><?= h($positions->title) ?></td>
                <td><?= h($positions->brief_description) ?></td>
                <td><?= h($positions->full_description) ?></td>
                <td><?= h($positions->degree) ?></td>
                <td><?= h($positions->created) ?></td>
                <td><?= h($positions->created_by) ?></td>
                <td><?= h($positions->modified) ?></td>
                <td><?= h($positions->modified_by) ?></td>
                <td><?= h($positions->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Positions', 'action' => 'view', $positions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Positions', 'action' => 'edit', $positions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Positions', 'action' => 'delete', $positions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Posts') ?></h4>
        <?php if (!empty($employer->posts)) : ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employer->posts as $posts) : ?>
            <tr>
                <td><?= h($posts->id) ?></td>
                <td><?= h($posts->employer_id) ?></td>
                <td><?= h($posts->user_id) ?></td>
                <td><?= h($posts->message) ?></td>
                <td><?= h($posts->title) ?></td>
                <td><?= h($posts->modified_by) ?></td>
                <td><?= h($posts->created) ?></td>
                <td><?= h($posts->created_by) ?></td>
                <td><?= h($posts->modified) ?></td>
                <td><?= h($posts->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $posts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Posts', 'action' => 'delete', $posts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sat Schedules') ?></h4>
        <?php if (!empty($employer->sat_schedules)) : ?>
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
            <?php foreach ($employer->sat_schedules as $satSchedules) : ?>
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
        <?php if (!empty($employer->sat_timeslots)) : ?>
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
            <?php foreach ($employer->sat_timeslots as $satTimeslots) : ?>
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
    <div class="related">
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($employer->transactions)) : ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Check Number') ?></th>
                <th scope="col"><?= __('Credit Info') ?></th>
                <th scope="col"><?= __('Admin Notes') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employer->transactions as $transactions) : ?>
            <tr>
                <td><?= h($transactions->id) ?></td>
                <td><?= h($transactions->employer_id) ?></td>
                <td><?= h($transactions->user_id) ?></td>
                <td><?= h($transactions->name) ?></td>
                <td><?= h($transactions->description) ?></td>
                <td><?= h($transactions->amount) ?></td>
                <td><?= h($transactions->check_number) ?></td>
                <td><?= h($transactions->credit_info) ?></td>
                <td><?= h($transactions->admin_notes) ?></td>
                <td><?= h($transactions->created) ?></td>
                <td><?= h($transactions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transactions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transactions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users2') ?></h4>
        <?php if (!empty($employer->users2)) : ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Group Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Spe Num') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('Salt') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Email Verified') ?></th>
                <th scope="col"><?= __('Edit Sch') ?></th>
                <th scope="col"><?= __('Last Login') ?></th>
                <th scope="col"><?= __('By Admin') ?></th>
                <th scope="col"><?= __('Ip Address') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employer->users2 as $users2) : ?>
            <tr>
                <td><?= h($users2->id) ?></td>
                <td><?= h($users2->user_group_id) ?></td>
                <td><?= h($users2->username) ?></td>
                <td><?= h($users2->password) ?></td>
                <td><?= h($users2->spe_num) ?></td>
                <td><?= h($users2->employer_id) ?></td>
                <td><?= h($users2->salt) ?></td>
                <td><?= h($users2->email) ?></td>
                <td><?= h($users2->first_name) ?></td>
                <td><?= h($users2->last_name) ?></td>
                <td><?= h($users2->active) ?></td>
                <td><?= h($users2->email_verified) ?></td>
                <td><?= h($users2->edit_sch) ?></td>
                <td><?= h($users2->last_login) ?></td>
                <td><?= h($users2->by_admin) ?></td>
                <td><?= h($users2->ip_address) ?></td>
                <td><?= h($users2->created) ?></td>
                <td><?= h($users2->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users2', 'action' => 'view', $users2->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users2', 'action' => 'edit', $users2->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users2', 'action' => 'delete', $users2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users2->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
