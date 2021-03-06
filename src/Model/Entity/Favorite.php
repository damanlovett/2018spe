<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Favorite Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $job_id
 * @property string $notes
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Job $job
 */
class Favorite extends Entity
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
        'user_id' => true,
        'job_id' => true,
        'notes' => true,
        'created' => true,
        'user' => true,
        'job' => true
    ];
}
