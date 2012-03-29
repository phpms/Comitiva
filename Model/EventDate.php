<?php
class EventDate extends AppModel
{
	public $name = 'EventDate';

	public $actsAs = array(
		'Locale.Locale'
	);

	public $order = 'EventDate.date ASC';

	public $virtualFields = array(
		'time' => "TIME(`EventDate`.`date`)"
	);

	public $validate = array(
		'date' => array(
			'date' => array('rule' => array('notEmpty')),
		),
		'desc' => array(
			'length' => array('rule' => array('maxLength', 30))
		)
	);

	public $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}