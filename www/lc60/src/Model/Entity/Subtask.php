<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subtask Entity
 *
 * @property int $id
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
 * @property int $participant_id
 * @property float $subtask_dividend_rate
 * @property int $subtask_image
 * @property int $subtask_symbol
 * @property string $subtask_instruction
 * @property int $subtask_type_id
 * @property bool $subtask_visible
 *
 * @property \App\Model\Entity\Task $task
 * @property \App\Model\Entity\Subtask $subtask_super
 * @property \App\Model\Entity\SubtaskCategory $subtask_category
 * @property \App\Model\Entity\Participant $participant
 * @property \App\Model\Entity\CalculatedSubtaskDemandExternal[] $calculated_subtask_demand_external
 * @property \App\Model\Entity\CalculatedSubtaskDemandFinalValue[] $calculated_subtask_demand_final_value
 * @property \App\Model\Entity\CalculatedSubtaskDemandInner[] $calculated_subtask_demand_inner
 * @property \App\Model\Entity\CalculatedSubtaskDemandUnion[] $calculated_subtask_demand_union
 * @property \App\Model\Entity\DemandView[] $demand_view
 * @property \App\Model\Entity\DemandViewSucces[] $demand_view_success
 * @property \App\Model\Entity\DemandViewSuccessContemporaryDemand[] $demand_view_success_contemporary_demand
 * @property \App\Model\Entity\DemandViewSuccessContemporaryDemandPositive[] $demand_view_success_contemporary_demand_positive
 * @property \App\Model\Entity\DemandViewUncompleteContemporaryDemand[] $demand_view_uncomplete_contemporary_demand
 * @property \App\Model\Entity\DemandViewUncompleteContemporaryDemandPositive[] $demand_view_uncomplete_contemporary_demand_positive
 * @property \App\Model\Entity\SubtaskDreamSuper[] $subtask_dream_super
 * @property \App\Model\Entity\SubtaskDream[] $subtask_dreams
 * @property \App\Model\Entity\SubtaskShareHolder[] $subtask_share_holder
 * @property \App\Model\Entity\SubtaskShareHolderCount[] $subtask_share_holder_count
 * @property \App\Model\Entity\SubtaskShare[] $subtask_shares
 * @property \App\Model\Entity\SuccessfulSubtask[] $successful_subtask
 * @property \App\Model\Entity\SuccessfulSubtaskDividendScore[] $successful_subtask_dividend_scores
 * @property \App\Model\Entity\SuccessfulSubtaskTask[] $successful_subtask_task
 * @property \App\Model\Entity\SuccessfulSubtaskTaskWithCalculatedScoring[] $successful_subtask_task_with_calculated_scoring
 * @property \App\Model\Entity\SubtaskType $subtask_type
 * @property \App\Model\Entity\SuccessfulSubtaskTaskWithCalculatedScoringParticipant[] $successful_subtask_task_with_calculated_scoring_participant
 * @property \App\Model\Entity\DreamTypes $dream_type
 * @property \App\Model\Entity\ShareHoldersParticipant[] $share_holders_participant
 * @property \App\Model\Entity\SubtaskValues[] $subtask_values
 */
class Subtask extends Entity
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
    /*
    private function toEntity($binary)
    {
      //$binary = mb_convert_encoding($utf8, 'UTF-32BE', 'UTF-8');
      $entity = vsprintf('&#x%X;', unpack('N', $binary));
      return $entity;
    }
*/
}
