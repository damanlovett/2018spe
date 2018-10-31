<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SatTimeslot Entity
 *
 * @property int $id
 * @property int $employer_id
 * @property int $sat_schedule_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $start_time
 * @property \Cake\I18n\FrozenTime $end_time
 * @property string $length
 * @property int $job_id
 * @property string $modified_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $visible
 * @property string $notes
 *
 * @property \App\Model\Entity\Employer $employer
 * @property \App\Model\Entity\SatSchedule $sat_schedule
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Job $job
 */
class SatTimeslot extends Entity
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
        'employer_id' => true,
        'sat_schedule_id' => true,
        'user_id' => true,
        'start_time' => true,
        'end_time' => true,
        'length' => true,
        'job_id' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'visible' => true,
        'notes' => true,
        'employer' => true,
        'sat_schedule' => true,
        'user' => true,
        'job' => true
    ];
}
