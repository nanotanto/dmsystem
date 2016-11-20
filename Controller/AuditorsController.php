<?php
App::uses('AppController', 'Controller');
/**
 * Auditors Controller
 *
 * @property Auditor $Auditor
 * @property PaginatorComponent $Paginator
 */
class AuditorsController extends AppController {

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
		$this->Auditor->recursive = 0;
		$this->set('auditors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Auditor->exists($id)) {
			throw new NotFoundException(__('Invalid auditor'));
		}
		$options = array('conditions' => array('Auditor.' . $this->Auditor->primaryKey => $id));
		$this->set('auditor', $this->Auditor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Auditor->create();
			if ($this->Auditor->save($this->request->data)) {
				$this->Session->setFlash(__('The auditor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The auditor could not be saved. Please, try again.'));
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
		if (!$this->Auditor->exists($id)) {
			throw new NotFoundException(__('Invalid auditor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Auditor->save($this->request->data)) {
				$this->Session->setFlash(__('The auditor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The auditor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Auditor.' . $this->Auditor->primaryKey => $id));
			$this->request->data = $this->Auditor->find('first', $options);
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
		$this->Auditor->id = $id;
		if (!$this->Auditor->exists()) {
			throw new NotFoundException(__('Invalid auditor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Auditor->delete()) {
			$this->Session->setFlash(__('The auditor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The auditor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
