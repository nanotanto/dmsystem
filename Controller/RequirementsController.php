<?php
App::uses('AppController', 'Controller');
/**
 * Requirements Controller
 *
 * @property Requirement $Requirement
 * @property PaginatorComponent $Paginator
 */
class RequirementsController extends AppController {

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
		$this->Requirement->recursive = 0;
		$this->set('requirements', $this->Paginator->paginate());
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Requirement->exists($id)) {
			throw new NotFoundException(__('Invalid requirement'));
		}
		$options = array('conditions' => array('Requirement.' . $this->Requirement->primaryKey => $id));
		$this->set('requirement', $this->Requirement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Requirement->create();
			if ($this->Requirement->save($this->request->data)) {
				$this->Session->setFlash(__('The requirement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requirement could not be saved. Please, try again.'));
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
		if (!$this->Requirement->exists($id)) {
			throw new NotFoundException(__('Invalid requirement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Requirement->save($this->request->data)) {
				$this->Session->setFlash(__('The requirement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requirement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Requirement.' . $this->Requirement->primaryKey => $id));
			$this->request->data = $this->Requirement->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Requirement->id = $id;
		if (!$this->Requirement->exists()) {
			throw new NotFoundException(__('Invalid requirement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Requirement->delete()) {
			$this->Session->setFlash(__('The requirement has been deleted.'));
		} else {
			$this->Session->setFlash(__('The requirement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function iso() {
		
	}
	
}
