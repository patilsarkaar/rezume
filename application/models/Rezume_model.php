<?php

/**
 *
 */
class Rezume_model extends CI_Model
{



  public function get_user_details()
  {
    # code...

    $this->db->where('user_id', 1);
    $query = $this->db->get('user_details');
    return $query->result();
  }

  public function get_education_details()
  {
    # code...
    $this->db->where('user_id', 1);
    $query = $this->db->get('education_details');
    return $query->result();
  }

  public function get_professional_skills()
  {
    # code...
    $this->db->where('user_id', 1);
    $query = $this->db->get('professional_skills');
    return $query->result();
  }

  public function get_personal_skills()
  {
    # code...
    $this->db->where('user_id',1);
    $query = $this->db->get('personal_skills');
    return $query->result();
  }

  public function add_record($data)
  {
    # code...
    $this->db->insert('professional_skills',$data);
    return;
  }

  public function update_record()
  {
    # code...
    $this->db->where('user_id',1);
    $this->db->update('user_details',$data);
  }

  public function delete_row()
  {
    # code...
    $this->db->where('user_id',$this->uri->segment(3));
    $this->db->delete('user_details');
  }
}
