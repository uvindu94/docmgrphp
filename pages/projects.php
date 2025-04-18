<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php
    include('./includes/layouts/navigation.php');


    ?>
    <div class="container-fluid py-4">
        <div class="row">

            <div class="col-lg-6 col-12">

                <div class="card"></div>

                <h4>Register New Project</h4>
                <!-- 4 col widget  -->
                <form action="" method="post" id="company_reg">
                    <div class="form-group">
                        <label for="search" class="form-label">Project Name</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Company Name" required>
                    </div>

                    <div class="form-group">
                        <label for="search" class="form-label">Company e-Mail</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Company email" required>
                    </div>

                    <div class="form-group">
                        <label for="search" class="form-label">Company Contact</label>
                        <input type="number" name="contact" id="contact" class="form-control" placeholder="Enter Company Contact Number" required>
                    </div>

                    <div class="form-group">
                        <label for="search" class="form-label">Select Sales Officer</label>
                        <select name="sales_officer" id="sales_officer" class="form-control" required>
                            <option value="">Select Sales Officer</option>

                            <?php

                            foreach ($sales_officer as $officer) {
                                # code...
                                echo '<option value="' . $officer['id'] . '">' . $officer['name'] . ' ( ' . $officer['contact'] . ' ) </option>';
                            }
                            ?>

                        </select>

                    </div>


                    <div class="form-group">
                        <label for="search" class="form-label">Main Developer</label>
                        <select name="developer" id="developer" class="form-control" required>
                            <option value="">Select Main Developer</option>
                            <?php

                            foreach ($developers as $developer) {
                                # code...
                                echo '<option value="' . $developer['id'] . '">' . $developer['name'] . ' ( ' . $developer['contact'] . ' )</option>';
                            }
                            ?>
                        </select>

                    </div>


                    <div class="form-group">
                        <label for="remind_date" class="form-label">
                            Project Start Date <small class="text-muted">(Optional — you can update this later if the project starts in the future)</small>
                        </label> <input type="date" name="start_date" id="start_date" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Register Company">
                    </div>

                </form>
                <!-- 4 col widget  -->
            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0">

                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Projects</h6>
                                <p class="text-sm mb-0">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <!-- <span class="font-weight-bold ms-1">30 done</span> this month -->
                                </p>
                            </div>
                            <div class="col-lg-6 col-5 my-auto text-end">
                                <div class="dropdown float-lg-end pe-4">
                                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false" contenteditable="false" style="cursor: pointer;">
                                        <i class="fa fa-ellipsis-v text-secondary"></i>
                                    </a>
                                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;" contenteditable="false" style="cursor: pointer;">Action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;" contenteditable="false" style="cursor: pointer;">Another action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;" contenteditable="false" style="cursor: pointer;">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">

                            <table class="table align-items-center mb-0" id="companies">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project / SO</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">contact</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sales Ofc</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Developer</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Started</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php


                                    foreach ($projects as $project) {
                                        # code...

                                        if($project['project_start_date']=="")
                                        {
                                            $label="warning";
                                            $txt="Pending";
                                        }
                                        elseif($project['active']==1)
                                        {
                                            $label="success";
                                            $txt="Active";
                                        }
                                        else
                                        {
                                            $label="danger";    
                                            $txt="Inactive";
                                        }


                                        echo '
                                
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">'.$project['name'].'</h6>
                                                    <p class="text-xs text-secondary mb-0">'.$project['email'].'</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">'.$project['contact'].'</p>
                                            <p class="text-xs text-secondary mb-0">Organization</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">'.$project['sales_officer'].'</p>
                                            <p class="text-xs text-secondary mb-0">Sales Ofc</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">'.$project['developer'].'</p>
                                            <p class="text-xs text-secondary mb-0">Developer</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-'.$label.'">'.$txt.'</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">'.$project['project_start_date'].'</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="./dashboard?page=projects&project='.$project['id'].'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" contenteditable="false" style="cursor: pointer;">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    
                                
                                ';
                                    }
                                    ?>



                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>



        </div>

    </div>






    <!-- End Navbar -->
    <div>


    </div>
    <?php
    include('./includes/layouts/footer.php');
    ?>
</main>

<script src="./assets/js/registerproject.js"></script>

<script>
    $(document).ready(function() {
        $('#companies').DataTable();
    });
</script>