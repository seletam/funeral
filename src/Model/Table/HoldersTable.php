<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Holders Model
 *
 * @property \Cake\ORM\Association\HasMany $Additional
 * @property \Cake\ORM\Association\HasMany $Address
 * @property \Cake\ORM\Association\HasMany $Dependant
 * @property \Cake\ORM\Association\HasMany $Payments
 * @property \Cake\ORM\Association\HasMany $Phones
 *
 * @method \App\Model\Entity\Holder get($primaryKey, $options = [])
 * @method \App\Model\Entity\Holder newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Holder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Holder|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Holder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Holder[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Holder findOrCreate($search, callable $callback = null)
 */
class HoldersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
	parent::initialize($config);

	$this->table('holders');
	$this->displayField('title');
	$this->primaryKey('id');

	$this->hasMany('Additional', [
	    'foreignKey' => 'holder_id'
	]);
	$this->hasMany('Address', [
	    'foreignKey' => 'holder_id'
	]);
	$this->hasMany('Dependant', [
	    'foreignKey' => 'holder_id'
	]);
	$this->hasMany('Payments', [
	    'foreignKey' => 'holder_id'
	]);
	$this->hasMany('Phones', [
	    'foreignKey' => 'holder_id'
	]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
	$validator
		->integer('id')
		->allowEmpty('id', 'create');

	$validator
		->allowEmpty('title');

	$validator
		->allowEmpty('first_names');

	$validator
		->allowEmpty('surname');

	$validator
		->allowEmpty('idnumber');

	$validator
		->dateTime('dob')
		->allowEmpty('dob');

	$validator
		->allowEmpty('package');

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

    public $validate = array(
	'idnumber' => array(
	    'unique' => array(
		'rule' => array('checkUnique', array('idnumber', 'id'), false),
		'message' => 'A account with this ID Number already exist'
	    )
	)
    );

}
