<?php
App::uses('AppController', 'Controller');
/**
 * DocExternals Controller
 *
 * @property DocExternal $DocExternal
 * @property PaginatorComponent $Paginator
 */
class DocExternalsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public $paginate = array(
		'limit' => 25,
		'order' => array(
		'DocExternal.effective_date' => 'desc'
		)
	);

/**
 * index method
 *
 * @return void
 */
	public function index($id=NULL) {
            if (!$this->DocExternal->exists($id)) {
        //        $options = array(
		//'conditions' => array('AND' => array('DocExternal.ctg_doc_id !=' =>  '4',
		//			array('DocExternal.ctg_doc_id !=' =>  '5'))),
		//'order' => 'DocExternal.effective_date DESC'
		//);
		
		        $options = array(
		'conditions' => array(array('DocExternal.ctg_doc_id =' =>  '0')),
		'order' => 'DocExternal.effective_date DESC'
		);
                $this->set('docExternals', $this->DocExternal->find('all',$options));
            }else{
                $options = array('conditions' =>  array('DocExternal.ctg_doc_id =' =>  $id));
                $this->set('docExternals', $this->DocExternal->find('all',$options));
            
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
		if (!$this->DocExternal->exists($id)) {
			throw new NotFoundException(__('Invalid doc external'));
		}
		$options = array('conditions' => array('DocExternal.' . $this->DocExternal->primaryKey => $id));
		$this->set('docExternal', $this->DocExternal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DocExternal->create();
			
					if(empty($this->data['DocExternal']['file']['name'])){
						unset($this->request->data['DocExternal']['file']);
					}
					
					if(!empty($this->data['DocExternal']['file']['name']))
					{
						$file=$this->data['DocExternal']['file'];
						$ary_ext=array('jpg','jpeg','gif','png','pdf','doc','docx','ppt','pptx','xls','xlsx'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], 'C:/xampp/htdocs/dmsystem/webroot/files/external/' . time().$file['name']	);
							$this->request->data['DocExternal']['file'] = time().$file['name'];
						}
					}
					
			if ($this->DocExternal->save($this->request->data)) {
				$this->Session->setFlash(__('The doc external has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doc external could not be saved. Please, try again.'));
			}
		}
		$ctgDocs = $this->DocExternal->CtgDoc->find('list');
		$this->set(compact('ctgDocs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DocExternal->exists($id)) {
			throw new NotFoundException(__('Invalid doc external'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			
		$cek = mysql_connect("localhost", "root", "") or die (mysql_error());
		mysql_select_db("qasystems") or die (mysql_error());
		$result = mysql_query("insert into dochis_externals(doc_external_id, no, name, effective_date, rev_no, ctg_doc_id, file)
				      select id, no, name, effective_date, rev_no, ctg_doc_id, file FROM doc_externals WHERE id = '$id'");
				
					if(empty($this->data['DocExternal']['file']['name'])){
						unset($this->request->data['DocExternal']['file']);
					}
					
					if(!empty($this->data['DocExternal']['file']['name']))
					{
						$file=$this->data['DocExternal']['file'];
						$ary_ext=array('jpg','jpeg','gif','png','pdf','doc','docx','ppt','pptx','xls','xlsx'); //array of allowed extensions
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						if(in_array($ext, $ary_ext))
						{
							move_uploaded_file($file['tmp_name'], 'C:/xampp/htdocs/dmsystem/webroot/files/external/' . time().$file['name']	);
							$this->request->data['DocExternal']['file'] = time().$file['name'];
						}
					}
				
			
			if ($this->DocExternal->save($this->request->data)) {
				$this->Session->setFlash(__('The doc external has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doc external could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DocExternal.' . $this->DocExternal->primaryKey => $id));
			$this->request->data = $this->DocExternal->find('first', $options);
		}
		$ctgDocs = $this->DocExternal->CtgDoc->find('list');
		$this->set(compact('ctgDocs'));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DocExternal->id = $id;
		if (!$this->DocExternal->exists()) {
			throw new NotFoundException(__('Invalid doc external'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DocExternal->delete()) {
			$this->Session->setFlash(__('The doc external has been deleted.'));
		} else {
			$this->Session->setFlash(__('The doc external could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function filex($id = null) {
		$this->layout = 'default_1';

		$options = array('conditions' => array('DocExternal.file' => $id));
		$this->set('docExternal', $this->DocExternal->find('first', $options));
		
//            $this->redirect('/pdfjs/web/viewer.html?id='.$id);          
            
//            echo '<iframe frameborder="0" style="width:100%;height:100%;" src="/qasystems/ViewerJS/?zoom=page-width#../files/yqs/'.$id.'" allowfullscreen webkitallowfullscreen></iframe>';
            
//			echo ' 
//			<iframe frameborder="0" style="width:100%;height:90%;" src="/qasystems/pdfjs/web/viewer.html?id='.$id.'" ></iframe>
//			<center> <h2 style="color:blue;">This document is confidential (please do not print, save, or print screen)</h2> </center>
//			';

        }
        
	public function file($id = null) {
	
		$this->viewClass = 'Media';
		$ext = substr(strrchr($id, '.' ),1);
			if($ext=="gif" || $ext=="jpeg" || $ext=="jpg" || $ext=="png" || $ext=="tif" || $ext=="GIF" || $ext=="JPEG" || $ext=="JPG" || $ext=="PNG" || $ext=="TIF"){
				$params = array(
				'id' => $id,
				'name' => 'file',
				'mimeType' => 'image/jpeg',
				'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/external/'
				);
			}
			if ($ext=="pdf" || $ext=="PDF"){
				$params = array(
				'id' => $id,
				'name' => 'file',
				'extension' => 'pdf',
				'mimeType' => 'application/pdf',
				'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/external/'
				);
			}
			if ($ext=="docx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'docx',
					'mimeType' => array(
					'docx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/external/'
					);
			}
			if ($ext=="doc"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'doc',
					'mimeType' => array(
					'doc' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/external/'
					);
			}
			if ($ext=="xls"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'xls',
					'mimeType' => array(
					'xls' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/external/'
					);
			}
			if ($ext=="xlsx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'xlsx',
					'mimeType' => array(
					'xlsx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/external/'
					);
			}
			if ($ext=="ppt"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'ppt',
					'mimeType' => array(
					'ppt' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/external/'
					);
			}
			if ($ext=="pptx"){
				$params = array(
					'id' => $id,
					'name' => 'file',
					'extension' => 'pptx',
					'mimeType' => array(
					'pptx' => 'application/vnd.openxmlformat-officedocument'.'.wordprocessingml.document'),
					'path' => 'C:/xampp/htdocs/dmsystem/webroot/files/external/'
					);
			}
			
		$this->set($params);
	}

}
