<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubtaskShareHolderComplete Model
 *
 * @property \App\Model\Table\SubtasksTable|\Cake\ORM\Association\BelongsTo $Subtasks
 * @property \App\Model\Table\ParticipantsTable|\Cake\ORM\Association\BelongsTo $Participants
 * @property \App\Model\Table\TasksTable|\Cake\ORM\Association\BelongsTo $Tasks
 * @property \App\Model\Table\SubtaskSupersTable|\Cake\ORM\Association\BelongsTo $SubtaskSupers
 * @property \App\Model\Table\SubtaskCategoriesTable|\Cake\ORM\Association\BelongsTo $SubtaskCategories
 *
 * @method \App\Model\Entity\SubtaskShareHolderComplete get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubtaskShareHolderComplete newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubtaskShareHolderComplete[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskShareHolderComplete|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubtaskShareHolderComplete patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskShareHolderComplete[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskShareHolderComplete findOrCreate($search, callable $callback = null, $options = [])
 */
class SubtaskShareHolderCompleteTable extends Table
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
        $this->setDisplayField('subtask_name');
        $this->setPrimaryKey('id');

        $this->setTable('subtask_share_holder_complete');

        $this->belongsTo('Subtasks', [
            'foreignKey' => 'subtask_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Participants', [
            'foreignKey' => 'participant_id'
        ]);
        $this->belongsTo('Tasks', [
            'foreignKey' => 'task_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SubtaskSupers', [
            'foreignKey' => 'subtask_super_id'
        ]);
        $this->belongsTo('SubtaskCategories', [
            'foreignKey' => 'subtask_category_id'
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
            ->integer('id')
            ->requirePresence('id', 'create')
            ->notEmpty('id');

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
            ->integer('participant_owner')
            ->allowEmpty('participant_owner');

        $validator
            ->decimal('subtask_dividend_rate')
            ->requirePresence('subtask_dividend_rate', 'create')
            ->notEmpty('subtask_dividend_rate');

        $validator
            ->allowEmpty('subtask_category_name');

        $validator
            ->allowEmpty('subtask_category_class');

        $validator
            ->allowEmpty('subtask_category_description');

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
        $rules->add($rules->existsIn(['task_id'], 'Tasks'));
        $rules->add($rules->existsIn(['subtask_super_id'], 'SubtaskSupers'));
        $rules->add($rules->existsIn(['subtask_category_id'], 'SubtaskCategories'));

        return $rules;
    }
}
