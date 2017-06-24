<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Task Entity
 *
 * @property int $id
 * @property string $task_title
 * @property \Cake\I18n\FrozenTime $task_start
 * @property \Cake\I18n\FrozenTime $task_expiration
 * @property string $task_text
 * @property string $task_url
 * @property string $task_image_url
 *
 * @property \App\Model\Entity\CurrentTask[] $current_task
 * @property \App\Model\Entity\DreamWithTypeParticipant[] $dream_with_type_participant
 * @property \App\Model\Entity\SubtaskShareHolderComplete[] $subtask_share_holder_complete
 * @property \App\Model\Entity\SubtaskSubtaskCategory[] $subtask_subtask_category
 * @property \App\Model\Entity\Subtask[] $subtasks
 * @property \App\Model\Entity\SuccessfulSubtask[] $successful_subtask
 * @property \App\Model\Entity\UnexpiredTask[] $unexpired_task
 */
class Task extends Entity
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
