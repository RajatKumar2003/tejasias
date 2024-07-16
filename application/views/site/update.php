<!doctype html>
<html lang="en">

<head>
   
    <?php include('TopHeader.php'); ?>
    </head>

<body>
    <!-- header -->
    <?php include('Header.php'); ?>
    <!-- first section -->
   
    <!-- section one -->
    <section>
        <div class="container-fluid py-5 text-white">
            <div class="row text-center">
                <div class="col-md-11 mx-auto text-center">
                    <p class="fs1">LATEST UPDATES</p>
                    <p class="text1">ANNOUNCEMENTS</p>
                </div>
                <div class="col-md-7 mx-auto">
                    <p class="fs-5">Stay informed with the latest news, events, and updates from our academy. Keep
                        checking this page
                        for important
                        announcements, new course offerings, and other exciting developments.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-5">
        <div class="container">
            <div class="row">
                <!-- <div class=" mb-5 row">
                    <div class="mx-2 border rounded-5 px-2 text-center py-2 mx-2 col-md-3 my-2">
                        <a href="#" class="text-decoration-none text-dark mx-2 ">All</a>
                    </div>
                    <div class="mx-2 border rounded-5 px-2 text-center py-2 mx-2 col-md-3 my-2">
                        <a href="#" class="text-decoration-none text-dark mx-2 ">Latest
                            Courses</a>
                    </div>
                    <div class="mx-2 border rounded-5 px-2 text-center py-2 mx-2 col-md-3 my-2">
                        <a href="#" class="text-decoration-none text-dark mx-2 ">Exam
                            notification</a>
                    </div>
                    <div class="mx-2 border rounded-5 px-2 text-center py-2 mx-2 col-md-3 my-2">
                        <a href="#" class="text-decoration-none text-dark mx-2 ">Latest
                            article</a>
                    </div>
                    <div class="mx-2 border rounded-5 px-2 text-center py-2 mx-2 col-md-3 my-2">
                        <a href="#" class="text-decoration-none text-dark mx-2 ">Success
                            Stories</a>
                    </div>
                </div> -->
                <div class="container">
                    <div class="row d-flex flex-row justify-content-center btn-container">
                    <div class="col-6 col-md-2 item" data-category="all">
                    <button class="btn  btn-viewmore1 rounded-5 active">ALL</button>
                    </div>
                    <?php
                    if(!empty($categorylist))
                    {
                        foreach($categorylist as $list)
                        { ?>

                      
                        <div class="col-6 col-md-2 item" data-category="<?php echo strtolower($list->Title); ?>">
                            <button class="btn  btn-viewmore1 rounded-5 active"><?= $list->Title; ?></button>
                        </div>

                        <?php }
                    }
                    ?>
                        
                    </div>
                </div>
                
                <div class="col-md-12">
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
                    <div class="col-md-12 pagination-container my-4">
                      
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
                <div class="col-md-12">
                    <div>
                        <h1>Get all the latest news & updates</h1>
                    </div>
                    <div class="my-4">
                        <input type="search" name="search" placeholder="Enter Your Email"
                            class="px-3 w-25 py-2 rounded-2">
                        <button class="rounded-2 px-3 py-1 border-0 down1 mx-2">Subscribe <span
                                class="material-symbols-outlined">
                                subscriptions
                            </span></button>
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
            // carousel4
            var owl4 = $(".owl-carousel4").owlCarousel({
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

            $("#customNextBtn4").click(function () {
                owl4.trigger('next.owl.carousel');
            });

            $("#customPrevBtn4").click(function () {
                owl4.trigger('prev.owl.carousel');
            });
            // carousel5
            var owl5 = $(".owl-carousel5").owlCarousel({
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

            $("#customNextBtn5").click(function () {
                owl5.trigger('next.owl.carousel');
            });

            $("#customPrevBtn5").click(function () {
                owl5.trigger('prev.owl.carousel');
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

        <script>
    $(document).ready(function() {
        $('.item').on('click', function() {
            var category = $(this).data('category'); // Get the data-category attribute value
            $('.blog-item').each(function() {
                var categories = $(this).data('categories'); 
                // Get data-categories attribute value
                if (category == 'all' || categories.includes(category)) {
                    $(this).fadeIn('slow').removeClass('hidden'); // Show blog items matching selected category or 'All'
                } else {
                    $(this).fadeOut('slow').addClass('hidden'); // Hide blog items not matching selected category
                }
            });
        });
    });
</script>
     
        
</body>

</html>