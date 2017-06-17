<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DreamWithTypeParticipant Entity
 *
 * @property int $participant_id
 * @property string $participant_name
 * @property int $dream_id
 * @property \Cake\I18n\FrozenTime $dream_timestamp
 * @property int $dream_type_id
 * @property string $dream_type_name
 * @property string $dream_type_short_name
 * @property float $final_value_truncate
 * @property int $task_id
 * @property string $task_title
 *
 * @property \App\Model\Entity\Participant $participant
 * @property \App\Model\Entity\Dream $dream
 * @property \App\Model\Entity\DreamType $dream_type
 * @property \App\Model\Entity\Task $task
 */
class DreamWithTypeParticipant extends Entity
{

}
