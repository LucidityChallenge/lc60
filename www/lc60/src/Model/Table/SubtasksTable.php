<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subtasks Model
 *
 * @property \App\Model\Table\TasksTable|\Cake\ORM\Association\BelongsTo $Tasks
 * @property \App\Model\Table\SubtasksTable|\Cake\ORM\Association\BelongsTo $SubtasksSuper
 * @property \App\Model\Table\SubtaskCategoriesTable|\Cake\ORM\Association\BelongsTo $SubtaskCategories
 * @property \App\Model\Table\ParticipantsTable|\Cake\ORM\Association\BelongsTo $Participants
 * @property \App\Model\Table\SubtaskTypesTable|\Cake\ORM\Association\BelongsTo $SubtaskTypes
 * @property \App\Model\Table\CalculatedSubtaskDemandExternalTable|\Cake\ORM\Association\HasMany $CalculatedSubtaskDemandExternal
 * @property \App\Model\Table\CalculatedSubtaskDemandFinalValueTable|\Cake\ORM\Association\HasMany $CalculatedSubtaskDemandFinalValue
 * @property \App\Model\Table\CalculatedSubtaskDemandInnerTable|\Cake\ORM\Association\HasMany $CalculatedSubtaskDemandInner
 * @property \App\Model\Table\CalculatedSubtaskDemandUnionTable|\Cake\ORM\Association\HasMany $CalculatedSubtaskDemandUnion
 * @property \App\Model\Table\DemandViewTable|\Cake\ORM\Association\HasMany $DemandView
 * @property \App\Model\Table\DemandViewSuccessTable|\Cake\ORM\Association\HasMany $DemandViewSuccess
 * @property \App\Model\Table\DemandViewSuccessContemporaryDemandTable|\Cake\ORM\Association\HasMany $DemandViewSuccessContemporaryDemand
 * @property \App\Model\Table\DemandViewSuccessContemporaryDemandPositiveTable|\Cake\ORM\Association\HasMany $DemandViewSuccessContemporaryDemandPositive
 * @property \App\Model\Table\DemandViewUncompleteContemporaryDemandTable|\Cake\ORM\Association\HasMany $DemandViewUncompleteContemporaryDemand
 * @property \App\Model\Table\DemandViewUncompleteContemporaryDemandPositiveTable|\Cake\ORM\Association\HasMany $DemandViewUncompleteContemporaryDemandPositive
 * @property \App\Model\Table\SubtaskDreamSuperTable|\Cake\ORM\Association\HasMany $SubtaskDreamSuper
 * @property \App\Model\Table\SubtaskDreamsTable|\Cake\ORM\Association\HasMany $SubtaskDreams
 * @property \App\Model\Table\SubtaskShareHolderTable|\Cake\ORM\Association\HasMany $SubtaskShareHolder
 * @property \App\Model\Table\SubtaskShareHolderCountTable|\Cake\ORM\Association\HasMany $SubtaskShareHolderCount
 * @property \App\Model\Table\SubtaskSharesTable|\Cake\ORM\Association\HasMany $SubtaskShares
 * @property \App\Model\Table\SuccessfulSubtaskTable|\Cake\ORM\Association\HasMany $SuccessfulSubtask
 * @property \App\Model\Table\SuccessfulSubtaskDividendScoresTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskDividendScores
 * @property \App\Model\Table\SuccessfulSubtaskTaskTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTask
 * @property \App\Model\Table\SuccessfulSubtaskTaskWithCalculatedScoringTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTaskWithCalculatedScoring
 *
 * @method \App\Model\Entity\Subtask get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subtask newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subtask[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subtask|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subtask patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subtask[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subtask findOrCreate($search, callable $callback = null, $options = [])
 */
class SubtasksTable extends Table
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

        $this->setTable('subtasks');
        $this->setDisplayField('subtask_name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tasks', [
            'foreignKey' => 'task_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Subtasks', [
            'foreignKey' => 'subtask_super_id'
        ]);
        $this->belongsTo('SubtaskCategories', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->belongsTo('Participants', [
            'foreignKey' => 'participant_id'
        ]);
        $this->belongsTo('SubtaskTypes', [
            'foreignKey' => 'subtask_type_id',
            'joinType' => 'INNER'
        ]);
/*
        $this->hasMany('CalculatedSubtaskDemandExternal', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('CalculatedSubtaskDemandFinalValue', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('CalculatedSubtaskDemandInner', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('CalculatedSubtaskDemandUnion', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('DemandView', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('DemandViewSuccess', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('DemandViewSuccessContemporaryDemand', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('DemandViewSuccessContemporaryDemandPositive', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('DemandViewUncompleteContemporaryDemand', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('DemandViewUncompleteContemporaryDemandPositive', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('RecentSuccesses', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('SubtaskDreamSuper', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('SubtaskDreams', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('SubtaskShareHolder', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('SubtaskShareHolderComplete', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('SubtaskShareHolderCount', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('SubtaskShares', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('SubtaskSubtaskCategory', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('SuccessfulSubtask', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('SuccessfulSubtaskDividendScores', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTask', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTaskWithCalculatedScoring', [
            'foreignKey' => 'subtask_id'
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
            ->allowEmpty('id', 'create');

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
            ->allowEmpty('subtask_description');

        $validator
            ->allowEmpty('subtask_url');

        $validator
            ->boolean('subtask_accumulative')
            ->requirePresence('subtask_accumulative', 'create')
            ->notEmpty('subtask_accumulative');

        $validator
            ->integer('subtask_task_period_demand')
            ->requirePresence('subtask_task_period_demand', 'create')
            ->notEmpty('subtask_task_period_demand');

        $validator
            ->decimal('subtask_dividend_rate')
            ->requirePresence('subtask_dividend_rate', 'create')
            ->notEmpty('subtask_dividend_rate');

        $validator
            ->allowEmpty('subtask_image');

        $validator
            ->allowEmpty('subtask_symbol')
            ->integer('subtask_symbol');

        $validator
            ->allowEmpty('subtask_instruction');
/*
        $validator
            ->add('subtask_unicode_symbol', 'size', [
	    'rule' => ['maxLength', 1],
	    'message' => 'Symbol must be a single Unicode Character.'
	  ]
	);
*/
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
    {/*
        $rules->add($rules->existsIn(['task_id'], 'Tasks'));
        $rules->add($rules->existsIn(['subtask_super_id'], 'Subtasks'));
        $rules->add($rules->existsIn(['subtask_category_id'], 'SubtaskCategories'));
        $rules->add($rules->existsIn(['participant_id'], 'Participants'));
        $rules->add($rules->existsIn(['subtask_type_id'], 'SubtaskTypes'));
*/
        return $rules;
    }
}
