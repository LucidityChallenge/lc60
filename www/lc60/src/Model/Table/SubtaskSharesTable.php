<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubtaskShares Model
 *
 * @property \App\Model\Table\SubtasksTable|\Cake\ORM\Association\BelongsTo $Subtasks
 * @property \App\Model\Table\ParticipantsTable|\Cake\ORM\Association\BelongsTo $Participants
 *
 * @method \App\Model\Entity\SubtaskShare get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubtaskShare newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubtaskShare[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskShare|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubtaskShare patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskShare[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskShare findOrCreate($search, callable $callback = null, $options = [])
 */
class SubtaskSharesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('subtask_shares');
        $this->setDisplayField('subtask_id');
        $this->setPrimaryKey(['subtask_id', 'participant_id']);

        $this->belongsTo('Subtasks', [
            'foreignKey' => 'subtask_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Participants', [
            'foreignKey' => 'participant_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['subtask_id'], 'Subtasks'));
        $rules->add($rules->existsIn(['participant_id'], 'Participants'));

        return $rules;
    }
}
