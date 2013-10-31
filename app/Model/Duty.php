<?php
App::uses('AppModel', 'Model');
/**
 * Duty Model
 *
 * @property TypeVehicle $TypeVehicle
 * @property Payment $Payment
 */
class Duty extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TypeVehicle' => array(
			'className' => 'TypeVehicle',
			'foreignKey' => 'type_vehicle_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Payment' => array(
			'className' => 'Payment',
			'foreignKey' => 'payment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
