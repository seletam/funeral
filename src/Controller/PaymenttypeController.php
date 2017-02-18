<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Paymenttype Controller
 *
 * @property \App\Model\Table\PaymenttypeTable $Paymenttype
 */
class PaymenttypeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $paymenttype = $this->paginate($this->Paymenttype);

        $this->set(compact('paymenttype'));
        $this->set('_serialize', ['paymenttype']);
    }

    /**
     * View method
     *
     * @param string|null $id Paymenttype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paymenttype = $this->Paymenttype->get($id, [
            'contain' => []
        ]);

        $this->set('paymenttype', $paymenttype);
        $this->set('_serialize', ['paymenttype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paymenttype = $this->Paymenttype->newEntity();
        if ($this->request->is('post')) {
            $paymenttype = $this->Paymenttype->patchEntity($paymenttype, $this->request->data);
            if ($this->Paymenttype->save($paymenttype)) {
                $this->Flash->success(__('The paymenttype has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The paymenttype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('paymenttype'));
        $this->set('_serialize', ['paymenttype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Paymenttype id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paymenttype = $this->Paymenttype->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymenttype = $this->Paymenttype->patchEntity($paymenttype, $this->request->data);
            if ($this->Paymenttype->save($paymenttype)) {
                $this->Flash->success(__('The paymenttype has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The paymenttype could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('paymenttype'));
        $this->set('_serialize', ['paymenttype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Paymenttype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymenttype = $this->Paymenttype->get($id);
        if ($this->Paymenttype->delete($paymenttype)) {
            $this->Flash->success(__('The paymenttype has been deleted.'));
        } else {
            $this->Flash->error(__('The paymenttype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
