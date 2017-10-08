<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Score Entity
 *
 * @property int $position
 * @property string $position_name
 * @property int $participant_id
 * @property string $participant
 * @property int $successful_subtasks
 * @property float $average_subtask_value
 * @property float $total_subtask_value
 * @property int $dividend_successes
 * @property float $average_dividend_value
 * @property float $total_dividends
 * @property float $total_score
 *
 * @property \App\Model\Entity\Participant $participant
 */
class Score extends Entity
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
        'participant_id' => false
    ];
}
