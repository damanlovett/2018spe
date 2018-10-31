<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property int $employer_id
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property float $amount
 * @property string $check_number
 * @property string $credit_info
 * @property string $admin_notes
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employer $employer
 * @property \App\Model\Entity\User $user
 */
class Transaction extends Entity
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
        'name' => true,
        'description' => true,
        'amount' => true,
        'check_number' => true,
        'credit_info' => true,
        'admin_notes' => true,
        'created' => true,
        'modified' => true,
        'employer' => true,
        'user' => true
    ];
}
