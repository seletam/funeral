<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PaymentDue Controller
 *
 * @property \App\Model\Table\PaymentDueTable $PaymentDue
 */
class PaymentDueController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $paymentDue = $this->paginate($this->PaymentDue);

        $this->set(compact('paymentDue'));
        $this->set('_serialize', ['paymentDue']);
    }

    /**
     * View method
     *
     * @param string|null $id Payment Due id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paymentDue = $this->PaymentDue->get($id, [
            'contain' => []
        ]);

        $this->set('paymentDue', $paymentDue);
        $this->set('_serialize', ['paymentDue']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paymentDue = $this->PaymentDue->newEntity();
        if ($this->request->is('post')) {
            $paymentDue = $this->PaymentDue->patchEntity($paymentDue, $this->request->data);
            if ($this->PaymentDue->save($paymentDue)) {
                $this->Flash->success(__('The payment due has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The payment due could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('paymentDue'));
        $this->set('_serialize', ['paymentDue']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Payment Due id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paymentDue = $this->PaymentDue->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentDue = $this->PaymentDue->patchEntity($paymentDue, $this->request->data);
            if ($this->PaymentDue->save($paymentDue)) {
                $this->Flash->success(__('The payment due has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The payment due could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('paymentDue'));
        $this->set('_serialize', ['paymentDue']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Payment Due id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymentDue = $this->PaymentDue->get($id);
        if ($this->PaymentDue->delete($paymentDue)) {
            $this->Flash->success(__('The payment due has been deleted.'));
        } else {
            $this->Flash->error(__('The payment due could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
