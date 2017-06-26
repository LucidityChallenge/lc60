<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubtaskTypes Model
 *
 * @property \App\Model\Table\SuccessfulSubtaskTaskWithCalculatedScoringParticipantTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTaskWithCalculatedScoringParticipant
 * @property \App\Model\Table\SubtaskShareHolderCompleteTable|\Cake\ORM\Association\HasMany $SubtaskShareHolderComplete
 *
 * @method \App\Model\Entity\SubtaskType get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubtaskType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubtaskType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubtaskType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskType findOrCreate($search, callable $callback = null, $options = [])
 */
class SubtaskTypesTable extends Table
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

        $this->setTable('lc60_subtask_types');
        $this->setDisplayField('subtask_type_name');
        $this->setPrimaryKey('id');

        $this->hasMany('SuccessfulSubtaskTaskWithCalculatedScoringParticipant', [
            'foreignKey' => 'subtask_type_id'
        ]);
        
        $this->hasMany('SubtaskShareHolderComplete', [
            'foreignKey' => 'subtask_type_id'
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
            ->requirePresence('subtask_type_name', 'create')
            ->notEmpty('subtask_type_name');

        return $validator;
    }
}
