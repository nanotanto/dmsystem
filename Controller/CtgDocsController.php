<?php
App::uses('AppController', 'Controller');
/**
 * CtgDocs Controller
 *
 * @property CtgDoc $CtgDoc
 * @property PaginatorComponent $Paginator
 */
class CtgDocsController extends AppController {

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
		$this->CtgDoc->recursive = 0;
		$this->set('ctgDocs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CtgDoc->exists($id)) {
			throw new NotFoundException(__('Invalid ctg doc'));
		}
		$options = array('conditions' => array('CtgDoc.' . $this->CtgDoc->primaryKey => $id));
		$this->set('ctgDoc', $this->CtgDoc->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CtgDoc->create();
			if ($this->CtgDoc->save($this->request->data)) {
				$this->Session->setFlash(__('The ctg doc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ctg doc could not be saved. Please, try again.'));
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
		if (!$this->CtgDoc->exists($id)) {
			throw new NotFoundException(__('Invalid ctg doc'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CtgDoc->save($this->request->data)) {
				$this->Session->setFlash(__('The ctg doc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ctg doc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CtgDoc.' . $this->CtgDoc->primaryKey => $id));
			$this->request->data = $this->CtgDoc->find('first', $options);
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
		$this->CtgDoc->id = $id;
		if (!$this->CtgDoc->exists()) {
			throw new NotFoundException(__('Invalid ctg doc'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CtgDoc->delete()) {
			$this->Session->setFlash(__('The ctg doc has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ctg doc could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
