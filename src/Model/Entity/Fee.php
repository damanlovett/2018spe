<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fee Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property float $amount
 * @property string $type
 * @property bool $visible
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Package[] $packages
 */
class Fee extends Entity
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
        'name' => true,
        'description' => true,
        'amount' => true,
        'type' => true,
        'visible' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'packages' => true
    ];
}
