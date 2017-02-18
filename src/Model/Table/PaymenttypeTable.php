<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paymenttype Model
 *
 * @method \App\Model\Entity\Paymenttype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paymenttype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Paymenttype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paymenttype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paymenttype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paymenttype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paymenttype findOrCreate($search, callable $callback = null)
 */
class PaymenttypeTable extends Table
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

        $this->table('paymenttype');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->allowEmpty('name');

        return $validator;
    }
}
