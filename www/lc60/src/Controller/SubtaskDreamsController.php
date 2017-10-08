<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SubtaskDreams Controller
 *
 * @property \App\Model\Table\SubtaskDreamsTable $SubtaskDreams
 *
 * @method \App\Model\Entity\SubtaskDream[] paginate($object = null, array $settings = [])
 */
class SubtaskDreamsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subtasks', 'Dreams']
        ];
        $subtaskDreams = $this->paginate($this->SubtaskDreams);

        $this->set(compact('subtaskDreams'));
        $this->set('_serialize', ['subtaskDreams']);
    }

    /**
     * View method
     *
     * @param string|null $id Subtask Dream id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subtaskDream = $this->SubtaskDreams->get($id, [
            'contain' => ['Subtasks', 'Dreams']
        ]);

        $this->set('subtaskDream', $subtaskDream);
        $this->set('_serialize', ['subtaskDream']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($new_dream_id = null)
    {
        $subtaskDream = $this->SubtaskDreams->newEntity();

        if ($this->request->is('post')) {
            $subtaskDream = $this->SubtaskDreams->patchEntity($subtaskDream, $this->request->getData());
            if ($this->SubtaskDreams->save($subtaskDream)) {
		$subtask = $this->SubtaskDreams->Subtasks->get($subtaskDream->subtask_id);
            
                $this->Flash->success(__('Dream '.($subtaskDream->dream_id).' has been associated to Subtask "'.($subtask->subtask_name).'".'));

                return $this->redirect(['action' => 'add',$new_dream_id]);
            }
            $this->Flash->error(__('The subtask dream could not be saved. Please, try again.'));
        }
        else
        {
	  $subtaskDream->dream_id = $new_dream_id;
        }
        $subtasks = $this->SubtaskDreams->Subtasks->find('list', ['limit' => 600, 'order' => 'id asc']);
        $dreams = $this->SubtaskDreams->Dreams->find('list', ['limit' => 600, 'order' => 'id desc']);
        
        $this->set(compact('subtaskDream', 'subtasks', 'dreams'));
        $this->set('_serialize', ['subtaskDream']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subtask Dream id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subtaskDream = $this->SubtaskDreams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subtaskDream = $this->SubtaskDreams->patchEntity($subtaskDream, $this->request->getData());
            if ($this->SubtaskDreams->save($subtaskDream)) {
                $this->Flash->success(__('The subtask dream has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask dream could not be saved. Please, try again.'));
        }
        $subtasks = $this->SubtaskDreams->Subtasks->find('list', ['limit' => 600, 'order' => 'id asc']);
        $dreams = $this->SubtaskDreams->Dreams->find('list', ['limit' => 600, 'order' => 'id desc']);
        $this->set(compact('subtaskDream', 'subtasks', 'dreams'));
        $this->set('_serialize', ['subtaskDream']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subtask Dream id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subtaskDream = $this->SubtaskDreams->get($id);
        if ($this->SubtaskDreams->delete($subtaskDream)) {
            $this->Flash->success(__('The subtask dream has been deleted.'));
        } else {
            $this->Flash->error(__('The subtask dream could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
