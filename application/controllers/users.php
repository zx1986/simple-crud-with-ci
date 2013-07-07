<?php

/**
 * 
 */
class Users extends CI_Controller
{
    private $table = 'users';

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->spark('mustache_spark/0.0.1');
        $this->load->model('users_model', '', TRUE);
    }

    public function index()
    {
        $data['page_title'] = 'Simple CRUD with CI';
        $data['modal_title'] = 'Users';
        $data['creator'] = 'users/create';
        $data['users'] = $this->users_model->read_data($this->table, null);

        $this->mustache_spark->set_master_template('layouts/base');
        $this->mustache_spark->merge_template( array('layout' => 'layouts/g12') );
        $this->mustache_spark->merge_template( array('g12' => 'users/list') );
        $this->mustache_spark->merge_data($data);
        $this->mustache_spark->render();
    }

    public function create()
    {
        $this->form_validation->set_rules('user_id', 'User ID', 'required');
        $this->form_validation->set_rules('user_name', 'User Name', 'required');

        if ( $this->form_validation->run() !== FALSE )
        {
            $this->users_model->create_data($this->table);
            redirect('/users/', 'refresh');
        }
        else
        {
            $data['form_action'] = 'users/create';
            $this->mustache_spark->set_master_template('users/form');
            $this->mustache_spark->merge_data($data);
            $this->mustache_spark->render();
        }
    }

    public function read($id = null)
    {
        if (!is_null($id) && $_SERVER['REQUEST_METHOD'] == 'GET')
        {
            $data = $this->users_model->read_data($this->table, $id);
            
            $this->mustache_spark->set_master_template('users/item');
            $this->mustache_spark->merge_data($data);
            $this->mustache_spark->render();
        }
        else
            show_error('No one Specify.');
    }

    public function update($id = null)
    {
        if (!is_null($id) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $this->form_validation->set_rules('user_id', 'User ID', 'required');
            $this->form_validation->set_rules('user_name', 'User Name', 'required');

            if ( $this->form_validation->run() !== FALSE )
            {
                $this->users_model->update_data($this->table, $id);
                redirect('/users/', 'refresh');
            }
        }
        elseif (!is_null($id) && $_SERVER['REQUEST_METHOD'] == 'GET')
        {
            $data = $this->users_model->read_data($this->table, $id);
            $data['form_action'] = 'users/update/'.$id;

            if ($data['enabled'] == 1)
                $data['status'] = 'on';

            $this->mustache_spark->set_master_template('users/form');
            $this->mustache_spark->merge_data($data);
            $this->mustache_spark->render();
        }
        else
            show_error('No one Specify.');
    }

    public function delete($id = null)
    {
        if (!is_null($id) && $_SERVER['REQUEST_METHOD'] == 'GET' )
        {
            $this->users_model->delete_data($this->table, $id);
            redirect('/users/', 'refresh');
        }
        else
            show_error('Nothing to detele.');
    }

}

/* End of users.php */
/* Location: ./application/controllers/users.php */
