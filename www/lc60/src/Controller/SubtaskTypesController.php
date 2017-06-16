<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SubtaskTypes Controller
 *
 * @property \App\Model\Table\SubtaskTypesTable $SubtaskTypes
 *
 * @method \App\Model\Entity\SubtaskType[] paginate($object = null, array $settings = [])
 */
class SubtaskTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $subtaskTypes = $this->paginate($this->SubtaskTypes);

        $this->set(compact('subtaskTypes'));
        $this->set('_serialize', ['subtaskTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Subtask Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subtaskType = $this->SubtaskTypes->get($id, [
            'contain' => ['Subtasks']
        ]);

        $this->set('subtaskType', $subtaskType);
        $this->set('_serialize', ['subtaskType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subtaskType = $this->SubtaskTypes->newEntity();
        if ($this->request->is('post')) {
            $subtaskType = $this->SubtaskTypes->patchEntity($subtaskType, $this->request->getData());
            if ($this->SubtaskTypes->save($subtaskType)) {
                $this->Flash->success(__('The subtask type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask type could not be saved. Please, try again.'));
        }
        $this->set(compact('subtaskType'));
        $this->set('_serialize', ['subtaskType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subtask Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subtaskType = $this->SubtaskTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subtaskType = $this->SubtaskTypes->patchEntity($subtaskType, $this->request->getData());
            if ($this->SubtaskTypes->save($subtaskType)) {
                $this->Flash->success(__('The subtask type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask type could not be saved. Please, try again.'));
        }
        $this->set(compact('subtaskType'));
        $this->set('_serialize', ['subtaskType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subtask Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subtaskType = $this->SubtaskTypes->get($id);
        if ($this->SubtaskTypes->delete($subtaskType)) {
            $this->Flash->success(__('The subtask type has been deleted.'));
        } else {
            $this->Flash->error(__('The subtask type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
