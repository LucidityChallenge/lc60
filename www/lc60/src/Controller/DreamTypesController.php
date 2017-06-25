<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DreamTypes Controller
 *
 * @property \App\Model\Table\DreamTypesTable $DreamTypes
 *
 * @method \App\Model\Entity\DreamType[] paginate($object = null, array $settings = [])
 */
class DreamTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $dreamTypes = $this->paginate($this->DreamTypes);

        $this->set(compact('dreamTypes'));
        $this->set('_serialize', ['dreamTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Dream Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dreamType = $this->DreamTypes->get($id, [
            'contain' => ['DreamWithTypeParticipant', 'SuccessfulSubtaskTaskWithCalculatedScoringParticipant', 'SuccessfulSubtask', 'SuccessfulSubtaskDividendScores', 'SuccessfulSubtaskTask', 'SuccessfulSubtaskTaskWithCalculatedScoring']
        ]);

        $dreamType->subtask_base_value=  $this->DreamTypes->Subtasks->get($id)->subtask_base_value;
        $this->set('dreamType', $dreamType);
        $this->set('_serialize', ['dreamType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dreamType = $this->DreamTypes->newEntity();
        if ($this->request->is('post')) {
            $dreamType = $this->DreamTypes->patchEntity($dreamType, $this->request->getData());
            if ($this->DreamTypes->save($dreamType)) {
                $this->Flash->success(__('The dream type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dream type could not be saved. Please, try again.'));
        }
        $this->set(compact('dreamType'));
        $this->set('_serialize', ['dreamType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dream Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dreamType = $this->DreamTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dreamType = $this->DreamTypes->patchEntity($dreamType, $this->request->getData());
            if ($this->DreamTypes->save($dreamType)) {
                $this->Flash->success(__('The dream type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dream type could not be saved. Please, try again.'));
        }
        $this->set(compact('dreamType'));
        $this->set('_serialize', ['dreamType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dream Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dreamType = $this->DreamTypes->get($id);
        if ($this->DreamTypes->delete($dreamType)) {
            $this->Flash->success(__('The dream type has been deleted.'));
        } else {
            $this->Flash->error(__('The dream type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
