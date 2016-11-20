<?php
App::uses('AppController', 'Controller');
/**
 * DochisExternals Controller
 *
 * @property DochisExternal $DochisExternal
 * @property PaginatorComponent $Paginator
 */
class DochisExternalsController extends AppController {

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
		$this->DochisExternal->recursive = 0;
		$this->set('dochisExternals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DochisExternal->exists($id)) {
			throw new NotFoundException(__('Invalid dochis external'));
		}
		$options = array('conditions' => array('DochisExternal.' . $this->DochisExternal->primaryKey => $id));
		$this->set('dochisExternal', $this->DochisExternal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DochisExternal->create();
			
			
					if(empty($this->data['DochisExternal']['file']['name'])){
						unset($this->request->data['DochisExternal']['file']);
					}
					
					if(!empty($this->data['DochisExternal']['file']['name']))
					{
						$file=$this->data['DochisExternal']['file'];
						$ary_ext=array('jpg','jpeg','gif','png','pdf','doc','docx','ppt','pptx','xls','xlsx'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], 'E:/ISO9001/External/' . time().$file['name']	);
							$this->request->data['DochisExternal']['file'] = time().$file['name'];
						}
					}
								
			
			if ($this->DochisExternal->save($this->request->data)) {
				$this->Session->setFlash(__('The dochis external has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dochis external could not be saved. Please, try again.'));
			}
		}
		$docExternals = $this->DochisExternal->DocExternal->find('list');
		$ctgDocs = $this->DochisExternal->CtgDoc->find('list');
		$this->set(compact('docExternals', 'ctgDocs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DochisExternal->exists($id)) {
			throw new NotFoundException(__('Invalid dochis external'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if(empty($this->data['DochisExternal']['file']['name'])){
						unset($this->request->data['DochisExternal']['file']);
					}
					
					if(!empty($this->data['DochisExternal']['file']['name']))
					{
						$file=$this->data['DochisExternal']['file'];
						$ary_ext=array('jpg','jpeg','gif','png','pdf','doc','docx','ppt','pptx','xls','xlsx'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], 'E:/ISO9001/External/' . time().$file['name']	);
							$this->request->data['DochisExternal']['file'] = time().$file['name'];
						}
					}
			if ($this->DochisExternal->save($this->request->data)) {
				$this->Session->setFlash(__('The dochis external has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dochis external could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DochisExternal.' . $this->DochisExternal->primaryKey => $id));
			$this->request->data = $this->DochisExternal->find('first', $options);
		}
		$docExternals = $this->DochisExternal->DocExternal->find('list');
		$ctgDocs = $this->DochisExternal->CtgDoc->find('list');
		$this->set(compact('docExternals', 'ctgDocs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DochisExternal->id = $id;
		if (!$this->DochisExternal->exists()) {
			throw new NotFoundException(__('Invalid dochis external'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DochisExternal->delete()) {
			$this->Session->setFlash(__('The dochis external has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dochis external could not be deleted. Please, try again.'));
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
				'path' => 'E:/ISO9001/External/'
				);
			}
			if ($ext=="pdf" || $ext=="PDF"){
				$params = array(
				'id' => $id,
				'name' => 'file',
				'extension' => 'pdf',
				'mimeType' => 'application/pdf',
				'path' => 'E:/ISO9001/External/'
				);
			}
			if ($ext=="docx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'docx',
					'mimeType' => array(
					'docx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'E:/ISO9001/External/'
					);
			}
			if ($ext=="doc"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'doc',
					'mimeType' => array(
					'doc' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'E:/ISO9001/External/'
					);
			}
			if ($ext=="xls"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'xls',
					'mimeType' => array(
					'xls' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'E:/ISO9001/External/'
					);
			}
			if ($ext=="xlsx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'xlsx',
					'mimeType' => array(
					'xlsx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'E:/ISO9001/External/'
					);
			}
			if ($ext=="ppt"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'ppt',
					'mimeType' => array(
					'ppt' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'E:/ISO9001/External/'
					);
			}
			if ($ext=="pptx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'pptx',
					'mimeType' => array(
					'pptx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'E:/ISO9001/External/'
					);
			}
			
		$this->set($params);
	}
}
