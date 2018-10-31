<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Users2 Entity
 *
 * @property int $id
 * @property string $user_group_id
 * @property string $username
 * @property string $password
 * @property int $spe_num
 * @property string $employer_id
 * @property string $salt
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $active
 * @property int $email_verified
 * @property bool $edit_sch
 * @property \Cake\I18n\FrozenTime $last_login
 * @property int $by_admin
 * @property string $ip_address
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\UserGroup $user_group
 * @property \App\Model\Entity\Employer $employer
 */
class Users2 extends Entity
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
        'user_group_id' => true,
        'username' => true,
        'password' => true,
        'spe_num' => true,
        'employer_id' => true,
        'salt' => true,
        'email' => true,
        'first_name' => true,
        'last_name' => true,
        'active' => true,
        'email_verified' => true,
        'edit_sch' => true,
        'last_login' => true,
        'by_admin' => true,
        'ip_address' => true,
        'created' => true,
        'modified' => true,
        'user_group' => true,
        'employer' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
