<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $('#addcategory').submit(function(event) {
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
                        url: '<?php echo base_url() . 'Blog/savecategory' ?>',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            l.ladda('stop');
                            var $toast = toastr['success']('Category successfully added');
                            setTimeout(function() {
                                location.reload();
                            }, 2000)
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            console.log(xhr.responseText);
                            // Stop Ladda animation on error
                            var $toast = toastr['error']('Category not  added');
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


        $('#updatecategory').submit(function(event) {
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
                        url: '<?php echo base_url() . 'Blog/updatecategory' ?>',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            l.ladda('stop');
                            var $toast = toastr['success']('Category successfully updated');
                            setTimeout(function() {
                                location.reload();
                            }, 2000)
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            console.log(xhr.responseText);
                            // Stop Ladda animation on error
                            l.ladda('stop');
                            var $toast = toastr['error']('Category not  added');

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