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
                        <label for="company" class="form-label">Select Company</label>
                        <select name="company" id="company" class="form-control" required>
                            <option value="">Select Company</option>
                            <option value="1">ABC Pvt Ltd</option>
                            <option value="2">XYZ Enterprises</option>
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
                            <option value="proposal">Proposal</option>
                            <option value="quotation">Quotation</option>
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
                                <h6>Projects</h6>
                                <p class="text-sm mb-0">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <span class="font-weight-bold ms-1">30 done</span> this month
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
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                                            <p class="text-xs text-secondary mb-0">Organization</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Online</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" contenteditable="false" style="cursor: pointer;">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                                    <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Programator</p>
                                            <p class="text-xs text-secondary mb-0">Developer</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" contenteditable="false" style="cursor: pointer;">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                                    <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Executive</p>
                                            <p class="text-xs text-secondary mb-0">Projects</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Online</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" contenteditable="false" style="cursor: pointer;">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Michael Levi</h6>
                                                    <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Programator</p>
                                            <p class="text-xs text-secondary mb-0">Developer</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Online</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" contenteditable="false" style="cursor: pointer;">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Richard Gran</h6>
                                                    <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                                            <p class="text-xs text-secondary mb-0">Executive</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" contenteditable="false" style="cursor: pointer;">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                                    <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Programtor</p>
                                            <p class="text-xs text-secondary mb-0">Developer</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" contenteditable="false" style="cursor: pointer;">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
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

<script>
    $(document).ready(function() {
        $('#companies').DataTable();
    });
</script>