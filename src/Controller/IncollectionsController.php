<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Incollections Controller
 *
 *
 * @method \App\Model\Entity\Incollection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IncollectionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $incollections = $this->paginate($this->Incollections);

        $this->set(compact('incollections'));
    }

    /**
     * View method
     *
     * @param string|null $id Incollection id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $incollection = $this->Incollections->get($id, [
            'contain' => []
        ]);

        $this->set('incollection', $incollection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $incollection = $this->Incollections->newEntity();
        if ($this->request->is('post')) {
            $incollection = $this->Incollections->patchEntity($incollection, $this->request->getData());
            if ($this->Incollections->save($incollection)) {
                $this->Flash->success(__('The incollection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The incollection could not be saved. Please, try again.'));
        }
        $this->set(compact('incollection'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Incollection id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $incollection = $this->Incollections->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $incollection = $this->Incollections->patchEntity($incollection, $this->request->getData());
            if ($this->Incollections->save($incollection)) {
                $this->Flash->success(__('The incollection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The incollection could not be saved. Please, try again.'));
        }
        $this->set(compact('incollection'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Incollection id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $incollection = $this->Incollections->get($id);
        if ($this->Incollections->delete($incollection)) {
            $this->Flash->success(__('The incollection has been deleted.'));
        } else {
            $this->Flash->error(__('The incollection could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
