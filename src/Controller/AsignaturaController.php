<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Asignatura Controller
 *
 * @property \App\Model\Table\AsignaturaTable $Asignatura
 */
class AsignaturaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $asignatura = $this->paginate($this->Asignatura);

        $this->set(compact('asignatura'));
        $this->set('_serialize', ['asignatura']);
    }

    /**
     * View method
     *
     * @param string|null $id Asignatura id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asignatura = $this->Asignatura->get($id, [
            'contain' => ['Profesor']
        ]);

        $this->set('asignatura', $asignatura);
        $this->set('_serialize', ['asignatura']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $asignatura = $this->Asignatura->newEntity();
        if ($this->request->is('post')) {
            $asignatura = $this->Asignatura->patchEntity($asignatura, $this->request->data);
            if ($this->Asignatura->save($asignatura)) {
                $this->Flash->success(__('The asignatura has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asignatura could not be saved. Please, try again.'));
            }
        }
        $profesor = $this->Asignatura->Profesor->find('list', ['limit' => 200]);
        $this->set(compact('asignatura', 'profesor'));
        $this->set('_serialize', ['asignatura']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Asignatura id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asignatura = $this->Asignatura->get($id, [
            'contain' => ['Profesor']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $asignatura = $this->Asignatura->patchEntity($asignatura, $this->request->data);
            if ($this->Asignatura->save($asignatura)) {
                $this->Flash->success(__('The asignatura has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The asignatura could not be saved. Please, try again.'));
            }
        }
        $profesor = $this->Asignatura->Profesor->find('list', ['limit' => 200]);
        $this->set(compact('asignatura', 'profesor'));
        $this->set('_serialize', ['asignatura']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Asignatura id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asignatura = $this->Asignatura->get($id);
        if ($this->Asignatura->delete($asignatura)) {
            $this->Flash->success(__('The asignatura has been deleted.'));
        } else {
            $this->Flash->error(__('The asignatura could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
