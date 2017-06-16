<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubtaskShareHolderComplete Entity
 *
 * @property int $id
 * @property int $subtask_id
 * @property int $participant_id
 * @property int $task_id
 * @property int $subtask_super_id
 * @property string $subtask_name
 * @property int $subtask_category_id
 * @property int $subtask_base_value
 * @property int $subtask_max_value
 * @property int $subtask_starting_demand
 * @property float $subtask_inflation_rate
 * @property int $subtask_demand_cutoff
 * @property string $subtask_description
 * @property string $subtask_url
 * @property bool $subtask_accumulative
 * @property int $subtask_task_period_demand
 * @property int $participant_owner
 * @property float $subtask_dividend_rate
 * @property string $subtask_category_name
 * @property string $subtask_category_class
 * @property string $subtask_category_description
 * @property int $subtask_image
 * @property int $subtask_symbol
 * @property string $subtask_instruction
 * @property int $subtask_share_holder_count
 *
 * @property \App\Model\Entity\Subtask $subtask
 * @property \App\Model\Entity\Participant $participant
 * @property \App\Model\Entity\Task $task
 * @property \App\Model\Entity\SubtaskSuper $subtask_super
 * @property \App\Model\Entity\SubtaskCategory $subtask_category
 */
class SubtaskShareHolderComplete extends Entity
{

}
