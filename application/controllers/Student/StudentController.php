<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

	public function index()
	{
	
		$this->load->model('StudentModel');
		$oStudentModel = new StudentModel();
		$get_school_data = $oStudentModel->get_school_data();
		$get_class_data = $oStudentModel->get_class_data();
		
		$config['base_url'] = base_url('student');
        $config['total_rows'] = $this->StudentModel->get_total_students();
        $config['per_page'] = 3;
        $config['uri_segment'] = 2;
		/*
      		start 
      		add boostrap class and styles
    	*/
		$config['full_tag_open'] = '<ul class="pagination">';        
		$config['full_tag_close'] = '</ul>';        
		$config['first_link'] = 'First';        
		$config['last_link'] = 'Last';        
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';        
		$config['first_tag_close'] = '</span></li>';        
		$config['prev_link'] = '&laquo';        
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';        
		$config['prev_tag_close'] = '</span></li>';        
		$config['next_link'] = '&raquo';        
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';        
		$config['next_tag_close'] = '</span></li>';        
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';        
		$config['last_tag_close'] = '</span></li>';        
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';        
		$config['cur_tag_close'] = '</a></li>';        
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';        
		$config['num_tag_close'] = '</span></li>';
   		/*
     	 	end 
     	 	add boostrap class and styles
   		*/

		$this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data = $this->StudentModel->get_students_data($config['per_page'], $page);
        $links = $this->pagination->create_links();

		$this->load->view('leyout/header.php');
		$this->load->view('student/index.php', ['data' => $data, 'school_data' => $get_school_data, 'get_class_data' => $get_class_data, 'links' => $links]);
		$this->load->view('leyout/footer.php');

	}


	public function show($id)
	{

		$this->load->view('leyout/header.php');
		$this->load->model('StudentModel');
		
		$oStudentModel = new StudentModel();
		$data = $oStudentModel->get_student_data($id);

		$this->load->view('student/show.php', ['data'=> $data]);
		$this->load->view('leyout/footer.php');

	}


	public function edit($id)
	{
		$this->load->view('leyout/header.php');
		$this->load->model('StudentModel');
		
		$oStudentModel = new StudentModel();
		$data = $oStudentModel->get_student_data($id);

		$this->load->view('student/edit.php', ['data' => $data]);
		$this->load->view('leyout/footer.php');
	}


	public function update($id)
	{
		$this->form_validation->set_rules('first_semester_average', 'first_semester_average', 'required');
		$this->form_validation->set_rules('second_semester_average', 'second_semester_average', 'required');
		$this->form_validation->set_rules('annual_average', 'annual_average', 'required');
		if($this->form_validation->run())
		{
			
		$data = [ 
			'first_semester_average' => $this->input->post('first_semester_average'),
			'second_semester_average' => $this->input->post('second_semester_average'),
			'annual_average' => $this->input->post('annual_average')

		];

		$this->load->model('StudentModel');
		$oStudentModel = new StudentModel();
		$data = $oStudentModel->update_student_data($data,$id);
		redirect(base_url('student'));
		}
		else
		{
			$this->edit($id);
		}

	}


	public function searchStudentData()
	{
		$this->load->model('StudentModel');
		$oStudentModel = new StudentModel();
		$get_school_data = $oStudentModel->get_school_data();
		$get_class_data = $oStudentModel->get_class_data();

		$search_data = [
			'school_id' => $this->input->post('search_school_id'),
			'class_id' =>  $this->input->post('search_class_id'),	
			'student' => $this->input->post('search_input_data')
		];
		
        $data = $oStudentModel->search_students_data($search_data);
		$this->load->view('leyout/header.php');
		$this->load->view('student/search_list', ['data'=> $data, 'school_data' => $get_school_data, 'get_class_data' => $get_class_data]);
		$this->load->view('leyout/footer.php');
	}


	public function delete($id)
	{
		$this->load->model('StudentModel');
		$oStudentModel = new StudentModel();
		$oStudentModel->delete_stud_data_item($id);
		redirect(base_url('student'));
	}

}