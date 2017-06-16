<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dream Entity
 *
 * @property int $id
 * @property int $participant_id
 * @property \Cake\I18n\FrozenTime $dream_timestamp
 * @property string $dream_url
 *
 * @property \App\Model\Entity\Participant $participant
 * @property \App\Model\Entity\DreamWithType[] $dream_with_type 
 * @property \App\Model\Entity\SubtaskDreamSuperName[] $subtask_dream_super_name
 * @property \App\Model\Entity\SubtaskDream[] $subtask_dreams
 * @property \App\Model\Entity\SuccessfulSubtask[] $successful_subtask
 * @property \App\Model\Entity\SuccessfulSubtaskDividendScore[] $successful_subtask_dividend_scores
 * @property \App\Model\Entity\SuccessfulSubtaskTask[] $successful_subtask_task
 * @property \App\Model\Entity\SuccessfulSubtaskTaskWithCalculatedScoring[] $successful_subtask_task_with_calculated_scoring
 */
class Dream extends Entity
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
