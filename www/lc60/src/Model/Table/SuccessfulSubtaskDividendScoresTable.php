<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SuccessfulSubtaskDividendScores Model
 *
 * @property \App\Model\Table\ParticipantsTable|\Cake\ORM\Association\BelongsTo $Participants
 * @property \App\Model\Table\DreamersTable|\Cake\ORM\Association\BelongsTo $Dreamers
 * @property \App\Model\Table\DreamsTable|\Cake\ORM\Association\BelongsTo $Dreams
 * @property \App\Model\Table\DreamTypesTable|\Cake\ORM\Association\BelongsTo $DreamTypes
 * @property \App\Model\Table\ContemporaryTasksTable|\Cake\ORM\Association\BelongsTo $ContemporaryTasks
 * @property \App\Model\Table\SubtasksTable|\Cake\ORM\Association\BelongsTo $Subtasks
 * @property \App\Model\Table\SubtaskTasksTable|\Cake\ORM\Association\BelongsTo $SubtaskTasks
 * @property \App\Model\Table\SubtaskSupersTable|\Cake\ORM\Association\BelongsTo $SubtaskSupers
 * @property \App\Model\Table\SubtaskCategoriesTable|\Cake\ORM\Association\BelongsTo $SubtaskCategories
 * @property \App\Model\Table\SubtaskOwnerParticipantsTable|\Cake\ORM\Association\BelongsTo $SubtaskOwnerParticipants
 *
 * @method \App\Model\Entity\SuccessfulSubtaskDividendScore get($primaryKey, $options = [])
 * @method \App\Model\Entity\SuccessfulSubtaskDividendScore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SuccessfulSubtaskDividendScore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SuccessfulSubtaskDividendScore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SuccessfulSubtaskDividendScore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SuccessfulSubtaskDividendScore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SuccessfulSubtaskDividendScore findOrCreate($search, callable $callback = null, $options = [])
 */
class SuccessfulSubtaskDividendScoresTable extends Table
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

        $this->setTable('lc60_successful_subtask_dividend_scores');

        $this->belongsTo('Participants', [
            'foreignKey' => 'participant_id'
        ]);
        $this->belongsTo('Dreamers', [
            'foreignKey' => 'dreamer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Dreams', [
            'foreignKey' => 'dream_id'
        ]);
        $this->belongsTo('DreamTypes', [
            'foreignKey' => 'dream_type_id'
        ]);
        $this->belongsTo('ContemporaryTasks', [
            'foreignKey' => 'contemporary_task_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Subtasks', [
            'foreignKey' => 'subtask_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SubtaskTasks', [
            'foreignKey' => 'subtask_task_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SubtaskSupers', [
            'foreignKey' => 'subtask_super_id'
        ]);
        $this->belongsTo('SubtaskCategories', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->belongsTo('SubtaskOwnerParticipants', [
            'foreignKey' => 'subtask_owner_participant_id'
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
            ->dateTime('dream_timestamp')
            ->requirePresence('dream_timestamp', 'create')
            ->notEmpty('dream_timestamp');

        $validator
            ->allowEmpty('dream_url');

        $validator
            ->dateTime('contemporary_task_start')
            ->requirePresence('contemporary_task_start', 'create')
            ->notEmpty('contemporary_task_start');

        $validator
            ->dateTime('contemporary_task_expiration')
            ->requirePresence('contemporary_task_expiration', 'create')
            ->notEmpty('contemporary_task_expiration');

        $validator
            ->requirePresence('subtask_name', 'create')
            ->notEmpty('subtask_name');

        $validator
            ->integer('subtask_base_value')
            ->requirePresence('subtask_base_value', 'create')
            ->notEmpty('subtask_base_value');

        $validator
            ->integer('subtask_max_value')
            ->allowEmpty('subtask_max_value');

        $validator
            ->integer('subtask_starting_demand')
            ->allowEmpty('subtask_starting_demand');

        $validator
            ->decimal('subtask_inflation_rate')
            ->requirePresence('subtask_inflation_rate', 'create')
            ->notEmpty('subtask_inflation_rate');

        $validator
            ->integer('subtask_demand_cutoff')
            ->requirePresence('subtask_demand_cutoff', 'create')
            ->notEmpty('subtask_demand_cutoff');

        $validator
            ->integer('subtask_task_period_demand')
            ->requirePresence('subtask_task_period_demand', 'create')
            ->notEmpty('subtask_task_period_demand');

        $validator
            ->allowEmpty('subtask_description');

        $validator
            ->allowEmpty('subtask_url');

        $validator
            ->integer('subtask_accumulative')
            ->requirePresence('subtask_accumulative', 'create')
            ->notEmpty('subtask_accumulative');

        $validator
            ->allowEmpty('subtask_category_name');

        $validator
            ->allowEmpty('subtask_category_class');

        $validator
            ->allowEmpty('subtask_category_description');

        $validator
            ->requirePresence('subtask_success_count', 'create')
            ->notEmpty('subtask_success_count');

        $validator
            ->allowEmpty('contemporary_demand');

        $validator
            ->allowEmpty('contemporary_demand_positive');

        $validator
            ->numeric('inner_function')
            ->allowEmpty('inner_function');

        $validator
            ->numeric('external_function')
            ->allowEmpty('external_function');

        $validator
            ->numeric('final_value')
            ->allowEmpty('final_value');

        $validator
            ->decimal('subtask_dividend_rate')
            ->requirePresence('subtask_dividend_rate', 'create')
            ->notEmpty('subtask_dividend_rate');

        $validator
            ->requirePresence('subtask_share_holder_count', 'create')
            ->notEmpty('subtask_share_holder_count');

        $validator
            ->numeric('final_dividend_value')
            ->allowEmpty('final_dividend_value');

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
        $rules->add($rules->existsIn(['dreamer_id'], 'Dreamers'));
        $rules->add($rules->existsIn(['dream_id'], 'Dreams'));
        $rules->add($rules->existsIn(['dream_type_id'], 'DreamTypes'));
        $rules->add($rules->existsIn(['contemporary_task_id'], 'ContemporaryTasks'));
        $rules->add($rules->existsIn(['subtask_id'], 'Subtasks'));
        $rules->add($rules->existsIn(['subtask_task_id'], 'SubtaskTasks'));
        $rules->add($rules->existsIn(['subtask_super_id'], 'SubtaskSupers'));
        $rules->add($rules->existsIn(['subtask_category_id'], 'SubtaskCategories'));
        $rules->add($rules->existsIn(['subtask_owner_participant_id'], 'SubtaskOwnerParticipants'));

        return $rules;
    }
}
