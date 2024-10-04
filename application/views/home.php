<?php $this->load->view('comman/header'); ?>

<body>
    <div class="modal fade bd-example-modal-lg" id="videoModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">

                        <!-- <iframe id="videoFrame" class="embed-responsive-item" src="" allowfullscreen></iframe> -->

                        <!-- <iframe id="video1" width="520" height="360" src="https://www.youtube.com/watch?v=ajdRvxDWH4w&list=PLGjplNEQ1it_oTvuLRNqXfz_v_0pq6unW&ab_channel=ShradhaKhapra" frameborder="0" allowtransparency="true" allowfullscreen></iframe>
                        <a href="#" id="playvideo">Play video</a> -->


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->




    <!--home start -->
    <div id="home_us" class="container-fluid pt-5  hero-header  bg-color ">
        <div class="container pt-3">
            <div class="row g-5 pt-3">

                <div style="width:100%; " class="col-lg-6 align-self-center text-center">

                    <h1 class="text-color animated slideInRight mt-4">SanTrans-Transportation Management Software
                    </h1>
                    <p class="text-color mb-4 animated slideInRight">SanTrans facilitates various attributes enclosed by
                        the transportation process and plays a vital role in improving Transportation operations than
                        anything else. India’s distinct transportation management software SanTrans.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-center bg-gradient-col">
        <img id="main_img" src="<?= base_url() ?>assets/img/02.png" style="width: 70%; height: auto;" alt="02">
    </div>
    <!-- home start-->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div id="about_us" class="container py-5">
        <div class="row g-5 align-items-center pt-5">
            <h2 class="col-12 text-center mb-4">About Us</h2>

            <div class="col-lg-6 wow fadeIn d-center" data-wow-delay="0.1s">

                <!-- <iframe id="video1" allow='autoplay' width="520" height="360" src="http://www.youtube.com/embed/TJ2X4dFhAC0?enablejsapi" frameborder="0" allowtransparency="true" allowfullscreen></iframe>
                             -->
                <!-- <iframe src="https://player.vimeo.com/video/81400335?autoplay=1&muted=11" width="640" height="360" frameborder="0" allow="fullscreen-qallow=autoplay "></iframe> -->


            </div>

            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h4 class="mb-4">SanTrans - Transport billing software</h4>
                <p class="mb-4">SanTrans is introduced to minimize manual efforts to manage transport organization. We
                    provide the best transport billing software solution for transportation companies in India. SAN
                    Softwares presents you with flexible and scalable booking transactions and vehicle management.
                    SanTrans is a transport billing and ERP software solution specially designed by SAN Softwares.
                    SanTrans pull-off addresses, the varied needs of transportation businesses, offering an extensive
                    solution to enhance customer satisfaction. Streamline operations and manage finances efficiently
                    from anywhere, ensuring seamless coherence and productivity.</p>

            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <h2 class="col-12 text-center mb-4">Key features</h2>
        <div class="d-flex">
            <div>
                <div>
                    <h4>Dispatch Entry </h4>
                    <p>SanTrans ask you to create a dispatch entry for verification and view all bookings.</p>
                </div>
                <div>
                    <h4>Route Payment Voucher </h4>
                    <p>For a specific booking and dispatch Route payment enables users to enter the advance amount and
                        fuel
                        issued. </p>
                </div>
                <div>
                    <h4>GR/Builty Entry & Receiving</h4>
                    <p>GR/Builty is considered a customer booking that SanTrans can manage, with billing depending on
                        the
                        recipient.</p>
                </div>
                <div>
                    <h4>Client/ Branch Wise Periodical Billing</h4>
                    <p>SanTrans: Complete Transport Billing Software allows businesses to create multiple branches and
                        manage
                        their billing.</p>
                </div>
            </div>
            <div>
                <div>
                    <h4>Lead Management</h4>
                    <p>SanTrans provides a lead management feature to handle transporter leads from platforms like
                        Indiamart,
                        Justdial, and other lead portals.</p>
                </div>
                <div>
                    <h4>E-Mail/SMS/WhatsApp Integration</h4>
                    <p>SanTrans integrated E-Mail/SMS/WhatsApp to streamline the work</p>
                </div>
                <div>
                    <h4>GST Reports</h4>
                    <p>GSTR-1, GSTR-3B, and GSTR-2A reports are available in SanTrans: Transport Billing Software.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-color feature mt-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mt-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <h2 class="text-color mb-4">Why SanTrans?</h2>
                    <p class="text-dark mb-4">SanTrans offers the ultimate Logistics Software for Transportation
                        Management, this software is the best software for transportation companies as all normal
                        transportation operations, like delivery challans, GR, route payment vouchers, hired vehicle
                        billing, fuel management, repair and maintenance, tire and spare inventory management, and so
                        on.
                        TMS system or Transport billing software can generate various reports in the format of your
                        choice. Dispatch report, GR/Builty report, Route payment report, Vehicle report, Item report,
                        Purchase/Inventory report, Driver list and vehicle report, P&L report, and billing reports.
                        SanTrans has a comprehensive accounting module that handles all of your transportation
                        transactions, billing, bank reconciliation, tracking, and printing of payment vouchers. </p>
                </div>
                <div class="col-lg-6 align-self-center mt-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-3">
                        <img src="<?= base_url() ?>assets/img/Why-SanTrans.png" alt="Why-SanTrans" style="background-color: white;">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div id="features_us" class="pt-5">
        <div class="mx-auto text-center wow fadeIn py-5 " data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="mb-4">Features</h2>
        </div>
        <section class="san-software-services">
            <div class="san-services hg100 ">
                <div class="container wow bounceInUp center" style="visibility: visible;">
                    <div class="section-header">
                    </div>
                    <div class="row services-area">
                        <div class="col-md-3 col-sm-6">
                            <div class="services-icon ">
                                <img src="<?= base_url() ?>assets/img/icons/Bank-Reconciliation.png" alt="icons/Bank-Reconciliation" class="img-style">

                            </div>
                            <div class="services-content">
                                <p class="features-name">Bank Reconciliation</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="services-icon ">
                                <img src="<?= base_url() ?>assets/img/icons/Bill-Submission.png" alt="Bill-Submission" class="img-style">

                            </div>
                            <div class="services-content">
                                <p class="features-name">Bill Submission</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="services-icon">
                                <img decoding="async" src="<?= base_url() ?>assets/img/icons/Dispatch-Entry.png"
                                    alt="Dispatch" class="img-style">
                            </div>
                            <div class="services-content">
                                <p class="features-name">Dispatch Entry</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="services-icon">
                                <img decoding="async" src="<?= base_url() ?>assets/img/icons/Driver-Salary-Settlement.png"
                                    alt="Driver" class="img-style">

                            </div>
                            <div class="services-content">
                                <p class="features-name">Driver Salary Settlement</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="services-icon">
                                <img decoding="async" src="<?= base_url() ?>assets/img/icons/eway-bill.png"
                                    alt="eway" class="img-style">


                            </div>
                            <div class="services-content">
                                <p class="features-name">Eway bill</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="services-icon">
                                <img decoding="async" src="<?= base_url() ?>assets/img/icons/Fuel-Bill-Management.png"
                                    alt="Fuel-Bill-Management" class="img-style">

                            </div>
                            <div class="services-content">
                                <p class="features-name">Fuel Bill Management</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="services-icon">
                                <img decoding="async" src="<?= base_url() ?>assets/img/icons/GPS-API.png"
                                    alt="GPS-API" class="img-style">


                            </div>
                            <div class="services-content">
                                <p class="features-name">GPS API</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="services-icon">
                                <img decoding="async" src="<?= base_url() ?>assets/img/icons/Vehicle-Repair.png"
                                    alt="Vehicle-Repair" class="img-style">


                            </div>
                            <div class="services-content">
                                <p class="features-name">Vehicle Repair</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="services-icon">
                                <img decoding="async" src="<?= base_url() ?>assets/img/icons/Lead-anagement.png"
                                    alt="Lead-anagement" class="img-style">


                            </div>
                            <div class="services-content">
                                <p class="features-name">Vehicle Repair</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="services-icon">
                                <img decoding="async" src="<?= base_url() ?>assets/img/icons/Operation-dashboard.png"
                                    alt="Operation-dashboard" class="img-style">

                            </div>
                            <div class="services-content">
                                <p class="features-name">Vehicle Repair</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="services-icon">
                                <img decoding="async" src="<?= base_url() ?>assets/img/icons/Purchase-order-management.png"
                                    alt="Purchase-order-management" class="img-style">
                            </div>
                            <div class="services-content">
                                <p class="features-name">Vehicle Repair</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="services-icon">

                                <img decoding="async" src="<?= base_url() ?>assets/img/icons/tyre-purchase and repair-management.png"
                                    alt="tyre-purchase and repair-management" class="img-style">
                            </div>
                            <div class="services-content">
                                <p class="features-name">Vehicle Repair</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div style="background: var(--l_green);">
        <div class="container pt-5">
            <h2 class="mb-6" style="text-align: center;">Mobile App Fit</h2>
            <div class="row d-flex align-item-center justify-content-around">
                <div class="col-lg-5 d-center wow fadeIn" data-wow-delay="0.1s">
                    <p>Ingress SanTrans's Complete Transport Billing Software is on the go with our mobile app, catering
                        to both operational and financial chores, a dynamic cloud-based solution designed clearly for
                        the transportation industry to experience seamless operations, effortless booking, and efficient
                        management with SanTrans.Boost your transportation services and stay in the lead, in a
                        competitive market with our cutting-edge app.</p>
                </div>
                <div class="col-lg-5 d-center wow fadeIn" data-wow-delay="0.1s">
                    <img decoding="async" src="<?= base_url() ?>assets/img/Mobile-app.png"
                        alt="Mobile-app" class="img-style" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <!-- Feature end -->

    <!-- Plans start -->

    <section id="pricing" class="container-fluid pricing pt-5">
        <div class="container py-5" data-aos="fade-up">
            <h2 style="text-align: center;">Plans</h2>
        </div>

        <div class="outer-box">
            <div class="row">
                <input type="hidden" id="plan_id">
                <!-- Pricing Block -->
                <?php
                //  echo '<prev>'; print_r($obj);


                $data = $obj['result']['data'];
                $first_three_data = array_slice($data, 0, 4);
                $flag = 0;
                //  echo '<prev>'; print_r($first_three_data);die;
                foreach ($first_three_data as $key => $value) { ?>
                    <div class="pricing-block col-lg-<?= floor(12 / count($first_three_data)) ?> col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-box">
                            </div>
                            <div class="price-box">
                                <div class="title"><?php echo $value['plan_name']; ?></div>
                                <h4 class="price amount"><img src="<?= base_url() ?>assets/img/rupee.png" class="mb-1" alt="reload" height="17" width="17"><?= number_format($value['price']); ?></h4>
                            </div>

                            <ul class="features">
                                <li class="true">Valid for <?= number_format($value['plan_period']) . ' ' . $value['plan_period_type'] ?> </li>
                                <!-- <li class="<? php // echo ($value['plan_period'] == 1) ? "true" : "false"; 
                                                ?>">Billing Yearly</li> -->
                                <li class="true">Allowed <?= number_format($value['allowed_company']); ?> Company</li>
                                <li class="<?php echo ($value['gst_reports'] == 1) ? "true" : "false"; ?>">Generate GST Reports</li>
                                <li class="true">Upto <?= number_format($value['allowed_users']); ?> User</li>
                                <li class="true">Additional User Charges <?= number_format($value['additional_charges']); ?>*/user/year</li>
                                <li class="<?php echo ($value['with_accounting'] == 1) ? "true" : "false"; ?>">With Accounting</li>
                                <li class="<?php echo ($value['einv_enable'] == 1) ? "true" : "false"; ?>">E-Invoice Enable</li>
                                <li class="<?php echo ($value['gstr2a_enable'] == 1) ? "true" : "false"; ?>">Gstr2a Enable</li>
                            </ul>
                            <div class="btn-box">
                            <a href="<?= base_url().'Api/PlanData/'. $value['plan_id'] ?>"  class="theme-btn" 
                            value="<?= $value['plan_id']; ?>">Buy Plan</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Plans end -->


    <!-- contact us -->
    <div id="contact_us" style="background:var(--l_green)" class="container-fluid pt-5">
        <div style="color:var(--white) important;" class="container pt-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s"
                style="max-width: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <h2 class="mb-4 text-dark"> Contact Us</h2>
                <h4 class="mb-4 text-dark">If You Have Any Query, Please Contact Us</h4>
            </div>
            <div class="row justify-content-center">
                <div style="color:white important;" class="col-lg-7">
                    <div class="wow fadeIn" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="wow fadeIn" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="wow fadeIn" data-wow-delay="0.3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                <form id="contact_details" class="php-email-form needs-validation">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control form-control-sm alphabat_something" id="client_name" name="client_name"
                                                    required placeholder="Enter Your Name " maxlength="70">
                                                <label for="client_name">Your Name <span class="error">*</span></label>
                                                <div class="invalid-feedback">
                                                    Please Enter Name
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    required placeholder="Enter Your Email" aria-describedby="emailHelp" maxlength="60">
                                                <label for="email">Your Email <span class="error">*</span></label>
                                                <div class="invalid-feedback">
                                                    Please Enter Email
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input name="phone_no" class="form-control numeric_only" id="phone_no" required placeholder="Enter Your Phone Number" minlength="10" aria-describedby="phone_noHelp" placeholder="Enter Phone" maxlength="10">
                                                <label for="phone_no">Phone Number <span class="error">*</span></label>
                                                <div class="invalid-feedback">
                                                    Please Enter Valid Phone Number
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" name="message" id="message" rows="2" required placeholder="Enter Your Query" maxlength="150"
                                                    name="message" style="height: 150px"></textarea>
                                                <label for="message">Message <span class="error">*</span>
                                                    <!--<span style="color:red">*</span>-->
                                                </label>
                                                <div class="invalid-feedback">
                                                    Please Enter Message
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-8  col-sm-6  col-md-3  col-lg-4 col-xl-4 mt-3">
                                            <p id="captcha_image"></p>
                                        </div>
                                        <br>
                                        <div class="col-4  col-sm-6  col-md-1  col-lg-1 col-xl-1 mt-4">
                                            <img src="<?= base_url() ?>assets/img/reload.png" class="img-fluid animated refreshCt" alt="reload" height="25" width="25" onclick="refreshCaptcha()">
                                        </div><br>

                                        <div class="col-6  col-sm-6  col-md-4  col-lg-4 col-xl-4 mt-3">
                                            <input type="text" class="form-control" name="captcha_value" id="captcha_value" required placeholder="Enter Your Captcha &#42;" maxlength="7" minlength="7">
                                            <div class="invalid-feedback">
                                                Please Enter Captcha
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4 col-sm-12 d-center ">
                                            <button id="test2" name="send"
                                                style="background: white !important;color: black !important;"
                                                class="btn btn-primary w-100 " type="button" onclick="insertDetails(event)">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </div>
    <!-- contact end -->

    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>

    <!-- Modal message -->
    <div class="modal fade modal-centered " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="wrapper-1">
                        <div class="wrapper-2">
                            <h1>Thank you !</h1>
                            <p>Thank you for contacting us. Our support team will contact you shortly. </p>
                            <a href="<?= base_url() ?>">
                                <button class="go-home">go home</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <?php $this->load->view('comman/footer'); ?>

    <script>
        $(document).ready(function() {

            $('#staticBackdrop').modal('hide');
            // hideAndShow(['staticBackdrop'], 'show');
            // hideAndShow(['spinner'], 'show');
            refreshCaptcha();

        });


        function refreshCaptcha() {
            $.ajax({
                url: '<?php echo base_url("Api/refreshCaptcha"); ?>',
                type: 'POST',
                success: function(response) {
                    $('#captcha_image').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        function insertDetails(event) {
            var form = $('#contact_details')[0];
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation(); // Stop event propagation to prevent default action
                form.classList.add('was-validated'); // Add Bootstrap's 'was-validated' class
                return;
            }
            let captcha = $('#captcha_value').val();
            var formData = new FormData(form);

            $("#overlay").fadeIn();
            $.ajax({
                type: "POST",
                url: '<?= base_url('Api/contactForm') ?>',
                data: formData,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(data) {
                    $('#preloader').fadeOut('slow');
                    // console.log(data);
                    if (data.statuscode == 400) {
                        $("#overlay").fadeOut();
                        $.toast({
                            heading: 'Error',
                            text: data.message,
                            position: 'top-right',
                            showHideTransition: 'plain',
                            icon: 'error'
                        });
                    } else if (data.statuscode == 200) {
                        $("#overlay").fadeOut();
                        refreshCaptcha();
                        form.reset(); // Reset the form
                        $(form).removeClass('was-validated'); // Remove validation classes
                        // hideAndShow(['staticBackdrop'], 'show');
                        $('#staticBackdrop').modal('show');

                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                },
                complete: function() {
                    $('#preloader').hide();
                }
            });
        }
    </script>