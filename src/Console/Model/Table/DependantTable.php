<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dependant Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Holders
 *
 * @method \App\Model\Entity\Dependant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dependant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dependant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dependant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dependant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dependant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dependant findOrCreate($search, callable $callback = null)
 */
class DependantTable extends Table
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

        $this->table('dependant');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Holders', [
            'foreignKey' => 'holder_id'
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
            ->allowEmpty('names');

        $validator
            ->allowEmpty('surname');

        $validator
            ->allowEmpty('idnumber');

        $validator
            ->allowEmpty('local');

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
        $rules->add($rules->existsIn(['holder_id'], 'Holders'));

        return $rules;
    }
}
