<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employer Entity
 *
 * @property int $id
 * @property int $emp_num
 * @property string $institution
 * @property int $interviewers
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $website
 * @property int $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Position[] $positions
 * @property \App\Model\Entity\Announcement[] $announcements
 * @property \App\Model\Entity\FavCandidate[] $fav_candidates
 * @property \App\Model\Entity\FriSchedule[] $fri_schedules
 * @property \App\Model\Entity\FriTimeslot[] $fri_timeslots
 * @property \App\Model\Entity\Job[] $jobs
 * @property \App\Model\Entity\Message[] $messages
 * @property \App\Model\Entity\Package[] $packages
 * @property \App\Model\Entity\Post[] $posts
 * @property \App\Model\Entity\SatSchedule[] $sat_schedules
 * @property \App\Model\Entity\SatTimeslot[] $sat_timeslots
 * @property \App\Model\Entity\Transaction[] $transactions
 * @property \App\Model\Entity\Users2[] $users2
 */
class Employer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'emp_num' => true,
        'institution' => true,
        'interviewers' => true,
        'positions' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'zip' => true,
        'website' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'announcements' => true,
        'fav_candidates' => true,
        'fri_schedules' => true,
        'fri_timeslots' => true,
        'jobs' => true,
        'messages' => true,
        'packages' => true,
        'posts' => true,
        'sat_schedules' => true,
        'sat_timeslots' => true,
        'transactions' => true,
        'users2' => true
    ];
}
