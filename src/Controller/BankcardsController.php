<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bankcards Controller
 *
 * @property \App\Model\Table\BankcardsTable $Bankcards
 */
class BankcardsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Payments']
        ];
        $bankcards = $this->paginate($this->Bankcards);

        $this->set(compact('bankcards'));
        $this->set('_serialize', ['bankcards']);
    }

    /**
     * View method
     *
     * @param string|null $id Bankcard id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bankcard = $this->Bankcards->get($id, [
            'contain' => ['Payments']
        ]);

        $this->set('bankcard', $bankcard);
        $this->set('_serialize', ['bankcard']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bankcard = $this->Bankcards->newEntity();
        if ($this->request->is('post')) {
            $bankcard = $this->Bankcards->patchEntity($bankcard, $this->request->data);
            if ($this->Bankcards->save($bankcard)) {
                $this->Flash->success(__('The bankcard has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bankcard could not be saved. Please, try again.'));
            }
        }
        $payments = $this->Bankcards->Payments->find('list', ['limit' => 200]);
        $this->set(compact('bankcard', 'payments'));
        $this->set('_serialize', ['bankcard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bankcard id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bankcard = $this->Bankcards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bankcard = $this->Bankcards->patchEntity($bankcard, $this->request->data);
            if ($this->Bankcards->save($bankcard)) {
                $this->Flash->success(__('The bankcard has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bankcard could not be saved. Please, try again.'));
            }
        }
        $payments = $this->Bankcards->Payments->find('list', ['limit' => 200]);
        $this->set(compact('bankcard', 'payments'));
        $this->set('_serialize', ['bankcard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bankcard id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bankcard = $this->Bankcards->get($id);
        if ($this->Bankcards->delete($bankcard)) {
            $this->Flash->success(__('The bankcard has been deleted.'));
        } else {
            $this->Flash->error(__('The bankcard could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
