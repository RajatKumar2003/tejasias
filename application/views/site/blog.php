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
                    <p class="fs1">EXPLORE OUR</p>
                    <p class="fs2">LATEST BLOG POST</p>
                </div>
            </div>
        </div>
    </section>


    <!-- section two -->
    <section class="bg-white py-5">

   
        
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= base_url('uploads/blog/').$bloglist[0]->Image; ?>" alt="amblum" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div>
                        <h5><?= $bloglist[0]->Title; ?></h5>
                        <p><?= $bloglist[0]->ShortDescription; ?></p>
                    </div>
                    <div class="d-flex ">
                        <ul type="none">
                            <li>Category</li>
                            <li><?= $bloglist[0]->category_title; ?></li>
                        </ul>
                        <ul type="none">
                            <li>Publication Date</li>
                            <li><?= $bloglist[0]->Date; ?></li>
                        </ul>
                        <ul type="none">
                            <li>Author</li>
                            <li><?= $bloglist[0]->AuthorName; ?></li>
                        </ul>
                    </div>
                    <div class="row my-3">
                        <div class="col-6 d-flex p-0 mb-2">
                            <div class="border mx-2 likes px-2 py-1 rounded-pill">
                                <img src="<?= base_url('assets/site/assets') ?>/index5/Icon (1).png" alt="icon">12k
                            </div>
                            <div class="border mx-2 likes px-2 py-1 rounded-pill">
                                <img src="<?= base_url('assets/site/assets') ?>/index5/Icon (2).png" alt="icon">227
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <a href="<?= site_url().'blogdetail/'.$bloglist[0]->BlogId; ?>" class="text-decoration-none text-dark border px-2 py-2 view rounded-pill">Read
                                More <img src="<?= base_url('assets/site/assets') ?>/index5/Vector 431 (Stroke).png" alt="arrow" class="mx-1"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


 

        <div class="container">
            <div class="row py-5">
            <?php
if (!empty($bloglist)) {
    $count = 0; // Initialize a counter variable
    
    foreach ($bloglist as $list) {
        $count++; // Increment the counter
        
        // Skip the first row (count == 1)
        if ($count == 1) {
            continue;
        }
        
        ?>
                <div class=" col-md-4 my-3">
                    <div class="card border-0">
                        <img src="<?= base_url('uploads/blog/').$list->Image ?>" class="card-img-top" alt="book">
                        <div class="card-body p-0">
                            <h5 class="card-title mt-3"><?= $list->Title; ?></h5>
                            <p class="card-text"><?= $list->category_title ?></p>
                        </div>
                        <div class="row my-3">
                            <div class="col-6 d-flex p-0 mb-2">
                                <div class="border mx-2 likes px-2 py-1 rounded-pill">
                                    <img src="<?= base_url('assets/site/assets') ?>/index5/Icon (1).png" alt="icon">2.2k
                                </div>
                                <div class="border mx-2 likes px-2 py-1 rounded-pill">
                                    <img src="<?= base_url('assets/site/assets') ?>/index5/Icon (2).png" alt="icon">111
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="<?= site_url().'blogdetail/'.$list->BlogId; ?>" class="text-decoration-none text-dark border px-2 py-2 view rounded-pill">Read
                                    More <img src="<?= base_url('assets/site/assets') ?>/index5/Vector 431 (Stroke).png" alt="arrow" class="mx-1"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php   }
    }
    ?>
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
     
        
</body>

</html>