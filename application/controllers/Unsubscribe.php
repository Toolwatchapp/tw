<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unsubscribe extends MY_Controller
{

  public function __construct() {
		parent::__construct();
    $this->load->helper("alphaid");
    $this->load->model("Emailpreferences");
	}

  public function index($code = 0){

      if(is_string($code)
      && is_int(($code = alphaid($code, true)))){


        $userPreferences = $this->Emailpreferences->getPreferences($code);

        if($userPreferences){

          $userPreferences->userId = alphaid($userPreferences->userId);
          $userPreferences->success = false;

          $this->_headerData['headerClass'] = 'blue';

      		$this->load->view('header', $this->_headerData);

      		$this->load->view('email-preferences', $userPreferences);

      		$this->load->view('footer');
        }
      }
  }

  public function update(){

    if($this->expectsPost(array('dayAccuracy', 'weekAccuracy', 'result', 'newMeasure', 'firstWatch', 'secondWatch', 'comeback', 'firstMeasure', 'userId'))
    && is_bool((bool)$this->dayAccuracy) &&
    is_bool((bool)$this->weekAccuracy) &&
    is_bool((bool)$this->result) &&
    is_bool((bool)$this->newMeasure) &&
    is_bool((bool)$this->firstWatch) &&
    is_bool((bool)$this->secondWatch) &&
    is_bool((bool)$this->comeback) &&
    is_string($this->userId) &&
    is_int(($this->userId = alphaid($this->userId, true)))){

      if($this->Emailpreferences->updateEmailPreferences($this->dayAccuracy, $this->weekAccuracy, $this->result, $this->newMeasure, $this->firstMeasure, $this->firstWatch, $this->secondWatch, $this->comeback, $this->userId)){

        $this->_headerData['headerClass'] = 'blue';
        $this->load->view('header', $this->_headerData);
        $this->load->view('email-preferences', ["success"=>true]);
        $this->load->view('footer');
      }
    }
  }
}
