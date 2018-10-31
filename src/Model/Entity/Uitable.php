<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Uitable Entity
 *
 * @property int $id
 * @property string $message
 * @property string $title
 * @property string $modified_by
 * @property \Cake\I18n\FrozenTime $created
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $notes
 */
class Uitable extends Entity
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
        'message' => true,
        'title' => true,
        'modified_by' => true,
        'created' => true,
        'created_by' => true,
        'modified' => true,
        'notes' => true
    ];
}
