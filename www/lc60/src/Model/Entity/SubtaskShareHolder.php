<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubtaskShareHolder Entity
 *
 * @property string $id
 * @property int $subtask_id
 * @property int $participant_id
 *
 * @property \App\Model\Entity\Subtask $subtask
 * @property \App\Model\Entity\Participant $participant
 */
class SubtaskShareHolder extends Entity
{

}
