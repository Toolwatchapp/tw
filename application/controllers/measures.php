<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Measures extends MY_Controller 
{
    public function __construct()
	{
        $this->_needLoggedIn = true;
		parent::__construct();
        $this->load->model('watch');
        $this->load->model('measure');
	}
	
    public function index()
    {       
        if($this->input->post('addWatch'))
        {
            $brand = $this->input->post('brand');
            $name = $this->input->post('name');
            $yearOfBuy = $this->input->post('yearOfBuy');
            $serial = $this->input->post('serial');
            
            if($this->watch->addWatch($this->session->userdata('userId'), $brand, $name, $yearOfBuy, $serial))
            {
                $this->_bodyData['success'] = 'Watch successfully added!';
            }
            else
            {
               $this->_bodyData['error'] = 'An error occured while adding your watch.';
            }
        }
        
        $this->_headerData['headerClass'] = 'blue';
        $this->load->view('header', $this->_headerData);
        
        $this->_bodyData['allMeasure'] = $this->measure->computeMeasure($this->session->userdata('userId'));
        $this->load->view('measure/all', $this->_bodyData);    
        
        $this->load->view('footer');  
    }
    
    public function new_watch()
    {    
        $this->_headerData['headerClass'] = 'blue';
        $this->load->view('header', $this->_headerData);
        
        $this->load->view('measure/new-watch', $this->_bodyData);    
        
        $this->load->view('footer');  
    }
    
    public function new_measure()
    {
        $this->_headerData['headerClass'] = 'blue';
        $this->load->view('header', $this->_headerData);
        
        $this->_bodyData['watches'] = $this->watch->getWatches($this->session->userdata('userId'));
        $this->load->view('measure/new-measure', $this->_bodyData);    
        
        $this->load->view('footer');  
    }   
}