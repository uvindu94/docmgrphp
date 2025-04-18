<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php
    include('./includes/layouts/navigation.php');
    ?>
    <div class="container-fluid py-4">
        <div class="row">

            <div class="col-lg-6 col-12">

                <div class="card"></div>

                <h4>Add New Document</h4>
                <form action="" method="post" id="document_upload_form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="company" class="form-label">Select Project</label>
                        <select name="company" id="company" class="form-control" required>
                            <option value="">Select Company</option>
                            <?php
                            foreach ($projects as $project) {
                                # code...
                                echo '<option value="' . $project['id'] . '">Company : ' . $project['name'] . '   | Sales ofc:' . $project['sales_officer'] . ' </option>';
                            }
                            ?>


                            <!-- Add dynamic company list here -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="document_name" class="form-label">Document Name</label>
                        <input type="text" name="document_name" id="document_name" class="form-control" placeholder="Enter Document Title" required>
                    </div>

                    <div class="form-group">
                        <label for="document_file" class="form-label">Upload Document</label>
                        <input type="file" name="document_file" id="document_file" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="document_category" class="form-label">Document Category</label>
                        <select name="document_category" id="document_category" class="form-control" required>
                            <option value="">Select Category</option>

                            <?php

                            foreach ($doc_cats as $doc_cat) {
                                # code...
                                echo '<option value="' . $doc_cat['id'] . '">' . $doc_cat['catname'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Upload Document">
                    </div>
                </form>

                <!-- 4 col widget  -->
            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0">

                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Documents</h6>
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
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Company & Doc</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sales Officer</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    foreach ($all_docs as $doc) {
                                        # code...


                                        echo '
                                        <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/docicon.png" class="avatar avatar-sm me-3" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">'.$doc['doc_name'].'</h6>
                                                    <p class="text-xs text-secondary mb-0">'.$doc['name'].'</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">'.$doc['so_name'].'</p>
                                            <p class="text-xs text-secondary mb-0">Sales Officer</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-warning">'.$doc['catname'].'</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">'.$doc['created_at'].'</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="'.$doc['path'].'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" contenteditable="false" style="cursor: pointer;">
                                                View
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

<script src="./assets/js/registercompany.js"></script>
<script src="./assets/js/upload_document.js"></script>

<script>
    $(document).ready(function() {
        $('#companies').DataTable();
    });
</script>