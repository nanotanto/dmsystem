<?php
App::uses('AppController', 'Controller');
/**
 * Klausuls Controller
 *
 * @property Klausul $Klausul
 * @property PaginatorComponent $Paginator
 */
class KlausulsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Klausul->recursive = 0;
		$this->set('klausuls', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Klausul->exists($id)) {
			throw new NotFoundException(__('Invalid klausul'));
		}
		$options = array('conditions' => array('Klausul.' . $this->Klausul->primaryKey => $id));
		$this->set('klausul', $this->Klausul->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Klausul->create();
			if ($this->Klausul->save($this->request->data)) {
				$this->Session->setFlash(__('The klausul has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The klausul could not be saved. Please, try again.'));
			}
		}
		$requirements = $this->Klausul->Requirement->find('list');
		$this->set(compact('requirements'));
	
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Klausul->exists($id)) {
			throw new NotFoundException(__('Invalid klausul'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Klausul->save($this->request->data)) {
				$this->Session->setFlash(__('The klausul has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The klausul could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Klausul.' . $this->Klausul->primaryKey => $id));
			$this->request->data = $this->Klausul->find('first', $options);
		}
		$requirements = $this->Klausul->Requirement->find('list');
		$this->set(compact('requirements'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Klausul->id = $id;
		if (!$this->Klausul->exists()) {
			throw new NotFoundException(__('Invalid klausul'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Klausul->delete()) {
			$this->Session->setFlash(__('The klausul has been deleted.'));
		} else {
			$this->Session->setFlash(__('The klausul could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
