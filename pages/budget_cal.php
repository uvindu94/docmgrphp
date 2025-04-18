<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php
    include('./includes/layouts/navigation.php');
    ?>
    <div class="container-fluid py-4">


        <div class="row">
            <div class="column col-lg-6 col-12">


                <div id="form-main">
                    <div id="form-div">
                        <form id="form1" method="post">
                            <div class="form-group">
                                <label for="name" class="form-label">Company Name</label>
                                <input
                                    name="name"
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    placeholder="Company Name"
                                    value="<?php if (isset($_POST['name'])) {
                                                echo $_POST['name'];
                                            } ?>"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="devcost" class="form-label">Developing Cost</label>
                                <input
                                    name="devcost"
                                    type="number"
                                    step="0.01"
                                    class="form-control"
                                    id="devcost"
                                    placeholder="Developing Cost"
                                    value="<?php if (isset($_POST['devcost'])) {
                                                echo $_POST['devcost'];
                                            } ?>"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="server_cost" class="form-label">Server Cost</label>
                                <input
                                    name="server_cost"
                                    type="number"
                                    step="0.01"
                                    class="form-control"
                                    id="server_cost"
                                    placeholder="Server Cost"
                                    value="<?php if (isset($_POST['server_cost'])) {
                                                echo $_POST['server_cost'];
                                            } ?>"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="ssl" class="form-label">SSCL Type</label>
                                <select id="ssl" name="ssl" class="form-control" required>
                                    <option value="">None</option>
                                    <option value="ssl_to_dev">Add SSCL to Developing Cost</option>
                                    <option value="ssl_seperate">Add SSCL Separately (PSM)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Check Values" class="btn btn-primary">
                            </div>
                        </form>

                    </div>
                </div>


            </div>


            <div class="column col-lg-6 col-12">



                <?php

                if (isset($_POST['name'])) {
                    extract($_POST);

                    $ssl_rate = 0.025641;

                    if ($ssl == 'ssl_to_dev') {
                        // code...
                        $ssl_fee = ($devcost + $server_cost) * $ssl_rate;
                        $final_dev_cost = $devcost + $ssl_fee;    // developing final cost

                        $tot_without_tax = $final_dev_cost + $server_cost; //this is tot without tax


                        $vat_18 = $tot_without_tax * 0.18;  //this vat ammount

                        $tot_with_tax = $tot_without_tax + $vat_18; //tot with tax

                    } else {


                        // code...
                        //ssl is direct
                        //dev cost is dev cost    // developing final cost

                        $final_dev_cost = $devcost;


                        $tot_without_tax = $devcost + $server_cost; //this is tot without tax

                        $ssl_fee = ($tot_without_tax) * $ssl_rate;


                        $vat_18 = ($tot_without_tax + $ssl_fee) * 0.18;  //this vat ammount

                        $tot_with_tax = $tot_without_tax + $vat_18 + $ssl_fee; //tot with tax

                    }

                    // echo "Submited";
                }

                ?>

                <div id="form-main">

                    <?php
                    if (isset($_POST['name'])) {
                    ?>
                        <div id="form-div">
                            <h2 class="result">Company Name: <?php echo $name; ?></h2>
                            <br>
                            <br>
                            <table>
                                <tr>
                                    <td><?php echo $name ?>– Website Development</td>
                                    <td>LKR <?php
                                            $formatted_number = number_format($final_dev_cost, 2, '.', ',');
                                            echo $formatted_number;
                                            ?></td>
                                </tr>
                                <tr>
                                    <td>Server with cPanel</td>
                                    <td>LKR <?php
                                            $formatted_number = number_format($server_cost, 2, '.', ',');
                                            echo $formatted_number;
                                            ?></td>
                                </tr>

                                <tr>
                                    <td>Total without tax</td>
                                    <td>LKR <?php
                                            $formatted_number = number_format($tot_without_tax, 2, '.', ',');
                                            echo $formatted_number;
                                            ?></td>
                                </tr>


                                <tr>
                                    <td>VAT (18%)</td>
                                    <td>LKR <?php
                                            $formatted_number = number_format($vat_18, 2, '.', ',');
                                            echo $formatted_number;
                                            ?></td>
                                </tr>

                                <?php

                                if ($ssl == 'ssl_seperate') {

                                    echo '<tr>';
                                    echo '<td>SSCL (2.5%)</td>';
                                    echo '<td>LKR ';
                                    $formatted_number = number_format($ssl_fee, 2, '.', ',');
                                    echo $formatted_number;
                                    echo '</td>';
                                    echo '</tr>';
                                    // code...
                                } else {
                                }


                                ?>

                                <tr>
                                    <td>Total with tax</td>
                                    <td>LKR <?php
                                            $formatted_number = number_format($tot_with_tax, 2, '.', ',');
                                            echo $formatted_number;
                                            ?></td>
                                </tr>
                            </table>
                            <br>
                            <h3 class="result">Second Year Renewel</h3>

                            <!--for amc charges-->
                            <table>
                                <tr>
                                    <td>Server with cPanel</td>
                                    <td>LKR <?php
                                            $formatted_number = number_format($server_cost, 2, '.', ',');
                                            echo $formatted_number;
                                            ?></td>
                                </tr>

                                <tr>
                                    <td>Annual Maintenance Contract (AMC)</td>
                                    <td>LKR <?php
                                            $amc = $final_dev_cost * 0.2;
                                            $formatted_number = number_format($amc, 2, '.', ',');
                                            echo $formatted_number;

                                            $total_amc = $amc + $server_cost;
                                            ?></td>
                                </tr>

                                <tr>
                                    <td>Total</td>
                                    <td>LKR <?php
                                            $formatted_number = number_format($total_amc, 2, '.', ',');
                                            echo $formatted_number;
                                            ?></td>
                                </tr>
                                <!--for amc charges-->


                        </div>
                </div>

            <?php

                    } else {
                        echo 'No result found';
                    }

            ?>





            </div>

        </div>



    </div>




    <!-- End Navbar -->
    <div>

    </div>

    </div>
    <?php
    // include('./includes/layouts/footer.php');
    ?>
</main>

<script src="./assets/js/registercompany.js"></script>

<script>
    $(document).ready(function() {
        $('#companies').DataTable();
    });
</script>