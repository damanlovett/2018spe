<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Access Controller
 *
 * @property \App\Model\Table\AccessTable $Access
 *
 * @method \App\Model\Entity\Acces[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccessController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $access = $this->paginate($this->Access);

        $this->set(compact('access'));
    }

    /**
     * View method
     *
     * @param string|null $id Acces id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $acces = $this->Access->get($id, [
            'contain' => []
        ]);

        $this->set('acces', $acces);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $acces = $this->Access->newEntity();
        if ($this->request->is('post')) {
            $acces = $this->Access->patchEntity($acces, $this->request->getData());
            if ($this->Access->save($acces)) {
                $this->Flash->success(__('The acces has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The acces could not be saved. Please, try again.'));
        }
        $this->set(compact('acces'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Acces id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $acces = $this->Access->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $acces = $this->Access->patchEntity($acces, $this->request->getData());
            if ($this->Access->save($acces)) {
                $this->Flash->success(__('The acces has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The acces could not be saved. Please, try again.'));
        }
        $this->set(compact('acces'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Acces id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $acces = $this->Access->get($id);
        if ($this->Access->delete($acces)) {
            $this->Flash->success(__('The acces has been deleted.'));
        } else {
            $this->Flash->error(__('The acces could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
