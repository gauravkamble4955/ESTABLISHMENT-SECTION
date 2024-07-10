<?php include('includes/header.php') ?>
<?php include('../includes/session.php') ?>

<body>
    <!-- <div class="pre-loader">
        <div class="pre-loader-box">
        <div class="loader-logo"><img src="../vendors/images/favicon-32x32.png" alt="" style="height: 100px; width: 100px;"></div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div> -->

    <?php include('includes/navbar.php') ?>
    <?php include('includes/right_sidebar.php') ?>
    <?php include('includes/left_sidebar.php') ?>

    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <div class="profile-setting">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Aadhar PDF</label>
                        <div class="aadhar-photo">
                            <?php
                            if (isset($_POST["update_aadhar"])) {
                                $aadhar_name = $_FILES['image']['name'];
                                if (!empty($aadhar_name)) {
                                    move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/aadhar/' . $aadhar_name);
                                    $aadhar_pdf = $aadhar_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set aadhar_pdf='$aadhar_pdf' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('Aadhar PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php'; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#aadhar_modal" data-toggle="modal" data-target="#aadhar_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['aadhar_pdf'])) ? '../uploads/aadhar/' . $row['aadhar_pdf'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="aadhar_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image" id="aadhar_file" type="file" class="custom-file-input" onchange="validateAadharImage('aadhar_file')">
                                                        <label class="custom-file-label" for="aadhar_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_aadhar" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Pan Card PDF</label>
                        <div class="pan-photo">
                            <?php
                            if (isset($_POST["update_pan"])) {
                                $pan_name = $_FILES['image1']['name'];
                                if (!empty($pan_name)) {
                                    move_uploaded_file($_FILES['image1']['tmp_name'], '../uploads/Pan/' . $pan_name);
                                    $pan_pdf = $pan_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set pan_pdf='$pan_pdf' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('Pan Card PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#pan_modal" data-toggle="modal" data-target="#pan_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['pan_pdf'])) ? '../uploads/Pan/' . $row['pan_pdf'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="pan_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image1" id="pan_file" type="file" class="custom-file-input" onchange="validatePanImage('pan_file')">
                                                        <label class="custom-file-label" for="pan_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_pan" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Passbook Pdf(First Page)</label>
                        <div class="passbook-photo">
                            <?php
                            if (isset($_POST["update_passbook"])) {
                                $passbook_name = $_FILES['image190']['name'];
                                if (!empty($passbook_name)) {
                                    move_uploaded_file($_FILES['image190']['tmp_name'], '../uploads/passbook/' . $passbook_name);
                                    $passbook = $passbook_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set passbook='$passbook' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('Passbook PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#passbook_modal" data-toggle="modal" data-target="#passbook_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['passbook'])) ? '../uploads/passbook/' . $row['passbook'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="passbook_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image190" id="passbook_file" type="file" class="custom-file-input" onchange="validatePassbookImage('passbook_file')">
                                                        <label class="custom-file-label" for="passbook_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_passbook" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- caste certificate -->
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Caste Certificate PDF</label>
                        <div class="caste-photo">
                            <?php
                            if (isset($_POST["update_caste"])) {
                                $caste_name = $_FILES['image12']['name'];
                                if (!empty($caste_name)) {
                                    move_uploaded_file($_FILES['image12']['tmp_name'], '../uploads/caste/' . $caste_name);
                                    $caste_crf = $caste_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set caste_crf='$caste_crf' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('Caste Certificate PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#caste_modal" data-toggle="modal" data-target="#caste_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['caste_crf'])) ? '../uploads/caste/' . $row['caste_crf'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="caste_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image12" id="caste_file" type="file" class="custom-file-input" onchange="validateCasteImage('caste_file')">
                                                        <label class="custom-file-label" for="caste_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_caste" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Caste Validity -->
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Caste Validity PDF</label>
                        <div class="casteval-photo">
                            <?php
                            if (isset($_POST["update_casteval"])) {
                                $casteval_name = $_FILES['image178']['name'];
                                if (!empty($castvale_name)) {
                                    move_uploaded_file($_FILES['image178']['tmp_name'], '../uploads/caste_validity1/' . $casteval_name);
                                    $caste_validity = $casteval_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set caste_validity='$caste_validity' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('Caste validity Certificate PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#casteval_modal" data-toggle="modal" data-target="#casteval_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['caste_validity'])) ? '../uploads/caste_validity1/' . $row['caste_validity'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="casteval_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image178" id="casteval_file" type="file" class="custom-file-input" onchange="validateCasteValImage('casteval_file')">
                                                        <label class="custom-file-label" for="casteval_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_casteval" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- domacile -->
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Domaile PDF</label>
                        <div class="domacile-photo">
                            <?php
                            if (isset($_POST["update_domacile"])) {
                                $domacile_name = $_FILES['image90']['name'];
                                if (!empty($domacile_name)) {
                                    move_uploaded_file($_FILES['image90']['tmp_name'], '../uploads/domacile/' . $domacile_name);
                                    $domacile = $domacile_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set domacile='$domacile' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('Domacile PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#domacile_modal" data-toggle="modal" data-target="#domacile_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['domacile'])) ? '../uploads/domacile/' . $row['domacile'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="domacile_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image90" id="domacile_file" type="file" class="custom-file-input" onchange="validateDomacileImage('domacile_file')">
                                                        <label class="custom-file-label" for="domacile_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_domacile" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>SSC Mark Sheet PDF</label>
                        <div class="ssc-photo">
                            <?php
                            if (isset($_POST["update_ssc"])) {
                                $ssc_name = $_FILES['image2']['name'];
                                if (!empty($ssc_name)) {
                                    move_uploaded_file($_FILES['image2']['tmp_name'], '../uploads/SSC/' . $ssc_name);
                                    $ssc_pdf = $ssc_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set ssc_pdf='$ssc_pdf' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('SSC MarkSheet PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#ssc_modal" data-toggle="modal" data-target="#ssc_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['ssc_pdf'])) ? '../uploads/SSC/' . $row['ssc_pdf'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="ssc_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image2" id="ssc_file" type="file" class="custom-file-input" onchange="validateImage('ssc_file')">
                                                        <label class="custom-file-label" for="ssc_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_ssc" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- HSC marksheet -->
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>HSC Mark Sheet PDF</label>
                        <div class="hsc-photo">
                            <?php
                            if (isset($_POST["update_hsc"])) {
                                $hsc_name = $_FILES['image3']['name'];
                                if (!empty($hsc_name)) {
                                    move_uploaded_file($_FILES['image3']['tmp_name'], '../uploads/HSC/' . $hsc_name);
                                    $hsc_pdf = $hsc_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set hsc_pdf='$hsc_pdf' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('HSC MarkSheet PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#hsc_modal" data-toggle="modal" data-target="#hsc_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['hsc_pdf'])) ? '../uploads/HSC/' . $row['hsc_pdf'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="hsc_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image3" id="hsc_file" type="file" class="custom-file-input" onchange="validateHscImage('hsc_file')">
                                                        <label class="custom-file-label" for="hsc_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_hsc" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Diploma MarkSheet PDF</label>
                        <div class="diploma-photo">
                            <?php
                            if (isset($_POST["update_dmark"])) {
                                $dmark_name = $_FILES['image130']['name'];
                                if (!empty($dmark_name)) {
                                    move_uploaded_file($_FILES['image130']['tmp_name'], '../uploads/dip_marksheet/' . $dmark_name);
                                    $diploam_mrk = $dmark_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set diploma_mrk='$diploma_mrk' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('Diploma MarkSheet PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#dmark_modal" data-toggle="modal" data-target="#dmark_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['diploma_mrk'])) ? '../uploads/dip_marksheet/' . $row['diploma_mrk'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="dmark_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image130" id="dmark_file" type="file" class="custom-file-input" onchange="validateDiplomaImage('dmark_file')">
                                                        <label class="custom-file-label" for="dmark_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_dmark" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- diploma certificate -->
                <!-- <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Diploma Certificate PDF</label>
                        <div class="diplomacerf-photo">
                            <?php
                            if (isset($_POST["update_dcerf"])) {
                                $dcerf_name = $_FILES['image290']['name'];
                                if (!empty($dcerf_name)) {
                                    move_uploaded_file($_FILES['image290']['tmp_name'], '../uploads/dip_certificate/' . $dcerf_name);
                                    $diploma_crf = $dcerf_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set diploma_crf='$diploma_crf' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('Diploma certificate Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#dcerf_modal" data-toggle="modal" data-target="#dcerf_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['diploma_crf'])) ? '../uploads/dip_certificate/' . $row['diploma_crf'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="dcerf_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image290" id="dcerf_file" type="file" class="custom-file-input" onchange="validateDcerfImage('dcerf_file')">
                                                        <label class="custom-file-label" for="dcerf_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_dcerf" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="row">
                <!-- be marksheet -->
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>UG Mark Sheet PDF</label>
                        <div class="be-photo">
                            <?php
                            if (isset($_POST["update_be"])) {
                                $be_name = $_FILES['image4']['name'];
                                if (!empty($be_name)) {
                                    move_uploaded_file($_FILES['image4']['tmp_name'], '../uploads/BE_marksheet/' . $be_name);
                                    $be_pdf = $be_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set be_pdf='$be_pdf' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('UG MarkSheet PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#be_modal" data-toggle="modal" data-target="#be_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['be_pdf'])) ? '../uploads/BE_marksheet/' . $row['be_pdf'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="be_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image4" id="be_file" type="file" class="custom-file-input" onchange="validateBeImage('be_file')">
                                                        <label class="custom-file-label" for="be_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_be" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>UG Certificate PDF</label>
                        <div class="be-photo">
                            <?php
                            if (isset($_POST["update_becer"])) {
                                $becer_name = $_FILES['image41']['name'];
                                if (!empty($becer_name)) {
                                    move_uploaded_file($_FILES['image41']['tmp_name'], '../uploads/be_certificate/' . $becer_name);
                                    $be_crf = $becer_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set be_crf='$be_crf' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('UG Certificate PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#becer_modal" data-toggle="modal" data-target="#becer_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['be_crf'])) ? '../uploads/be_certificate/' . $row['be_crf'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="becer_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image41" id="becer_file" type="file" class="custom-file-input" onchange="validateBeCerImage('becer_file')">
                                                        <label class="custom-file-label" for="becer_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_becer" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- pg  -->
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>PG Mark Sheet PDF</label>
                        <div class="pg-photo">
                            <?php
                            if (isset($_POST["update_pg"])) {
                                $pg_name = $_FILES['image5']['name'];
                                if (!empty($pg_name)) {
                                    move_uploaded_file($_FILES['image5']['tmp_name'], '../uploads/PG_marksheet/' . $pg_name);
                                    $pg_pdf = $pg_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set pg_pdf='$pg_pdf' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('PG MarkSheet PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#pg_modal" data-toggle="modal" data-target="#pg_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['pg_pdf'])) ? '../uploads/PG_marksheet/' . $row['pg_pdf'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="pg_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image5" id="pg_file" type="file" class="custom-file-input" onchange="validatePgImage('pg_file')">
                                                        <label class="custom-file-label" for="pg_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_pg" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>PG Certificate PDF</label>
                        <div class="pg-photo">
                            <?php
                            if (isset($_POST["update_pgcer"])) {
                                $pgcer_name = $_FILES['image51']['name'];
                                if (!empty($pgcer_name)) {
                                    move_uploaded_file($_FILES['image51']['tmp_name'], '../uploads/PG_certificate/' . $pgcer_name);
                                    $pg_crf = $pgcer_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set pg_crf='$pg_crf' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('PG Certificate PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#pgcer_modal" data-toggle="modal" data-target="#pgcer_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['pg_crf'])) ? '../uploads/PG_certificate/' . $row['pg_crf'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="pgcer_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image51" id="pgcer_file" type="file" class="custom-file-input" onchange="validatePgCerImage('pgcer_file')">
                                                        <label class="custom-file-label" for="pgcer_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_pgcer" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- phd -->
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>PHD Mark Sheet PDF</label>
                        <div class="phd-photo">
                            <?php
                            if (isset($_POST["update_phd"])) {
                                $phd_name = $_FILES['image6']['name'];
                                if (!empty($phd_name)) {
                                    move_uploaded_file($_FILES['image6']['tmp_name'], '../uploads/PHD_marksheet/' . $phd_name);
                                    $phd_pdf = $phd_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set phd_pdf='$phd_pdf' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('PHD MarkSheet PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#phd_modal" data-toggle="modal" data-target="#phd_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['phd_pdf'])) ? '../uploads/PHD_marksheet/' . $row['phd_pdf'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="phd_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image6" id="phd_file" type="file" class="custom-file-input" onchange="validatePhdImage('phd_file')">
                                                        <label class="custom-file-label" for="phd_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_phd" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>PHD Certificate PDF</label>
                        <div class="phd-photo">
                            <?php
                            if (isset($_POST["update_phdcer"])) {
                                $phdcer_name = $_FILES['image61']['name'];
                                if (!empty($phdcer_name)) {
                                    move_uploaded_file($_FILES['image61']['tmp_name'], '../uploads/PHD_certificate/' . $phdcer_name);
                                    $phd_crf = $phdcer_name;
                                } else {
                                    echo "<script>alert('Please Select PDF to Update');</script>";
                                }

                                $result = mysqli_query($conn, "update tblemployees set phd_crf='$phd_crf' where emp_id='$session_id'") or die(mysqli_error());
                                if ($result) {
                                    echo "<script>alert('PHD Certificate PDF Updated');</script>";
                                    echo "<script type='text/javascript'> document.location = 'principal_doc.php
                                    '; </script>";
                                } else {
                                    die(mysqli_error());
                                }
                            }
                            ?>
                            <a href="#phdcer_modal" data-toggle="modal" data-target="#phdcer_modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <iframe src="<?php echo (!empty($row['phd_crf'])) ? '../uploads/PHD_certificate/' . $row['phd_crf'] : ''; ?>" width="300px" height="300px"></iframe>
                            <form method="post" enctype="multipart/form-data">
                                <div class="modal fade" id="phdcer_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="weight-500 col-md-12 pd-5">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="image61" id="phdcer_file" type="file" class="custom-file-input" onchange="validatePhdCerImage('phdcer_file')">
                                                        <label class="custom-file-label" for="phd_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update_phdcer" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </div>

    <!-- Include scripts -->
    <?php include('includes/scripts.php') ?>

    <script type="text/javascript">
        var loader = function(e) {
            let file = e.target.files;
            let show = "<span>Selected file : </span>" + file[0].name;
            let output = document.getElementById("selector");
            output.innerHTML = show;
            output.classList.add("active");
        };

        let fileInput = document.getElementById("file");
        fileInput.addEventListener("change", loader);
    </script>

    <script type="text/javascript">
        function validateAadharImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validatePanImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validatePassbookImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validateCasteImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validateCasteValImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validateDomacileImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validateSscImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validateDiplomaImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validateDcerfImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validateHscImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validateBeImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validateBeCerImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validatePgImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validatePgCerImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validatePhdImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }

        function validatePhdCerImage(id) {
            var file = document.getElementById(id).files[0];
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "pdf") {
                alert('Please select a valid PDF file');
                document.getElementById(id).value = '';
                return false;
            }
            if (file.size > 1050000) {
                alert('Max upload size is 1MB');
                document.getElementById(id).value = '';
                return false;
            }

            return true;
        }
    </script>