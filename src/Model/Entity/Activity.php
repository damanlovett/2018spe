<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Activity Entity
 *
 * @property int $activity_id
 * @property string $user_id
 * @property string $user_browser
 * @property string $user_ip
 * @property \Cake\I18n\FrozenTime $created
 * @property string $model
 * @property string $action
 * @property string $clicked_from
 *
 * @property \App\Model\Entity\User $user
 */
class Activity extends Entity
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
        'user_browser' => true,
        'user_ip' => true,
        'created' => true,
        'model' => true,
        'action' => true,
        'clicked_from' => true,
        'user' => true
    ];
}
