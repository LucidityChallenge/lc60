<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SubtaskShares Controller
 *
 * @property \App\Model\Table\SubtaskSharesTable $SubtaskShares
 *
 * @method \App\Model\Entity\SubtaskShare[] paginate($object = null, array $settings = [])
 */
class SubtaskSharesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subtasks', 'Participants']
        ];
        $subtaskShares = $this->paginate($this->SubtaskShares);

        $this->set(compact('subtaskShares'));
        $this->set('_serialize', ['subtaskShares']);
    }

    /**
     * View method
     *
     * @param string|null $id Subtask Share id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subtaskShare = $this->SubtaskShares->get($id, [
            'contain' => ['Subtasks', 'Participants']
        ]);

        $this->set('subtaskShare', $subtaskShare);
        $this->set('_serialize', ['subtaskShare']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subtaskShare = $this->SubtaskShares->newEntity();
        if ($this->request->is('post')) {
            $subtaskShare = $this->SubtaskShares->patchEntity($subtaskShare, $this->request->getData());
            if ($this->SubtaskShares->save($subtaskShare)) {
                $this->Flash->success(__('The subtask share has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask share could not be saved. Please, try again.'));
        }
        $subtasks = $this->SubtaskShares->Subtasks->find('list', ['limit' => 200]);
        $participants = $this->SubtaskShares->Participants->find('list', ['limit' => 200]);
        $this->set(compact('subtaskShare', 'subtasks', 'participants'));
        $this->set('_serialize', ['subtaskShare']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subtask Share id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subtaskShare = $this->SubtaskShares->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subtaskShare = $this->SubtaskShares->patchEntity($subtaskShare, $this->request->getData());
            if ($this->SubtaskShares->save($subtaskShare)) {
                $this->Flash->success(__('The subtask share has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask share could not be saved. Please, try again.'));
        }
        $subtasks = $this->SubtaskShares->Subtasks->find('list', ['limit' => 200]);
        $participants = $this->SubtaskShares->Participants->find('list', ['limit' => 200]);
        $this->set(compact('subtaskShare', 'subtasks', 'participants'));
        $this->set('_serialize', ['subtaskShare']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subtask Share id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subtaskShare = $this->SubtaskShares->get($id);
        if ($this->SubtaskShares->delete($subtaskShare)) {
            $this->Flash->success(__('The subtask share has been deleted.'));
        } else {
            $this->Flash->error(__('The subtask share could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
