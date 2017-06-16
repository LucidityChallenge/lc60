<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ScoreViewCompleteParticipant Model
 *
 * @property \App\Model\Table\ParticipantsTable|\Cake\ORM\Association\BelongsTo $Participants
 *
 * @method \App\Model\Entity\ScoreViewCompleteParticipant get($primaryKey, $options = [])
 * @method \App\Model\Entity\ScoreViewCompleteParticipant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ScoreViewCompleteParticipant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ScoreViewCompleteParticipant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ScoreViewCompleteParticipant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ScoreViewCompleteParticipant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ScoreViewCompleteParticipant findOrCreate($search, callable $callback = null, $options = [])
 */
class ScoreViewCompleteParticipantTable extends Table
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

        $this->setTable('score_view_complete_participant');
        $this->setDisplayField('participant_name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Participants', [
            'foreignKey' => 'participant_id',
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
            ->decimal('subtask_success_count_sum_total')
            ->allowEmpty('subtask_success_count_sum_total');

        $validator
            ->requirePresence('subtask_success_count_participant_total', 'create')
            ->notEmpty('subtask_success_count_participant_total');

        $validator
            ->numeric('final_value_avg')
            ->allowEmpty('final_value_avg');

        $validator
            ->numeric('final_value_total')
            ->allowEmpty('final_value_total');

        $validator
            ->decimal('dividend_count_sum_total')
            ->allowEmpty('dividend_count_sum_total');

        $validator
            ->allowEmpty('dividend_count_participant_total');

        $validator
            ->numeric('final_dividend_value_avg')
            ->allowEmpty('final_dividend_value_avg');

        $validator
            ->numeric('final_dividend_value_total')
            ->allowEmpty('final_dividend_value_total');

        $validator
            ->numeric('final_value_total_with_dividends')
            ->allowEmpty('final_value_total_with_dividends');

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
