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
                    <p class="fw-bold fs-1">”TAKE A LOOK AT OUR GALLERY TO WITNESS THE ENRICHING EXPERIENCE AT TEJAS IAS
                        ACADEMY. SEE OUR STUDENTS IN ACTION, ENGAGING IN CLASSES, WORKSHOPS,AND MEMORABLE EVENTS."</p>
                </div>
            </div>
        </div>
    </section>
<section>
    <div class="container">
        <div class="row">
            <?php
            if(!empty($gallerylist))
            {
                foreach($gallerylist as $list)
                { ?>


               
            <div class="col-md-3  p-2 ">
                <img src="<?= base_url('uploads/gallery/').$list->ImagePath; ?>" alt="" class="img-fluid">
            </div>
            <?php }
            }
            
            ?>
           
    </div>
</section>
    <!-- footer -->
        <?php include('Footer.php'); ?>
        <?php include('TopFooter.php'); ?>
       
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
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