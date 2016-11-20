<?php
App::uses('AppController', 'Controller');
/**
 * RecMreviews Controller
 *
 * @property RecMreview $RecMreview
 * @property PaginatorComponent $Paginator
 */
class RecMreviewsController extends AppController {

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
		$this->RecMreview->recursive = 0;
		$this->set('recMreviews', $this->RecMreview->find('all'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecMreview->exists($id)) {
			throw new NotFoundException(__('Invalid rec mreview'));
		}
		$options = array('conditions' => array('RecMreview.' . $this->RecMreview->primaryKey => $id));
		$this->set('recMreview', $this->RecMreview->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecMreview->create();
			
			for($i=1;$i<3;$i++)
				{
					if(empty($this->data['RecMreview']['file'.$i]['name'])){
						unset($this->request->data['RecMreview']['file'.$i]);
					}
						
					if(!empty($this->data['RecMreview']['file'.$i]['name']))
					{
						$file=$this->data['RecMreview']['file'.$i];
						$ary_ext=array('jpg','jpeg','gif','png','pdf','doc','docx','ppt','pptx','xls','xlsx'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], 'C:/xampp/htdocs/dmsystem/webroot/files/review/' . time().$file['name']	);
							$this->request->data['RecMreview']['file'.$i] = time().$file['name'];
						}
					}		
					
					
				}
				
			if ($this->RecMreview->save($this->request->data)) {
				$this->Session->setFlash(__('The rec mreview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rec mreview could not be saved. Please, try again.'));
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
		if (!$this->RecMreview->exists($id)) {
			throw new NotFoundException(__('Invalid rec mreview'));
		}
		if ($this->request->is(array('post', 'put'))) {
			for($i=1;$i<3;$i++)
				{
					if(empty($this->data['RecMreview']['file'.$i]['name'])){
						unset($this->request->data['RecMreview']['file'.$i]);
					}
						
					if(!empty($this->data['RecMreview']['file'.$i]['name']))
					{
						$file=$this->data['RecMreview']['file'.$i];
						$ary_ext=array('jpg','jpeg','gif','png','pdf','doc','docx','ppt','pptx','xls','xlsx'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], 'C:/xampp/htdocs/dmsystem/webroot/files/review/' . time().$file['name']	);
							$this->request->data['RecMreview']['file'.$i] = time().$file['name'];
						}
					}		
					
					
				}
			if ($this->RecMreview->save($this->request->data)) {
				$this->Session->setFlash(__('The rec mreview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rec mreview could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecMreview.' . $this->RecMreview->primaryKey => $id));
			$this->request->data = $this->RecMreview->find('first', $options);
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
		$this->RecMreview->id = $id;
		if (!$this->RecMreview->exists()) {
			throw new NotFoundException(__('Invalid rec mreview'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RecMreview->delete()) {
			$this->Session->setFlash(__('The rec mreview has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rec mreview could not be deleted. Please, try again.'));
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
				'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/review/'
				);
			}
			if ($ext=="pdf" || $ext=="PDF"){
				$params = array(
				'id' => $id,
				'name' => 'file',
				'extension' => 'pdf',
				'mimeType' => 'application/pdf',
				'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/review/'
				);
			}
			if ($ext=="docx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'docx',
					'mimeType' => array(
					'docx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/review/'
					);
			}
			if ($ext=="doc"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'doc',
					'mimeType' => array(
					'doc' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/review/'
					);
			}
			if ($ext=="xls"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'xls',
					'mimeType' => array(
					'xls' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/review/'
					);
			}
			if ($ext=="xlsx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'xlsx',
					'mimeType' => array(
					'xlsx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/review/'
					);
			}
			if ($ext=="ppt"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'ppt',
					'mimeType' => array(
					'ppt' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/review/'
					);
			}
			if ($ext=="pptx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'pptx',
					'mimeType' => array(
					'pptx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/review/'
					);
			}
			
		$this->set($params);
	}
}
