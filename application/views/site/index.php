<!doctype html>
<html lang="en">

<head>

    <?php include('TopHeader.php'); ?>
</head>

<body>
    <!-- header -->
    <?php include('Header.php'); ?>
    <!-- first section -->
    <section>
        <div class="container">
            <div class="row text-center text-white">
                <div class="col-md-12  my-4">
                    <div class="col-md-12 mx-auto">
                        <p class="fs1">Empowering Aspirants,</p>
                        <p class="fs2">Shaping Future Leaders.</p>
                    </div>
                    <div class="col-md-6  mx-auto">
                        <p>Our comprehensive programs, led by experienced educators and industry experts, provide
                            personalized guidance and support
                            to help you achieve your civil service dreams.</p>
                    </div>
                    <div class="mx-auto">
                        <div class="d-flex justify-content-center">
                            <button class="btn me-0 btn0 rounded-pill px-5 py-2 m-1"><a href="#" class="text-white text-decoration-none"></a>UPSC Foundation</button>
                            <button class="btn me-0 btn0 rounded-pill px-5 py-2 m-1"><a href="#" class="text-white text-decoration-none"></a>CGPSC</button>
                            <button class="btn me-0 btn0 rounded-pill px-5 py-2 m-1"><a href="#" class="text-white text-decoration-none"></a>Railway</button>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn me-0 btn0 rounded-pill px-5 py-2 m-1"><a href="#" class="text-white text-decoration-none"></a>Vyapam</button>
                            <button class="btn me-0 btn0 rounded-pill px-5 py-2 m-1"><a href="#" class="text-white text-decoration-none"></a>SSC</button>
                            <button class="btn me-0 btn0 rounded-pill px-5 py-2 m-1"><a href="#" class="text-white text-decoration-none"></a>Bank</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- second section -->
    <section class="bg-black">
        <div class="container">
            <div class="row mt-5">
                <img src="<?= base_url('assets/site/assets') ?>/index1/Group 275.png" alt="video">
            </div>
        </div>
    </section>

    <!-- numbers -->
    <section>
        <div class="container-fluid bg-white py-4 ">
            <div class="row col-md-12 mx-auto ">
                <div class="col-6 col-md-3 text-center py-3">
                    <div>
                        <h1 class="fw-bold">7.5K</h1>
                        <p>Trained Students</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 text-center py-3">
                    <div>
                        <h1 class="fw-bold">12+</h1>
                        <p>Years of Experience</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 text-center py-3">
                    <div>
                        <h1 class="fw-bold">150+</h1>
                        <p>Workshop Conducted</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 text-center py-3">
                    <div>
                        <h1 class="fw-bold">800+</h1>
                        <p>Successful students</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- third section -->
<!-- aditional section  -->
 <section>
    <div class="container">
        <div class="col-md-12 text-white">
            <div class="row">
            <?php
                    if(!empty($updatelist))
                    {
                        foreach($updatelist as $list)
                        { ?>


                       <!-- <div class="blog-item" > -->
                        <div class="col-md-2 p-0 right
                         mt-4 blog-item" data-categories="<?php echo strtolower($list->category_title); ?>">
                            <h3><?= date('F jS Y', strtotime($list->CreatedAt)); ?></h3>
                        </div>
                        <div class="col-md-10 mt-4 blog-item" data-categories="<?php echo strtolower($list->category_title); ?>">
                            <h4><?= $list->Title; ?>
                                </span></h4>
                            <p><?= $list->Description; ?></p>
                        </div>
                        <!-- </div> -->

                        <?php }
                    }
                    ?>
                <!-- two -->
               
            </div>
        </div>
        <!-- <div class="container">
            <div class="col-md-12 pagination-container my-4 text-white">
              
                <div>
                    <h3 class="num1">1</h3>
                </div>
                <div>
                    <h3 class="num2">2</h3>
                </div>
                <div>
                    <h3 class="num2">3</h3>
                </div>
                <div>
                    <h3 class="num2">4</h3>
                </div>
                <div>
                    <h3 class="num2">5</h3>
                </div>
                <div>
                    <h3 class="num2">...</h3>
                </div>
                <div>
                    <h3 class="num2">12</h3>
                </div>
               
            </div>
        </div> -->
    </div>
 </section>
 <!-- additional section  -->
    <div class="container text-white py-5">
        <div class="row">
            <div class="col-md-5 pt-4">
                <p class="fs-3">Categories of Exam</p>
            </div>
            <div class="col-md-7">
                <!-- first -->
                <div class="d-flex py-4">
                    <div class="col-2 ">
                        <p class="fs-3">01</p>
                    </div>
                    <div class="col-5 text-center">
                        <h1>UPSC</h1>
                    </div>
                    <div class="col-5 text-end">
                        <p class="fs-4">5 min read <a href="#" class="text-white"><img src="<?= base_url('assets/site/assets') ?>/index1/Vector.png" alt="arrow" class="mb-2 mx-1" style="width: 15px;"></a></p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <p>The Union Public Service Commission (UPSC) is the apex recruiting agency for the Government
                            of India, responsible for
                            conducting a range of competitive exams to select candidates for various civil services and
                            administrative positions.</p>
                    </div>
                    <div class="col-md-6 pb-5">
                        <img src="<?= base_url('assets/site/assets') ?>/index1/Rectangle 170.png" alt="image" class="img-fluid">
                    </div>
                    <div class="col-md-12">
                        <img src="<?= base_url('assets/site/assets') ?>/index1/Line 22.png" alt="line" class="img-fluid">
                    </div>
                </div>
                <!-- second -->
                <div class="d-flex py-4">
                    <div class="col-2">
                        <p class="fs-3">02</p>
                    </div>
                    <div class="col-5 text-center">
                        <h1>CGPSC</h1>
                    </div>
                    <div class="col-5 text-end">
                    <p class="fs-4">5 min read <a href="#" class="text-white"><img src="<?= base_url('assets/site/assets') ?>/index1/Vector.png" alt="arrow"
                                class="mb-2 mx-1" style="width: 15px;"></a></p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit error enim, molestiae, numquam
                            dignissimos at dolores culpa molestias ducimus pariatur incidunt sunt nemo voluptatibus
                            debitis quod ipsam dolore ratione vel?</p>
                    </div>
                    <div class="col-md-6 pb-5">
                        <img src="<?= base_url('assets/site/assets') ?>/index1/Rectangle 170.png" alt="image" class="img-fluid">
                    </div>
                    <div class="col-md-12">
                        <img src="<?= base_url('assets/site/assets') ?>/index1/Line 22.png" alt="line" class="img-fluid">
                    </div>
                </div>
                <!-- third -->
                <div class="d-flex py-4">
                    <div class="col-2">
                        <p class="fs-3">03</p>
                    </div>
                    <div class="col-5 text-center">
                        <h1>SSC</h1>
                    </div>
                    <div class="col-5 text-end">
                        <p class="fs-4">5 min read <a href="#" class="text-white"><img src="<?= base_url('assets/site/assets') ?>/index1/Vector.png" alt="arrow"
                                    class="mb-2 mx-1" style="width: 15px;"></a></p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <p>The Union Public Service Commission (UPSC) is the apex recruiting agency for the Government
                            of India, responsible for
                            conducting a range of competitive exams to select candidates for various civil services and
                            administrative positions.</p>
                    </div>
                    <div class="col-md-6 pb-5">
                        <img src="<?= base_url('assets/site/assets') ?>/index1/Rectangle 68 (1).png" alt="image" class="img-fluid">
                    </div>
                    <div class="col-md-12">
                        <img src="<?= base_url('assets/site/assets') ?>/index1/Line 22.png" alt="line" class="img-fluid">
                    </div>
                </div>
                <!-- fourth -->
                <div class="d-flex py-4">
                    <div class="col-2">
                        <p class="fs-3">04</p>
                    </div>
                    <div class="col-5 text-center">
                        <h1>BANKING</h1>
                    </div>
                    <div class="col-5 text-end">
                    <p class="fs-4">5 min read <a href="#" class="text-white"><img src="<?= base_url('assets/site/assets') ?>/index1/Vector.png" alt="arrow"
                                class="mb-2 mx-1" style="width: 15px;"></a></p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <p>The Union Public Service Commission (UPSC) is the apex recruiting agency for the Government
                            of India, responsible for
                            conducting a range of competitive exams to select candidates for various civil services and
                            administrative positions.</p>
                    </div>
                    <div class="col-md-6 pb-5">
                        <img src="<?= base_url('assets/site/assets') ?>/index1/Rectangle 68 (2).png" alt="image" class="img-fluid">
                    </div>
                    <div class="col-md-12">
                        <img src="<?= base_url('assets/site/assets') ?>/index1/Line 22.png" alt="line" class="img-fluid">
                    </div>
                </div>
                <!-- fifth -->
                <div class="d-flex py-4">
                    <div class="col-2">
                        <p class="fs-3">05</p>
                    </div>
                    <div class="col-5 text-center">
                        <h1>RAILWAY</h1>
                    </div>
                    <div class="col-5 text-end">
                    <p class="fs-4">5 min read <a href="#" class="text-white"><img src="<?= base_url('assets/site/assets') ?>/index1/Vector.png" alt="arrow"
                                class="mb-2 mx-1" style="width: 15px;"></a></p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <p>The Union Public Service Commission (UPSC) is the apex recruiting agency for the Government
                            of India, responsible for
                            conducting a range of competitive exams to select candidates for various civil services and
                            administrative positions.</p>
                    </div>
                    <div class="col-md-6 pb-5">
                        <img src="<?= base_url('assets/site/assets') ?>/index1/Rectangle 68.png" alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- third section -->
    <section class="bg-white py-5">
        <div class="container ">
            <div class="row py-5">
                <div class="col-md-5">
                    <h1>Key Attributes of Our Specialized Institute</p>
                </div>
                <div class="col-md-7">
                    <div>
                        <p class="grey">COMPREHENSIVE CURRICULUM</p>
                        <p class="fw-bold">Our institute offers a comprehensive curriculum meticulously crafted to
                            prepare aspiring civil servants for success.
                            Covering General Studies, Optional Subjects, and Current Affairs, our curriculum integrates
                            theoretical knowledge with
                            practical applications to ensure thorough preparation for all stages of the civil services
                            examination.</p>
                    </div>
                    <div>
                        <p class="grey">EXTRA FACULTY</p>
                        <p class="fw-bold">Our institute offers a comprehensive curriculum meticulously crafted to
                            prepare aspiring civil servants for success.
                            Covering General Studies, Optional Subjects, and Current Affairs, our curriculum integrates
                            theoretical knowledge with
                            practical applications to ensure thorough preparation for all stages of the civil services
                            examination.</p>
                    </div>
                    <div>
                        <p class="grey">INNOVATIVE TEACHING METHODS</p>
                        <p class="fw-bold">We prioritize innovative teaching methods to enrich our students' learning
                            experience. Through interactive lectures,
                            multimedia tools, and practical applications, we foster deeper understanding and skill
                            development. Our approach blends
                            traditional instruction with modern techniques to ensure effective comprehension and
                            readiness for the complexities of
                            civil services..</p>
                    </div>
                </div>
                
            </div>
            <div class="row mt-3 mb-2">
                <div class="col-md-5 ">
                    <h1>Technology & Infrastructure</h1>
                </div>
                <div class="col-md-7 ">
                    <p class="bold fs-4">Advanced Learning Environment: Cutting-Edge Technology and Modern Infrastructure.</p>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-md-6 bg-white p-0">
                    <img src="<?= base_url('assets/site/assets') ?>/index1/Group 298.png" alt="group image" class=" img-fluid">
                </div>
                <div class="col-6 col-md-6 bg-white p-0">
                    <img src="<?= base_url('assets/site/assets') ?>/index1/Group 296.png" alt="group image" class=" img-fluid">
                </div>
                <div class="col-6 col-md-6 bg-white p-0">
                    <img src="<?= base_url('assets/site/assets') ?>/index1/Group 297.png" alt="group image" class=" img-fluid">
                </div>
                <div class="col-6 col-md-6 bg-white p-0">
                    <img src="<?= base_url('assets/site/assets') ?>/index1/Group 299.png" alt="group image" class=" img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- fourth section  -->
    <section>
        <div class="container py-4">
            <div class="row text-white ">
                <div class="col-md-9">
                    <div class="col-6  text-center">
                        <p class="bg fs-6 px-1 py-1 rounded-3">what our students say</p>
                    </div>
                    <div>
                        <h1>Real Words From our Students</h1>
                    </div>
                </div>
                <div class="col-md-3 py-4">
                    <a href="#" class="text-decoration-none down1 text-black p-2 rounded-3">View All Testimonial <img src="<?= base_url('assets/site/assets') ?>/index1/Vector 431 (Stroke).png" alt="arrow" class="mb-2 mx-2"></a>
                </div>
                <!-- first -->
                <div class=" owl-carousel owl-carousel1 owl-theme">
                   
                <?php
                    if(!empty($testimoniallist))
                    {
                        foreach($testimoniallist as $list)
                        { ?>
                <div class="item text-black ">
                        <div class=" my-5 text-center text-white">
                            <div class="">
                                <div class="col-1 mx-auto">
                                    <img src="<?= base_url('uploads/testimonial/').$list->Image; ?>" class="img-fluid">
                                </div>
                                <div>
                                    <p class="m-0 fs-6"><b><?= $list->Name; ?></b></p>
                                    <p class="text-secondary">Bhilai, Chattisgarh</p>
                                </div>
                            </div>
                            <div class="my-3">
                                ⭐⭐⭐⭐⭐
                            </div>
                            <div>
                                <p><?= $list->Content; ?>.</p>
                            </div>
                        </div>
                    </div>

                    <?php }
                    }
                    ?>
                    
                </div>
                <!-- second -->
                
            </div>
        </div>
    </section>

    <!-- accordion -->
    <section class="bg-white">
        <div class="container my-5 py-5 ques-con">
            <div class=" col-md-5">
                <h1>Frequently Asked Questions</h1>
                <p>A comprehensive guide addressing your most common queries and concerns. If you have any further
                    inquiries, feel free to
                    reach out; we're here to assist you every step of the way.</p>
            </div>

            <div class="row ques-con">
                <div class="col-md-8 ">
                    <div class="acc px-3 py-2" id="accordionExample">
                        <div class="accordion-item mt-2">
                            <p class="accordion-header">
                                <button
                                    class="py-2  px-3 accordion w-100 d-flex justify-content-between border-0 border-bottom"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne" style="background-color: white; ">
                                    How can I apply for admission to your coaching institute?
                                </button>
                            </p>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="col-md-12 px-3 py-4 border"
                                    style="border: 1px solid #F1F1F3;background-color: white;">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga itaque at
                                        adipisci,
                                        omnis quos libero vel aperiam voluptatibus culpa ipsa..</p>

                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="accordion-item mt-3">
                            <p class="accordion-header">
                                <button
                                    class="py-2 px-3 accordion w-100 d-flex justify-content-between border-0 border-bottom"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="true" aria-controls="collapseTwo" style=" background-color: white; ">
                                    Can I enroll in multiple courses simultaneously?
                                </button>
                            </p>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="col-md-12 px-3 py-4 border"
                                    style="border: 1px solid #F1F1F3;background-color: white;">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, voluptatem?.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!--  -->

                        <div class="accordion-item mt-3">
                            <p class="accordion-header">
                                <button
                                    class="py-2 px-3 accordion w-100 d-flex justify-content-between border-0 border-bottom"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseTwo" style=" background-color: white;">
                                    Do you provide study materials, and are they included in the course fee?
                                </button>
                            </p>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="col-md-12 px-4 py-4 border"
                                    style="border: 1px solid #F1F1F3;background-color: white;">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat,
                                        repudiandae!
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!--  -->

                        <div class="accordion-item mt-3">
                            <p class="accordion-header">
                                <button
                                    class="py-2 px-3 accordion w-100 d-flex justify-content-between border-0 border-bottom"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                    aria-expanded="true" aria-controls="collapseTwo" style=" background-color: white;">
                                    Is there flexibility in choosing class timings?
                                </button>
                            </p>
                            <div id="collapsefour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="col-md-12 px-3 py-4 border"
                                    style="border: 1px solid #F1F1F3;background-color: white;">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora,
                                        repellendus!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="accordion-item mt-3 mb-2">
                            <p class="accordion-header">
                                <button
                                    class="py-2 px-3 accordion w-100 d-flex justify-content-between border-0 border-bottom"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                    aria-expanded="true" aria-controls="collapseTwo" style="background-color: white;">
                                    What are the payment options?
                                </button>
                            </p>
                            <div id="collapsefive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="col-md-12 px-3 py-4 "
                                    style="border: 1px solid #F1F1F3;background-color: white;">
                                    <p>If you have a specific issue or need further assistance, let us know! We have
                                        various
                                        channels available, like email, chat, or social media</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div>
                        <h3>Ask a Different Question</h3>
                    </div>
                    <div class="myform">
                        <div>
                            <input type="text" placeholder="Name" class="border-0 border-bottom w-100 my-2">
                        </div>
                        <div>
                            <input type="email" placeholder="Email" class="border-0 border-bottom w-100 my-2">
                        </div>
                        <div>
                            <textarea name="message" placeholder="Your Message"
                                class="border-0 border-bottom w-100 my-2 pb-5"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="down1 border-0 py-2 px-4 fs-5 fw-bold rounded-3">Submit <img src="<?= base_url('assets/site/assets') ?>/index1/Arrow - Right.png" alt="arrow rights"></button>
                        </div>

                    </div>
                </div> -->

            </div>
        </div>
    </section>

        <!-- footer -->
        <?php include('Footer.php'); ?>
        <?php include('TopFooter.php'); ?>

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script> -->
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            var owl1 = $(".owl-carousel1").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });


            // second
            var owl2 = $(".owl-carousel2").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
</body>

</html>