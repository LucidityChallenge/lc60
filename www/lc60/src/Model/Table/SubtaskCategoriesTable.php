<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubtaskCategories Model
 *
 * @property \App\Model\Table\CalculatedSubtaskDemandExternalTable|\Cake\ORM\Association\HasMany $CalculatedSubtaskDemandExternal
 * @property \App\Model\Table\CalculatedSubtaskDemandFinalValueTable|\Cake\ORM\Association\HasMany $CalculatedSubtaskDemandFinalValue
 * @property \App\Model\Table\CalculatedSubtaskDemandInnerTable|\Cake\ORM\Association\HasMany $CalculatedSubtaskDemandInner
 * @property \App\Model\Table\CalculatedSubtaskDemandUnionTable|\Cake\ORM\Association\HasMany $CalculatedSubtaskDemandUnion
 * @property \App\Model\Table\DemandViewSuccessTable|\Cake\ORM\Association\HasMany $DemandViewSuccess
 * @property \App\Model\Table\DemandViewSuccessContemporaryDemandTable|\Cake\ORM\Association\HasMany $DemandViewSuccessContemporaryDemand
 * @property \App\Model\Table\DemandViewSuccessContemporaryDemandPositiveTable|\Cake\ORM\Association\HasMany $DemandViewSuccessContemporaryDemandPositive
 * @property \App\Model\Table\DemandViewUncompleteContemporaryDemandTable|\Cake\ORM\Association\HasMany $DemandViewUncompleteContemporaryDemand
 * @property \App\Model\Table\DemandViewUncompleteContemporaryDemandPositiveTable|\Cake\ORM\Association\HasMany $DemandViewUncompleteContemporaryDemandPositive
 * @property \App\Model\Table\SubtasksTable|\Cake\ORM\Association\HasMany $Subtasks
 * @property \App\Model\Table\SuccessfulSubtaskTable|\Cake\ORM\Association\HasMany $SuccessfulSubtask
 * @property \App\Model\Table\SuccessfulSubtaskCategoryTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskCategory
 * @property \App\Model\Table\SuccessfulSubtaskCategoryCompleteFinalTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskCategoryCompleteFinal
 * @property \App\Model\Table\SuccessfulSubtaskCategoryCompleteInnerTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskCategoryCompleteInner
 * @property \App\Model\Table\SuccessfulSubtaskDividendScoresTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskDividendScores
 * @property \App\Model\Table\SuccessfulSubtaskTaskTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTask
 * @property \App\Model\Table\SuccessfulSubtaskTaskWithCalculatedScoringParticipantTable|\Cake\ORM\Association\HasMany $SuccessfulSubtaskTaskWithCalculatedScoringParticipant
 * @property \App\Model\Table\SubtaskShareHolderCompleteTable|\Cake\ORM\Association\HasMany $SubtaskShareHolderComplete 
 *
 * @method \App\Model\Entity\SubtaskCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubtaskCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubtaskCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubtaskCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubtaskCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class SubtaskCategoriesTable extends Table
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

        $this->setTable('lc60_subtask_categories');
        $this->setDisplayField('subtask_category_name');
        $this->setPrimaryKey('id');

        $this->hasMany('CalculatedSubtaskDemandExternal', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('CalculatedSubtaskDemandFinalValue', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('CalculatedSubtaskDemandInner', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('CalculatedSubtaskDemandUnion', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('DemandViewSuccess', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('DemandViewSuccessContemporaryDemand', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('DemandViewSuccessContemporaryDemandPositive', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('DemandViewUncompleteContemporaryDemand', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('DemandViewUncompleteContemporaryDemandPositive', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('Subtasks', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('SuccessfulSubtask', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('SuccessfulSubtaskCategory', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('SuccessfulSubtaskCategoryCompleteFinal', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('SuccessfulSubtaskCategoryCompleteInner', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('SuccessfulSubtaskDividendScores', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTask', [
            'foreignKey' => 'subtask_category_id'
        ]);
        $this->hasMany('SuccessfulSubtaskTaskWithCalculatedScoringParticipant', [
            'foreignKey' => 'subtask_category_id'
        ]);
        
        $this->hasMany('SubtaskShareHolderComplete', [
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('subtask_category_name', 'create')
            ->notEmpty('subtask_category_name');

        $validator
            ->requirePresence('subtask_category_color', 'create')
            ->notEmpty('subtask_category_color');

        $validator
            ->allowEmpty('subtask_category_class');

        $validator
            ->allowEmpty('subtask_category_description');

        return $validator;
    }
}
