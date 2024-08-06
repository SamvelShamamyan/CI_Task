<?php

class StudentModel extends CI_Model {

    public function get_students_data($limit, $start)
    {
        $this->db->select('student_grades.id AS id, student_grades.student AS student, student_grades.first_semester_average AS first_semester_average, student_grades.second_semester_average AS second_semester_average, student_grades.annual_average AS annual_average,school.name AS school_name, class.name AS class_name');
        $this->db->from('student_grades');
        $this->db->join('school', 'student_grades.school_id = school.id', 'left');
        $this->db->join('class', 'student_grades.class_id = class.id', 'left');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result_array(); 
    }


    
    public function get_total_students() {
        return $this->db->count_all('student_grades');
    }
    

    public function get_student_data($id) 
    {
        $query = $this->db->get_where('student_grades', array('id' => $id));
        return $query->row_array();
    
    }

    public function update_student_data($data,$id)
    {
       return  $this->db->update('student_grades', $data, ['id' => $id]);
    }


    public function search_students_data($search_data) 
    {
        
        $this->db->select('student_grades.id AS id, student_grades.student AS student, student_grades.first_semester_average AS first_semester_average, student_grades.second_semester_average AS second_semester_average, student_grades.annual_average AS annual_average,student_grades.school_id AS school_id,student_grades.class_id AS class_id, school.name AS school_name, class.name AS class_name');
        $this->db->from('student_grades');
        $this->db->join('school', 'student_grades.school_id = school.id', 'left');
        $this->db->join('class', 'student_grades.class_id = class.id', 'left');
      
        if (!empty($search_data['student'])) {
            $this->db->where('student_grades.student LIKE', '%' . $search_data['student'] . '%');
        }
        
        if (!empty($search_data['school_id'])) {
            $this->db->where('student_grades.school_id LIKE', $search_data['school_id']);
        }
        
        if (!empty($search_data['class_id'])) {
            $this->db->where('student_grades.class_id LIKE', $search_data['class_id']);
        }

        $query = $this->db->get();
        return $query->result_array();
    }




    public function get_school_data()
    {
        $query = $this->db->get('school');
        return $query->result_array();
    }

    public function get_class_data()
    {
        $query = $this->db->get('class');
        return $query->result_array();
    }



    public function delete_stud_data_item($id){
        $this->db->where('id', $id);
        return $this->db->delete('student_grades');
    }
    

}


