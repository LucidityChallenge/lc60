<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dreams Model
 *
 * @property \App\Model\Table\ParticipantsTable|\Cake\ORM\Association\BelongsTo $Participants
 * @property |\Cake\ORM\Association\HasMany $DreamTypeId
 * @property |\Cake\ORM\Association\HasMany $RecentSuccesses
 * @property \App\Model\Table\SubtaskDreamSuperNameTable|\Cake\ORM\Association\HasMany $SubtaskDreamSuperName
 * @property \App\Model\Table\SubtaskDreamsTable|\Cake\ORM\Association\HasMany $SubtaskDreams
 * @property \App\Model\Table\SuccessfulSubtaskTable|\Cake\ORM\Association\HasMany $SuccessfulSubtask
 * @property \App\Model\Table\SuccessfulSubtaskDividendScoresTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskDividendScores
 * @property \App\Model\Table\SuccessfulSubtaskTaskTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTask
 * @property \App\Model\Table\SuccessfulSubtaskTaskWithCalculatedScoringTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTaskWithCalculatedScoring
 *
 * @method \App\Model\Entity\Dream get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dream newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dream[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dream|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dream patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dream[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dream findOrCreate($search, callable $callback = null, $options = [])
 */
class DreamsTable extends Table
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

        $this->setTable('dreams');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Participants', [
            'foreignKey' => 'participant_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('DreamWithType', [
            'foreignKey' => 'dream_id'
        ]);        
        $this->hasMany('DreamTypeId', [
            'foreignKey' => 'dream_id'
        ]);
        $this->hasMany('RecentSuccesses', [
            'foreignKey' => 'dream_id'
        ]);
        $this->hasMany('SubtaskDreamSuperName', [
            'foreignKey' => 'dream_id'
        ]);
        $this->hasMany('SubtaskDreams', [
            'foreignKey' => 'dream_id'
        ]);
        $this->hasMany('SuccessfulSubtask', [
            'foreignKey' => 'dream_id'
        ]);
        $this->hasMany('SuccessfulSubtaskDividendScores', [
            'foreignKey' => 'dream_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTask', [
            'foreignKey' => 'dream_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTaskWithCalculatedScoring', [
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
            ->notEmpty('participant_id');

        $validator
            ->dateTime('dream_timestamp')
            ->requirePresence('dream_timestamp', 'create')
            ->notEmpty('dream_timestamp');

        $validator
            ->allowEmpty('dream_url');

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
