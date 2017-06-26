<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubtaskValues Model
 *
 * @property \App\Model\Table\CurrentTasksTable|\Cake\ORM\Association\BelongsTo $CurrentTasks
 * @property \App\Model\Table\ContemporaryTasksTable|\Cake\ORM\Association\BelongsTo $ContemporaryTasks
 * @property \App\Model\Table\SubtasksTable|\Cake\ORM\Association\BelongsTo $Subtasks
 * @property \App\Model\Table\SubtaskTasksTable|\Cake\ORM\Association\BelongsTo $SubtaskTasks
 * @property \App\Model\Table\SubtaskSupersTable|\Cake\ORM\Association\BelongsTo $SubtaskSupers
 * @property \App\Model\Table\SubtaskCategoriesTable|\Cake\ORM\Association\BelongsTo $SubtaskCategories
 * @property \App\Model\Table\SubtaskOwnerParticipantsTable|\Cake\ORM\Association\BelongsTo $SubtaskOwnerParticipants
 *
 * @method \App\Model\Entity\SubtaskValue get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubtaskValue newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubtaskValue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskValue|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubtaskValue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskValue[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskValue findOrCreate($search, callable $callback = null, $options = [])
 */
class SubtaskValuesTable extends Table
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

        $this->setTable('subtask_values');
        $this->setDisplayField('subtask_name');
        $this->setPrimaryKey('id');
/*
        $this->belongsTo('CurrentTasks', [
            'foreignKey' => 'current_task_id',
            'joinType' => 'INNER'
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
        */
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
            ->integer('id')
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        $validator
            ->integer('subtask_starting_demand')
            ->requirePresence('subtask_starting_demand', 'create')
            ->notEmpty('subtask_starting_demand');

        $validator
            ->decimal('subtask_success_count')
            ->allowEmpty('subtask_success_count');

        $validator
            ->requirePresence('subtask_success_count_total', 'create')
            ->notEmpty('subtask_success_count_total');

        $validator
            ->integer('subtask_task_period_demand')
            ->requirePresence('subtask_task_period_demand', 'create')
            ->notEmpty('subtask_task_period_demand');

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
            ->decimal('subtask_inflation_rate')
            ->requirePresence('subtask_inflation_rate', 'create')
            ->notEmpty('subtask_inflation_rate');

        $validator
            ->integer('subtask_demand_cutoff')
            ->requirePresence('subtask_demand_cutoff', 'create')
            ->notEmpty('subtask_demand_cutoff');

        $validator
            ->allowEmpty('subtask_description');

        $validator
            ->integer('subtask_accumulative')
            ->requirePresence('subtask_accumulative', 'create')
            ->notEmpty('subtask_accumulative');

        $validator
            ->allowEmpty('subtask_category_name');

        $validator
            ->allowEmpty('subtask_category_class');

        $validator
            ->decimal('contemporary_demand_cur')
            ->allowEmpty('contemporary_demand_cur');

        $validator
            ->decimal('contemporary_demand_positive_cur')
            ->allowEmpty('contemporary_demand_positive_cur');

        $validator
            ->decimal('contemporary_demand_pre')
            ->allowEmpty('contemporary_demand_pre');

        $validator
            ->decimal('contemporary_demand_positive_pre')
            ->allowEmpty('contemporary_demand_positive_pre');

        $validator
            ->numeric('final_value_pre')
            ->allowEmpty('final_value_pre');

        $validator
            ->numeric('final_value_cur')
            ->allowEmpty('final_value_cur');

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
        $rules->add($rules->existsIn(['current_task_id'], 'CurrentTasks'));
        $rules->add($rules->existsIn(['contemporary_task_id'], 'ContemporaryTasks'));
        $rules->add($rules->existsIn(['subtask_id'], 'Subtasks'));
        $rules->add($rules->existsIn(['subtask_task_id'], 'SubtaskTasks'));
        $rules->add($rules->existsIn(['subtask_super_id'], 'SubtaskSupers'));
        $rules->add($rules->existsIn(['subtask_category_id'], 'SubtaskCategories'));
        $rules->add($rules->existsIn(['subtask_owner_participant_id'], 'SubtaskOwnerParticipants'));

        return $rules;
    }
}
