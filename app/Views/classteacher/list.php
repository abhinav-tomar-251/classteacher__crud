<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Teacher Database</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    
</head>
<body>
    <div class="container-fluid bg-night shadow-lg ">
        <div class="container pb-3 pt-3">
            <div class="text-white h4">Class Teacher Database</div>
        </div>
    </div>
      <div class="bg-white shadow-lg">
        <div class="container">
            <div class="row">
                <nav class="nav nav-underline">
                    <div class="nav-link">Classteacher / View</div>
                </nav>
            </div>
        </div>
      </div>

      <div class="container mt-4">
            <div class="row">
                <div class="col-md-12 d-md-flex justify-content-md-end">
                        <a href="<?php echo base_url('classteacher/add')?>" class="btn btn-primary">+ Add New</a>
                </div>
            </div>
      </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        $session = \Config\Services::session();
                        if(!empty($session->getFlashdata('success'))){
                            ?>
                            <div class="alert alert-success">
                                <?php echo $session->getFlashdata('success'); ?>
                            <?php
                        }
                    ?>

                    <?php
                        $session = \Config\Services::session();
                        if(!empty($session->getFlashdata('error'))){
                            ?>
                            <div class="alert alert-danger">
                                <?php echo $session->getFlashdata('error'); ?>
                            <?php
                        }
                    ?>
                </div>
                <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-night text-white shadow-sm">
                        <div class="card-header-title">
                            Class Teacher List
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>S.no</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Phone No</th>
                                <th>Subject Name</th>
                                <th></th>
                            </tr>

                            <?php 
                                if(!empty($classteacher)){ 
                                foreach($classteacher as $teacher){    
                            ?>

                            <tr>
                                <td><?php echo $teacher['id']; ?></td>
                                <td><?php echo $teacher['Name']; ?></td>
                                <td><?php echo $teacher['Age']; ?></td>
                                <td><?php echo $teacher['Phone']; ?></td>
                                <td><?php echo $teacher['Subject']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('classteacher/edit/'.$teacher['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm" onclick="deleteConfirm('<?php echo $teacher['id']; ?>')">Delete</a>
                                </td>
                            </tr>

                            <?php }
                            } else{ ?>
                                <tr>
                                    <td clospan="6">No Records Found</td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
</body>
</html>

<script>
    function deleteConfirm(id){
        var r = confirm("Are you sure you want to delete this record?");
        if(r == true){
            window.location.href = "<?php echo base_url('classteacher/delete/'); ?>"+id;
        }
    }
</script>