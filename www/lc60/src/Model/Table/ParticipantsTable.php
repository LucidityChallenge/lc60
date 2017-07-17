<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Participants Model
 *
 * @property \App\Model\Table\DreamsTable|\Cake\ORM\Association\HasMany $Dreams
 * @property \App\Model\Table\DreamsTable|\Cake\ORM\Association\HasMany $DreamWithType
 * @property \App\Model\Table\ScoreViewCompleteTable|\Cake\ORM\Association\HasMany $ScoreViewComplete
 * @property \App\Model\Table\ScoreViewCompleteParticipantTable|\Cake\ORM\Association\HasMany $ScoreViewCompleteParticipant
 * @property \App\Model\Table\SubtaskShareHolderCompleteTable|\Cake\ORM\Association\HasMany $SubtaskShareHolderComplete
 * @property \App\Model\Table\SubtaskSharesTable|\Cake\ORM\Association\HasMany $SubtaskShares
 * @property \App\Model\Table\SubtasksTable|\Cake\ORM\Association\HasMany $Subtasks
 * @property \App\Model\Table\SuccessfulSubtaskTable|\Cake\ORM\Association\HasMany $SuccessfulSubtask
 * @property \App\Model\Table\SuccessfulSubtaskCategoryTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskCategory
 * @property \App\Model\Table\SubtaskCategoriesTable|\Cake\ORM\Association\HasMany $SubtaskCategories
 * @property \App\Model\Table\SuccessfulSubtaskCategoryCompleteFinalTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskCategoryCompleteFinal
 * @property \App\Model\Table\SuccessfulSubtaskCategoryCompleteFinalMinimumTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskCategoryCompleteFinalMinimum
 * @property \App\Model\Table\SuccessfulSubtaskCategoryCompleteInnerTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskCategoryCompleteInner
 * @property \App\Model\Table\SuccessfulSubtaskDividendCalculatedSubtotalTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskDividendCalculatedSubtotal
 * @property \App\Model\Table\SuccessfulSubtaskDividendCalculatedTotalTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskDividendCalculatedTotal
 * @property \App\Model\Table\SuccessfulSubtaskDividendScoresTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskDividendScores
 * @property \App\Model\Table\SuccessfulSubtaskTaskTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTask
 * @property \App\Model\Table\SuccessfulSubtaskTaskWithCalculatedScoringTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTaskWithCalculatedScoring
 * @property \App\Model\Table\SuccessfulSubtaskTaskWithCalculatedSubtotalTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTaskWithCalculatedSubtotal
 * @property \App\Model\Table\SuccessfulSubtaskTaskWithCalculatedTotalTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTaskWithCalculatedTotal
 * @property \App\Model\Table\SuccessfulSubtaskTaskWithCalculatedTotalCompleteTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTaskWithCalculatedTotalComplete
 * @property \App\Model\Table\SuccessfulSubtaskTaskWithCalculatedTotalParticipantTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTaskWithCalculatedTotalParticipant
 * @property \App\Model\Table\SuccessfulSubtaskCategoryFullTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskCategoryFull
 *
 * @method \App\Model\Entity\Participant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Participant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Participant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Participant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Participant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Participant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Participant findOrCreate($search, callable $callback = null, $options = [])
 */
class ParticipantsTable extends Table
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

        $this->setTable('lc60_participants');
        $this->setDisplayField('participant_name');
        $this->setPrimaryKey('id');

        $this->hasMany('Dreams', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('DreamWithType', [
            'foreignKey' => 'participant_id'
        ]);        
        $this->hasMany('ScoreViewComplete', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('ScoreViewCompleteParticipant', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SubtaskShareHolderComplete', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SubtaskShares', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtask', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskCategory', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskCategoryCompleteFinal', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskCategoryCompleteFinalMinimum', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskCategoryCompleteInner', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskDividendCalculatedSubtotal', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskDividendCalculatedTotal', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskDividendScores', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTask', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTaskWithCalculatedScoring', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTaskWithCalculatedSubtotal', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTaskWithCalculatedTotal', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTaskWithCalculatedTotalComplete', [
            'foreignKey' => 'participant_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTaskWithCalculatedTotalParticipant', [
            'foreignKey' => 'participant_id'
        ]);

        $this->hasMany('Subtasks', [
            'foreignKey' => 'participant_id',
            'bindingKey' => 'id'
        ]);
        
        $this->hasMany('SubtaskCategories', [
            'foreignKey' => 'id',
            'bindingKey' => 'subtask_category_id'
        ]);
        
        $this->hasMany('SuccessfulSubtaskCategoryFull', [
            'foreignKey' => 'participant_id',
            'bindingKey' => 'id'
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
            ->requirePresence('participant_name', 'create')
            ->notEmpty('participant_name');

        $validator
            ->allowEmpty('participant_goal');

        $validator
            ->allowEmpty('participant_dj_url');

        $validator
            ->allowEmpty('participant_join_url');

        $validator
            ->dateTime('participant_join_timestamp')
            ->requirePresence('participant_join_timestamp', 'create')
            ->notEmpty('participant_join_timestamp');

        return $validator;
    }
}
