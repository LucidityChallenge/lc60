<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Memos Model
 *
 * @method \App\Model\Entity\Memo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Memo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Memo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Memo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Memo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Memo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Memo findOrCreate($search, callable $callback = null, $options = [])
 */
class MemosTable extends Table
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

        $this->setTable('lc60_memos');
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
            ->requirePresence('memo_nickname', 'create')
            ->notEmpty('memo_nickname');

        $validator
            ->requirePresence('memo_message', 'create')
            ->notEmpty('memo_message');

        $validator
            ->dateTime('memo_timestamp')
            ->requirePresence('memo_timestamp', 'create')
            ->notEmpty('memo_timestamp');

        $validator
            ->boolean('memo_unread')
            ->requirePresence('memo_unread', 'create')
            ->notEmpty('memo_unread');

        return $validator;
    }
}
