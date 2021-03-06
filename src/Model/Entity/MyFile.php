<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MyFile Entity
 *
 * @property int $id
 * @property string $name
 * @property string $user_id
 * @property string $type
 * @property int $size
 * @property string|resource $data
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class MyFile extends Entity
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
        'name' => true,
        'user_id' => true,
        'type' => true,
        'size' => true,
        'data' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
