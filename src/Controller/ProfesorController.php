<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Profesor Controller
 *
 * @property \App\Model\Table\ProfesorTable $Profesor
 */
class ProfesorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $profesor = $this->paginate($this->Profesor);

        $this->set(compact('profesor'));
        $this->set('_serialize', ['profesor']);
    }

    /**
     * View method
     *
     * @param string|null $id Profesor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profesor = $this->Profesor->get($id, [
            'contain' => ['Asignatura']
        ]);

        $this->set('profesor', $profesor);
        $this->set('_serialize', ['profesor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profesor = $this->Profesor->newEntity();
        if ($this->request->is('post')) {
            $profesor = $this->Profesor->patchEntity($profesor, $this->request->data);
            if ($this->Profesor->save($profesor)) {
                $this->Flash->success(__('The profesor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The profesor could not be saved. Please, try again.'));
            }
        }
        $asignatura = $this->Profesor->Asignatura->find('list', ['limit' => 200]);
        $this->set(compact('profesor', 'asignatura'));
        $this->set('_serialize', ['profesor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Profesor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profesor = $this->Profesor->get($id, [
            'contain' => ['Asignatura']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profesor = $this->Profesor->patchEntity($profesor, $this->request->data);
            if ($this->Profesor->save($profesor)) {
                $this->Flash->success(__('The profesor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The profesor could not be saved. Please, try again.'));
            }
        }
        $asignatura = $this->Profesor->Asignatura->find('list', ['limit' => 200]);
        $this->set(compact('profesor', 'asignatura'));
        $this->set('_serialize', ['profesor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Profesor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profesor = $this->Profesor->get($id);
        if ($this->Profesor->delete($profesor)) {
            $this->Flash->success(__('The profesor has been deleted.'));
        } else {
            $this->Flash->error(__('The profesor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
