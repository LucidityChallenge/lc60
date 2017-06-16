<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubtaskCategory Entity
 *
 * @property int $id
 * @property string $subtask_category_name
 * @property string $subtask_category_color
 * @property string $subtask_category_class
 * @property string $subtask_category_description
 *
 * @property \App\Model\Entity\CalculatedSubtaskDemandExternal[] $calculated_subtask_demand_external
 * @property \App\Model\Entity\CalculatedSubtaskDemandFinalValue[] $calculated_subtask_demand_final_value
 * @property \App\Model\Entity\CalculatedSubtaskDemandInner[] $calculated_subtask_demand_inner
 * @property \App\Model\Entity\CalculatedSubtaskDemandUnion[] $calculated_subtask_demand_union
 * @property \App\Model\Entity\DemandViewSucces[] $demand_view_success
 * @property \App\Model\Entity\DemandViewSuccessContemporaryDemand[] $demand_view_success_contemporary_demand
 * @property \App\Model\Entity\DemandViewSuccessContemporaryDemandPositive[] $demand_view_success_contemporary_demand_positive
 * @property \App\Model\Entity\DemandViewUncompleteContemporaryDemand[] $demand_view_uncomplete_contemporary_demand
 * @property \App\Model\Entity\DemandViewUncompleteContemporaryDemandPositive[] $demand_view_uncomplete_contemporary_demand_positive
 * @property \App\Model\Entity\Subtask[] $subtasks
 * @property \App\Model\Entity\SuccessfulSubtask[] $successful_subtask
 * @property \App\Model\Entity\SuccessfulSubtaskCategory[] $successful_subtask_category
 * @property \App\Model\Entity\SuccessfulSubtaskCategoryCompleteFinal[] $successful_subtask_category_complete_final
 * @property \App\Model\Entity\SuccessfulSubtaskCategoryCompleteInner[] $successful_subtask_category_complete_inner
 * @property \App\Model\Entity\SuccessfulSubtaskDividendScore[] $successful_subtask_dividend_scores
 * @property \App\Model\Entity\SuccessfulSubtaskTask[] $successful_subtask_task
 * @property \App\Model\Entity\SuccessfulSubtaskTaskWithCalculatedScoring[] $successful_subtask_task_with_calculated_scoring
 */
class SubtaskCategory extends Entity
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
