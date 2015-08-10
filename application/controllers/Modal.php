<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modal extends MY_Controller 
{

    private function ctaClick(){
        if($this->input->post('cta') != ""){
            $cta = 'CTA_' . strtoupper ( $this->input->post('cta') );

            if(property_exists($this->event, $cta)){
                $this->event->add($this->event->{$cta});
            }
        }
    }

    public function accuracyWarning(){
        if($this->input->post('ajax'))
        {
            $this->load->view('modal/accuracy-warning');
            $this->event->add($this->event->ACCURACY_WARNING_POPUP);
        }
        else
        {
            redirect(base_url());
        }
    }

	public function login()
	{
		if($this->input->post('ajax'))
		{
            $this->ctaClick();
            $this->event->add($this->event->LOGIN_POPUP);
			$this->load->view('modal/login');
		}
        else
        {
            redirect(base_url());
        }
	}
	
	public function signUp()
	{
		if($this->input->post('ajax'))
		{
            $this->ctaClick();
            $this->event->add($this->event->SIGN_UP_POPUP);
			$this->load->view('modal/sign-up');
		}
        else
        {
            redirect(base_url());
        }
	}
    
    public function signUpSuccess()
    {
        if($this->input->post('ajax'))
		{
			$this->load->view('modal/sign-up-success');
		}
        else
        {
            redirect(base_url());
        }
    }
    
    public function newMeasure()
    {
        if($this->input->post('ajax'))
		{
			$this->load->view('modal/new-measure');
		}
        else
        {
            redirect(base_url());
        }
    }
    
    public function newWatch()
    {
        if($this->input->post('ajax'))
		{
			$this->load->view('modal/new-watch');
		}
        else
        {
            redirect(base_url());
        }
    }
    
    public function resetPassword()
    {
        if($this->input->post('ajax'))
		{
			$this->load->view('modal/reset-password');
		}
                else
        {
            redirect(base_url());
        }
    }
}