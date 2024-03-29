<?php
App::uses('AppController', 'Controller');
/**
 * Types Controller
 *
 * @property Type $Type
 */
class TypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Type->recursive = 0;
		$this->set('types', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Type->id = $id;
		if (!$this->Type->exists()) {
			throw new NotFoundException(__('Invalid type'));
		}
		$this->set('type', $this->Type->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Type->create();
			if ($this->Type->save($this->request->data)) {
				$this->Session->setFlash(__('The type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Type->id = $id;
		if (!$this->Type->exists()) {
			throw new NotFoundException(__('Invalid type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Type->save($this->request->data)) {
				$this->Session->setFlash(__('The type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Type->read(null, $id);
		}
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
		$this->Type->id = $id;
		if (!$this->Type->exists()) {
			throw new NotFoundException(__('Invalid type'));
		}
		if ($this->Type->delete()) {
			$this->Session->setFlash(__('Type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
