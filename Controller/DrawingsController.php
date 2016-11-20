<?php
App::uses('AppController', 'Controller');
/**
 * Drawings Controller
 *
 * @property Drawing $Drawing
 * @property PaginatorComponent $Paginator
 */
class DrawingsController extends AppController {

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
		$this->Drawing->recursive = 0;
		$this->set('drawings', $this->Drawing->find('all'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Drawing->exists($id)) {
			throw new NotFoundException(__('Invalid drawing'));
		}
		$options = array('conditions' => array('Drawing.' . $this->Drawing->primaryKey => $id));
		$this->set('drawing', $this->Drawing->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Drawing->create();
			if ($this->Drawing->save($this->request->data)) {
				$this->Session->setFlash(__('The drawing has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The drawing could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$products = $this->Drawing->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Drawing->exists($id)) {
			throw new NotFoundException(__('Invalid drawing'));
		}
		if ($this->request->is(array('post', 'put'))) {
		mysql_connect("localhost", "root", "") or die (mysql_error());
		mysql_select_db("qasystems") or die (mysql_error());		
		mysql_query("insert into drawinghis(drawing_id, name, part_no, part_name, receive_date, rev_mark, rev_no, rev_record, rev_date, priority, status, product_id, location, bambi, page)
							select id, name, part_no, part_name, receive_date, rev_mark, rev_no, rev_record, rev_date, priority, status, product_id, location, bambi, page
						FROM drawings WHERE id = '$id'");

			if ($this->Drawing->save($this->request->data)) {
				$this->Session->setFlash(__('The drawing has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The drawing could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Drawing.' . $this->Drawing->primaryKey => $id));
			$this->request->data = $this->Drawing->find('first', $options);
		}
		$products = $this->Drawing->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Drawing->id = $id;
		if (!$this->Drawing->exists()) {
			throw new NotFoundException(__('Invalid drawing'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Drawing->delete()) {
			$this->Session->setFlash(__('The drawing has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The drawing could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
