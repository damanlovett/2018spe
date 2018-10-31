<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TmpEmails Controller
 *
 * @property \App\Model\Table\TmpEmailsTable $TmpEmails
 *
 * @method \App\Model\Entity\TmpEmail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TmpEmailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tmpEmails = $this->paginate($this->TmpEmails);

        $this->set(compact('tmpEmails'));
    }

    /**
     * View method
     *
     * @param string|null $id Tmp Email id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tmpEmail = $this->TmpEmails->get($id, [
            'contain' => []
        ]);

        $this->set('tmpEmail', $tmpEmail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tmpEmail = $this->TmpEmails->newEntity();
        if ($this->request->is('post')) {
            $tmpEmail = $this->TmpEmails->patchEntity($tmpEmail, $this->request->getData());
            if ($this->TmpEmails->save($tmpEmail)) {
                $this->Flash->success(__('The tmp email has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmp email could not be saved. Please, try again.'));
        }
        $this->set(compact('tmpEmail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tmp Email id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tmpEmail = $this->TmpEmails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tmpEmail = $this->TmpEmails->patchEntity($tmpEmail, $this->request->getData());
            if ($this->TmpEmails->save($tmpEmail)) {
                $this->Flash->success(__('The tmp email has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmp email could not be saved. Please, try again.'));
        }
        $this->set(compact('tmpEmail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tmp Email id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tmpEmail = $this->TmpEmails->get($id);
        if ($this->TmpEmails->delete($tmpEmail)) {
            $this->Flash->success(__('The tmp email has been deleted.'));
        } else {
            $this->Flash->error(__('The tmp email could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
