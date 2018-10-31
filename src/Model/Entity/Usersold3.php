<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usersold3 Entity
 *
 * @property string $id
 * @property int $can_num
 * @property string $first_name
 * @property string $last_name
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $institution
 * @property string $degree
 * @property string $website
 * @property string $employer_ids
 * @property string $group_id
 * @property string $access
 * @property string $type
 * @property int $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Group $group
 */
class Usersold3 extends Entity
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
        'id' => true,
        'first_name' => true,
        'last_name' => true,
        'name' => true,
        'username' => true,
        'password' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'zip' => true,
        'institution' => true,
        'degree' => true,
        'website' => true,
        'employer_ids' => true,
        'group_id' => true,
        'access' => true,
        'type' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'group' => true
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
