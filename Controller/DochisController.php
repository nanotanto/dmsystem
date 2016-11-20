<?php
App::uses('AppController', 'Controller');
/**
 * Dochis Controller
 *
 * @property Dochi $Dochi
 * @property PaginatorComponent $Paginator
 */
class DochisController extends AppController {

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
		$this->Dochi->recursive = 0;
		$this->set('dochis', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dochi->exists($id)) {
			throw new NotFoundException(__('Invalid dochi'));
		}
		$options = array('conditions' => array('Dochi.' . $this->Dochi->primaryKey => $id));
		$this->set('dochi', $this->Dochi->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dochi->create();
			if ($this->Dochi->save($this->request->data)) {
				$this->Session->setFlash(__('The dochi has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dochi could not be saved. Please, try again.'));
			}
		}
		$docs = $this->Dochi->Doc->find('list');
		$departments = $this->Dochi->Department->find('list');
		$sections = $this->Dochi->Section->find('list');
		$categories = $this->Dochi->Category->find('list');
		$this->set(compact('docs', 'departments', 'sections', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dochi->exists($id)) {
			throw new NotFoundException(__('Invalid dochi'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dochi->save($this->request->data)) {
				$this->Session->setFlash(__('The dochi has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dochi could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dochi.' . $this->Dochi->primaryKey => $id));
			$this->request->data = $this->Dochi->find('first', $options);
		}
		$docs = $this->Dochi->Doc->find('list');
		$departments = $this->Dochi->Department->find('list');
		$sections = $this->Dochi->Section->find('list');
		$categories = $this->Dochi->Category->find('list');
		$this->set(compact('docs', 'departments', 'sections', 'categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dochi->id = $id;
		if (!$this->Dochi->exists()) {
			throw new NotFoundException(__('Invalid dochi'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dochi->delete()) {
			$this->Session->setFlash(__('The dochi has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dochi could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function file($id = null) {
	
		$this->viewClass = 'Media';
		$ext = substr(strrchr($id, '.' ),1);
			if($ext=="gif" || $ext=="jpeg" || $ext=="jpg" || $ext=="png" || $ext=="tif" || $ext=="GIF" || $ext=="JPEG" || $ext=="JPG" || $ext=="PNG" || $ext=="TIF"){
				$params = array(
				'id' => $id,
				'name' => 'file',
				'mimeType' => 'image/jpeg',
				'path' => 'E:/ISO9001/Internal/'
				);
			}
			if ($ext=="pdf" || $ext=="PDF"){
				$params = array(
				'id' => $id,
				'name' => 'file',
				'extension' => 'pdf',
				'mimeType' => 'application/pdf',
				'path' => 'E:/ISO9001/Internal/'
				);
			}
			if ($ext=="docx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'docx',
					'mimeType' => array(
					'docx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'E:/ISO9001/Internal/'
					);
			}
			if ($ext=="doc"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'doc',
					'mimeType' => array(
					'doc' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'E:/ISO9001/Internal/'
					);
			}
			if ($ext=="xls"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'xls',
					'mimeType' => array(
					'xls' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'E:/ISO9001/Internal/'
					);
			}
			if ($ext=="xlsx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'xlsx',
					'mimeType' => array(
					'xlsx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'E:/ISO9001/Internal/'
					);
			}
			if ($ext=="ppt"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'ppt',
					'mimeType' => array(
					'ppt' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'E:/ISO9001/Internal/'
					);
			}
			if ($ext=="pptx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'pptx',
					'mimeType' => array(
					'pptx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'E:/ISO9001/Internal/'
					);
			}
			
		$this->set($params);
	}
}
