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
                <h2><a href="<?php echo site_url('Syllabus') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Syllabus</a></h2>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover ">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            if (!empty($syllabuslist)) {
                                                $i = 1;
                                                foreach ($syllabuslist as $list) {  ?>

                                                    <tr>
                                                        <td><?php echo $i++; ?></td>
                                                      
                                                        <td><?= $list->Category ?></td>
                                                        
                                                        <td>
                                                        <a href="<?= base_url('uploads/syllabus/').$list->Image; ?>" target="_blank" class="btn btn-warning btn-circle"><i class="fa fa-file-photo-o "></i></a> 
                                                            <button class="btn btn-danger btn-circle" type="button" onclick="showConfirmation('<?php echo $list->SyllabusId ?>')"><i class="fa fa-trash"></i>
                                                            </button>

                                                        </td>
                                                    </tr>

                                            <?php }
                                            }
                                            ?>

                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">

                                <form id="<?php echo ($editSyllabus)? "updateupdates":"addsyllabus" ?>" action="<?php echo base_url() . 'UserRoles/add'; ?>" method="post" enctype="multipart/form-data">
                                    
                                
                                <div class="form-group">
                                    <label for="">Select Category</label>
                                    <select name="category" id="" class="form-control" required>
                                        <option value="">select category</option>
                                        <option value="UPSC-IAS">UPSC-IAS</option>
                                        <option value="CGPSC">CGPSC</option>
                                        <option value="BANKING">BANKING</option>
                                        <option value="SSC">SSC</option>
                                        <option value="RAILWAY">RAILWAY</option>
                                        <option value="VYAPAM">VYAPAM</option>
                                        
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                        <label for="">Pdf</label>
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <span class="fileinput-filename" style="font-size: 11px;"></span></div>
                                                    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><i class="fa fa-file-photo-o "></i></span><span class="fileinput-exists"><i class="fa fa-edit"></i></span><input type="file" name="image" accept=".pdf" ></span>
                                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i></a>
                                                    <!-- <span class="input-group-addon btn btn-default" onclick="previewImage('')" data-bs-toggle="modal" id="uploadBtn" disabled data-bs-target="#staticBackdrop"><i class="fa fa-eye"></i></span> -->
                                                </div>
                                           
                                    </div>

                                  

                                    <div class="form-group ">

                                        <button type="submit" id="<?php echo $editSyllabus ? 'update' : 'save'; ?>" class="btn btn-success ladda-button ladda-button-demo" <?php if ($editSyllabus) { ?> formaction='<?php echo base_url('updateemployee') ?>' <?php } ?>>
                                            <i class="fa fa-bookmark"></i> <?php echo $editSyllabus ? 'Update' : 'Add'; ?>
                                        </button>

                                        
                                        <button class="btn btn-danger" type="reset">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
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

<!-- Bootstrap modal for confirmation -->
<div class="modal animated fadeInRight" tabindex="-1" role="dialog" id="confirmationModal" style="left: 950px; top:-20px;">
  <div class="modal-dialog" role="document" style="width: 321px;">

  
    <div class="modal-content">
     
      <div class="modal-body" style="padding: 12px !important;">
        Are you sure you want to perform this action?

     
      </div>
      <div class="modal-footer" style="padding: 12px !important;">
      <button class="btn btn-primary btn-circle btn-sm fa-pull-right" style="margin: 0px 5px;" type="button" id="confirmYesButton" ><i class="fa fa-check"></i> </button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

    <!-- Custom and plugin javascript -->
<script>

var global_var = "10";

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
                url: '<?php echo base_url() . 'Syllabus/deletesyllabus'; ?>',
                method: 'POST',
                data: {
                    id: global_var
                },
                success: function(data) {
                    // Handle the success response
                    var $toast = toastr['success']('Syllabus successfully deleted');
                    setTimeout(function() {
                        location.reload();
                    }, 2000)
                },
                error: function(error) {
                    // Handle the error response
                    var $toast = toastr['error']('Syllabus not  added');

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


            $('#addsyllabus').submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            // Initialize Ladda
            var l = $('.ladda-button-demo').ladda();
            // Validate the form
            if ($(this).valid()) {
                var formData = new FormData($(this)[0]);
                console.log(formData);

                // Start Ladda animation
                l.ladda('start');

                setTimeout(function() {
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url() . 'Syllabus/savesyllabus' ?>',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            l.ladda('stop');
                            var $toast = toastr['success']('Syllabus successfully added');
                            setTimeout(function() {
                                location.reload();
                            }, 2000)
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            console.log(xhr.responseText);
                            // Stop Ladda animation on error
                            var $toast = toastr['error']('Syllabus not  added');
                            l.ladda('stop');
                            setTimeout(function() {
                                location.reload();
                            }, 2000)
                        }
                    });
                }, 2000)

                // Perform AJAX form submission

            }
        });

        });
    </script>
   

</body>

</html>