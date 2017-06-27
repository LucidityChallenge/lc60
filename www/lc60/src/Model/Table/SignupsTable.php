<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Signups Model
 *
 * @method \App\Model\Entity\Signup get($primaryKey, $options = [])
 * @method \App\Model\Entity\Signup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Signup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Signup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Signup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Signup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Signup findOrCreate($search, callable $callback = null, $options = [])
 */
class SignupsTable extends Table
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

        $this->setTable('lc60_signups');
        $this->setPrimaryKey('now_date');
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
            ->dateTime('now_date')
            ->requirePresence('now_date', 'create')
            ->notEmpty('now_date');

        $validator
            ->allowEmpty('now_date_unix');

        $validator
            ->requirePresence('end_date', 'create')
            ->notEmpty('end_date');

        $validator
            ->allowEmpty('end_date_unix');

        return $validator;
    }
}
