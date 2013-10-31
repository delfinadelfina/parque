<?php
App::uses('AppController', 'Controller');
/**
 * TypeVehicles Controller
 *
 * @property TypeVehicle $TypeVehicle
 */
class TypeVehiclesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TypeVehicle->recursive = 0;
		$this->set('typeVehicles', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TypeVehicle->id = $id;
		if (!$this->TypeVehicle->exists()) {
			throw new NotFoundException(__('Invalid type vehicle'));
		}
		$this->set('typeVehicle', $this->TypeVehicle->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TypeVehicle->create();
			if ($this->TypeVehicle->save($this->request->data)) {
				$this->Session->setFlash(__('The type vehicle has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type vehicle could not be saved. Please, try again.'));
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
		$this->TypeVehicle->id = $id;
		if (!$this->TypeVehicle->exists()) {
			throw new NotFoundException(__('Invalid type vehicle'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TypeVehicle->save($this->request->data)) {
				$this->Session->setFlash(__('The type vehicle has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type vehicle could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TypeVehicle->read(null, $id);
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
		$this->TypeVehicle->id = $id;
		if (!$this->TypeVehicle->exists()) {
			throw new NotFoundException(__('Invalid type vehicle'));
		}
		if ($this->TypeVehicle->delete()) {
			$this->Session->setFlash(__('Type vehicle deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Type vehicle was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
