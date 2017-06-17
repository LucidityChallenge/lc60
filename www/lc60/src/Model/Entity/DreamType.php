<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DreamType Entity
 *
 * @property int $id
 * @property string $dream_type_name
 * @property string $dream_type_short_name
 *
 * @property \App\Model\Entity\DreamTypeWithTypeParticipant[] $dream_type_id 
 * @property \App\Model\Entity\DreamTypeId[] $dream_type_id
 * @property \App\Model\Entity\SuccessfulSubtask[] $successful_subtask
 * @property \App\Model\Entity\SuccessfulSubtaskDividendScore[] $successful_subtask_dividend_scores
 * @property \App\Model\Entity\SuccessfulSubtaskTask[] $successful_subtask_task
 * @property \App\Model\Entity\SuccessfulSubtaskTaskWithCalculatedScoring[] $successful_subtask_task_with_calculated_scoring
 */
class DreamType extends Entity
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
