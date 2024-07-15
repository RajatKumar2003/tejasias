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
                <h2><a href="<?php echo site_url('Navigation/parentlink') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Parent Link</a></h2>
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
                                                <th>Title</th>
                                                <th>Language</th>
                                                <th>Order</th>
                                                <th>staus</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            if (!empty($parentlist)) {
                                                $i = 1;
                                                foreach ($parentlist as $list) {  ?>

                                                    <tr>
                                                        <td><?php echo $i++; ?></td>
                                                        <td><?php echo $list->MCatTitle; ?></td>
                                                        <td><?php echo $list->MCatLanguage; ?></td>
                                                        <td><?php echo $list->MCatOrder; ?></td>
                                                        <td><?php echo $list->MCatStatus == '1' ? "Active" : "Inactive"; ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url('Navigation/') . 'editparent/' . $list->MCatId ?>" class="btn btn-success btn-circle"><i class="fa fa-edit"></i>
                                                            </a>

                                                            <button class="btn btn-danger btn-circle" type="button" onclick="showConfirmation('<?php echo $list->MCatId ?>')"><i class="fa fa-trash"></i>
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



                                <form id="<?php echo ($editParent)? "updateparent":"addparent" ?>" action="<?php echo base_url() . 'UserRoles/add'; ?>" method="post">
                                
                                <div class="form-group">
                                        <label for="">Language</label>
                                      <select name="language" id="" class="form-control">
                                       <option value="english">english</option>
                                      </select>
                                    
                                    </div>
                                
                                <div class="form-group">
                                        <label for="">Title</label>
                                        <input type="hidden" name="Id" value="<?php echo ($editParent) ? $editParent->MCatId : ''; ?>">
                                        <input type="text" class="form-control" name="title" value="<?php echo ($editParent) ? $editParent->MCatTitle : ''; ?>">
                                    </div>

                                     <div class="form-group">
                                        <label for="">Slug</label>
                                      
                                        <input type="text" class="form-control" name="slug" value="<?php echo ($editParent) ? $editParent->MCatSlug : ''; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Description (Meta Tag)</label>
                             
                                        <input type="text" class="form-control" name="description" value="<?php echo ($editParent) ? $editParent->MCatDescription : ''; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Keywords  (Meta Tag)</label>
                                      
                                        <input type="text" class="form-control" name="keyword" value="<?php echo ($editParent) ? $editParent->MCatKeyword : ''; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Menu order</label>
                                      
                                        <input type="number" class="form-control" name="order" value="<?php echo ($editParent) ? $editParent->MCatOrder : ''; ?>">
                                    </div>

                                   

                                    <div class="form-group">
                                        <label for="">Show On Menu</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="1" <?php echo ($editParent) ? (($editParent->MCatStatus == 1) ? 'selected' : '') : ''; ?>>Yes</option>
                                            <option value="0" <?php echo ($editParent) ? (($editParent->MCatStatus == 0) ? 'selected' : '') : ''; ?>>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group ">

                                        <button type="submit" id="<?php echo $editParent ? 'update' : 'save'; ?>" class="btn btn-success ladda-button ladda-button-demo" <?php if ($editParent) { ?> formaction='<?php echo base_url('updateemployee') ?>' <?php } ?>>
                                            <i class="fa fa-bookmark"></i> <?php echo $editParent ? 'Update' : 'Add'; ?>
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
                url: '<?php echo base_url() . 'Navigation/deleteparentlink'; ?>',
                method: 'POST',
                data: {
                    id: global_var
                },
                success: function(data) {
                    // Handle the success response
                    var $toast = toastr['success']('Parent Link successfully deleted');
                    setTimeout(function() {
                        location.reload();
                    }, 2000)
                },
                error: function(error) {
                    // Handle the error response
                    var $toast = toastr['error']('Parent Lik not  deleted');

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
    <?php $this->load->view('navigation/parentjs'); ?>

</body>

</html>