<?php

/**
 * 
 */
class Users_model extends CI_Model
{
    
    public function __construct()
    {
        $this->load->database();
    }

    public function read_data($table = null, $id = null)
    {
        // return the whole table
        if (is_null($id) || is_null($table))
        {
            $query = $this->db->get($table);
            return $query->result_array();
        }

        // return one specify row
        $query = $this->db->get_where($table, array('id' => $id));
        return $query->row_array();
    }

    public function create_data($table = null)
    {
        if (is_null($table))
            show_error('no table select.');

        $data = array( 
                        'user_id' => $this->input->post('user_id'),
                        'user_name' => $this->input->post('user_name'),
                        'user_mail' => $this->input->post('user_mail'),
                        'enabled' => $this->input->post('enabled'),
                    );

        $this->db->insert($table, $data);
        $this->db->insert_id();
    }

    public function update_data($table = null, $id = null)
    {
        if (is_null($id) || is_null($table))
           show_error('Which row in table you wanna update ?'); 

        $data = array( 
                        'user_id' => $this->input->post('user_id'),
                        'user_name' => $this->input->post('user_name'),
                        'user_mail' => $this->input->post('user_mail'),
                        'enabled' => $this->input->post('enabled'),
                    );

        $this->db->where('id', $id);
        return $this->db->update($table, $data);
    }

    public function delete_data($table = null, $id = null)
    {
        if (is_null($id) || is_null($table))
            show_error('Which row in what table you want to delete ?');

        return $this->db->delete($table, array('id' => $id));
    }

}


/* End of rules_model.php */
/* Location: ./application/models/rules_model.php */
