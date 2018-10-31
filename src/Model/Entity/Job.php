<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $requirements
 * @property int $employer_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employer $employer
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Favorite[] $favorites
 * @property \App\Model\Entity\FriSchedule[] $fri_schedules
 * @property \App\Model\Entity\FriTimeslot[] $fri_timeslots
 * @property \App\Model\Entity\SatSchedule[] $sat_schedules
 * @property \App\Model\Entity\SatTimeslot[] $sat_timeslots
 */
class Job extends Entity
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
        'title' => true,
        'description' => true,
        'requirements' => true,
        'employer_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'employer' => true,
        'user' => true,
        'favorites' => true,
        'fri_schedules' => true,
        'fri_timeslots' => true,
        'sat_schedules' => true,
        'sat_timeslots' => true
    ];
}
