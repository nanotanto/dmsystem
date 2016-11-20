<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    public $components = array(
            'Session',
            'Auth' => array(
            'loginRedirect' => array(
            'controller' => 'docs',
            'action' => 'index'
            ),
            'logoutRedirect' => array(
            'controller' => 'docs',
            'action' => 'index'
            ),
                'loginAction' => array(
                'controller' => 'users',
                'action' => 'login')
            )
            );
	public function beforeFilter() {
		$this->layout = 'default';
                $this->Auth->allow('view','dept','cal','file','getByDept','qanet','json','claim','doc','pages','display','home','chart','getByPart','index', 'index_update', 'cqr',  'cw_grav', 'cw_raw', 'download', 'download_cqr', 
                        'download_gravity', 'download_h2', 'download_h7', 'download_raw', 'h2', 'h7', 'h2_cw', 'h7_cw', 'search', 'search_update');
                //$this->Auth->allow();
                parent::beforeFilter();
		$this->set('current_user', $this->Auth->user());
	}
        
}
