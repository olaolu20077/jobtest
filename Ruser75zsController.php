<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ruser75zs Controller
 *
 * @property \App\Model\Table\Ruser75zsTable $Ruser75zs
 * @method \App\Model\Entity\Ruser75z[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Ruser75zsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['RchanlangOprs', 'RcontriOprs', 'RgeolocOprs'],
        ];
        $ruser75zs = $this->paginate($this->Ruser75zs);

        $this->set(compact('ruser75zs'));
    }

    /**
     * View method
     *
     * @param string|null $id Ruser75z id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ruser75z = $this->Ruser75zs->get($id, [
            'contain' => ['RchanlangOprs', 'RcontriOprs', 'RgeolocOprs', 'Rfriendinvits', 'Rfriendlizts', 'Rsharelinkzs', 'Rsharezfotos', 'Rsharezvidos', 'RbizperZendfedbakks', 'RbizperMssgs', 'RbizperMyfotos', 'RbizperPosts', 'RbizperRepots', 'RbizperVidos'],
        ]);

        $this->set(compact('ruser75z'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ruser75z = $this->Ruser75zs->newEmptyEntity();
        if ($this->request->is('post')) {
            $ruser75z = $this->Ruser75zs->patchEntity($ruser75z, $this->request->getData());
            if ($this->Ruser75zs->save($ruser75z)) {
                $this->Flash->success(__('The ruser75z has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ruser75z could not be saved. Please, try again.'));
        }
        $rchanlangOprs = $this->Ruser75zs->RchanlangOprs->find('list', ['limit' => 200])->all();
        $rcontriOprs = $this->Ruser75zs->RcontriOprs->find('list', ['limit' => 200])->all();
        $rgeolocOprs = $this->Ruser75zs->RgeolocOprs->find('list', ['limit' => 200])->all();
        $rfriendinvits = $this->Ruser75zs->Rfriendinvits->find('list', ['limit' => 200])->all();
        $rfriendlizts = $this->Ruser75zs->Rfriendlizts->find('list', ['limit' => 200])->all();
        $rsharelinkzs = $this->Ruser75zs->Rsharelinkzs->find('list', ['limit' => 200])->all();
        $rsharezfotos = $this->Ruser75zs->Rsharezfotos->find('list', ['limit' => 200])->all();
        $rsharezvidos = $this->Ruser75zs->Rsharezvidos->find('list', ['limit' => 200])->all();
        $this->set(compact('ruser75z', 'rchanlangOprs', 'rcontriOprs', 'rgeolocOprs', 'rfriendinvits', 'rfriendlizts', 'rsharelinkzs', 'rsharezfotos', 'rsharezvidos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ruser75z id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ruser75z = $this->Ruser75zs->get($id, [
            'contain' => ['Rfriendinvits', 'Rfriendlizts', 'Rsharelinkzs', 'Rsharezfotos', 'Rsharezvidos'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ruser75z = $this->Ruser75zs->patchEntity($ruser75z, $this->request->getData());
            if ($this->Ruser75zs->save($ruser75z)) {
                $this->Flash->success(__('The ruser75z has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ruser75z could not be saved. Please, try again.'));
        }
        $rchanlangOprs = $this->Ruser75zs->RchanlangOprs->find('list', ['limit' => 200])->all();
        $rcontriOprs = $this->Ruser75zs->RcontriOprs->find('list', ['limit' => 200])->all();
        $rgeolocOprs = $this->Ruser75zs->RgeolocOprs->find('list', ['limit' => 200])->all();
        $rfriendinvits = $this->Ruser75zs->Rfriendinvits->find('list', ['limit' => 200])->all();
        $rfriendlizts = $this->Ruser75zs->Rfriendlizts->find('list', ['limit' => 200])->all();
        $rsharelinkzs = $this->Ruser75zs->Rsharelinkzs->find('list', ['limit' => 200])->all();
        $rsharezfotos = $this->Ruser75zs->Rsharezfotos->find('list', ['limit' => 200])->all();
        $rsharezvidos = $this->Ruser75zs->Rsharezvidos->find('list', ['limit' => 200])->all();
        $this->set(compact('ruser75z', 'rchanlangOprs', 'rcontriOprs', 'rgeolocOprs', 'rfriendinvits', 'rfriendlizts', 'rsharelinkzs', 'rsharezfotos', 'rsharezvidos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ruser75z id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ruser75z = $this->Ruser75zs->get($id);
        if ($this->Ruser75zs->delete($ruser75z)) {
            $this->Flash->success(__('The ruser75z has been deleted.'));
        } else {
            $this->Flash->error(__('The ruser75z could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
   
 }









/**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function indexi()
    {
        $ruser75z = $this->Ruser75zs->newEmptyEntity();
        if ($this->request->is('post')) {
            $ruser75z = $this->Ruser75zs->patchEntity($ruser75z, $this->request->getData());
            if ($this->Ruser75zs->save($ruser75z)) {
                $this->Flash->success(__('The ruser75z has been saved.'));

                return $this->redirect(['action' => 'indexi']);
            }
            $this->Flash->error(__('The ruser75z could not be saved. Please, try again.'));
        }
        $rchanlangOprs = $this->Ruser75zs->RchanlangOprs->find('list', ['limit' => 200])->all();
        $rcontriOprs = $this->Ruser75zs->RcontriOprs->find('list', ['limit' => 200])->all();
        $rgeolocOprs = $this->Ruser75zs->RgeolocOprs->find('list', ['limit' => 200])->all();
        $rfriendinvits = $this->Ruser75zs->Rfriendinvits->find('list', ['limit' => 200])->all();
        $rfriendlizts = $this->Ruser75zs->Rfriendlizts->find('list', ['limit' => 200])->all();
        $rsharelinkzs = $this->Ruser75zs->Rsharelinkzs->find('list', ['limit' => 200])->all();
        $rsharezfotos = $this->Ruser75zs->Rsharezfotos->find('list', ['limit' => 200])->all();
        $rsharezvidos = $this->Ruser75zs->Rsharezvidos->find('list', ['limit' => 200])->all();
        $this->set(compact('ruser75z', 'rchanlangOprs', 'rcontriOprs', 'rgeolocOprs', 'rfriendinvits', 'rfriendlizts', 'rsharelinkzs', 'rsharezfotos', 'rsharezvidos'));
    }



/**
     * Add method homepage
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function homepage()
    {
        $ruser75z = $this->Ruser75zs->newEmptyEntity();
        if ($this->request->is('post')) {
            $ruser75z = $this->Ruser75zs->patchEntity($ruser75z, $this->request->getData());
            if ($this->Ruser75zs->save($ruser75z)) {
                $this->Flash->success(__('The ruser75z has been saved.'));

                return $this->redirect(['action' => 'homepage']);
            }
            $this->Flash->error(__('The ruser75z could not be saved. Please, try again.'));
        }
        $rchanlangOprs = $this->Ruser75zs->RchanlangOprs->find('list', ['limit' => 200])->all();
        $rcontriOprs = $this->Ruser75zs->RcontriOprs->find('list', ['limit' => 200])->all();
        $rgeolocOprs = $this->Ruser75zs->RgeolocOprs->find('list', ['limit' => 200])->all();
        $rfriendinvits = $this->Ruser75zs->Rfriendinvits->find('list', ['limit' => 200])->all();
        $rfriendlizts = $this->Ruser75zs->Rfriendlizts->find('list', ['limit' => 200])->all();
        $rsharelinkzs = $this->Ruser75zs->Rsharelinkzs->find('list', ['limit' => 200])->all();
        $rsharezfotos = $this->Ruser75zs->Rsharezfotos->find('list', ['limit' => 200])->all();
        $rsharezvidos = $this->Ruser75zs->Rsharezvidos->find('list', ['limit' => 200])->all();
        $this->set(compact('ruser75z', 'rchanlangOprs', 'rcontriOprs', 'rgeolocOprs', 'rfriendinvits', 'rfriendlizts', 'rsharelinkzs', 'rsharezfotos', 'rsharezvidos'));
    }





/**
     * Add method registeri
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function registeri()
    {
        $ruser75z = $this->Ruser75zs->newEmptyEntity();
        if ($this->request->is('post')) {
            $ruser75z = $this->Ruser75zs->patchEntity($ruser75z, $this->request->getData());
            if ($this->Ruser75zs->save($ruser75z)) {
                $this->Flash->success(__('The ruser75z has been saved.'));

                return $this->redirect(['action' => 'homepage']);
            }
            $this->Flash->error(__('The ruser75z could not be saved. Please, try again.'));
        }
        $rchanlangOprs = $this->Ruser75zs->RchanlangOprs->find('list', ['limit' => 200])->all();
        $rcontriOprs = $this->Ruser75zs->RcontriOprs->find('list', ['limit' => 200])->all();
        $rgeolocOprs = $this->Ruser75zs->RgeolocOprs->find('list', ['limit' => 200])->all();
        $rfriendinvits = $this->Ruser75zs->Rfriendinvits->find('list', ['limit' => 200])->all();
        $rfriendlizts = $this->Ruser75zs->Rfriendlizts->find('list', ['limit' => 200])->all();
        $rsharelinkzs = $this->Ruser75zs->Rsharelinkzs->find('list', ['limit' => 200])->all();
        $rsharezfotos = $this->Ruser75zs->Rsharezfotos->find('list', ['limit' => 200])->all();
        $rsharezvidos = $this->Ruser75zs->Rsharezvidos->find('list', ['limit' => 200])->all();
        $this->set(compact('ruser75z', 'rchanlangOprs', 'rcontriOprs', 'rgeolocOprs', 'rfriendinvits', 'rfriendlizts', 'rsharelinkzs', 'rsharezfotos', 'rsharezvidos'));
    }



    /**
     * Index method searchresult
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function searchresult()
    {
        $this->paginate = [
            'contain' => ['RchanlangOprs', 'RcontriOprs', 'RgeolocOprs'],
        ];
        $ruser75zs = $this->paginate($this->Ruser75zs);

        $this->set(compact('ruser75zs'));
    }

}




