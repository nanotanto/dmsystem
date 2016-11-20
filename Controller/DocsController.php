<?php
App::uses('AppController', 'Controller');
/**
 * Docs Controller
 *
 * @property Doc $Doc
 * @property PaginatorComponent $Paginator
 */
class DocsController extends AppController {

	public $helpers = array('Js');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
        public function getByNo() {         
             $no = $this->data['Doc']['no'];
             $do = $this->Doc->find('list', array(
             'conditions' => array('Doc.no' => $no),
             'recursive' => -1,
             'fields' => 'no',
              'limit' => 1
             ));
             $this->set('docs',$do);
             $this->layout = 'ajax';
        }

	public $paginate = array(
		'limit' => 25,
		'order' => array(
		'Doc.effective_date' => 'desc'
		)
	);
        
//        public function getByDept() {         
//            $department_id = $this->data['Doc']['department_id'];
//            if ($department_id==1 or $department_id==0){
//                $this->set('dept', $this->Doc->find('all'));
//            }else{
//                $doc = array(
//		'conditions' => array("Doc.department_id" => $department_id), 'order' => 'Doc.no ASC',
//		'limit' => 25
//		);
//                $this->set('dept', $this->Doc->find('all',$doc));               
//            }
//            $this->layout = 'ajax';
//        }
	
	
/**
 * index method
 *
 * @return void
 */
        
        public function index($id=NULL) {
            $data = $this->Doc->Department->find('list', array('fields' => array('id', 'name'), 'order' => 'name ASC'));
            $this->set('doc', $data);
            
            if (!$this->Doc->exists($id)) {
		$this->set('docs', $this->Doc->find('all', array('conditions' => array("Doc.category_id" => 0), 'order' => 'Doc.no ASC')));	
		}else{
                    $doc = $this->Doc->find('all', array('conditions' => array("Doc.category_id" => $id), 'order' => 'Doc.no ASC'));
                    $this->set('docs', $doc); 
                }
          }
          
          public function dept($id=NULL) {
            $data = $this->Doc->Department->find('list', array('fields' => array('id', 'name'), 'order' => 'name ASC'));
            $this->set('doc', $data);
            
            if (!$this->Doc->exists($id)) {
		$this->set('docs', $this->Doc->find('all'));	
		}else{
                    $doc = $this->Doc->find('all', array('conditions' => array("Doc.department_id" => $id), 'order' => 'Doc.no ASC'));
                    $this->set('docs', $doc); 
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
		if (!$this->Doc->exists($id)) {
			throw new NotFoundException(__('Invalid doc'));
		}
		$options = array('conditions' => array('Doc.' . $this->Doc->primaryKey => $id));
		$this->set('doc', $this->Doc->find('first', $options));
	
		$opt = $this->Doc->query("SELECT * FROM docs WHERE id = '$id' ORDER BY id ASC");			
				foreach ($opt as $opt){
					$no = $opt['docs']['no_reference'];
				}      
                
                 if (!$this->Doc->exists($no)){
                $data = $this->Doc->find('first', array('fields' => 'no',
                    'conditions' => array("Doc.id LIKE" => $id)));
		$this->set('data', $data);
                 }
                 $data = $this->Doc->find('first', array('fields' => 'no',
                    'conditions' => array("Doc.id LIKE" => $no)));
		 $this->set('data', $data);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Doc->create();
			
			for($i=1;$i<3;$i++)
				{
					if(empty($this->data['Doc']['file'.$i]['name'])){
						unset($this->request->data['Doc']['file'.$i]);
					}
						
					if(!empty($this->data['Doc']['file'.$i]['name']))
					{
						$file=$this->data['Doc']['file'.$i];
						$ary_ext=array('jpg','jpeg','gif','png','pdf','doc','docx','ppt','pptx','xls','xlsx'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], 'C:/xampp/htdocs/dmsystem/webroot/files/internal/' . time().$file['name']	);
							$this->request->data['Doc']['file'.$i] = time().$file['name'];
						}
					}		
					
					
				}
			
			
			if ($this->Doc->save($this->request->data)) {
//				$this->Session->setFlash(__('The doc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doc could not be saved. Please, try again.'));
			}
		}
		$departments = $this->Doc->Department->find('list', array('order' => 'name ASC'));
		$sections = $this->Doc->Section->find('list', array('order' => 'name ASC'));
		$categories = $this->Doc->Category->find('list');
		$statuses = $this->Doc->Status->find('list', array('fields' => 'status_doc'));
		$doc = $this->Doc->find('list', array('fields' => 'no'));
		$this->set(compact('departments', 'sections', 'categories', 'statuses','doc'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function revision($id = null) {
		if (!$this->Doc->exists($id)) {
			throw new NotFoundException(__('Invalid doc'));
		}
		if ($this->request->is(array('post', 'put'))) {
		
		$cek = mysql_connect("localhost", "root", "") or die (mysql_error());
		mysql_select_db("qasystems") or die (mysql_error());		
		$result = mysql_query("insert into dochis(doc_id, department_id, section_id, category_id, no, name, effective_date, rev_no, rev_content, no_reference, remark, file)
							select id, department_id, section_id, category_id, no, name, effective_date, rev_no, rev_content, no_reference, remark, file1
						FROM docs WHERE id = '$id'");		
			
				for($i=1;$i<3;$i++)
				{
					if(empty($this->data['Doc']['file'.$i]['name'])){
						unset($this->request->data['Doc']['file'.$i]);
					}
						
					if(!empty($this->data['Doc']['file'.$i]['name']))
					{
						$file=$this->data['Doc']['file'.$i];
						$ary_ext=array('jpg','jpeg','gif','png','pdf','doc','docx','ppt','pptx','xls','xlsx'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], 'C:/xampp/htdocs/dmsystem/webroot/files/internal/' . time().$file['name']	);
							$this->request->data['Doc']['file'.$i] = time().$file['name'];
						}
					}		
					
					
				}
			
					
			if ($this->Doc->save($this->request->data)) {
//				$this->Session->setFlash(__('The doc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Doc.' . $this->Doc->primaryKey => $id));
			$this->request->data = $this->Doc->find('first', $options);
		}
		$departments = $this->Doc->Department->find('list',array('order' => 'name ASC'));
		$sections = $this->Doc->Section->find('list',array('order' => 'name ASC'));
		$categories = $this->Doc->Category->find('list');
		$statuses = $this->Doc->Status->find('list', array('fields' => 'status_doc'));
		$doc = $this->Doc->find('list', array('fields' => 'no'));
		$this->set(compact('departments', 'sections', 'categories', 'statuses', 'doc'));
	}


	public function edit($id = null) {
		if (!$this->Doc->exists($id)) {
			throw new NotFoundException(__('Invalid doc'));
		}
		if ($this->request->is(array('post', 'put'))) {
		
			
				for($i=1;$i<3;$i++)
				{
					if(empty($this->data['Doc']['file'.$i]['name'])){
						unset($this->request->data['Doc']['file'.$i]);
					}
						
					if(!empty($this->data['Doc']['file'.$i]['name']))
					{
						$file=$this->data['Doc']['file'.$i];
						$ary_ext=array('jpg','jpeg','gif','png','pdf','doc','docx','ppt','pptx','xls','xlsx'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], 'C:/xampp/htdocs/dmsystem/webroot/files/internal/' . time().$file['name']	);
							$this->request->data['Doc']['file'.$i] = time().$file['name'];
						}
					}		
					
					
				}
			
					
			if ($this->Doc->save($this->request->data)) {
				$this->Session->setFlash(__('The doc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Doc.' . $this->Doc->primaryKey => $id));
			$this->request->data = $this->Doc->find('first', $options);
		}
		$departments = $this->Doc->Department->find('list',array('order' => 'name ASC'));
		$sections = $this->Doc->Section->find('list',array('order' => 'name ASC'));
		$categories = $this->Doc->Category->find('list');
		$statuses = $this->Doc->Status->find('list', array('fields' => 'status_doc'));
		$doc = $this->Doc->find('list', array('fields' => 'no'));
		$this->set(compact('departments', 'sections', 'categories', 'statuses', 'doc'));
	}



/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Doc->id = $id;
		if (!$this->Doc->exists()) {
			throw new NotFoundException(__('Invalid doc'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Doc->delete()) {
			$this->Session->setFlash(__('The doc has been deleted.'));
		} else {
			$this->Session->setFlash(__('The doc could not be deleted. Please, try again.'));
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
				'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/internal/'
				);
			}
			if ($ext=="pdf" || $ext=="PDF"){
				$params = array(
				'id' => $id,
				'name' => 'file',
				'extension' => 'pdf',
				'mimeType' => 'application/pdf',
				'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/internal/'
				);
			}
			if ($ext=="docx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'docx',
					'mimeType' => array(
					'docx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/internal/'
					);
			}
			if ($ext=="doc"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'doc',
					'mimeType' => array(
					'doc' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/internal/'
					);
			}
			if ($ext=="xls"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'xls',
					'mimeType' => array(
					'xls' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/internal/'
					);
			}
			if ($ext=="xlsx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'xlsx',
					'mimeType' => array(
					'xlsx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/internal/'
					);
			}
			if ($ext=="ppt"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'ppt',
					'mimeType' => array(
					'ppt' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/internal/'
					);
			}
			if ($ext=="pptx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'pptx',
					'mimeType' => array(
					'pptx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/internal/'
					);
			}
			
		$this->set($params);
	}

}
