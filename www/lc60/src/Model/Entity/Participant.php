<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Participant Entity
 *
 * @property int $id
 * @property string $participant_name
 * @property string $participant_dj_url
 * @property string $participant_join_url
 * @property int $participant_goal
 * @property \Cake\I18n\FrozenTime $participant_join_timestamp
 * @property string $participant_image_url
 *
 * @property \App\Model\Entity\Dream[] $dreams
 * @property \App\Model\Entity\DreamWithType[] $dream_with_type
 * @property \App\Model\Entity\ScoreViewComplete[] $score_view_complete
 * @property \App\Model\Entity\ScoreViewCompleteParticipant[] $score_view_complete_participant
 * @property \App\Model\Entity\SubtaskShareHolderComplete[] $subtask_share_holder_complete
 * @property \App\Model\Entity\SubtaskShare[] $subtask_shares
 * @property \App\Model\Entity\SuccessfulSubtask[] $successful_subtask
 * @property \App\Model\Entity\Subtasks[] $subtasks
 * @property \App\Model\Entity\SuccessfulSubtaskCategory[] $successful_subtask_category
 * @property \App\Model\Entity\SuccessfulSubtaskCategoryCompleteFinal[] $successful_subtask_category_complete_final
 * @property \App\Model\Entity\SuccessfulSubtaskCategoryCompleteFinalMinimum[] $successful_subtask_category_complete_final_minimum
 * @property \App\Model\Entity\SuccessfulSubtaskCategoryCompleteInner[] $successful_subtask_category_complete_inner
 * @property \App\Model\Entity\SuccessfulSubtaskDividendCalculatedSubtotal[] $successful_subtask_dividend_calculated_subtotal
 * @property \App\Model\Entity\SuccessfulSubtaskDividendCalculatedTotal[] $successful_subtask_dividend_calculated_total
 * @property \App\Model\Entity\SuccessfulSubtaskDividendScore[] $successful_subtask_dividend_scores
 * @property \App\Model\Entity\SuccessfulSubtaskTask[] $successful_subtask_task
 * @property \App\Model\Entity\SuccessfulSubtaskTaskWithCalculatedScoring[] $successful_subtask_task_with_calculated_scoring
 * @property \App\Model\Entity\SuccessfulSubtaskTaskWithCalculatedSubtotal[] $successful_subtask_task_with_calculated_subtotal
 * @property \App\Model\Entity\SuccessfulSubtaskTaskWithCalculatedTotal[] $successful_subtask_task_with_calculated_total
 * @property \App\Model\Entity\SuccessfulSubtaskTaskWithCalculatedTotalComplete[] $successful_subtask_task_with_calculated_total_complete
 * @property \App\Model\Entity\SuccessfulSubtaskTaskWithCalculatedTotalParticipant[] $successful_subtask_task_with_calculated_total_participant
 * @property \App\Model\Entity\SuccessfulSubtaskCategoryFull[] $successful_subtask_category_full
 * @property \App\Model\Entity\SuccessfulSubtaskTaskWithCalculatedScoringOwner[] $successful_subtask_task_with_calculated_scoring_owner
 */
class Participant extends Entity
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
