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
                <h2><a href="<?php echo site_url('Blog') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Blog</a></h2>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">

                <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">

                                <form id="<?php echo ($editBlog)? "updateblog":"addblog" ?>" action="<?php echo base_url() . 'UserRoles/add'; ?>" method="post">
                                    

                                <fieldset>
                              <div class="row">
                               
                              <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label>Category *</label>
                                                    <select data-placeholder="Choose a Country..." class="chosen-select" name="category"  tabindex="2">
                                                        <option value="">Select Category</option>
                                                    <?php
                                                      if(!empty($blogcategory))
                                                      {
                                                        foreach($blogcategory as $category)
                                                        {  ?>

                                                        <option value="<?php echo $category->CatId ?>"><?php echo $category->Title ?></option>

                                                        <?php }
                                                      }
                                                      ?>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-lg-5">
                                                <label>Title *</label>
                                                <input id="userName" name="title" type="text" class="form-control ">
                                            </div>

                                            <div class="col-lg-2">
                                                <label for="">Status</label>
                                                <div class="switch">
                                                    <div class="onoffswitch">
                                                        <input type="checkbox" checked class="onoffswitch-checkbox" id="example1">
                                                        <label class="onoffswitch-label" for="example1">
                                                            <span class="onoffswitch-inner"></span>
                                                            <span class="onoffswitch-switch"></span>
                                                        </label>
                                                        <input type="hidden" id="status" value="1" name="status">
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                                           
                                            <div class="row">
                                            <div class="col-lg-5">
                                                <label for="">Author Name</label>
                                                <input type="text" name="author" value="" class="form-control">
                                            </div>

                                            <div class="col-lg-5">
                                            <label for="">image </label>
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <span class="fileinput-filename" style="font-size: 11px;"></span></div>
                                                    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><i class="fa fa-file-photo-o "></i></span><span class="fileinput-exists"><i class="fa fa-edit"></i></span><input type="file" name="image" onchange="imagechange(event)"></span>
                                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i></a>
                                                    <span class="input-group-addon btn btn-default" onclick="previewImage('')" data-bs-toggle="modal" id="uploadBtn" disabled data-bs-target="#staticBackdrop"><i class="fa fa-eye"></i></span>
                                                </div>
                                            </div>

                                            <div class="col-lg-2">
                                                <label for="">Blog Date</label>
                                                <input type="date" name="date" class="form-control">
                                            </div>

                                          
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="">Description</label>
                                                    <textarea name="shortdescription" class="form-control" id=""></textarea>
                                                </div>
                                            </div>

                                            <div class="row ">
                                                <div class="col-lg-12">
                                                    <label for="">Full Details</label>
                                                    <textarea name="fulldescription" class="summernote" id=""></textarea>
                                                </div>
                                            </div>

                                         
                                            <div class="row" style="margin-top: 20px;">
                                                <div class="col-lg-12">
                                                <div class="form-group ">
                                                <button type="reset" class="btn btn-danger fa-pull-right" style="margin: 0px 5px;">Reset</button>

<button type="submit" id="<?php echo $editBlog ? 'update' : 'save'; ?>" class="btn btn-success ladda-button ladda-button-demo fa-pull-right" <?php if ($editBlog) { ?> formaction='<?php echo base_url('updateemployee') ?>' <?php } ?>>
    <i class="fa fa-bookmark"></i> <?php echo $editBlog ? 'Update' : 'Add'; ?>
</button>



</div>
                                                </div>
                                            </div>
                                            </fieldset>
                                    
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example issue-tracker">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th >Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            if (!empty($bloglist)) {
                                                $i = 1;
                                                foreach ($bloglist as $list) {  ?>

                                                    <tr>
                                                        <td><?php echo $i++; ?></td>
                                                        <td ><?php echo $list->Title; ?></td>
                                                        <td class="issue-info"><?php echo $list->ShortDescription; ?></td>
                                                        <td><?php echo $list->Status == '1' ? "Active" : "Inactive"; ?></td>
                                                       
                                                       
                                                       
                                                        <td>
                                                            <a href="<?php echo base_url('Blog/') . 'editblog/' . $list->BlogId ?>" class="btn btn-success btn-circle" ><i class="fa fa-edit"></i>
                                                            </a>

                                                            <button class="btn btn-danger btn-circle" type="button" onclick="showConfirmation('<?php echo $list->BlogId ?>')" ><i class="fa fa-trash"></i>
                                                            </button>
                                                            <a href="<?php echo base_url('uploads/blog/').$list->Image; ?>" target="_blank" class="btn btn-warning btn-circle" ><i class="fa fa-file-photo-o "></i></a>

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

<div class="modal animated fadeInRight" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <img src="" id="previewimage" alt="" style="width: 200px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="closemodal" data-bs-dismiss="modal">Close</button>
        
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

var global_var = "10";

function imagechange(event) {
        var input = event.target;
        var file = input.files[0];
        var reader = new FileReader();
        var preview = document.getElementById('previewimage');
        var uploadBtn = document.getElementById('uploadBtn');

        reader.onloadend = function() {
        preview.src = reader.result;
    }
        // Update file name display

        if (input.files.length > 0) {
      uploadBtn.removeAttribute('disabled');
    } else {
      uploadBtn.setAttribute('disabled', 'disabled');
    }
      
        if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }
        // Call previewImage() to show preview in modal
        // previewImage(file);
    }

        function previewImage(src)
        {
            $('#staticBackdrop').modal('show');

            $('#closemodal').on('click', function() {
                $('#staticBackdrop').modal('hide');
            });
            // $("#previewimage").attr("src",src);
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
                url: '<?php echo base_url() . 'Blog/deleteblog'; ?>',
                method: 'POST',
                data: {
                    id: global_var
                },
                success: function(data) {
                    // Handle the success response
                    var $toast = toastr['success']('Blog successfully deleted');
                    setTimeout(function() {
                        location.reload();
                    }, 2000)
                },
                error: function(error) {
                    // Handle the error response
                    var $toast = toastr['error']('Blog not  added');

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
    <?php $this->load->view('blog/blogjs'); ?>
    <script>
        $(document).ready(function(){
            $('.chosen-select').chosen({width: "100%"});
            $('.summernote').summernote();

            $('.onoffswitch-checkbox').change(function() {
        var isChecked = $(this).is(':checked');
        // $('#example1').prop('checked', isChecked);

        if(isChecked)
        {
           $("#status").val('1')
        }

        else{
           $("#status").val('0');
        }

      
    });
        });
    </script>

</body>

</html>