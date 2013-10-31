<?php
App::uses('AppController', 'Controller');
/**
 * Reserves Controller
 *
 * @property Reserf $Reserf
 */
class ReservesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Reserf->recursive = 0;
		$this->set('reserves', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Reserf->id = $id;
		if (!$this->Reserf->exists()) {
			throw new NotFoundException(__('Invalid reserf'));
		}
		$this->set('reserf', $this->Reserf->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reserf->create();
			if ($this->Reserf->save($this->request->data)) {
				$this->Session->setFlash(__('The reserf has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reserf could not be saved. Please, try again.'));
			}
		}
		$clients = $this->Reserf->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Reserf->id = $id;
		if (!$this->Reserf->exists()) {
			throw new NotFoundException(__('Invalid reserf'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Reserf->save($this->request->data)) {
				$this->Session->setFlash(__('The reserf has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reserf could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Reserf->read(null, $id);
		}
		$clients = $this->Reserf->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Reserf->id = $id;
		if (!$this->Reserf->exists()) {
			throw new NotFoundException(__('Invalid reserf'));
		}
		if ($this->Reserf->delete()) {
			$this->Session->setFlash(__('Reserf deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Reserf was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
