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
                    <h2><a href="<?php echo site_url('Navigation') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Menu Link</a></h2>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Navigation</h5>

                            </div>
                            <div class="ibox-content">
                                <div class="panel-body">
                                    <div class="panel-group" id="accordion">

                                        <?php
                                        if (!empty($parentlist)) {
                                            foreach ($parentlist as $category) {
                                                $this->db->where('MCategory', $category->MCatId);
                                                $query = $this->db->get('menu_tbl');

                                                if ($query->num_rows() > 0) {
                                                    // If there are results for the category
                                                    foreach ($query->result() as $row) {
                                        ?>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h5 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row->MId; ?>" class="collapsed">
                                                                        <span><?php echo $category->MCatTitle; ?></span>
                                                                        <i class="fa fa-plus fa-pull-right collapsed"></i>
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                            <div id="collapse<?php echo $row->MId; ?>" class="panel-collapse collapse">
                                                                <div class="panel-body" style="padding: 6px 13px">
                                                                    <span><?php echo $row->MTitle; ?></span>
                                                                    <button class="btn btn-danger btn-circle fa-pull-right" style="margin: 0 5px;" type="button" onclick="showConfirmation('<?php echo $row->MId ?>')"><i class="fa fa-trash"></i></button>
                                                                    <a href="<?php echo base_url('Navigation/') . 'editmenu/' . $row->MId ?>" class="btn btn-success btn-circle fa-pull-right"><i class="fa fa-edit"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    }
                                                } else {

                                                    ?>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h5 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseNone">
                                                                    <?php echo $category->MCatTitle; ?>
                                                                </a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            }
                                        } else {

                                            ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title">
                                                        No Categories Found
                                                    </h5>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">



                                <form id="<?php echo ($editMenu) ? "updatemenu" : "addmenu" ?>" action="<?php echo base_url() . 'UserRoles/add'; ?>" method="post">

                                    <div class="form-group">
                                        <label for="">Language</label>
                                        <select name="language" id="" class="form-control">
                                            <option value="english">english</option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="">Parent Link</label>
                                        <select data-placeholder="Choose a Country..." class="chosen-select" name="category" tabindex="2">
                                            <option value="">Select Category</option>
                                            <?php
                                            if (!empty($parentlist)) {
                                                foreach ($parentlist as $category) {
                                                    
                                                    if($category->MCatId==$editMenu->MCategory)
                                                    {
                                                        $option = "selected";
                                                    }

                                                    else {
                                                        $option = "";
                                                    }

                                                    ?>

                                                    <option value="<?php echo $category->MCatId ?>" <?php echo $option; ?> ><?php echo $category->MCatTitle ?></option>

                                            <?php }
                                            }
                                            ?>
                                        </select>

                                    </div>


                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input type="hidden" name="Id" value="<?php echo ($editMenu) ? $editMenu->MId : ''; ?>">
                                        <input type="text" class="form-control" name="title" value="<?php echo ($editMenu) ? $editMenu->MTitle : ''; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Description (Meta Tag)</label>

                                        <input type="text" class="form-control" name="description" value="<?php echo ($editMenu) ? $editMenu->MDescription : ''; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Keywords (Meta Tag)</label>

                                        <input type="text" class="form-control" name="keyword" value="<?php echo ($editMenu) ? $editMenu->MKeyword : ''; ?>">
                                    </div>



                                    <div class="form-group">
                                        <label for="">Show On Menu</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="1" <?php echo ($editMenu) ? (($editMenu->MStatus == 1) ? 'selected' : '') : ''; ?>>Yes</option>
                                            <option value="0" <?php echo ($editMenu) ? (($editMenu->MStatus == 0) ? 'selected' : '') : ''; ?>>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group ">

                                        <button type="submit" id="<?php echo $editMenu ? 'update' : 'save'; ?>" class="btn btn-success ladda-button ladda-button-demo" <?php if ($editMenu) { ?> formaction='<?php echo base_url('updateemployee') ?>' <?php } ?>>
                                            <i class="fa fa-bookmark"></i> <?php echo $editMenu ? 'Update' : 'Add'; ?>
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
                url: '<?php echo base_url() . 'Navigation/deletemenulink'; ?>',
                method: 'POST',
                data: {
                    id: global_var
                },
                success: function(data) {
                    // Handle the success response
                    var $toast = toastr['success']('Menu Link successfully deleted');
                    setTimeout(function() {
                        location.reload();
                    }, 2000)
                },
                error: function(error) {
                    // Handle the error response
                    var $toast = toastr['error']('Menu Lik not  deleted');

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
            $('.chosen-select').chosen({
                width: "100%"
            });

            $('.panel-heading a').click(function() {
                var icon = $(this).find('i.fa');
                if ($(this).hasClass('collapsed')) {
                    // Panel is collapsed, change icon to plus
                    icon.removeClass('fa-plus').addClass('fa-minus');
                } else {
                    // Panel is expanded, change icon to minus
                    icon.removeClass('fa-minus').addClass('fa-plus');
                 
                }
            });
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
    <?php $this->load->view('navigation/indexjs'); ?>

</body>

</html>