<?php
App::uses('AppController', 'Controller');
/**
 * Cells Controller
 *
 * @property Cell $Cell
 */
class CellsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cell->recursive = 0;
		$this->set('cells', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cell->id = $id;
		if (!$this->Cell->exists()) {
			throw new NotFoundException(__('Invalid cell'));
		}
		$this->set('cell', $this->Cell->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cell->create();
			if ($this->Cell->save($this->request->data)) {
				$this->Session->setFlash(__('The cell has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cell could not be saved. Please, try again.'));
			}
		}
		$vehicles = $this->Cell->Vehicle->find('list');
		$reserves = $this->Cell->Reserve->find('list');
		$this->set(compact('vehicles', 'reserves'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Cell->id = $id;
		if (!$this->Cell->exists()) {
			throw new NotFoundException(__('Invalid cell'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cell->save($this->request->data)) {
				$this->Session->setFlash(__('The cell has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cell could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cell->read(null, $id);
		}
		$vehicles = $this->Cell->Vehicle->find('list');
		$reserves = $this->Cell->Reserve->find('list');
		$this->set(compact('vehicles', 'reserves'));
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
		$this->Cell->id = $id;
		if (!$this->Cell->exists()) {
			throw new NotFoundException(__('Invalid cell'));
		}
		if ($this->Cell->delete()) {
			$this->Session->setFlash(__('Cell deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cell was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
