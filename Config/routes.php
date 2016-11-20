<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
//	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
        Router::connect('/claim/*', array('controller' => 'pages', 'action' => 'claim'));
        Router::connect('/', array('controller' => 'docs', 'action' => 'index'));
        Router::connect('/doc/*', array('controller' => 'docs', 'action' => 'index'));
        Router::connect('/qa-net/*', array('controller' => 'pages', 'action' => 'qanet'));
        Router::connect('/dept/*', array('controller' => 'docs', 'action' => 'dept'));
        Router::connect('/cal/*', array('controller' => 'pages', 'action' => 'cal'));
        Router::connect('/iso/*', array('controller' => 'doc_externals', 'action' => 'index', 1));
        Router::connect('/sni/*', array('controller' => 'doc_externals', 'action' => 'index', 2));
        Router::connect('/qam/*', array('controller' => 'doc_externals', 'action' => 'index', 3));
        Router::connect('/ygk/*', array('controller' => 'doc_externals', 'action' => 'index', 4));
        Router::connect('/yqs/*', array('controller' => 'doc_externals', 'action' => 'index', 5));
        
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';

        