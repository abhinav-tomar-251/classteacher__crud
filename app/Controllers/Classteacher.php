<?php 
    namespace App\Controllers;
    use App\Models\ClassteacherModel;


    class Classteacher extends BaseController{


        public function index(){
            $session = \Config\Services::session();
            $data['session'] = $session;

            $model = new ClassteacherModel();
            $teachers = $model->getRecords();

            $data['classteacher'] = $teachers;

            return view('classteacher/list', $data);
        }

        public function add(){
            $session = \Config\Services::session();
            helper('form');

            $data = [];

            if($this->request->getMethod() == 'post'){
                $input = $this->validate([
                    'name' => 'required',
                    'age' => 'required',
                    'phone-no' => 'required|max_length[10]',
                    'subject-name' => 'required',
                ]);

                if($input == true){
                    //Form Validation Success
                    $model = new ClassteacherModel();

                    $model->save([
                        'Name' => $this->request->getPost('name'),
                        'Age' => $this->request->getPost('age'),
                        'Phone' => $this->request->getPost('phone-no'),
                        'Subject' => $this->request->getPost('subject-name'),
                    ]);
                      
                    $session->setFlashdata('success', 'Class Teacher Added Successfully');
                    return redirect()->to(base_url('/classteacher'));

                }else{
                    //Form Validation Failure

                   
                }
            }
            return view('classteacher/add', $data);
        }

        public function edit($id){
            $session = \Config\Services::session();
            helper('form');

            $model = new ClassteacherModel();
            $classteacher = $model->getRow($id);

            if(empty($classteacher)){
                $session->setFlashdata('error', 'Record Not Found');
                return redirect()->to('/classteacher');
            }

            $data = [];
            $data['classteacher'] = $classteacher;

            if($this->request->getMethod() == 'post'){
                $input = $this->validate([
                    'name' => 'required',
                    'age' => 'required',
                    'phone-no' => 'required|max_length[10]',
                    'subject-name' => 'required',
                ]);

                if($input == true){
                    //Form Validation Success
                    $model = new ClassteacherModel();

                    $model->update($id,[
                        'Name' => $this->request->getPost('name'),
                        'Age' => $this->request->getPost('age'),
                        'Phone' => $this->request->getPost('phone-no'),
                        'Subject' => $this->request->getPost('subject-name'),
                    ]);
                      
                    $session->setFlashdata('success', 'Record Updated Successfully');
                    return redirect()->to(base_url('/classteacher'));

                }else{
                    //Form Validation Failure

                   
                }
            }
            return view('classteacher/edit', $data);
        }

        public function delete($id) {
            $session = \Config\Services::session();
            $model = new ClassteacherModel();
            
            // Convert $id to integer
            $id = intval($id);
            
            $classteacher = $model->getRow($id);
        
            if (empty($classteacher)) {
                $session->setFlashdata('error', 'Record Not Found');
            } else {
                $model->delete($id);
                $session->setFlashdata('success', 'Record Deleted Successfully');
            }
        
            return redirect()->to(site_url('/classteacher'));
        }
        
        
    }
?>