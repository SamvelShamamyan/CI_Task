<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SeederController extends CI_Controller {


       public function runSeeder(){  

        $this->load->model('SeederModel');
        $oSeederModel = new SeederModel();
        $oSeederModel->insert_school_table_data();
        $oSeederModel->insert_class_table_data();
        $oSeederModel->insert_student_grades_table_data();

        echo "Seed data inserted successfully.";

    }

}