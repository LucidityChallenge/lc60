<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubtaskValue Entity
 *
 * @property int $id
 * @property int $current_task_id
 * @property int $contemporary_task_id
 * @property int $subtask_id
 * @property int $subtask_starting_demand
 * @property float $subtask_success_count
 * @property int $subtask_success_count_total
 * @property int $subtask_task_period_demand
 * @property int $subtask_task_id
 * @property string $task_title
 * @property int $subtask_super_id
 * @property string $subtask_name
 * @property int $subtask_category_id
 * @property int $subtask_base_value
 * @property int $subtask_max_value
 * @property float $subtask_inflation_rate
 * @property int $subtask_demand_cutoff
 * @property string $subtask_description
 * @property bool $subtask_accumulative
 * @property int $subtask_owner_participant_id
 * @property int $subtask_symbol
 * @property string $subtask_image
 * @property int $subtask_type_id
 * @property string $subtask_type_name
 * @property bool $subtask_type_ownable
 * @property bool $subtask_type_shareable
 * @property string $subtask_category_name
 * @property string $subtask_category_class
 * @property string $subtask_category_color 
 * @property float $contemporary_demand_cur
 * @property float $contemporary_demand_positive_cur
 * @property float $contemporary_demand_pre
 * @property float $contemporary_demand_positive_pre
 * @property float $final_value_pre
 * @property float $final_value_cur
 *
 * @property \App\Model\Entity\CurrentTask $current_task
 * @property \App\Model\Entity\ContemporaryTask $contemporary_task
 * @property \App\Model\Entity\Subtask $subtask
 * @property \App\Model\Entity\SubtaskTask $subtask_task
 * @property \App\Model\Entity\SubtaskSuper $subtask_super
 * @property \App\Model\Entity\SubtaskCategory $subtask_category
 * @property \App\Model\Entity\SubtaskOwnerParticipant $subtask_owner_participant
 */
class SubtaskValue extends Entity
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
