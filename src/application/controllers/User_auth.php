<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_auth extends CI_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->helper('url');
    // Load form helper library
    $this->load->helper('form');

    // Load form validation library
    $this->load->library('form_validation');

    // Load session library
    $this->load->library('session');

  }

  // Show login page
  public function index() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('login_form');
    $this->load->view('footer');

  }


  // Check for user login process
  public function user_login_process() {

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      if(isset($this->session->userdata['logged_in'])){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('admin_page');
        $this->load->view('footer');

      }else{
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('login_form');
        $this->load->view('footer');

      }
    } else {
      $data = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
      );
      // $result = $this->login_database->login($data);
      $result = TRUE;
      if ($result == TRUE) {

        $username = $this->input->post('username');
        // $result = $this->login_database->read_user_information($username);
        $result = array();
        $result[0]=
          (object) array(
            'user_name' => 'coucou',
            'user_email' => 'toto@toto.com'
          );
        if ($result != false) {
          $session_data = array(
            'username' => $result[0]->user_name,
            'email' => $result[0]->user_email,
          );
          // Add user data in session
          $this->session->set_userdata('logged_in', $session_data);
          header("location: " . base_url() . "index.php/chart");
          // $this->load->view('admin_page');
        }
      } else {
        $data = array(
          'error_message' => 'Invalid Username or Password'
        );
        $this->load->view('login_form', $data);
      }
    }
  }

  // Logout from admin page
  public function logout() {

    // Removing session data
    $sess_array = array(
      'username' => ''
    );
    $this->session->unset_userdata('logged_in', $sess_array);
    $data['message_display'] = 'Successfully Logout';
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('login_form');
    $this->load->view('footer');
  }



 }
