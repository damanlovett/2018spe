<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Package Entity
 *
 * @property int $id
 * @property int $employer_id
 * @property int $user_id
 * @property int $fee_id
 * @property string $name
 * @property string $description
 * @property int $amount
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employer $employer
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Fee $fee
 */
class Package extends Entity
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
        'user_id' => true,
        'fee_id' => true,
        'name' => true,
        'description' => true,
        'amount' => true,
        'created' => true,
        'modified' => true,
        'employer' => true,
        'user' => true,
        'fee' => true
    ];
}
