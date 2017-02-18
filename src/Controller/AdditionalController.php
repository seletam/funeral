<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Additional Controller
 *
 * @property \App\Model\Table\AdditionalTable $Additional
 */
class AdditionalController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $additional = $this->paginate($this->Additional);

        $this->set(compact('additional'));
        $this->set('_serialize', ['additional']);
    }

    /**
     * View method
     *
     * @param string|null $id Additional id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $additional = $this->Additional->get($id, [
            'contain' => []
        ]);

        $this->set('additional', $additional);
        $this->set('_serialize', ['additional']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $additional = $this->Additional->newEntity();
        if ($this->request->is('post')) {
            $additional = $this->Additional->patchEntity($additional, $this->request->data);
            if ($this->Additional->save($additional)) {
                $this->Flash->success(__('The additional has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The additional could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('additional'));
        $this->set('_serialize', ['additional']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Additional id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $additional = $this->Additional->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $additional = $this->Additional->patchEntity($additional, $this->request->data);
            if ($this->Additional->save($additional)) {
                $this->Flash->success(__('The additional has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The additional could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('additional'));
        $this->set('_serialize', ['additional']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Additional id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $additional = $this->Additional->get($id);
        if ($this->Additional->delete($additional)) {
            $this->Flash->success(__('The additional has been deleted.'));
        } else {
            $this->Flash->error(__('The additional could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
