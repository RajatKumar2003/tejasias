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
        <div class="container-fluid py-5 text-white">
            <div class="row">
                <div class="col-md-11 mx-auto text-center">
                    <p class="fs1">GUIDING YOU</p>
                    <p class="fs2">WITH EXPERTISE AND EXPERIENCE</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2 -->
    <section class="bg-white ">
        <div class="container">
            <div class="row  pt-5">
                <div class="col-md-3 mx-auto">
                    <h1>We teach you the best</h1>
                </div>
                <div class="col-md-9">
                    <p class="fs-5 bold">”Our faculty at Tejas IAS Academy consists of highly qualified professionals with extensive
                        expertise in their
                        respective fields. They are passionate about nurturing future leaders and provide the best
                        guidance and support to help
                        you achieve your IAS aspirations.’’</p>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-12">
                    <!-- first row -->
                    <div class="row">
                        <div class=" col-md-6 ">
                            <div class="row ">
                                <div class="col-md-6 p-0">
                                    <img src="<?= base_url('assets/site/assets') ?>/index4/Rectangle 198.png" alt="faculty" class="img-fluid">
                                </div>
                                <div class="col-md-6 box p-4 ">
                                    <h2>Nitesh Varma</h2>
                                    <p class="fs-6 mt-4">Nitesh Varma is a respected authority in Indian polity, specializing
                                        in UPSC exam preparation. His expertise and
                                        comprehensive teaching methods have empowered numerous aspirants, guiding them
                                        through the intricacies of constitutional
                                        studies with clarity and confidence</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="row">
                                <div class="col-md-6 p-0">
                                    <img src="<?= base_url('assets/site/assets') ?>/index4/Rectangle 199.png" alt="faculty" class="w-100">
                                </div>
                                <div class="col-md-6 box1 p-4 text-white ">
                                    <h3>Julie Dsouza</h3>
                                    <p class="fs-6 mt-4">Julie D'Souza is a respected expert in economics, known for her
                                        specialized knowledge and proficiency in UPSC exam
                                        preparation. Her clear and effective teaching methods equip students with a deep
                                        understanding of economic principles,
                                        empowering them to excel in their studies with confidence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- second row -->
                    <div class="row">
                        <div class=" col-md-6 ">
                            <div class="row">
                                <div class="col-md-6 p-0">
                                    <img src="<?= base_url('assets/site/assets') ?>/index4/Rectangle 200.png" alt="faculty" class="img-fluid">
                                </div>
                                <div class="col-md-6 box1 p-4 text-white">
                                    <h2>Ayush Sahu</h2>
                                    <p class="fs-6 mt-4">Ayush Sahu is a distinguished educator renowned for his expertise in
                                        international relations, particularly within the
                                        context of UPSC exam preparation. His insightful approach and comprehensive
                                        teaching methodologies empower students to
                                        navigate the complexities of global affairs with clarity and confidence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="row">
                                <div class="col-md-6 p-0">
                                    <img src="<?= base_url('assets/site/assets') ?>/index4/Rectangle 201.png" alt="faculty" class="w-100">
                                </div>
                                <div class="col-md-6 box p-4 ">
                                    <h3>Geeta Sahu</h3>
                                    <p class="fs-6 mt-4">Geeta Sahu is a distinguished expert in geography, renowned for her
                                        specialized knowledge and proficiency in UPSC exam
                                        preparation. Her comprehensive teaching methods provide students with a thorough
                                        understanding of geographical concepts,
                                        enabling them to approach the subject with confidence and clarity..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
        <?php include('Footer.php'); ?>
        <?php include('TopFooter.php'); ?>
       
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            var owl1 = $(".owl-carousel1").owlCarousel({
                loop: false,
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
                        items: 5
                    }
                }
            });

            $("#customNextBtn1").click(function () {
                owl1.trigger('next.owl.carousel');
            });

            $("#customPrevBtn1").click(function () {
                owl1.trigger('prev.owl.carousel');
            })

            // carousel2
            var owl2 = $(".owl-carousel2").owlCarousel({
                loop: false,
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
                        items: 5
                    }
                }
            });

            $("#customNextBtn2").click(function () {
                owl2.trigger('next.owl.carousel');
            });

            $("#customPrevBtn2").click(function () {
                owl2.trigger('prev.owl.carousel');
            });
            // carousel3
            var owl3 = $(".owl-carousel3").owlCarousel({
                loop: false,
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
                        items: 5
                    }
                }
            });

            $("#customNextBtn3").click(function () {
                owl3.trigger('next.owl.carousel');
            });

            $("#customPrevBtn3").click(function () {
                owl3.trigger('prev.owl.carousel');
            });

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
        
</body>

</html>