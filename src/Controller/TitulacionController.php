<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Titulacion Controller
 *
 * @property \App\Model\Table\TitulacionTable $Titulacion
 */
class TitulacionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $titulacion = $this->paginate($this->Titulacion);

        $this->set(compact('titulacion'));
        $this->set('_serialize', ['titulacion']);
    }

    /**
     * View method
     *
     * @param string|null $id Titulacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $titulacion = $this->Titulacion->get($id, [
            'contain' => []
        ]);

        $this->set('titulacion', $titulacion);
        $this->set('_serialize', ['titulacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $titulacion = $this->Titulacion->newEntity();
        if ($this->request->is('post')) {
            $titulacion = $this->Titulacion->patchEntity($titulacion, $this->request->data);
            if ($this->Titulacion->save($titulacion)) {
                $this->Flash->success(__('The titulacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The titulacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('titulacion'));
        $this->set('_serialize', ['titulacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Titulacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $titulacion = $this->Titulacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $titulacion = $this->Titulacion->patchEntity($titulacion, $this->request->data);
            if ($this->Titulacion->save($titulacion)) {
                $this->Flash->success(__('The titulacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The titulacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('titulacion'));
        $this->set('_serialize', ['titulacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Titulacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $titulacion = $this->Titulacion->get($id);
        if ($this->Titulacion->delete($titulacion)) {
            $this->Flash->success(__('The titulacion has been deleted.'));
        } else {
            $this->Flash->error(__('The titulacion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
