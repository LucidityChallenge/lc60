<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ScoreViewComplete Entity
 *
 * @property int $participant_id
 * @property float $subtask_success_count_sum_total
 * @property int $subtask_success_count_participant_total
 * @property float $final_value_avg
 * @property float $final_value_total
 * @property float $dividend_count_sum_total
 * @property int $dividend_count_participant_total
 * @property float $final_dividend_value_avg
 * @property float $final_dividend_value_total
 * @property float $final_value_total_with_dividends
 *
 * @property \App\Model\Entity\Participant $participant
 */
class ScoreViewComplete extends Entity
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
