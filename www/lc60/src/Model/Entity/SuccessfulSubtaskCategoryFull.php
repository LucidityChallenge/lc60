<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SuccessfulSubtaskCategoryFull Entity
 *
 * @property int $participant_id
 * @property int $subtask_category_id
 * @property string $subtask_category_name
 * @property string $subtask_category_class
 * @property int $subtask_category_count
 *
 * @property \App\Model\Entity\Participant $participant
 * @property \App\Model\Entity\SubtaskCategory $subtask_category
 */
class SuccessfulSubtaskCategoryFull extends Entity
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
