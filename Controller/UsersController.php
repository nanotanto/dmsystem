<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {	
	
	public function beforeFilter() {
	parent::beforeFilter();
	// For CakePHP 2.0
//	$this->Auth->allow('*');
	// For CakePHP 2.1 and up
//	$this->Auth->allow();
	    
	$this->Auth->allow('logout');
	 
//	$this->Auth->allow('initDB'); // We can remove this line after we're finished
	}

//	public function initDB() {
//	    $group = $this->User->Group;
		
		 //allow users to posts and widgets
//	  $group->id = 1;
//	    $this->Acl->deny($group, 'controllers');
//	    $this->Acl->allow($group, 'controllers/DocExternals/index_ygk');
//	    $this->Acl->allow($group, 'controllers/DocExternals/index_yqs');
//	    $this->Acl->allow($group, 'controllers/DocExternals/search_ygk');
//	    $this->Acl->allow($group, 'controllers/DocExternals/search_yqs');
//	    $this->Acl->allow($group, 'controllers/Pages');
	
	    // Allow admins to everything
//	    $group->id = 2;
//	    $this->Acl->deny($group, 'controllers');
//	    $this->Acl->allow($group, 'controllers/Docs/add');
//	    $this->Acl->allow($group, 'controllers/Docs/edit');
//	    $this->Acl->allow($group, 'controllers/Docs/revision');	
///	    $this->Acl->allow($group, 'controllers/Pages');
	   
	
//		// Allow superadmins to everything
//	    $group->id = 3;
//	   $this->Acl->deny($group, 'controllers');
//		$this->Acl->allow($group, 'controllers/Pages');
//		$this->Acl->allow($group, 'controllers/Docs');
//		$this->Acl->allow($group, 'controllers/Auditors');
//		$this->Acl->allow($group, 'controllers/Categories');
//		$this->Acl->allow($group, 'controllers/CtgDocs');
//		$this->Acl->allow($group, 'controllers/CtgFindings');
//		$this->Acl->allow($group, 'controllers/Departments');
//		$this->Acl->allow($group, 'controllers/Divisions');
//		$this->Acl->allow($group, 'controllers/DocExternals');
//		$this->Acl->allow($group, 'controllers/Dochis');
//		$this->Acl->allow($group, 'controllers/DochisExternals');
//		$this->Acl->allow($group, 'controllers/Klausuls');
//		$this->Acl->allow($group, 'controllers/RecAudits');
//		$this->Acl->allow($group, 'controllers/RecMreviews');
//		$this->Acl->allow($group, 'controllers/Requirements');
//		$this->Acl->allow($group, 'controllers/Schedules');
//		$this->Acl->allow($group, 'controllers/Sections');
//		$this->Acl->allow($group, 'controllers/Statuses');
//
//	$group->id = 4;
//	   $this->Acl->allow($group, 'controllers');	
//
//	    // allow basic users to log out
//	   $this->Acl->allow($group, 'controllers/users/logout');
//	
//	     //we add an exit to avoid an ugly "missing views" error message
//	    echo "all done";
//	    exit;
//		}



	
	public function login() {
      if ($this->request->is('post')) {
          if ($this->Auth->login()) {
              return $this->redirect($this->Auth->redirect());
          }
          $this->Session->setFlash(__('Your username or password was incorrect.'));
      }
  	}
	
  
  	public function logout() {
//    	$this->Session->setFlash('Good-Bye');
   	 	$this->redirect($this->Auth->logout());
  	}
	

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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$divisions = $this->User->Division->find('list');
		$this->set(compact('groups','divisions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$divisions = $this->User->Division->find('list');
		$this->set(compact('groups','divisions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


}
