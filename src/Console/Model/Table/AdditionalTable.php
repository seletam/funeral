<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Additional Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Holders
 *
 * @method \App\Model\Entity\Additional get($primaryKey, $options = [])
 * @method \App\Model\Entity\Additional newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Additional[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Additional|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Additional patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Additional[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Additional findOrCreate($search, callable $callback = null)
 */
class AdditionalTable extends Table
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

        $this->table('additional');
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
            ->integer('gender')
            ->allowEmpty('gender');

        $validator
            ->integer('premium')
            ->allowEmpty('premium');

        $validator
            ->dateTime('creation_date')
            ->allowEmpty('creation_date');

        $validator
            ->dateTime('modified_date')
            ->allowEmpty('modified_date');

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
