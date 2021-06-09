<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->data['module'] = 'Home';

    // $this->load->model(array('Arsip_model', 'Rak_model', 'Baris_model'));

    $this->data['company_data']      = $this->Company_model->company_profile();
    $this->data['footer']            = $this->Footer_model->footer();

    is_login_front();
    // is_active_instansi_front();
  }

  function index()
  {
    $this->data['page_title'] = 'Home';

    $this->data['get_deposito'] = $this->Deposito_model->get_by_user();
    
    $this->load->view('front/home/body', $this->data);
  }
}
