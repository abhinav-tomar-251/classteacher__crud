<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class ClassteacherModel extends Model{
        protected $table = 'classteachers';
        
        protected $primaryKey = 'id';

        protected $allowedFields = ['Name', 'Age', 'Phone', 'Subject'];

        public function getRecords(){
           return $this->orderBy('id', 'ASEC')->findAll();
        }
       
        public function getRow($id){
            return $this->where('id', $id)->first();
        }

    }
?>