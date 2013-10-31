<?php
App::uses('AppController', 'Controller');
/**
 * Duties Controller
 *
 * @property Duty $Duty
 */
class DutiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Duty->recursive = 0;
		$this->set('duties', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Duty->id = $id;
		if (!$this->Duty->exists()) {
			throw new NotFoundException(__('Invalid duty'));
		}
		$this->set('duty', $this->Duty->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Duty->create();
			if ($this->Duty->save($this->request->data)) {
				$this->Session->setFlash(__('The duty has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The duty could not be saved. Please, try again.'));
			}
		}
		$typeVehicles = $this->Duty->TypeVehicle->find('list');
		$payments = $this->Duty->Payment->find('list');
		$this->set(compact('typeVehicles', 'payments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Duty->id = $id;
		if (!$this->Duty->exists()) {
			throw new NotFoundException(__('Invalid duty'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Duty->save($this->request->data)) {
				$this->Session->setFlash(__('The duty has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The duty could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Duty->read(null, $id);
		}
		$typeVehicles = $this->Duty->TypeVehicle->find('list');
		$payments = $this->Duty->Payment->find('list');
		$this->set(compact('typeVehicles', 'payments'));
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
		$this->Duty->id = $id;
		if (!$this->Duty->exists()) {
			throw new NotFoundException(__('Invalid duty'));
		}
		if ($this->Duty->delete()) {
			$this->Session->setFlash(__('Duty deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Duty was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
