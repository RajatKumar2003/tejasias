<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $('#addmenu').submit(function(event) {
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
                        url: '<?php echo base_url() . 'Navigation/savemenulink' ?>',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            l.ladda('stop');
                            var $toast = toastr['success']('Menu Link successfully added');
                            setTimeout(function() {
                                location.reload();
                            }, 2000)
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            console.log(xhr.responseText);
                            // Stop Ladda animation on error
                            var $toast = toastr['error']('Menu Link not  added');
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


        $('#updatemenu').submit(function(event) {
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
                        url: '<?php echo base_url() . 'Navigation/updatemenulink' ?>',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            l.ladda('stop');
                            var $toast = toastr['success']('Menu Link successfully updated');
                            setTimeout(function() {
                                location.reload();
                            }, 2000)
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            console.log(xhr.responseText);
                            // Stop Ladda animation on error
                            l.ladda('stop');
                            var $toast = toastr['error']('Menu Link not  updated');

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