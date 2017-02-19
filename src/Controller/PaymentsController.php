<?php

namespace App\Controller;

use App\Controller\AppController;
use \Cake\I18n\Time;

/**
 * Payments Controller
 *
 * @property \App\Model\Table\PaymentsTable $Payments
 */
class PaymentsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
	$this->paginate = [
	    'contain' => ['Holders']
	];
	$status = array('0' => 'Paid', '1' => 'Cancelled');
	$type = array('1' => 'Cash', '2' => 'Debit');
	$payments = $this->paginate($this->Payments);

	$this->set('type', $type);
	$this->set('status', $status);
	$this->set(compact('payments'));
	$this->set('_serialize', ['payments']);
    }

    /**
     * View method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
	$payment = $this->Payments->get($id, [
	    'contain' => ['Holders', 'Bankcards']
	]);

	$this->set('payment', $payment);
	$this->set('_serialize', ['payment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null) {
	$payment = $this->Payments->newEntity();

	$time = Time::Now();
	$status = array('0' => 'Paid', '1' => 'Cancelled');
	$type = array('1' => 'Cash', '2' => 'Debit');
	$ref = 'HIS' . date('d') . $id .  'FFghrWIN' . rand(0, 9) . $id . 'NWE';

	if ($this->request->is('post')) {
	    $payment = $this->Payments->patchEntity($payment, $this->request->data);
	    $payment->holder_id = $id;
	    $payment->refno = $ref;
	    if ($this->Payments->save($payment)) {
		$this->Flash->success(__('The payment has been saved.'));

		return $this->redirect(['action' => 'index']);
	    } else {
		$this->Flash->error(__('The payment could not be saved. Please, try again.'));
	    }
	}
	$holders = $this->Payments->Holders->find('list', ['limit' => 200]);

	$this->set('type', $type);
	$this->set('status', $status);
	$this->set(compact('payment', 'holders'));
	$this->set('_serialize', ['payment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
	$payment = $this->Payments->get($id, [
	    'contain' => []
	]);

	$status = array('0' => 'Paid', '1' => 'Cancelled');
	$type = array('1' => 'Cash', '2' => 'Debit');

	if ($this->request->is(['patch', 'post', 'put'])) {
	    $payment = $this->Payments->patchEntity($payment, $this->request->data);
	    if ($this->Payments->save($payment)) {
		$this->Flash->success(__('The payment has been saved.'));

		return $this->redirect(['action' => 'index']);
	    } else {
		$this->Flash->error(__('The payment could not be saved. Please, try again.'));
	    }
	}
	$holders = $this->Payments->Holders->find('list', ['limit' => 200]);

	$this->set('type', $type);
	$this->set('status', $status);
	$this->set(compact('payment', 'holders'));
	$this->set('_serialize', ['payment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
	$this->request->allowMethod(['post', 'delete']);
	$payment = $this->Payments->get($id);
	if ($this->Payments->delete($payment)) {
	    $this->Flash->success(__('The payment has been deleted.'));
	} else {
	    $this->Flash->error(__('The payment could not be deleted. Please, try again.'));
	}

	return $this->redirect(['action' => 'index']);
    }
    
    /**
     * number of all Transactions
     *
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function notransact() {
	$transact = $this->Payments->find('all')->count('id');
	
	$this->set(compact('transact', $transact));
	$this->set('_serialize', ['transact']);
    }

}
