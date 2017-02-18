<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Holders Controller
 *
 * @property \App\Model\Table\HoldersTable $Holders
 */
class HoldersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $holders = $this->paginate($this->Holders);

        $this->set(compact('holders'));
        $this->set('_serialize', ['holders']);
    }

    /**
     * View method
     *
     * @param string|null $id Holder id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $holder = $this->Holders->get($id, [
            'contain' => ['Additional', 'Address', 'Dependant', 'PaymentDue', 'Phones']
        ]);

        $this->set('holder', $holder);
        $this->set('_serialize', ['holder']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $holder = $this->Holders->newEntity();
        if ($this->request->is('post')) {
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
     * Edit method
     *
     * @param string|null $id Holder id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
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
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $holder = $this->Holders->get($id);
        if ($this->Holders->delete($holder)) {
            $this->Flash->success(__('The holder has been deleted.'));
        } else {
            $this->Flash->error(__('The holder could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function create()
    {
		$holder = $this->Holders->newEntity();
		$holders  = $this->Holders->newEntity();
		$addres = $this->Holders->Address->newEntity();
        if ($this->request->is('post')) {
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
	
	public function test()
    {
	$holder = $this->Holders->newEntity();
		$holders  = $this->Holders->newEntity();
		$addres = $this->Holders->Address->newEntity();
        if ($this->request->is('post')) {
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
}
