<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubtaskShare Entity
 *
 * @property int $subtask_id
 * @property int $participant_id
 *
 * @property \App\Model\Entity\Subtask $subtask
 * @property \App\Model\Entity\Participant $participant
 */
class SubtaskShare extends Entity
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
        'subtask_id' => false,
        'participant_id' => false
    ];
}
