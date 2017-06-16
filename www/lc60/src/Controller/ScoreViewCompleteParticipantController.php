<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ScoreViewCompleteParticipant Controller
 *
 * @property \App\Model\Table\ScoreViewCompleteParticipantTable $ScoreViewCompleteParticipant
 *
 * @method \App\Model\Entity\ScoreViewCompleteParticipant[] paginate($object = null, array $settings = [])
 */
class ScoreViewCompleteParticipantController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Participants']
        ];
        $scoreViewCompleteParticipant = $this->paginate($this->ScoreViewCompleteParticipant);

        $this->set(compact('scoreViewCompleteParticipant'));
        $this->set('_serialize', ['scoreViewCompleteParticipant']);
    }

    /**
     * View method
     *
     * @param string|null $id Score View Complete Participant id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $scoreViewCompleteParticipant = $this->ScoreViewCompleteParticipant->get($id, [
            'contain' => ['Participants']
        ]);

        $this->set('scoreViewCompleteParticipant', $scoreViewCompleteParticipant);
        $this->set('_serialize', ['scoreViewCompleteParticipant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $scoreViewCompleteParticipant = $this->ScoreViewCompleteParticipant->newEntity();
        if ($this->request->is('post')) {
            $scoreViewCompleteParticipant = $this->ScoreViewCompleteParticipant->patchEntity($scoreViewCompleteParticipant, $this->request->getData());
            if ($this->ScoreViewCompleteParticipant->save($scoreViewCompleteParticipant)) {
                $this->Flash->success(__('The score view complete participant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The score view complete participant could not be saved. Please, try again.'));
        }
        $participants = $this->ScoreViewCompleteParticipant->Participants->find('list', ['limit' => 200]);
        $this->set(compact('scoreViewCompleteParticipant', 'participants'));
        $this->set('_serialize', ['scoreViewCompleteParticipant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Score View Complete Participant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $scoreViewCompleteParticipant = $this->ScoreViewCompleteParticipant->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $scoreViewCompleteParticipant = $this->ScoreViewCompleteParticipant->patchEntity($scoreViewCompleteParticipant, $this->request->getData());
            if ($this->ScoreViewCompleteParticipant->save($scoreViewCompleteParticipant)) {
                $this->Flash->success(__('The score view complete participant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The score view complete participant could not be saved. Please, try again.'));
        }
        $participants = $this->ScoreViewCompleteParticipant->Participants->find('list', ['limit' => 200]);
        $this->set(compact('scoreViewCompleteParticipant', 'participants'));
        $this->set('_serialize', ['scoreViewCompleteParticipant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Score View Complete Participant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $scoreViewCompleteParticipant = $this->ScoreViewCompleteParticipant->get($id);
        if ($this->ScoreViewCompleteParticipant->delete($scoreViewCompleteParticipant)) {
            $this->Flash->success(__('The score view complete participant has been deleted.'));
        } else {
            $this->Flash->error(__('The score view complete participant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
