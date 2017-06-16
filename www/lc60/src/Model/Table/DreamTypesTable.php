<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DreamTypes Model
 *
 * @property \App\Model\Table\DreamTypeIdTable|\Cake\ORM\Association\HasMany $DreamTypeId
 * @property |\Cake\ORM\Association\HasMany $RecentSuccesses
 * @property \App\Model\Table\SuccessfulSubtaskTable|\Cake\ORM\Association\HasMany $SuccessfulSubtask
 * @property \App\Model\Table\SuccessfulSubtaskDividendScoresTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskDividendScores
 * @property \App\Model\Table\SuccessfulSubtaskTaskTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTask
 * @property \App\Model\Table\SuccessfulSubtaskTaskWithCalculatedScoringTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTaskWithCalculatedScoring
 *
 * @method \App\Model\Entity\DreamType get($primaryKey, $options = [])
 * @method \App\Model\Entity\DreamType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DreamType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DreamType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DreamType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DreamType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DreamType findOrCreate($search, callable $callback = null, $options = [])
 */
class DreamTypesTable extends Table
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

        $this->setTable('dream_types');
        $this->setDisplayField('dream_type_name');
        $this->setPrimaryKey('id');

        $this->hasMany('DreamTypeId', [
            'foreignKey' => 'dream_type_id'
        ]);
        $this->hasMany('RecentSuccesses', [
            'foreignKey' => 'dream_type_id'
        ]);
        $this->hasMany('SuccessfulSubtask', [
            'foreignKey' => 'dream_type_id'
        ]);
        $this->hasMany('SuccessfulSubtaskDividendScores', [
            'foreignKey' => 'dream_type_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTask', [
            'foreignKey' => 'dream_type_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTaskWithCalculatedScoring', [
            'foreignKey' => 'dream_type_id'
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
            ->requirePresence('dream_type_name', 'create')
            ->notEmpty('dream_type_name');

        $validator
            ->requirePresence('dream_type_short_name', 'create')
            ->notEmpty('dream_type_short_name');

        return $validator;
    }
}
