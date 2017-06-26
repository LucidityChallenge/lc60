<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubtaskDreams Model
 *
 * @property \App\Model\Table\SubtasksTable|\Cake\ORM\Association\BelongsTo $Subtasks
 * @property \App\Model\Table\DreamsTable|\Cake\ORM\Association\BelongsTo $Dreams
 *
 * @method \App\Model\Entity\SubtaskDream get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubtaskDream newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubtaskDream[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskDream|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubtaskDream patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskDream[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskDream findOrCreate($search, callable $callback = null, $options = [])
 */
class SubtaskDreamsTable extends Table
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

        $this->setTable('lc60_subtask_dreams');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Subtasks', [
            'foreignKey' => 'subtask_id'
        ]);
        $this->belongsTo('Dreams', [
            'foreignKey' => 'dream_id'
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
            ->allowEmpty('id', 'create');
            
        $validator
            ->notEmpty('dream_id');
            
        $validator
            ->notEmpty('subtask_id');            

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
