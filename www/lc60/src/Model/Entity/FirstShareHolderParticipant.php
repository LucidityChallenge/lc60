<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FirstShareHolderParticipant Entity
 *
 * @property int $subtask_share_holder_count
 * @property int $subtask_id
 * @property int $participant_id
 * @property string $participant_name
 *
 * @property \App\Model\Entity\Subtask $subtask
 * @property \App\Model\Entity\Participant $participant
 */
class FirstShareHolderParticipant extends Entity
{

}
