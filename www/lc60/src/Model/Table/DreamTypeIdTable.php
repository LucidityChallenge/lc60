<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DreamTypeId Model
 *
 * @property \App\Model\Table\DreamsTable|\Cake\ORM\Association\BelongsTo $Dreams
 * @property \App\Model\Table\DreamTypesTable|\Cake\ORM\Association\BelongsTo $DreamTypes
 *
 * @method \App\Model\Entity\DreamTypeId get($primaryKey, $options = [])
 * @method \App\Model\Entity\DreamTypeId newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DreamTypeId[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DreamTypeId|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DreamTypeId patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DreamTypeId[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DreamTypeId findOrCreate($search, callable $callback = null, $options = [])
 */
class DreamTypeIdTable extends Table
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

        $this->setTable('dream_type_id');
        $this->setDisplayField('dream_id');
        $this->setPrimaryKey('dream_id');        

        $this->belongsTo('Dreams', [
            'foreignKey' => 'dream_id'
        ]);
        $this->belongsTo('DreamTypes', [
            'foreignKey' => 'dream_type_id'
        ]);
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
        $rules->add($rules->existsIn(['dream_id'], 'Dreams'));
        $rules->add($rules->existsIn(['dream_type_id'], 'DreamTypes'));

        return $rules;
    }
}
