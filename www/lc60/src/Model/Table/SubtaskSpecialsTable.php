<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubtaskSpecials Model
 *
 * @method \App\Model\Entity\SubtaskSpecial get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubtaskSpecial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubtaskSpecial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskSpecial|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubtaskSpecial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskSpecial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskSpecial findOrCreate($search, callable $callback = null, $options = [])
 */
class SubtaskSpecialsTable extends Table
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

        $this->setTable('subtask_specials');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->boolean('subtask_is_personal')
            ->requirePresence('subtask_is_personal', 'create')
            ->notEmpty('subtask_is_personal')
            ->add('subtask_is_personal', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->boolean('subtask_is_quest')
            ->requirePresence('subtask_is_quest', 'create')
            ->notEmpty('subtask_is_quest');

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
        $rules->add($rules->isUnique(['subtask_is_personal']));

        return $rules;
    }
}
