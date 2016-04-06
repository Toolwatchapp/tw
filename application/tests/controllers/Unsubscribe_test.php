<?php

class Unsubscribe_test extends TestCase {

	private static $watchId;
	private static $userId;

	public static function setUpBeforeClass() {
		$CI = &get_instance();
		$CI->load->model('User');
		$CI->load->model('Watch');
		$CI->load->library('Session');
		$CI->load->model('Measure');

    $CI->Watch->delete_where(array("watchId >=" => "0"));
    $CI->Measure->delete_where(array("id >="    => "0"));
    $CI->User->delete_where(array("userId >="    => "0"));

		$CI->User->signup(
			'mathieu@gmail.com',
			'azerty',
			'math',
			'nay',
			'-5',
			'Canada'
		);

		$CI->User->login('mathieu@gmail.com', 'azerty');
		self::$userId = $CI->session->userdata('userId');
	}

  public function test_indexFail() {

    $output = $this->request('GET', ['Unsubscribe', 'index']);


    $this->assertEquals(null, $output);
  }

  public function test_index() {

    $output = $this->request('GET', ['Unsubscribe', 'index', alphaID(self::$userId)]);
    $this->assertContains('From this page, you', $output);
  }

  public function test_update(){

    $output = $this->request(
      'POST',
      ['Unsubscribe', 'update'],
      [
        'dayAccuracy' => 0,
        'weekAccuracy' => 0,
        'result' => 1,
        'newMeasure' => 1,
        'firstWatch' => 0,
        'secondWatch' => 0,
        'comeback' => 1,
        'firstMeasure' => 1,
        'userId' => alphaID(self::$userId)
      ]
    );

    $CI = &get_instance();
    $CI->load->model('emailpreferences');

    $result = $CI->emailpreferences->getPreferences(self::$userId);

    $this->assertEquals(0, $result->dayAccuracy);
    $this->assertEquals(0, $result->weekAccuracy);
    $this->assertEquals(1, $result->result);
    $this->assertEquals(1, $result->newMeasure);
    $this->assertEquals(0, $result->firstWatch);
    $this->assertEquals(1, $result->firstMeasure);
    $this->assertEquals(0, $result->secondWatch);
    $this->assertEquals(1, $result->comeback);
    $this->assertEquals(self::$userId, $result->userId);

    $this->assertContains('Your preferences have been updated', $output);

  }

}
