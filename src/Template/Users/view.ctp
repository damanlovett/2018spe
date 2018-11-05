<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Groups'), ['controller' => 'UserGroups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Group'), ['controller' => 'UserGroups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Activity'), ['controller' => 'Activity', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Activity'), ['controller' => 'Activity', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Announcements'), ['controller' => 'Announcements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Announcement'), ['controller' => 'Announcements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fav Candidates'), ['controller' => 'FavCandidates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fav Candidate'), ['controller' => 'FavCandidates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Favorites'), ['controller' => 'Favorites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Favorite'), ['controller' => 'Favorites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fees'), ['controller' => 'Fees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fee'), ['controller' => 'Fees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fri Schedules'), ['controller' => 'FriSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fri Schedule'), ['controller' => 'FriSchedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fri Timeslots'), ['controller' => 'FriTimeslots', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fri Timeslot'), ['controller' => 'FriTimeslots', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Login Tokens'), ['controller' => 'LoginTokens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Login Token'), ['controller' => 'LoginTokens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List My Files'), ['controller' => 'MyFiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New My File'), ['controller' => 'MyFiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Packages'), ['controller' => 'Packages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Package'), ['controller' => 'Packages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sat Schedules'), ['controller' => 'SatSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sat Schedule'), ['controller' => 'SatSchedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sat Timeslots'), ['controller' => 'SatTimeslots', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sat Timeslot'), ['controller' => 'SatTimeslots', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Scheduled Email Recipients'), ['controller' => 'ScheduledEmailRecipients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scheduled Email Recipient'), ['controller' => 'ScheduledEmailRecipients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Activities'), ['controller' => 'UserActivities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Activity'), ['controller' => 'UserActivities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Contacts'), ['controller' => 'UserContacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Contact'), ['controller' => 'UserContacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Details'), ['controller' => 'UserDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Detail'), ['controller' => 'UserDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Email Recipients'), ['controller' => 'UserEmailRecipients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Email Recipient'), ['controller' => 'UserEmailRecipients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Email Signatures'), ['controller' => 'UserEmailSignatures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Email Signature'), ['controller' => 'UserEmailSignatures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Email Templates'), ['controller' => 'UserEmailTemplates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Email Template'), ['controller' => 'UserEmailTemplates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Socials'), ['controller' => 'UserSocials', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Social'), ['controller' => 'UserSocials', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Group') ?></th>
            <td><?= $user->has('user_group') ? $this->Html->link($user->user_group->name, ['controller' => 'UserGroups', 'action' => 'view', $user->user_group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $user->has('employer') ? $this->Html->link($user->employer->id, ['controller' => 'Employers', 'action' => 'view', $user->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($user->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($user->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip Address') ?></th>
            <td><?= h($user->ip_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Can Num') ?></th>
            <td><?= $this->Number->format($user->can_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($user->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Verified') ?></th>
            <td><?= $this->Number->format($user->email_verified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($user->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($user->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bday') ?></th>
            <td><?= h($user->bday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Login') ?></th>
            <td><?= h($user->last_login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Groups') ?></h4>
        <?php if (!empty($user->groups)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->groups as $groups): ?>
            <tr>
                <td><?= h($groups->id) ?></td>
                <td><?= h($groups->name) ?></td>
                <td><?= h($groups->created) ?></td>
                <td><?= h($groups->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Groups', 'action' => 'view', $groups->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Groups', 'action' => 'edit', $groups->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Groups', 'action' => 'delete', $groups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groups->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Activity') ?></h4>
        <?php if (!empty($user->activity)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Activity Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('User Browser') ?></th>
                <th scope="col"><?= __('User Ip') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Model') ?></th>
                <th scope="col"><?= __('Action') ?></th>
                <th scope="col"><?= __('Clicked From') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->activity as $activity): ?>
            <tr>
                <td><?= h($activity->activity_id) ?></td>
                <td><?= h($activity->user_id) ?></td>
                <td><?= h($activity->user_browser) ?></td>
                <td><?= h($activity->user_ip) ?></td>
                <td><?= h($activity->created) ?></td>
                <td><?= h($activity->model) ?></td>
                <td><?= h($activity->action) ?></td>
                <td><?= h($activity->clicked_from) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Activity', 'action' => 'view', $activity->activity_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Activity', 'action' => 'edit', $activity->activity_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Activity', 'action' => 'delete', $activity->activity_id], ['confirm' => __('Are you sure you want to delete # {0}?', $activity->activity_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Announcements') ?></h4>
        <?php if (!empty($user->announcements)): ?>
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
            <?php foreach ($user->announcements as $announcements): ?>
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
        <?php if (!empty($user->fav_candidates)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->fav_candidates as $favCandidates): ?>
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
        <h4><?= __('Related Favorites') ?></h4>
        <?php if (!empty($user->favorites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->favorites as $favorites): ?>
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
        <h4><?= __('Related Fees') ?></h4>
        <?php if (!empty($user->fees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->fees as $fees): ?>
            <tr>
                <td><?= h($fees->id) ?></td>
                <td><?= h($fees->user_id) ?></td>
                <td><?= h($fees->name) ?></td>
                <td><?= h($fees->description) ?></td>
                <td><?= h($fees->amount) ?></td>
                <td><?= h($fees->type) ?></td>
                <td><?= h($fees->visible) ?></td>
                <td><?= h($fees->created) ?></td>
                <td><?= h($fees->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fees', 'action' => 'view', $fees->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fees', 'action' => 'edit', $fees->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fees', 'action' => 'delete', $fees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fees->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fri Schedules') ?></h4>
        <?php if (!empty($user->fri_schedules)): ?>
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
            <?php foreach ($user->fri_schedules as $friSchedules): ?>
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
        <?php if (!empty($user->fri_timeslots)): ?>
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
            <?php foreach ($user->fri_timeslots as $friTimeslots): ?>
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
        <?php if (!empty($user->jobs)): ?>
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
            <?php foreach ($user->jobs as $jobs): ?>
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
        <h4><?= __('Related Login Tokens') ?></h4>
        <?php if (!empty($user->login_tokens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Token') ?></th>
                <th scope="col"><?= __('Duration') ?></th>
                <th scope="col"><?= __('Used') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Expires') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->login_tokens as $loginTokens): ?>
            <tr>
                <td><?= h($loginTokens->id) ?></td>
                <td><?= h($loginTokens->user_id) ?></td>
                <td><?= h($loginTokens->token) ?></td>
                <td><?= h($loginTokens->duration) ?></td>
                <td><?= h($loginTokens->used) ?></td>
                <td><?= h($loginTokens->created) ?></td>
                <td><?= h($loginTokens->expires) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LoginTokens', 'action' => 'view', $loginTokens->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LoginTokens', 'action' => 'edit', $loginTokens->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LoginTokens', 'action' => 'delete', $loginTokens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loginTokens->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Messages') ?></h4>
        <?php if (!empty($user->messages)): ?>
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
            <?php foreach ($user->messages as $messages): ?>
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
        <h4><?= __('Related My Files') ?></h4>
        <?php if (!empty($user->my_files)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Size') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->my_files as $myFiles): ?>
            <tr>
                <td><?= h($myFiles->id) ?></td>
                <td><?= h($myFiles->name) ?></td>
                <td><?= h($myFiles->user_id) ?></td>
                <td><?= h($myFiles->type) ?></td>
                <td><?= h($myFiles->size) ?></td>
                <td><?= h($myFiles->data) ?></td>
                <td><?= h($myFiles->created) ?></td>
                <td><?= h($myFiles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MyFiles', 'action' => 'view', $myFiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MyFiles', 'action' => 'edit', $myFiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MyFiles', 'action' => 'delete', $myFiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myFiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Packages') ?></h4>
        <?php if (!empty($user->packages)): ?>
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
            <?php foreach ($user->packages as $packages): ?>
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
        <h4><?= __('Related Posts') ?></h4>
        <?php if (!empty($user->posts)): ?>
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
            <?php foreach ($user->posts as $posts): ?>
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
        <?php if (!empty($user->sat_schedules)): ?>
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
            <?php foreach ($user->sat_schedules as $satSchedules): ?>
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
        <?php if (!empty($user->sat_timeslots)): ?>
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
            <?php foreach ($user->sat_timeslots as $satTimeslots): ?>
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
        <h4><?= __('Related Scheduled Email Recipients') ?></h4>
        <?php if (!empty($user->scheduled_email_recipients)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Scheduled Email Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Email Address') ?></th>
                <th scope="col"><?= __('Is Email Sent') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->scheduled_email_recipients as $scheduledEmailRecipients): ?>
            <tr>
                <td><?= h($scheduledEmailRecipients->id) ?></td>
                <td><?= h($scheduledEmailRecipients->scheduled_email_id) ?></td>
                <td><?= h($scheduledEmailRecipients->user_id) ?></td>
                <td><?= h($scheduledEmailRecipients->email_address) ?></td>
                <td><?= h($scheduledEmailRecipients->is_email_sent) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ScheduledEmailRecipients', 'action' => 'view', $scheduledEmailRecipients->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ScheduledEmailRecipients', 'action' => 'edit', $scheduledEmailRecipients->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ScheduledEmailRecipients', 'action' => 'delete', $scheduledEmailRecipients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scheduledEmailRecipients->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($user->transactions)): ?>
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
            <?php foreach ($user->transactions as $transactions): ?>
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
        <h4><?= __('Related User Activities') ?></h4>
        <?php if (!empty($user->user_activities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Useragent') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Last Action') ?></th>
                <th scope="col"><?= __('Last Url') ?></th>
                <th scope="col"><?= __('User Browser') ?></th>
                <th scope="col"><?= __('Ip Address') ?></th>
                <th scope="col"><?= __('Logout') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_activities as $userActivities): ?>
            <tr>
                <td><?= h($userActivities->id) ?></td>
                <td><?= h($userActivities->useragent) ?></td>
                <td><?= h($userActivities->user_id) ?></td>
                <td><?= h($userActivities->last_action) ?></td>
                <td><?= h($userActivities->last_url) ?></td>
                <td><?= h($userActivities->user_browser) ?></td>
                <td><?= h($userActivities->ip_address) ?></td>
                <td><?= h($userActivities->logout) ?></td>
                <td><?= h($userActivities->deleted) ?></td>
                <td><?= h($userActivities->created) ?></td>
                <td><?= h($userActivities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserActivities', 'action' => 'view', $userActivities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserActivities', 'action' => 'edit', $userActivities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserActivities', 'action' => 'delete', $userActivities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userActivities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Contacts') ?></h4>
        <?php if (!empty($user->user_contacts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Requirement') ?></th>
                <th scope="col"><?= __('Reply Message') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_contacts as $userContacts): ?>
            <tr>
                <td><?= h($userContacts->id) ?></td>
                <td><?= h($userContacts->user_id) ?></td>
                <td><?= h($userContacts->name) ?></td>
                <td><?= h($userContacts->email) ?></td>
                <td><?= h($userContacts->phone) ?></td>
                <td><?= h($userContacts->requirement) ?></td>
                <td><?= h($userContacts->reply_message) ?></td>
                <td><?= h($userContacts->created) ?></td>
                <td><?= h($userContacts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserContacts', 'action' => 'view', $userContacts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserContacts', 'action' => 'edit', $userContacts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserContacts', 'action' => 'delete', $userContacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userContacts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Details') ?></h4>
        <?php if (!empty($user->user_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('Cellphone') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_details as $userDetails): ?>
            <tr>
                <td><?= h($userDetails->id) ?></td>
                <td><?= h($userDetails->user_id) ?></td>
                <td><?= h($userDetails->location) ?></td>
                <td><?= h($userDetails->cellphone) ?></td>
                <td><?= h($userDetails->created) ?></td>
                <td><?= h($userDetails->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserDetails', 'action' => 'view', $userDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserDetails', 'action' => 'edit', $userDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserDetails', 'action' => 'delete', $userDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Email Recipients') ?></h4>
        <?php if (!empty($user->user_email_recipients)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Email Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Email Address') ?></th>
                <th scope="col"><?= __('Is Email Sent') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_email_recipients as $userEmailRecipients): ?>
            <tr>
                <td><?= h($userEmailRecipients->id) ?></td>
                <td><?= h($userEmailRecipients->user_email_id) ?></td>
                <td><?= h($userEmailRecipients->user_id) ?></td>
                <td><?= h($userEmailRecipients->email_address) ?></td>
                <td><?= h($userEmailRecipients->is_email_sent) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserEmailRecipients', 'action' => 'view', $userEmailRecipients->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserEmailRecipients', 'action' => 'edit', $userEmailRecipients->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserEmailRecipients', 'action' => 'delete', $userEmailRecipients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userEmailRecipients->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Email Signatures') ?></h4>
        <?php if (!empty($user->user_email_signatures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Signature Name') ?></th>
                <th scope="col"><?= __('Signature') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_email_signatures as $userEmailSignatures): ?>
            <tr>
                <td><?= h($userEmailSignatures->id) ?></td>
                <td><?= h($userEmailSignatures->user_id) ?></td>
                <td><?= h($userEmailSignatures->signature_name) ?></td>
                <td><?= h($userEmailSignatures->signature) ?></td>
                <td><?= h($userEmailSignatures->created) ?></td>
                <td><?= h($userEmailSignatures->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserEmailSignatures', 'action' => 'view', $userEmailSignatures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserEmailSignatures', 'action' => 'edit', $userEmailSignatures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserEmailSignatures', 'action' => 'delete', $userEmailSignatures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userEmailSignatures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Email Templates') ?></h4>
        <?php if (!empty($user->user_email_templates)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Template Name') ?></th>
                <th scope="col"><?= __('Header') ?></th>
                <th scope="col"><?= __('Footer') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_email_templates as $userEmailTemplates): ?>
            <tr>
                <td><?= h($userEmailTemplates->id) ?></td>
                <td><?= h($userEmailTemplates->user_id) ?></td>
                <td><?= h($userEmailTemplates->template_name) ?></td>
                <td><?= h($userEmailTemplates->header) ?></td>
                <td><?= h($userEmailTemplates->footer) ?></td>
                <td><?= h($userEmailTemplates->created) ?></td>
                <td><?= h($userEmailTemplates->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserEmailTemplates', 'action' => 'view', $userEmailTemplates->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserEmailTemplates', 'action' => 'edit', $userEmailTemplates->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserEmailTemplates', 'action' => 'delete', $userEmailTemplates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userEmailTemplates->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Socials') ?></h4>
        <?php if (!empty($user->user_socials)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Socialid') ?></th>
                <th scope="col"><?= __('Access Token') ?></th>
                <th scope="col"><?= __('Access Secret') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_socials as $userSocials): ?>
            <tr>
                <td><?= h($userSocials->id) ?></td>
                <td><?= h($userSocials->user_id) ?></td>
                <td><?= h($userSocials->type) ?></td>
                <td><?= h($userSocials->socialid) ?></td>
                <td><?= h($userSocials->access_token) ?></td>
                <td><?= h($userSocials->access_secret) ?></td>
                <td><?= h($userSocials->created) ?></td>
                <td><?= h($userSocials->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserSocials', 'action' => 'view', $userSocials->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserSocials', 'action' => 'edit', $userSocials->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserSocials', 'action' => 'delete', $userSocials->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userSocials->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
