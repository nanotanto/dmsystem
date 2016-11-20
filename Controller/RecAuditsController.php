<?php
App::uses('AppController', 'Controller');
/**
 * RecAudits Controller
 *
 * @property RecAudit $RecAudit
 * @property PaginatorComponent $Paginator
 */
class RecAuditsController extends AppController {

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
        public function index($id=null) {
            $data = $this->RecAudit->Department->find('list', array('fields' => array('id', 'name'), 'order' => 'name ASC'));
            $this->set('dept', $data);
            $doc = $this->RecAudit->find('all', array('conditions' => array("RecAudit.auditor_id" => $id), 'order' => 'RecAudit.no ASC'));
                $this->set('recAudits', $doc);
                                
        }
        
        public function dept($id=null) {
            $data = $this->RecAudit->Department->find('list', array('fields' => array('id', 'name'), 'order' => 'name ASC'));
            $this->set('dept', $data);
            if (!$id) {
                $this->set('recAudits', $this->RecAudit->find('all'));
            }else{
                $doc = $this->RecAudit->find('all', array('conditions' => array("RecAudit.department_id" => $id), 'order' => 'RecAudit.no ASC'));
                $this->set('recAudits', $doc);
            }		
	}
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecAudit->exists($id)) {
			throw new NotFoundException(__('Invalid rec audit'));
		}
		$options = array('conditions' => array('RecAudit.' . $this->RecAudit->primaryKey => $id));
		$this->set('recAudit', $this->RecAudit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecAudit->create();
			if(empty($this->data['RecAudit']['file']['name'])){
						unset($this->request->data['RecAudit']['file']);
					}
					
					if(!empty($this->data['RecAudit']['file']['name']))
					{
						$file=$this->data['RecAudit']['file'];
						$ary_ext=array('jpg','jpeg','gif','png','pdf','doc','docx','ppt','pptx','xls','xlsx'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], 'C:/xampp/htdocs/dmsystem/webroot/files/audit/' . time().$file['name']	);
							$this->request->data['RecAudit']['file'] = time().$file['name'];
						}
					}
			if ($this->RecAudit->save($this->request->data)) {
				$this->Session->setFlash(__('The rec audit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rec audit could not be saved. Please, try again.'));
			}
		}
		$auditors = $this->RecAudit->Auditor->find('list');
		$departments = $this->RecAudit->Department->find('list');
		$requirements = $this->RecAudit->Requirement->find('list');
		$klausuls = $this->RecAudit->Klausul->find('list');
		$ctgFindings = $this->RecAudit->CtgFinding->find('list');
		$statuses = $this->RecAudit->Status->find('list');
		$this->set(compact('auditors', 'departments', 'requirements', 'klausuls', 'ctgFindings', 'statuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RecAudit->exists($id)) {
			throw new NotFoundException(__('Invalid rec audit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if(empty($this->data['RecAudit']['file']['name'])){
						unset($this->request->data['RecAudit']['file']);
					}
					
					if(!empty($this->data['RecAudit']['file']['name']))
					{
						$file=$this->data['RecAudit']['file'];
						$ary_ext=array('jpg','jpeg','gif','png','pdf','doc','docx','ppt','pptx','xls','xlsx'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], 'C:/xampp/htdocs/dmsystem/webroot/files/audit/' . time().$file['name']	);
							$this->request->data['RecAudit']['file'] = time().$file['name'];
						}
					}
			if ($this->RecAudit->save($this->request->data)) {
				$this->Session->setFlash(__('The rec audit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rec audit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecAudit.' . $this->RecAudit->primaryKey => $id));
			$this->request->data = $this->RecAudit->find('first', $options);
		}
		$auditors = $this->RecAudit->Auditor->find('list');
		$departments = $this->RecAudit->Department->find('list');
		$requirements = $this->RecAudit->Requirement->find('list');
		$klausuls = $this->RecAudit->Klausul->find('list');
		$ctgFindings = $this->RecAudit->CtgFinding->find('list');
		$statuses = $this->RecAudit->Status->find('list');
		$this->set(compact('auditors', 'departments', 'requirements', 'klausuls', 'ctgFindings', 'statuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RecAudit->id = $id;
		if (!$this->RecAudit->exists()) {
			throw new NotFoundException(__('Invalid rec audit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RecAudit->delete()) {
			$this->Session->setFlash(__('The rec audit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rec audit could not be deleted. Please, try again.'));
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
				'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/audit/'
				);
			}
			if ($ext=="pdf" || $ext=="PDF"){
				$params = array(
				'id' => $id,
				'name' => 'file',
				'extension' => 'pdf',
				'mimeType' => 'application/pdf',
				'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/audit/'
				);
			}
			if ($ext=="docx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'docx',
					'mimeType' => array(
					'docx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/audit/'
					);
			}
			if ($ext=="doc"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'doc',
					'mimeType' => array(
					'doc' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/audit/'
					);
			}
			if ($ext=="xls"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'xls',
					'mimeType' => array(
					'xls' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/audit/'
					);
			}
			if ($ext=="xlsx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'xlsx',
					'mimeType' => array(
					'xlsx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/audit/'
					);
			}
			if ($ext=="ppt"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'ppt',
					'mimeType' => array(
					'ppt' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/audit/'
					);
			}
			if ($ext=="pptx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'pptx',
					'mimeType' => array(
					'pptx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/audit/'
					);
			}
			
		$this->set($params);
	}
	
}
