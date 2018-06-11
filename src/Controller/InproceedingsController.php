<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inproceedings Controller
 *
 *
 * @method \App\Model\Entity\Inproceeding[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InproceedingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $inproceedings = $this->paginate($this->Inproceedings);

        $this->set(compact('inproceedings'));
    }

    /**
     * View method
     *
     * @param string|null $id Inproceeding id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inproceeding = $this->Inproceedings->get($id, [
            'contain' => []
        ]);

        $this->set('inproceeding', $inproceeding);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inproceeding = $this->Inproceedings->newEntity();
        if ($this->request->is('post')) {
            $inproceeding = $this->Inproceedings->patchEntity($inproceeding, $this->request->getData());
            if ($this->Inproceedings->save($inproceeding)) {
                $this->Flash->success(__('The inproceeding has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inproceeding could not be saved. Please, try again.'));
        }
        $this->set(compact('inproceeding'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inproceeding id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inproceeding = $this->Inproceedings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inproceeding = $this->Inproceedings->patchEntity($inproceeding, $this->request->getData());
            if ($this->Inproceedings->save($inproceeding)) {
                $this->Flash->success(__('The inproceeding has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inproceeding could not be saved. Please, try again.'));
        }
        $this->set(compact('inproceeding'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inproceeding id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inproceeding = $this->Inproceedings->get($id);
        if ($this->Inproceedings->delete($inproceeding)) {
            $this->Flash->success(__('The inproceeding has been deleted.'));
        } else {
            $this->Flash->error(__('The inproceeding could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
