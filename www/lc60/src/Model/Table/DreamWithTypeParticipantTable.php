<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DreamWithTypeParticipant Model
 *
 * @property \App\Model\Table\ParticipantsTable|\Cake\ORM\Association\BelongsTo $Participants
 * @property \App\Model\Table\DreamsTable|\Cake\ORM\Association\BelongsTo $Dreams
 * @property \App\Model\Table\DreamTypesTable|\Cake\ORM\Association\BelongsTo $DreamTypes
 * @property \App\Model\Table\TasksTable|\Cake\ORM\Association\BelongsTo $Tasks
 *
 * @method \App\Model\Entity\DreamWithTypeParticipant get($primaryKey, $options = [])
 * @method \App\Model\Entity\DreamWithTypeParticipant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DreamWithTypeParticipant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DreamWithTypeParticipant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DreamWithTypeParticipant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DreamWithTypeParticipant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DreamWithTypeParticipant findOrCreate($search, callable $callback = null, $options = [])
 */
class DreamWithTypeParticipantTable extends Table
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

        $this->setTable('dream_with_type_participant');

        $this->belongsTo('Participants', [
            'foreignKey' => 'participant_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Dreams', [
            'foreignKey' => 'dream_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DreamTypes', [
            'foreignKey' => 'dream_type_id'
        ]);
        $this->belongsTo('Tasks', [
            'foreignKey' => 'task_id',
            'joinType' => 'INNER'
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
            ->requirePresence('participant_name', 'create')
            ->notEmpty('participant_name');

        $validator
            ->dateTime('dream_timestamp')
            ->requirePresence('dream_timestamp', 'create')
            ->notEmpty('dream_timestamp');

        $validator
            ->allowEmpty('dream_type_name');

        $validator
            ->allowEmpty('dream_type_short_name');

        $validator
            ->numeric('final_value_truncate')
            ->allowEmpty('final_value_truncate');

        $validator
            ->requirePresence('task_title', 'create')
            ->notEmpty('task_title');

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
        $rules->add($rules->existsIn(['participant_id'], 'Participants'));
        $rules->add($rules->existsIn(['dream_id'], 'Dreams'));
        $rules->add($rules->existsIn(['dream_type_id'], 'DreamTypes'));
        $rules->add($rules->existsIn(['task_id'], 'Tasks'));

        return $rules;
    }
}
