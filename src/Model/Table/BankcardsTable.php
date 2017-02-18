<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bankcards Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Payments
 *
 * @method \App\Model\Entity\Bankcard get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bankcard newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bankcard[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bankcard|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bankcard patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bankcard[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bankcard findOrCreate($search, callable $callback = null)
 */
class BankcardsTable extends Table
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

        $this->table('bankcards');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Payments', [
            'foreignKey' => 'payment_id'
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
            ->allowEmpty('accountholder');

        $validator
            ->allowEmpty('type');

        $validator
            ->allowEmpty('accountno');

        $validator
            ->allowEmpty('bankname');

        $validator
            ->allowEmpty('branchcode');

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
        $rules->add($rules->existsIn(['payment_id'], 'Payments'));

        return $rules;
    }
}
