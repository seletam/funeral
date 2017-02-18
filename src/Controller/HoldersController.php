<?php

namespace App\Controller;

use App\Controller\AppController;
use \Cake\I18n\Time;
App::import('Vendor', 'Fpdf', array('file' => 'fpdf/fpdf.php'));

/**
 * Holders Controller
 *
 * @property HoldersTable $Holders
 */
class HoldersController extends AppController {

    /**
     * Index method
     *
     * @return Response|null
     */
    public function index() {
	$holders = $this->Holders->find('all', ['limit' => 5000]);

	$this->set(compact('holders'));
	$this->set('_serialize', ['holders']);
    }

    /**
     * View method
     *
     * @param string|null $id Holder id.
     * @return Response|null
     * @throws RecordNotFoundException When record not found.
     */
    public function view($id = null) {
	$holder = $this->Holders->get($id, [
	    'contain' => ['Additional', 'Address', 'Dependant', 'Payments', 'Phones']
	]);

	$this->set('holder', $holder);
	$this->set('_serialize', ['holder']);
    }

    /**
     * Add method
     *
     * @return Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
	$holder = $this->Holders->newEntity();
	if ($this->request->is('post')) {
	    $holder = $this->Holders->patchEntity($holder, $this->request->data);
	    if ($this->Holders->save($holder)) {
		$this->Upload->upload($this->request->data['file']);
		$this->Flash->success(__('The holder has been saved.'));
		return $this->redirect(['action' => 'index']);
	    } else {
		$this->Flash->error(__('The holder could not be saved. Please, try again.'));
	    }
	}
	$this->set(compact('holder'));
	$this->set('_serialize', ['holder']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Holder id.
     * @return Response|void Redirects on successful edit, renders view otherwise.
     * @throws NotFoundException When record not found.
     */
    public function edit($id = null) {
	$holder = $this->Holders->get($id, [
	    'contain' => []
	]);
	if ($this->request->is(['patch', 'post', 'put'])) {
	    $holder = $this->Holders->patchEntity($holder, $this->request->data);
	    if ($this->Holders->save($holder)) {
		$this->Flash->success(__('The holder has been saved.'));

		return $this->redirect(['action' => 'index']);
	    } else {
		$this->Flash->error(__('The holder could not be saved. Please, try again.'));
	    }
	}
	$this->set(compact('holder'));
	$this->set('_serialize', ['holder']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Holder id.
     * @return Response|null Redirects to index.
     * @throws RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
	$this->request->allowMethod(['post', 'delete']);
	$holder = $this->Holders->get($id);
	if ($this->Holders->delete($holder)) {
	    $this->Flash->success(__('The holder has been deleted.'));
	} else {
	    $this->Flash->error(__('The holder could not be deleted. Please, try again.'));
	}

	return $this->redirect(['action' => 'index']);
    }

    /**
     * create method
     *
     * @return Response|void Redirects on successful add, renders view otherwise.
     */
    public function create() {
	$holder = $this->Holders->newEntity();
	$time = Time::now();
	if ($this->request->is('post')) {
	    $holder = $this->Holders->patchEntity($holder, $this->request->data);
	    $holder->creation_date = $time;
	    if ($this->Holders->save($holder)) {
		//current record id
		debug($holder);

		$holderid = $holder->id;
		//assign holder_id to an address(table)
		//address
		$address = $this->Holders->Address->newEntity();
		$address->holder_id = $holderid;
		$address->line_1 = $holder->line_1;
		$address->line_2 = $holder->line_2;
		$address->line_3 = $holder->line_3;
		$address->city = $holder->city;
		$address->code = $holder->code;
		//save data about address
		$this->Holders->Address->save($address);

		// debug($holder);
		//assign holder_id to a phone(table)
		//phones
		$phones = $this->Holders->Phones->newEntity();
		$phones->holder_id = $holderid;
		$phones->home = $holder->home;
		$phones->work = $holder->work;
		$phones->cell = $holder->cell;
		//debug($phones);
		$this->Holders->Phones->save($phones);

		//dependants
		$names[] = $this->request->data['named'];
		$dependant = $this->Holders->Dependant->newEntity();

		foreach ($names as $value) {
		    $dependant->holder_id = $holderid;
		    // $dependant->names = $holder->named;
		    // $dependant->surname = $holder->surnamed;
		    //$dependant->idnumber = $holder->idnumberd;
		    //$dependant->local = $holder->locald;
		    //debug($value);
		    $this->Holders->Dependant->save($dependant);
		}

		//additional members
		//$additionalm[] = $this->request->data['addname'];
		//debug($additionalm);
		/* foreach ($additionalm as $members) {
		  // $dependant->holder_id = $holderid;
		  // $dependant->names = $holder->named;
		  // $dependant->surname = $holder->surnamed;
		  //$dependant->idnumber = $holder->idnumberd;
		  //$dependant->local = $holder->locald;
		  debug($members);
		  $this->Holders->Additional->save($members);
		  } */
		//loop people therefore assign file to holder_id
		//$this->Upload->upload($this->request->data['file']);
		//loop members and assign holder holder_id to members
		//additional members
		$this->Flash->success(__('The record has been saved.'));
		//return $this->redirect(['action' => 'index']);
	    } else {
		$this->Flash->error(__('The record could not be saved. Please, try again.'));
	    }
	}
	$this->set(compact('holder'));
	$this->set('_serialize', ['holder']);
    }

    /**
     * create method
     *
     * @return Response|void Redirects on successful add, renders view otherwise.
     */
    public function policyaccount() {
	$holder = $this->Holders->newEntity();

	if ($this->request->is('post')) {
	    $holder = $this->Holders->patchEntity($holder, $this->request->data);
	    // if ($this->Holders->save($holder)) {
	    //assign holder_id to an address(table)
	    //address
	    debug($holder);
	    //assign holder_id to a phone(table)
	    //phones
	    //dependants
	    //loop people therefore assign file to holder_id
	    //$this->Upload->upload($this->request->data['file']);
	    //loop members and assign holder holder_id to members
	    //additional members
	    //$this->Flash->success(__('The record has been saved.'));
	    //return $this->redirect(['action' => 'index']);
	    // } else {
	    //$this->Flash->error(__('The record could not be saved. Please, try again.'));
	    //}
	}
	$this->set(compact('holder'));
	$this->set('_serialize', ['holder']);
    }

    public function accounts() {
	$holders = $this->paginate($this->Holders, ['limit' => 5000]);

	$this->set(compact('holders'));
	$this->set('_serialize', ['holders']);
    }

    /**
     * Modify method
     *
     * @param string|null $id Holder id.
     * @return Response|void Redirects on successful edit, renders view otherwise.
     * @throws NotFoundException When record not found.
     */
    public function modify($id = null) {
	$holder = $this->Holders->get($id, [
	    'contain' => ['Address', 'Phones', 'Dependant']
	    , 'limit' => 5000]);

	//debug($holder);
	if ($this->request->is(['patch', 'post', 'put'])) {
	    $holder = $this->Holders->patchEntity($holder, $this->request->data);
	    if ($this->Holders->save($holder)) {
		$this->Flash->success(__('The holder has been saved.'));

		return $this->redirect(['action' => 'index']);
	    } else {
		$this->Flash->error(__('The holder could not be saved. Please, try again.'));
	    }
	}
	$this->set(compact('holder'));
	$this->set('_serialize', ['holder']);
    }

    public function pdfreport() {
	$this->layout = "pdfreport";
	$this->set('fpdf', new \FPDF('P', 'mm','A4'));
	$this->set('data', 'Hello', 'PDF world');
	
	//$this->redirect('pdfreport');
	//$this->set('_serialize', ['holder']);
    }

    /**
     * number of all members method
     *
     * @param string|null $id Holder id.
     * @return Response|void Redirects on successful edit, renders view otherwise.
     * @throws NotFoundException When record not found.
     */
    public function noaccounts() {
	//count members
	$accounts = $this->Holders->find('all')->count('id');

	$this->set(compact('accounts'));
	$this->set('_serialize', ['accounts']);
    }

}
