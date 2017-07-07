<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Memo Entity
 *
 * @property int $id
 * @property string $memo_nickname
 * @property string $memo_message
 * @property \Cake\I18n\FrozenTime $memo_timestamp
 * @property bool $memo_unread
 */
class Memo extends Entity
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
        '*' => true,
        'id' => false
    ];
}
