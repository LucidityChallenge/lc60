<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tasks Model
 *
 * @property \App\Model\Table\CurrentTaskTable|\Cake\ORM\Association\HasMany $CurrentTask
 * @property |\Cake\ORM\Association\HasMany $DreamWithType
 * @property |\Cake\ORM\Association\HasMany $SubtaskShareHolderComplete
 * @property |\Cake\ORM\Association\HasMany $SubtaskSubtaskCategory
 * @property \App\Model\Table\SubtasksTable|\Cake\ORM\Association\HasMany $Subtasks
 * @property \App\Model\Table\SuccessfulSubtaskTable|\Cake\ORM\Association\HasMany $SuccessfulSubtask
 * @property \App\Model\Table\UnexpiredTaskTable|\Cake\ORM\Association\HasMany $UnexpiredTask
 *
 * @method \App\Model\Entity\Task get($primaryKey, $options = [])
 * @method \App\Model\Entity\Task newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Task[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Task|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Task patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Task[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Task findOrCreate($search, callable $callback = null, $options = [])
 */
class TasksTable extends Table
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

        $this->setTable('tasks');
        $this->setDisplayField('task_title');
        $this->setPrimaryKey('id');

        $this->hasMany('CurrentTask', [
            'foreignKey' => 'task_id'
        ]);
        $this->hasMany('DreamWithType', [
            'foreignKey' => 'task_id'
        ]);
        $this->hasMany('SubtaskShareHolderComplete', [
            'foreignKey' => 'task_id'
        ]);
        $this->hasMany('SubtaskSubtaskCategory', [
            'foreignKey' => 'task_id'
        ]);
        $this->hasMany('Subtasks', [
            'foreignKey' => 'task_id'
        ]);
        $this->hasMany('SuccessfulSubtask', [
            'foreignKey' => 'task_id'
        ]);
        $this->hasMany('UnexpiredTask', [
            'foreignKey' => 'task_id'
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
            ->requirePresence('task_title', 'create')
            ->notEmpty('task_title');

        $validator
            ->dateTime('task_start')
            ->requirePresence('task_start', 'create')
            ->notEmpty('task_start');

        $validator
            ->dateTime('task_expiration')
            ->requirePresence('task_expiration', 'create')
            ->notEmpty('task_expiration');

        $validator
            ->requirePresence('task_text', 'create')
            ->notEmpty('task_text');

        $validator
            ->requirePresence('task_url', 'create')
            ->notEmpty('task_url');

        return $validator;
    }
}
