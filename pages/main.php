<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php
    include('./includes/layouts/navigation.php');
    ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-6 col-12">
          <!-- 4 col widget  -->
          <?php
          include('./includes/layouts/4colwidget.php');
          ?>
          <!-- 4 col widget  -->
        </div>
        <div class="col-lg-6 col-12 mt-4 mt-lg-0">
          <?php
          include('./includes/layouts/review.php');
          ?>
        </div>
      </div>
      <div class="row my-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
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
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">

                <?php

                include('./includes/layouts/table.php');

                ?>


              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <!-- docs timeline  -->
          <?php

          include('./includes/layouts/docstimeline.php');

          ?>
          <!-- docs timeline  -->
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <?php
          include('./includes/layouts/notice1.php');
          ?>
        </div>
        <div class="col-lg-5">
          <?php
          include('./includes/layouts/notice2.php');
          ?>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-5 mb-lg-0 mb-4">
          <?php
          include('./includes/layouts/usersanddocs.php');
          ?>
        </div>
        <div class="col-lg-7">
          <div class="card z-index-2">
            notifications should come here
          </div>
        </div>
      </div>
      <?php
      include('./includes/layouts/footer.php');
      ?>
    </div>
  </main>