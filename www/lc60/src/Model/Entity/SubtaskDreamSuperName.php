<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubtaskDreamSuperName Entity
 *
 * @property int $subtask_dream_attempt
 * @property int $subtask_id
 * @property int $dream_id
 * @property int $implied_from_super_task
 * @property string $subtask_name
 * @property int subtask_super_id
 * @property string $super_subtask_name
 *
 * @property \App\Model\Entity\Subtask $subtask
 * @property \App\Model\Entity\Dream $dream
 */
class SubtaskDreamSuperName extends Entity
{

}
