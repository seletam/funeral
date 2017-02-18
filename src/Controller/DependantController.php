<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dependant Controller
 *
 * @property \App\Model\Table\DependantTable $Dependant
 */
class DependantController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Holders']
        ];
	
        $dependant = $this->paginate($this->Dependant);
        $this->set(compact('dependant'));
        $this->set('_serialize', ['dependant']);
    }

    /**
     * View method
     *
     * @param string|null $id Dependant id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dependant = $this->Dependant->get($id, [
            'contain' => ['Holders']
        ]);

        $this->set('dependant', $dependant);
        $this->set('_serialize', ['dependant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dependant = $this->Dependant->newEntity();
        if ($this->request->is('post')) {
            $dependant = $this->Dependant->patchEntity($dependant, $this->request->data);
            if ($this->Dependant->save($dependant)) {
                $this->Flash->success(__('The dependant has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dependant could not be saved. Please, try again.'));
            }
        }
        $holders = $this->Dependant->Holders->find('list', ['limit' => 200]);
        $this->set(compact('dependant', 'holders'));
        $this->set('_serialize', ['dependant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dependant id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dependant = $this->Dependant->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dependant = $this->Dependant->patchEntity($dependant, $this->request->data);
            if ($this->Dependant->save($dependant)) {
                $this->Flash->success(__('The dependant has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dependant could not be saved. Please, try again.'));
            }
        }
        $holders = $this->Dependant->Holders->find('list', ['limit' => 200]);
        $this->set(compact('dependant', 'holders'));
        $this->set('_serialize', ['dependant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dependant id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dependant = $this->Dependant->get($id);
        if ($this->Dependant->delete($dependant)) {
            $this->Flash->success(__('The dependant has been deleted.'));
        } else {
            $this->Flash->error(__('The dependant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
