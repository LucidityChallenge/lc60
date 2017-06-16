<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SuccessfulSubtaskTask Entity
 *
 * @property int $participant_id
 * @property int $dream_id
 * @property int $dream_type_id
 * @property \Cake\I18n\FrozenTime $dream_timestamp
 * @property string $dream_url
 * @property int $contemporary_task_id
 * @property \Cake\I18n\FrozenTime $contemporary_task_start
 * @property \Cake\I18n\FrozenTime $contemporary_task_expiration
 * @property int $subtask_id
 * @property int $subtask_task_id
 * @property int $subtask_super_id
 * @property string $subtask_name
 * @property int $subtask_category_id
 * @property int $subtask_base_value
 * @property int $subtask_max_value
 * @property int $subtask_starting_demand
 * @property float $subtask_inflation_rate
 * @property int $subtask_demand_cutoff
 * @property int $subtask_task_period_demand
 * @property string $subtask_description
 * @property string $subtask_url
 * @property int $subtask_accumulative
 * @property int $subtask_owner_participant_id
 * @property string $subtask_category_name
 * @property string $subtask_category_class
 * @property string $subtask_category_description
 * @property float $subtask_dividend_rate
 *
 * @property \App\Model\Entity\Participant $participant
 * @property \App\Model\Entity\Dream $dream
 * @property \App\Model\Entity\DreamType $dream_type
 * @property \App\Model\Entity\ContemporaryTask $contemporary_task
 * @property \App\Model\Entity\Subtask $subtask
 * @property \App\Model\Entity\SubtaskTask $subtask_task
 * @property \App\Model\Entity\SubtaskSuper $subtask_super
 * @property \App\Model\Entity\SubtaskCategory $subtask_category
 * @property \App\Model\Entity\SubtaskOwnerParticipant $subtask_owner_participant
 */
class SuccessfulSubtaskTask extends Entity
{

}
