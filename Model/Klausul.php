<?php
App::uses('AppModel', 'Model');
/**
 * Klausul Model
 *
 * @property RecAudit $RecAudit
 */
class Klausul extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
                //'requirement_id' => array(
		//	'numeric' => array(
		///		'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		//	),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'RecAudit' => array(
			'className' => 'RecAudit',
			'foreignKey' => 'klausul_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
        
    /**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Requirement' => array(
			'className' => 'Requirement',
			'foreignKey' => 'requirement_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)

	);

}
