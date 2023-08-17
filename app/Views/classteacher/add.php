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
                        <a href="" class="btn btn-primary">Back</a>
                </div>
            </div>
      </div>

        <div class="container mt-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-night text-white shadow-sm">
                            <div class="card-header-title">
                                Add New Class Teacher Entry
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="createForm" name=createForm method="post">
                                <div class="form-group mt-2">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control mt-1 <?php echo (isset($validation) && $validation->hasError('name')) ? 'is-invalid' : ''; ?> " value="">

                                    <?php
                                        if(isset($validation) && $validation->hasError('name'))
                                            echo '<p class="invalid-feedback">'.$validation->getError('name').'</p>';
                                    ?>
                                </div> 
                                <div class="form-group mt-2">
                                    <label for="age">Age</label>
                                    <input type="number" name="age" id="age" placeholder="Enter Age" class="form-control mt-1 <?php echo (isset($validation) && $validation->hasError('age')) ? 'is-invalid' : ''; ?> " value="">

                                    <?php
                                        if(isset($validation) && $validation->hasError('age'))
                                            echo '<p class="invalid-feedback">'.$validation->getError('age').'</p>';
                                    ?>
                                </div> 
                                <div class="form-group mt-2">
                                    <label for="phone-no">Phone No</label>
                                    <input type="tel" name="phone-no" id="phone-no" placeholder="Enter Phone No" class="form-control mt-1 <?php echo (isset($validation) && $validation->hasError('phone-no')) ? 'is-invalid' : ''; ?> " value="">

                                    <?php
                                        if(isset($validation) && $validation->hasError('phone-no'))
                                            echo '<p class="invalid-feedback">'.$validation->getError('phone-no').'</p>';
                                    ?>
                                </div> 
                                <div class="form-group mt-2">
                                    <label for="subject-name">Subject Name</label>
                                    <input type="text" name="subject-name" id="subject-name" placeholder="Enter Subject Name" class="form-control mt-1 <?php echo (isset($validation) && $validation->hasError('subject-name')) ? 'is-invalid' : ''; ?> " value="">

                                    <?php
                                        if(isset($validation) && $validation->hasError('subject-name'))
                                            echo '<p class="invalid-feedback">'.$validation->getError('subject-name').'</p>';
                                    ?>
                                </div> 
                    
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
