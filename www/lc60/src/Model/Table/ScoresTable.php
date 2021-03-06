<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Scores Model
 *
 *
 * @method \App\Model\Entity\Score get($primaryKey, $options = [])
 * @method \App\Model\Entity\Score newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Score[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Score|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Score patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Score[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Score findOrCreate($search, callable $callback = null, $options = [])
 */
class ScoresTable extends Table
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

        $this->setTable('lc60_scores');
        $this->setDisplayField('participant_id');
        $this->setPrimaryKey('participant_id');
/*
        $this->belongsTo('Participants', [
            'foreignKey' => 'participant_id',
            'joinType' => 'INNER'
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
            ->requirePresence('position', 'create')
            ->notEmpty('position');

        $validator
            ->requirePresence('participant', 'create')
            ->notEmpty('participant');

        $validator
            ->requirePresence('successful_subtasks', 'create')
            ->notEmpty('successful_subtasks');

        $validator
            ->numeric('average_subtask_value')
            ->allowEmpty('average_subtask_value');

        $validator
            ->numeric('total_subtask_value')
            ->allowEmpty('total_subtask_value');

        $validator
            ->allowEmpty('dividend_successes');

        $validator
            ->numeric('average_dividend_value')
            ->allowEmpty('average_dividend_value');

        $validator
            ->numeric('total_dividends')
            ->allowEmpty('total_dividends');

        $validator
            ->numeric('total_score')
            ->allowEmpty('total_score');

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

        return $rules;
    }
}
