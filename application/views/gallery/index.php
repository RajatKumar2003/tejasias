<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('layouts/TopHeader'); ?>
    <link href="<?php echo base_url('assets/') ?>css/plugins/dataTables/datatables.min.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <?php $this->load->view('layouts/SideBar'); ?>

        <div id="page-wrapper" class="gray-bg">

            <?php $this->load->view('layouts/Header'); ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php echo $pagename; ?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">
                    <h2><a href="#" onclick="addimage()" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Image</a></h2>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">

            

            <div class="row">

            <?Php
            if(!empty($gallerylist))
            {
                foreach($gallerylist as $gallery)
                { ?>

              

                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation" style="padding: 0;">
                             <img src="<?php echo base_url('uploads/gallery/').$gallery->ImagePath; ?>" alt="" class="img-fluid" width="100%" height="300px">
                            </div>
                            <div class="product-desc">
                               
                               
                                <a href="#" class="product-name"><?php
$dateString = $gallery->CreatedAt;
$date = date('d-m-Y', strtotime($dateString));
echo $date;
?>

 <span class="fa-pull-right" onclick="showConfirmation('<?php echo $gallery->GalleryId ?>')"><i class="fa fa-trash btn btn-danger"></i></span>
</a>
                            </div>
                        </div>
                    </div>
                </div>
              


                <?Php }
            }
            ?>



            </div>
            



        </div>
            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2017
                </div>
            </div>

        </div>
    </div>

    <div class="modal animated fadeInRight" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
         <form id="imageForm" enctype="multipart/form-data">
            <label for="">Image</label>
            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <span class="fileinput-filename" style="font-size: 11px;"></span></div>
                                                    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><i class="fa fa-file-photo-o "></i></span><span class="fileinput-exists"><i class="fa fa-edit"></i></span><input type="file" name="image" onchange="fileInputChange(event)" ></span>
                                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i></a>
                                                    <span class="input-group-addon btn btn-default" onclick="uploadimage('')"  id="uploadBtn" disabled  data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa fa-cloud-upload"></i></span>
                                                </div>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="closemodal" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

    <!-- Bootstrap modal for confirmation -->
    <div class="modal animated fadeInRight" tabindex="-1" role="dialog" id="confirmationModal" style="left: 950px; top:-20px;">
        <div class="modal-dialog" role="document" style="width: 321px;">


            <div class="modal-content">

                <div class="modal-body" style="padding: 12px !important;">
                    Are you sure you want to perform this action?


                </div>
                <div class="modal-footer" style="padding: 12px !important;">
                    <button class="btn btn-primary btn-circle btn-sm fa-pull-right" style="margin: 0px 5px;" type="button" id="confirmYesButton"><i class="fa fa-check"></i> </button>
                    <button class="btn btn-danger btn-circle btn-sm fa-pull-right" style="margin: 0px 5px;" id="confirmNoButton" data-dismiss="modal" type="button"><i class="fa fa-trash"></i> </button>

                </div>
            </div>
        </div>
    </div>

    <!-- Button to trigger the confirmation -->
    <!-- <button onclick="showConfirmation()">Perform Action</button> -->


    <!-- Mainly scripts -->

    <?php $this->load->view('layouts/TopFooter'); ?>
    <script src="<?php echo base_url('assets/admin/') ?>js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
   
    <script>

function fileInputChange(event) {
    var fileInput = event.target;
    var uploadBtn = document.getElementById('uploadBtn');

    // Enable upload button if a file is selected, disable otherwise
    if (fileInput.files.length > 0) {
      uploadBtn.removeAttribute('disabled');
    } else {
      uploadBtn.setAttribute('disabled', 'disabled');
    }
  }

           function addimage()
        {
            $('#staticBackdrop').modal('show');

            $('#closemodal').on('click', function() {
                $('#staticBackdrop').modal('hide');
            });
            // $("#previewimage").attr("src",src);
        }


        function uploadimage()
        {
            var form = document.getElementById('imageForm');
            var formData = new FormData(form);

            $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url() . 'Gallery/savegallery' ?>',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            // l.ladda('stop');
                            $('#staticBackdrop').modal('hide');
                            var $toast = toastr['success']('Image successfully added');
                            setTimeout(function() {
                                location.reload();
                            }, 2000)
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            console.log(xhr.responseText);
                            // Stop Ladda animation on error
                            $('#staticBackdrop').modal('hide');
                            var $toast = toastr['error']('Image not  added');
                            l.ladda('stop');
                            setTimeout(function() {
                                location.reload();
                            }, 2000)
                        }
                    });
          
        }


        function showConfirmation(Id) {
  $('#confirmationModal').modal('show');
  global_var = Id;
  
  $('#confirmNoButton').on('click', function() {
    $('#confirmationModal').modal('hide');
  });
}

$('#confirmYesButton').on('click', function() {
  // When "Yes" is clicked, get the value of global_var
  var value = global_var;
  
  // Perform the AJAX function here, after global_var is assigned
  performAjaxFunction(value);
  $('#confirmationModal').modal('hide');
});


function performAjaxFunction(global_var) {
            // Perform your AJAX request here


            $.ajax({
                url: '<?php echo base_url() . 'Gallery/deletegallery'; ?>',
                method: 'POST',
                data: {
                    id: global_var
                },
                success: function(data) {
                    // Handle the success response
                    var $toast = toastr['success']('Image successfully deleted');
                    setTimeout(function() {
                        location.reload();
                    }, 2000)
                },
                error: function(error) {
                    // Handle the error response
                    var $toast = toastr['error']('Image not  deleted');

                    setTimeout(function() {
                        location.reload();
                    }, 2000)
                }
            });
        }
    </script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'ExampleFile'
                    },
                    {
                        extend: 'pdf',
                        title: 'ExampleFile'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });
    </script>
    <?php $this->load->view('seo/seojs'); ?>

</body>

</html>