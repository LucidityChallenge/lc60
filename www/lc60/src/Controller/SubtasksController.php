<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Subtasks Controller
 *
 * @property \App\Model\Table\SubtasksTable $Subtasks
 *
 * @method \App\Model\Entity\Subtask[] paginate($object = null, array $settings = [])
 */
class SubtasksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tasks', /*'Subtasks',*/ 'SubtaskCategories', 'Participants', 'SubtaskTypes']
        ];
        $subtasks = $this->paginate($this->Subtasks);

        $this->set(compact('subtasks'));
        $this->set('_serialize', ['subtasks']);
    }

    /**
     * View method
     *
     * @param string|null $id Subtask id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subtask = $this->Subtasks->get($id, [
            'contain' => ['Tasks', /*'Subtasks',*/ 'SubtaskCategories', 'Participants', 'SubtaskTypes',
            //'CalculatedSubtaskDemandExternal', 'CalculatedSubtaskDemandFinalValue', 'CalculatedSubtaskDemandInner', 'CalculatedSubtaskDemandUnion', 'DemandView', 'DemandViewSuccess', 'DemandViewSuccessContemporaryDemand', 'DemandViewSuccessContemporaryDemandPositive', 'DemandViewUncompleteContemporaryDemand', 'DemandViewUncompleteContemporaryDemandPositive', 'RecentSuccesses', 'SubtaskDreamSuper', 'SubtaskDreams', 'SubtaskShareHolder', 'SubtaskShareHolderComplete', 'SubtaskShareHolderCount', 'SubtaskShares', 'SubtaskSubtaskCategory', 'SuccessfulSubtask', 'SuccessfulSubtaskDividendScores', 'SuccessfulSubtaskTask', 'SuccessfulSubtaskTaskWithCalculatedScoring'
            ]
        ]);

        $this->set('subtask', $subtask);
        $this->set('_serialize', ['subtask']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subtask = $this->Subtasks->newEntity();
        if ($this->request->is('post')) {
            $subtask = $this->Subtasks->patchEntity($subtask, $this->request->getData());
            if ($this->Subtasks->save($subtask)) {
                $this->Flash->success(__('The subtask has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask could not be saved. Please, try again.'));
        }
        $tasks = $this->Subtasks->Tasks->find('list', ['limit' => 200]);
        $subtasks = $this->Subtasks->Subtasks->find('list', ['limit' => 200]);
        $subtaskCategories = $this->Subtasks->SubtaskCategories->find('list', ['limit' => 200]);
        $participants = $this->Subtasks->Participants->find('list', ['limit' => 200]);
        $subtaskTypes = $this->Subtasks->SubtaskTypes->find('list', ['limit' => 200]);
        $this->set(compact('subtask', 'tasks', 'subtasks', 'subtaskCategories', 'participants', 'subtaskTypes'));
        $this->set('_serialize', ['subtask']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subtask id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subtask = $this->Subtasks->get($id, [
            'contain' => []
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {        
            $subtask = $this->Subtasks->patchEntity($subtask, $this->request->getData());
            if ($this->Subtasks->save($subtask)) {
                $this->Flash->success(__('The subtask has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask could not be saved. Please, try again.'));
        }
        $tasks = $this->Subtasks->Tasks->find('list', ['limit' => 200]);
        $subtasks = $this->Subtasks->Subtasks->find('list', ['limit' => 200]);
        $subtaskCategories = $this->Subtasks->SubtaskCategories->find('list', ['limit' => 200]);
        $participants = $this->Subtasks->Participants->find('list', ['limit' => 200]);
        $subtaskTypes = $this->Subtasks->SubtaskTypes->find('list', ['limit' => 200]);
        $this->set(compact('subtask', 'tasks', 'subtasks', 'subtaskCategories', 'participants', 'subtaskTypes'));
        $this->set('_serialize', ['subtask']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subtask id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subtask = $this->Subtasks->get($id);
        if ($this->Subtasks->delete($subtask)) {
            $this->Flash->success(__('The subtask has been deleted.'));
        } else {
            $this->Flash->error(__('The subtask could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
