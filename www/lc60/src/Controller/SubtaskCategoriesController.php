<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * SubtaskCategories Controller
 *
 * @property \App\Model\Table\SubtaskCategoriesTable $SubtaskCategories
 *
 * @method \App\Model\Entity\SubtaskCategory[] paginate($object = null, array $settings = [])
 */
class SubtaskCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $subtaskCategories = $this->paginate($this->SubtaskCategories);

        $this->set(compact('subtaskCategories'));
        $this->set('_serialize', ['subtaskCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Subtask Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subtaskCategory = $this->SubtaskCategories->get($id, [
            'contain' => ['SubtaskShareHolderComplete', 'SuccessfulSubtaskTaskWithCalculatedScoringParticipant']
        ]);

        $this->set('subtaskCategory', $subtaskCategory);
        $this->set('_serialize', ['subtaskCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subtaskCategory = $this->SubtaskCategories->newEntity();
        if ($this->request->is('post')) {
            $subtaskCategory = $this->SubtaskCategories->patchEntity($subtaskCategory, $this->request->getData());
            if ($this->SubtaskCategories->save($subtaskCategory)) {
                $this->Flash->success(__('The subtask category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask category could not be saved. Please, try again.'));
        }
        $this->set(compact('subtaskCategory'));
        $this->set('_serialize', ['subtaskCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subtask Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subtaskCategory = $this->SubtaskCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subtaskCategory = $this->SubtaskCategories->patchEntity($subtaskCategory, $this->request->getData());
            if ($this->SubtaskCategories->save($subtaskCategory)) {
                $this->Flash->success(__('The subtask category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subtask category could not be saved. Please, try again.'));
        }
        $this->set(compact('subtaskCategory'));
        $this->set('_serialize', ['subtaskCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subtask Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subtaskCategory = $this->SubtaskCategories->get($id);
        if ($this->SubtaskCategories->delete($subtaskCategory)) {
            $this->Flash->success(__('The subtask category has been deleted.'));
        } else {
            $this->Flash->error(__('The subtask category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['view']);
    }
}
