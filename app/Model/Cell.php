<?php
App::uses('AppModel', 'Model');
/**
 * Cell Model
 *
 * @property Vehicle $Vehicle
 * @property Reserve $Reserve
 */
class Cell extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vehicle' => array(
			'className' => 'Vehicle',
			'foreignKey' => 'vehicle_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Reserve' => array(
			'className' => 'Reserve',
			'foreignKey' => 'reserve_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
