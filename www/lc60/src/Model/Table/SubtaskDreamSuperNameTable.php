<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubtaskDreamSuperName Model
 *
 * @property \App\Model\Table\SubtasksTable|\Cake\ORM\Association\BelongsTo $Subtasks
 * @property \App\Model\Table\DreamsTable|\Cake\ORM\Association\BelongsTo $Dreams
 *
 * @method \App\Model\Entity\SubtaskDreamSuperName get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubtaskDreamSuperName newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubtaskDreamSuperName[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskDreamSuperName|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubtaskDreamSuperName patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskDreamSuperName[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskDreamSuperName findOrCreate($search, callable $callback = null, $options = [])
 */
class SubtaskDreamSuperNameTable extends Table
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

        $this->setTable('subtask_dream_super_name');

        $this->belongsTo('Subtasks', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->belongsTo('Dreams', [
            'foreignKey' => 'dream_id',
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
            ->integer('subtask_dream_attempt')
            ->requirePresence('subtask_dream_attempt', 'create')
            ->notEmpty('subtask_dream_attempt');

        $validator
            ->requirePresence('implied_from_super_task', 'create')
            ->notEmpty('implied_from_super_task');

        $validator
            ->requirePresence('subtask_name', 'create')
            ->notEmpty('subtask_name');

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
        $rules->add($rules->existsIn(['dream_id'], 'Dreams'));

        return $rules;
    }
}
