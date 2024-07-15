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
                    <!-- <h2><a href="<?php echo site_url('Blog/category') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Category</a></h2> -->
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">

                                <form id="updateseo" action="<?php echo base_url() . 'UserRoles/add'; ?>" method="post" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Setting Language</label>
                                                <input type="hidden" name="Id" value="<?php echo ($editseo) ? $editseo->SeoId : ''; ?>">
                                                <select name="language" id="" class="form-control">
                                                    <option value="english">english</option>
                                                </select>
                                                <!-- <input type="text" class="form-control" name="title" value="<?php echo ($editCategory) ? $editCategory->Title : ''; ?>"> -->
                                            </div>



                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Site Title</label>

                                                <input type="text" class="form-control" name="sitetitle" value="<?php echo ($editseo) ? $editseo->SiteTitle : ''; ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Site Description</label>
                                                <input type="text" name="sitedescription" class="form-control" value="<?php echo ($editseo) ? $editseo->SiteDescription : ''; ?>">

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Sitemap</label>
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput">
                                                        <span class="fileinput-filename" style="font-size: 11px;"><?php echo ($editseo) ? $editseo->SiteMap : ''; ?></span>
                                                    </div>
                                                    <span class="input-group-addon btn btn-default btn-file">
                                                        <span class="fileinput-new"><i class="fa fa-file-photo-o"></i></span>
                                                        <span class="fileinput-exists"><i class="fa fa-edit"></i></span>
                                                        <input type="file" id="sitemap" name="sitemap" onchange="imagechange(event,'sitemap')" value="<?php echo ($editseo) ? $editseo->SiteMap : ''; ?>">
                                                    </span>
                                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i></a>
                                                    <!-- Add preview button -->
                                                    <!-- <span class="input-group-addon btn btn-default" onclick="previewImage('sitemap')" data-bs-toggle="modal" disabled id="uploadBtn_sitemap" data-bs-target="#sitemap_Modal"><i class="fa fa-eye"></i></span> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="">Keywords</label>
                                            <textarea name="keywords" class="form-control" id=""><?php echo ($editseo) ? $editseo->KeyWords : ''; ?></textarea>
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="">Google Analytics</label>
                                            <textarea name="googleanalytics" id="" class="form-control"><?php echo ($editseo) ? $editseo->GoogleAnalytics : ''; ?></textarea>
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="">Logo</label>
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <span class="fileinput-filename" style="font-size: 11px;">
                                                        <?php echo ($editseo && !empty($editseo->Logo)) ? $editseo->Logo : ''; ?>
                                                    </span>
                                                </div>
                                                <span class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new"><i class="fa fa-file-photo-o"></i></span>
                                                    <span class="fileinput-exists"><i class="fa fa-edit"></i></span>
                                                    <input type="file" id="logo" name="logo" onchange="imagechange(event,'logo')" value="<?php echo ($editseo && !empty($editseo->Logo)) ? $editseo->Logo : ''; ?>">
                                                </span>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i></a>
                                                <!-- Add preview button with conditional disabled attribute -->
                                                <span class="input-group-addon btn btn-default" onclick="previewImage('logo')" <?php echo ($editseo && empty($editseo->Logo)) ? 'disabled' : ''; ?> id="uploadBtn_logo" data-bs-toggle="modal" data-bs-target="#logo_Modal"><i class="fa fa-eye"></i></span>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">
                                            <label for="">Favicon</label>
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <span class="fileinput-filename" style="font-size: 11px;"><?php echo ($editseo) ? $editseo->Favicon : ''; ?></span>
                                                </div>
                                                <span class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new"><i class="fa fa-file-photo-o"></i></span>
                                                    <span class="fileinput-exists"><i class="fa fa-edit"></i></span>
                                                    <input type="file" id="favicon" name="favicon" onchange="imagechange(event,'favicon')" value="<?php echo ($editseo) ? $editseo->Favicon : ''; ?>">
                                                </span>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i></a>
                                                <!-- Add preview button -->
                                                <span class="input-group-addon btn btn-default" onclick="previewImage('favicon')" data-bs-toggle="modal" <?php echo ($editseo && empty($editseo->Favicon)) ? 'disabled' : ''; ?> id="uploadBtn_favicon" data-bs-target="#favicon_Modal"><i class="fa fa-eye"></i></span>
                                            </div>
                                        </div>





                                        <div class="col-lg-12 " style="margin-top: 15px;">
                                            <div class="form-group ">

                                                <button class="btn btn-danger fa-pull-right" type="reset" style="margin: 0px 10px;" type="reset">Reset</button>

                                                <button type="submit" class="btn btn-success ladda-button ladda-button-demo fa-pull-right">
                                                    <i class="fa fa-bookmark"></i> Update
                                                </button>

                                                <p id="error-message" style="display: none; color: red;"></p>

                                            </div>
                                        </div>
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


    <div class="modal animated fadeInRight" id="sitemap_Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <img src="" id="previewimage_sitemap" alt="" style="width: 200px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close_sitemap" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <div class="modal animated fadeInRight" id="logo_Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <img src="<?php echo ($editseo && !empty($editseo->Logo)) ? base_url('uploads/seo/'). $editseo->Logo : ''; ?>" id="previewimage_logo" alt="" style="width: 200px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close_logo" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <div class="modal animated fadeInRight" id="favicon_Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <img src="<?php echo ($editseo && !empty($editseo->Favicon)) ? base_url('uploads/seo/'). $editseo->Favicon : ''; ?>" id="previewimage_favicon" alt="" style="width: 200px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close_favicon" data-bs-dismiss="modal">Close</button>

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

// const fileInputs = document.querySelectorAll('input[type="file"]');

// fileInputs.forEach(input => {
//   input.addEventListener('change', validateFiles);
// });





    </script>

    <script>
        var global_var = "10";

        function imagechange(event, title) {
            var input = event.target;
            var file = input.files[0];
            var reader = new FileReader();


            var preview = document.getElementById('previewimage_' + title);
            var uploadBtn = document.getElementById('uploadBtn_' + title);

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

        function previewImage(title) {
            $('#' + title + "_Modal").modal('show');

            $('#' + title + "_Modal").on('click', function() {
                $('#' + title + "_Modal").modal('hide');
            });
            // $("#previewimage").attr("src",src);
        }

        function validateFiles() {
    var file1 = document.getElementById('sitemap').files[0];
    var file2 = document.getElementById('logo').files[0];
    var file3 = document.getElementById('favicon').files[0];

    if (file1 || file2 || file3) {
        if (file1.name === file2.name || file1.name === file3.name || file2.name === file3.name) {
            alert('Please select different files for each input.');
            return false;
        } else {
            alert('Files are valid!');
            return true;
        }
    } else {
        alert('Please select files for all inputs.');
        return false;
    }
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