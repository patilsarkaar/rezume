<?php
/**
 *
 */
class Rezume extends CI_Controller
{
  function index()
  {
    $data = array();
    // $this->load->view('timeline');

    if ($query = $this->Rezume_model->get_user_details()) {
      # code...
      $data['details'] = $query;
    }

    if ($query = $this->Rezume_model->get_education_details()) {
      # code...
      $data['education'] = $query;
    }

    if ($query = $this->Rezume_model->get_professional_skills()) {
      # code...
      $data['professional'] = $query;
    }
    if ($query = $this->Rezume_model->get_personal_skills()) {
      # code...
      $data['personal'] = $query;
    }

$this->load->view('timeline',$data);

  }

  public function create()
  {
    # code...
    $data = array(
      
      'user_id' => 1,
      'skill' => $this->input->post('skill'),
      'percentage' => $this->input->post('percentage')
    );
    $this->Rezume_model->add_record($data);
    $this->index();
  }

  // function profile()
  // {
  //   # code...
  //   $this->load->view('patilsarkaar');
  // }

  //
}
