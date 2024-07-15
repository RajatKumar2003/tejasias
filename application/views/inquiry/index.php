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
                <!-- <h2><a href="<?php echo site_url('Product/category') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Category</a></h2> -->
                </div>
            </div>
           
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">

<div class="row">
    <div class="col-lg-12">
        <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Contact Inquiries</a></li>
                   
                  
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                             
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example issue-tracker">

                             <thead>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Email</th>
                              
                                <th>Message</th>
                                <th>Action</th>
                             </thead>

                             <tbody>
                                <?php
                                if(!empty($contactlist))
                                {
                                    $i=1;
                                    foreach($contactlist as $contact)
                                    { ?>

                                    <tr>
                                       <td> <?php echo $i++; ?></td>
                                       <td><?php echo $contact->Name ?></td>
                                       <td><?php echo $contact->Mobile ?></td>
                                       <td><?php echo $contact->Email ?></td>
                                       <td class="issue-info"><?php echo $contact->Message ?></td>
                                       <td>   <button class="btn btn-danger btn-circle" type="button" onclick="showConfirmation1('<?php echo $contact->ContactId ?>')"><i class="fa fa-trash"></i>
                                       </button></td>
                                    </tr>

                                   <?php }
                                }
                                
                                ?>
                             </tbody>

                            </table>
                        </div>
                           

                        </div>
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

<div class="modal animated fadeInRight" tabindex="-1" role="dialog" id="confirmationModal1" style="left: 950px; top:-20px;">
  <div class="modal-dialog" role="document" style="width: 321px;">

  
    <div class="modal-content">
     
      <div class="modal-body" style="padding: 12px !important;">
        Are you sure you want to perform this action?

     
      </div>
      <div class="modal-footer" style="padding: 12px !important;">
      <button class="btn btn-primary btn-circle btn-sm fa-pull-right" style="margin: 0px 5px;" type="button" id="confirmYesButton1" ><i class="fa fa-check"></i> </button>
      <button class="btn btn-danger btn-circle btn-sm fa-pull-right" style="margin: 0px 5px;" id="confirmNoButton1" data-dismiss="modal" type="button"><i class="fa fa-trash"></i> </button>
     
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
var local_var = "10";

function showConfirmation(Id) {
  $('#confirmationModal').modal('show');
  global_var = Id;
  
  $('#confirmNoButton').on('click', function() {
    $('#confirmationModal').modal('hide');
  });
}

function showConfirmation1(Id) {
  $('#confirmationModal1').modal('show');
  local_var = Id;
  
  $('#confirmNoButton1').on('click', function() {
    $('#confirmationModal1').modal('hide');
  });
}

$('#confirmYesButton').on('click', function() {
  // When "Yes" is clicked, get the value of global_var
  var value = global_var;
  
  // Perform the AJAX function here, after global_var is assigned
  performAjaxFunction(value);
  $('#confirmationModal').modal('hide');
});

$('#confirmYesButton1').on('click', function() {
  // When "Yes" is clicked, get the value of global_var
  var value = local_var;
  
  // Perform the AJAX function here, after global_var is assigned
  performAjaxFunction1(value);
  $('#confirmationModal1').modal('hide');
});


function performAjaxFunction(global_var) {
            // Perform your AJAX request here


            $.ajax({
                url: '<?php echo base_url() . 'Inquiry/deleteinquiry'; ?>',
                method: 'POST',
                data: {
                    id: global_var
                },
                success: function(data) {
                    // Handle the success response
                    var $toast = toastr['success']('Inquiry successfully deleted');
                    setTimeout(function() {
                        location.reload();
                    }, 2000)
                },
                error: function(error) {
                    // Handle the error response
                    var $toast = toastr['error']('Inquiry not  deleted');

                    // setTimeout(function() {
                    //     location.reload();
                    // }, 2000)
                }
            });
        }

        function performAjaxFunction1(local_var) {
            // Perform your AJAX request here


            $.ajax({
                url: '<?php echo base_url() . 'Inquiry/deletecontact'; ?>',
                method: 'POST',
                data: {
                    id: local_var
                },
                success: function(data) {
                    // Handle the success response
                    var $toast = toastr['success']('Inquiry successfully deleted');
                    setTimeout(function() {
                        location.reload();
                    }, 2000)
                },
                error: function(error) {
                    // Handle the error response
                    var $toast = toastr['error']('Inquiry not  deleted');

                    // setTimeout(function() {
                    //     location.reload();
                    // }, 2000)
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
    

</body>

</html>