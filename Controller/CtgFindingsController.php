<?php
App::uses('AppController', 'Controller');
/**
 * CtgFindings Controller
 *
 * @property CtgFinding $CtgFinding
 * @property PaginatorComponent $Paginator
 */
class CtgFindingsController extends AppController {

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
		$this->CtgFinding->recursive = 0;
		$this->set('ctgFindings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CtgFinding->exists($id)) {
			throw new NotFoundException(__('Invalid ctg finding'));
		}
		$options = array('conditions' => array('CtgFinding.' . $this->CtgFinding->primaryKey => $id));
		$this->set('ctgFinding', $this->CtgFinding->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CtgFinding->create();
			if ($this->CtgFinding->save($this->request->data)) {
				$this->Session->setFlash(__('The ctg finding has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ctg finding could not be saved. Please, try again.'));
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
		if (!$this->CtgFinding->exists($id)) {
			throw new NotFoundException(__('Invalid ctg finding'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CtgFinding->save($this->request->data)) {
				$this->Session->setFlash(__('The ctg finding has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ctg finding could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CtgFinding.' . $this->CtgFinding->primaryKey => $id));
			$this->request->data = $this->CtgFinding->find('first', $options);
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
		$this->CtgFinding->id = $id;
		if (!$this->CtgFinding->exists()) {
			throw new NotFoundException(__('Invalid ctg finding'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CtgFinding->delete()) {
			$this->Session->setFlash(__('The ctg finding has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ctg finding could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
