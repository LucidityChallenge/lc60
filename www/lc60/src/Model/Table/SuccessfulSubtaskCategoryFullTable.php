<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SuccessfulSubtaskCategoryFullTable Model
 *
 * @property \App\Model\Table\ParticipantsTable|\Cake\ORM\Association\HasMany $Participants
 * @property \App\Model\Table\SubtaskCategoriesTable|\Cake\ORM\Association\HasMany $SubtaskCategories
 *
 * @method \App\Model\Entity\SuccessfulSubtaskCategoryFull get($primaryKey, $options = [])
 * @method \App\Model\Entity\SuccessfulSubtaskCategoryFull newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SuccessfulSubtaskCategoryFull[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SuccessfulSubtaskCategoryFull|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SuccessfulSubtaskCategoryFull patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SuccessfulSubtaskCategoryFull[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SuccessfulSubtaskCategoryFull findOrCreate($search, callable $callback = null, $options = [])
 */
class SuccessfulSubtaskCategoryFullTable extends Table
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

        $this->setTable('lc60_successful_subtask_category_full');
        $this->setDisplayField('participant_id');
        $this->setPrimaryKey('participant_id');

        $this->hasMany('Participants', [
            'foreignKey' => 'id',
            'bindingKey' => 'participant_id'
        ]);
        $this->hasMany('SubtaskCategories', [
            'foreignKey' => 'id',
            'bindingKey' => 'subtask_id'
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
        return $validator;
    }
}
