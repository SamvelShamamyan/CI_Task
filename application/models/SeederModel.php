<?php

class SeederModel extends CI_Model {


    public function insert_school_table_data(){

        $data = array(
           
            array(
                'name' => 'Երևանի Ավ.Իսահակյանի անվան թիվ 16 ավագ դպրոց',
            ),

            array(
                'name' => 'Երևանի Լեոյի անվան թիվ 65 ավագ դպրոց',
            ),
            
            array(
                'name' => 'Երևանի Ա. Երզնկյանի անվան թիվ 118 ավագ դպրոց',
            ),
        );

        $this->db->insert_batch('school', $data);
    }


    public function insert_class_table_data(){
    
        $data = array(
           
            array(
                'name' => 'A 1',
            ),

            array(
                'name' => 'B 1',
            ),
            
            array(
                'name' => 'C 1',
            ),
        );

        $this->db->insert_batch('class', $data);
    }

   
    public function insert_student_grades_table_data(){
        
        $data = array(
           
            array(
                'student' => 'Lucas Clark',
                'first_semester_average' => 4.5,
                'second_semester_average' => 4.5,
                'annual_average' => 9,
                'school_id' => 1,
                'class_id' => 1
            ),

            array(
                'student' => 'Isabella Martinez',
                'first_semester_average' => 4.5,
                'second_semester_average' => 4.5,
                'annual_average' => 9,
                'school_id' => 2,
                'class_id' => 2
            ),
            
            array(
                'student' => 'Amelia Lewis',
                'first_semester_average' => 4.5,
                'second_semester_average' => 4.5,
                'annual_average' => 9,
                'school_id' => 3,
                'class_id' => 3
            ),

            array(
                'student' => 'Liam Smith',
                'first_semester_average' => 4.5,
                'second_semester_average' => 4.5,
                'annual_average' => 9,
                'school_id' => 1,
                'class_id' => 2
            ),

            array(
                'student' => 'Michael Green',
                'first_semester_average' => 4.5,
                'second_semester_average' => 4.5,
                'annual_average' => 9,
                'school_id' => 1,
                'class_id' => 3
            ),
            

        );

        $this->db->insert_batch('student_grades', $data);
    }

}


