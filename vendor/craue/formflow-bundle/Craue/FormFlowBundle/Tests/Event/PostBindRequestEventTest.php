<?php

namespace Craue\FormFlowBundle\Tests\Event;

use Craue\FormFlowBundle\Event\PostBindRequestEvent;

/**
 * @group unit
 *
 * @author Christian Raue <christian.raue@gmail.com>
 * @copyright 2011-2014 Christian Raue
 * @license http://opensource.org/licenses/mit-license.php MIT License
 */
class PostBindRequestEventTest extends \PHPUnit_Framework_TestCase {

	public function testEvent() {
		$formData = array('blah' => '123');
		$stepNumber = 2;

		$event = new PostBindRequestEvent($this->getMockForAbstractClass('\Craue\FormFlowBundle\Form\FormFlow'), $formData, $stepNumber);

		$this->assertEquals($formData, $event->getFormData());
		$this->assertEquals($stepNumber, $event->getStepNumber());
	}

}
