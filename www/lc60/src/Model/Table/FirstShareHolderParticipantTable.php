<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FirstShareHolderParticipant Model
 *
 * @property \App\Model\Table\SubtasksTable|\Cake\ORM\Association\BelongsTo $Subtasks
 * @property \App\Model\Table\ParticipantsTable|\Cake\ORM\Association\BelongsTo $Participants
 *
 * @method \App\Model\Entity\FirstShareHolderParticipant get($primaryKey, $options = [])
 * @method \App\Model\Entity\FirstShareHolderParticipant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FirstShareHolderParticipant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FirstShareHolderParticipant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FirstShareHolderParticipant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FirstShareHolderParticipant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FirstShareHolderParticipant findOrCreate($search, callable $callback = null, $options = [])
 */
class FirstShareHolderParticipantTable extends Table
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

        $this->setTable('lc60_first_share_holder_participant');

        $this->belongsTo('Subtasks', [
            'foreignKey' => 'subtask_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Participants', [
            'foreignKey' => 'participant_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('subtask_share_holder_count', 'create')
            ->notEmpty('subtask_share_holder_count');

        $validator
            ->allowEmpty('participant_name');

        return $validator;
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
