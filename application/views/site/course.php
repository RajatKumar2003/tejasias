<!doctype html>
<html lang="en">

<head>

    <?php include('TopHeader.php'); ?>
</head>

<body>
    <!-- header -->
    <?php include('Header.php'); ?>

    <div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header px-5 py-4">
                    <h5 class="modal-title fw-bolder" id="downloadModalLabel" style="color:#E5A131;">Download Syllabus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body px-5">
                    <p class="fw-bold"> Please fill the form below to automatically download the syllabus</p>
                    <!-- Form -->
                    <form id="addSyllabus">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="hidden" id="syllabusId" name="syllabusId" value="">
                            <input type="text" class="form-control" style="color: black; border-color:black ;" id="inputText" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" style="color: black; border-color:black ;" id="number" name="number" required oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" style="color: black; border-color:black ;" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="reason" class="form-label">Why do you want to download this?</label>
                            <select class="form-control" id="reason" name="reason" required style="color: black; border-color:black ;">
                                <option value="" disabled selected>Select an option</option>
                                <option value="know_more">To know more</option>
                                <option value="explore_program">To explore programs</option>
                                <option value="other">Other</option>
                                <option value="just_browsing">Just browsing</option>
                            </select>
                        </div>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-muted rounded-0" data-bs-dismiss="modal">Close</button>
                    <button type="button " class="btn btn-submit">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- first section -->
    <section>
        <div class="container-fluid py-5 text-white">
            <div class="row">
                <div class="col-md-12 mx-auto text-center">
                    <p class="fs1">EXPLORE OUR</p>
                    <p class="fs2">DIVERSE COURSE OFFERINGS</p>
                    <P class="fs-5">Explore our courses: UPSC, CGPSC, SSC, Banking, Railway, and Vyapam.</P>
                </div>
            </div>
        </div>
    </section>
    <!-- section two -->
    <section class="bg-white">
        <div class="container">
            <div class="row justify-content-between ">
                <div class="card mt-5  text-center rounded-0 p-4 course" style="width: 40rem; ">
                    <div class="card-body">
                        <h1 class="card-title">UPSC-IAS</h1>
                        <h5>(Pre + Mains + Interview)</h5>
                        <p class="card-text fw-bold">CGPSC preparation complementary*</p>
                        <div class="row">
                            <div class="col-md-6 mb-3 ">
                                <a href="#" class="btn download rounded-pill " data-id=
                                <?php 
                                $this->db->where('Category','UPSC-IAS'); 
                               $query = $this->db->get('syllabus_tbl')->row();
                               if(!empty($query))
                               {
                                echo $query->SyllabusId;
                               }
                                ?> data-bs-toggle="modal" data-bs-target="#downloadModal">Download Syllabus
                                </a>
                            </div>
                            <div class="col-md-6 py-2">
                                <a class="text-decoration-none text-dark fs-6 down1  py-2 px-3 rounded-pill mt-2 fw-bold " href="<?= site_url('contact') ?>">ENROLL
                                    NOW <img src="<?= base_url('assets/site/assets') ?>/index2/Vector.png" alt="pen"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card  mt-5  text-center rounded-0 p-4 course" style="width: 40rem;">
                    <div class="card-body">
                        <h1 class="card-title">CGPSC</h1>
                        <h5>(Pre + Mains + Interview)</h5>
                        <p class="card-text fw-bold">Expert teachers from Patna, Allahabad & C.G.</p>
                        <div class="row ">
                            <div class="col-md-6 mb-3 ">
                            <a href="#" class="btn download rounded-pill " data-id=
                                <?php 
                                $this->db->where('Category','CGPSC'); 
                               $query = $this->db->get('syllabus_tbl')->row();
                               if(!empty($query))
                               {
                                echo $query->SyllabusId;
                               } ?> data-bs-toggle="modal" data-bs-target="#downloadModal">Download Syllabus
                                </a>
                            </div>
                            <div class="col-md-6 py-2">
                                <a class="text-decoration-none text-dark fs-6 down1  py-2 px-3 rounded-pill mt-2 fw-bold " href="<?= site_url('contact') ?>">ENROLL
                                    NOW <img src="<?= base_url('assets/site/assets') ?>/index2/Vector.png" alt="pen"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center mt-5 rounded-0 p-4 course" style="width: 40rem;">
                    <div class="card-body">
                        <h1 class="card-title">BANKING</h1>
                        <h5>(Clerk, PO, SO, RRB)</h5>
                        <p class="card-text fw-bold">Banking personnel & experts, teacher from Delhi, Allahabad & C.G.
                        </p>
                        <div class="row">
                            <div class="col-md-6 mb-3 ">
                            <a href="#" class="btn download rounded-pill " data-id=
                                <?php 
                                $this->db->where('Category','BANKING'); 
                               $query = $this->db->get('syllabus_tbl')->row();
                               if(!empty($query))
                               {
                                echo $query->SyllabusId;
                               } ?> data-bs-toggle="modal" data-bs-target="#downloadModal">Download Syllabus
                                </a>
                            </div>
                            <div class="col-md-6 py-2">
                                <a class="text-decoration-none text-dark fs-6 down1  py-2 px-3 rounded-pill mt-2 fw-bold " href="<?= site_url('contact') ?>">ENROLL
                                    NOW <img src="<?= base_url('assets/site/assets') ?>/index2/Vector.png" alt="pen"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center mt-5 rounded-0 p-4 course" style="width: 40rem;">
                    <div class="card-body">
                        <h1 class="card-title">SSC</h1>
                        <h5>(MT, CHSL, CGL, SSCJE)</h5>
                        <p class="card-text fw-bold">SSC Experts, Specialized & Experienced Teacher from Delhi,
                            Allahabad & C.G.</p>
                        <div class="row">
                            <div class="col-md-6 mb-3 ">
                            <a href="#" class="btn download rounded-pill " data-id=
                                <?php 
                                $this->db->where('Category','SSC'); 
                               $query = $this->db->get('syllabus_tbl')->row();
                               if(!empty($query))
                               {
                                echo $query->SyllabusId;
                               } ?> data-bs-toggle="modal" data-bs-target="#downloadModal">Download Syllabus
                                </a>
                            </div>
                            <div class="col-md-6 py-2">
                                <a class="text-decoration-none text-dark fs-6 down1  py-2 px-3 rounded-pill mt-2 fw-bold " href="<?= site_url('contact') ?>">ENROLL
                                    NOW <img src="<?= base_url('assets/site/assets') ?>/index2/Vector.png" alt="pen"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center mt-5 rounded-0 p-4 course" style="width: 40rem;">
                    <div class="card-body">
                        <h1 class="card-title">RAILWAY</h1>
                        <h5>(Tech & Non-Tech)</h5>
                        <p class="card-text fw-bold">Expert teachers from Patna, Allahabad & C.G.</p>
                        <div class="row">
                            <div class="col-md-6 mb-3 ">
                            <a href="#" class="btn download rounded-pill " data-id=
                                <?php 
                                $this->db->where('Category','RAILWAY'); 
                               $query = $this->db->get('syllabus_tbl')->row();
                               if(!empty($query))
                               {
                                echo $query->SyllabusId;
                               }?> data-bs-toggle="modal" data-bs-target="#downloadModal">Download Syllabus
                                </a>
                            </div>
                            <div class="col-md-6 py-2">
                                <a class="text-decoration-none text-dark fs-6 down1  py-2 px-3 rounded-pill mt-2 fw-bold " href="<?= site_url('contact') ?>">ENROLL
                                    NOW <img src="<?= base_url('assets/site/assets') ?>/index2/Vector.png" alt="pen"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center mt-5 rounded-0 p-4 course" style="width: 40rem;">
                    <div class="card-body">
                        <h1 class="card-title">VYAPAM</h1>
                        <h5>(All type of posts)</h5>
                        <p class="card-text fw-bold">Experienced and CG specialized Teacher from Delhi, Allahabad and
                            CG.</p>
                        <div class="row">
                            <div class="col-md-6 mb-3 ">
                            <a href="#" class="btn download rounded-pill " data-id=
                                <?php 
                                $this->db->where('Category','VYAPAM'); 
                               $query = $this->db->get('syllabus_tbl')->row();
                               if(!empty($query))
                               {
                                echo $query->SyllabusId;
                               } ?> data-bs-toggle="modal" data-bs-target="#downloadModal">Download Syllabus
                                </a>
                            </div>
                            <div class="col-md-6 py-2">
                                <a class="text-decoration-none text-dark fs-6 down1  py-2 px-3 rounded-pill mt-2 fw-bold " href="<?= site_url('contact') ?>">ENROLL
                                    NOW <img src="<?= base_url('assets/site/assets') ?>/index2/Vector.png" alt="pen"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-md-6">
                    <h1>Distinctive Features of Our Academy</h1>
                </div>
                <div class="col-md-6">
                    <div class="mb-5">
                        <h1>1.</h1>
                        <h4>Comprehensive learning at affordable rates</h4>
                    </div>
                    <div class="my-5">
                        <h1>2.</h1>
                        <h4>Specialized NCERT classes</h4>
                    </div>
                    <div class="my-5">
                        <h1>3.</h1>
                        <h4>Updated study materials</h4>
                    </div>
                    <div class="my-5">
                        <h1>4.</h1>
                        <h4>Instruction in Both Hindi and English</h4>
                    </div>
                    <div class="my-5">
                        <h1>5.</h1>
                        <h4>Classes conducted by dedicated specialists</h4>
                    </div>
                    <div class="my-5">
                        <h1>6.</h1>
                        <h4>All optional subjects offered</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include('Footer.php'); ?>
    <?php include('TopFooter.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            var owl = $(".owl-carousel1").owlCarousel({
                loop: true,
                margin: 10,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: true
                    }
                },
                autoplay: true, // Enable autoplay
                autoplayTimeout: 3000 // Set autoplay timeout to 3 seconds (3000 milliseconds)
            });
            $("#customNextBtn1").click(function() {
                owl.trigger('next.owl.carousel');
            });

            $("#customPrevBtn1").click(function() {
                owl.trigger('prev.owl.carousel');
            });
        });
    </script>
    <!-- for navbar -->

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.querySelectorAll('.slide');
            let dots = document.querySelectorAll('.dot');
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (let i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(' active', '');
            }
            slides[slideIndex - 1].style.display = 'block';
            dots[slideIndex - 1].className += ' active';
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }

        function currentSlide(n) {
            slideIndex = n;
            showSlides();
        }
    </script>

    <script>
        $(document).ready(function() {

            $('#downloadModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var syllabusId = button.data('id'); // Extract data-id attribute from button

            // Set the value of hidden input field in the modal
            $('#syllabusId').val(syllabusId);
        });

            $('#addSyllabus').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    number: {
                        required: true,
                        minlength: 10
                    },
                    reason: {
                        required: true,
                    }

                },
                messages: {
                    name: {
                        required: "Please enter name",
                    },
                    email: {
                        required: "Please enter email",
                    },
                    number: {
                        required: "Please enter contact_no",
                        minlength: "Minimum 10 digits required"
                    },
                    reason: {
                        required: "Please enter comment",
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form, event) {
                    event.preventDefault();
                    console.log('hello');
                    var formData = $(form).serialize();

                    // Additional data
                   

                    // Combine form data and additional data into one object
                    // var requestData = $.extend({}, formData, additionalData);
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url() . 'Syllabus/downloadSyllabus' ?>',
                        data: formData,
                        success: function(response) {
                            // Handle success
                            $('#downloadModal').hide();
                            result = JSON.parse(response);
                            // console.log('data',result.success);
                            if (result.success) {
                                // Decode the base64-encoded file content
                                //   var decodedContent = atob(result.file_content);

                                //   // Create a Blob from the decoded content
                                //   var blob = new Blob([decodedContent], {type: 'application/pdf' });

                                //   // Save the file using FileSaver.js
                                //   saveAs(blob, result.fileName);

                                var link = document.createElement('a');
                                link.href = "data:application/pdf;base64," + result.file_content;
                                link.download = result.fileName;
                                link.click();

                                // Alternatively, display a success message (optional)
                                $('#successMessage').text('PDF generated and downloaded successfully!');
                                location.reload();

                            } else {
                                // Handle error, e.g., show an alert
                                alert(response.message);
                            }

                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                title: 'Error',
                                text: 'An unexpected error occurred.',
                                icon: 'error'
                            });

                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>