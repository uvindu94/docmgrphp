<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php
    include('./includes/layouts/navigation.php');
    ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">

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

                    <table class="table align-items-center mb-0" id="sales_ofc">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Office</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contact</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>

                            </tr>
                        </thead>
                        <tbody>


                            <?php

                            foreach ($sales_officer as $officer) {
                                # code...

                                echo '
                    
                    
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="./assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">'.$officer['name'].'</h6>
                                            <p class="text-xs text-secondary mb-0">Sales Executive</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">SLT</p>
                                    <p class="text-xs text-secondary mb-0">Digital Services</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-lg bg-gradient-primary">'.$officer['contact'].'</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">'.$officer['email'].'</span>
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

        <?php
        include('./includes/layouts/footer.php');
        ?>
    </div>
</main>

<script>
    $(document).ready(function() {
        $('#sales_ofc').DataTable();
    });
</script>