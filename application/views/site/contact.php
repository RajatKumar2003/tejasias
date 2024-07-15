<!doctype html>
<html lang="en">

<head>
   
    <?php include('TopHeader.php'); ?>
    <style>
    .modal-confirm {		
	color: #434e65;
	width: 525px;
}
.modal-confirm .modal-content {
	padding: 20px;
	font-size: 16px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	background: #47c9a2;
	border-bottom: none;   
	position: relative;
	text-align: center;
	margin: -20px -20px 0;
	border-radius: 5px 5px 0 0;
	padding: 35px;
}

.modal-error{
            background: #dc3545 !important;
        }

.modal-confirm h4 {
	text-align: center;
	font-size: 36px;
	margin: 10px 0;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: 15px;
	right: 15px;
	color: #fff;
	text-shadow: none;
	opacity: 0.5;
}
.modal-confirm .close:hover {
	opacity: 0.8;
}
.modal-confirm .icon-box {
	color: #fff;		
	width: 95px;
	height: 95px;
	display: inline-block;
	border-radius: 50%;
	z-index: 9;
	border: 5px solid #fff;
	padding: 15px;
	text-align: center;
}
.modal-confirm .icon-box i {
	font-size: 64px;
    margin: -16px 0 0 -12px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #eeb711 !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border-radius: 30px;
	margin-top: 10px;
	padding: 6px 20px;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #eda645 !important;
	outline: none;
}
.modal-confirm .btn span {
	margin: 1px 3px 0;
	float: left;
}
.modal-confirm .btn i {
	margin-left: 1px;
	font-size: 20px;
	float: right;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
  </style>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>

<body>
    <!-- header -->
    <?php include('Header.php'); ?>
    <!-- first section -->
    <section>
        <div class="container first-con">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <div>
                        <a href="home.html" class="text-decoration-none grey">Home ></a>
                        <a href="contact.html" class="text-decoration-none grey">Contact</a>
                    </div>
                    <div class="col-6 my-5">
                        <p class="two">LET'S HAVE A DISCUSSION</p>
                    </div>
                    <div class="col-7">
                        <p style="color: red;">( You will get a call from us in next 24 hours after submitting the form
                            )</p>
                    </div>
                    <div class="top" >
                        <div>
                            <p class="grey my-4">Feel free to get in touch with us:</p>
                        </div>
                        <div class="border rounded-pill py-1 px-2 col-md-5 my-4">
                            <p class="fs-4 fw1 my-0"><img src="<?= base_url('assets/site/assets') ?>/index2/copy_svgrepo.com.png" alt="copy"
                                    class="mx-2 img">tejasias@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-7 mt-3 mb-5 pb-5">
                        <p>”Your Journey Starts Here! Reach out to our team through the Contact Us form. Whether you
                            have inquiries about our
                            courses, need assistance, or simply want to explore opportunities, we're here to help. Drop
                            us a message, and let's
                            begin this journey together.’’</p>
                    </div>
                </div>
                <div class="col-md-4 py-5">
                    <div>
                        <h1 class="text-white">Tell Us About Yourself</h1>
                    </div>

                <form action="#" id="form">
                    <div class="my-2 bord-bottom">
                        <div class="d-flex ">
                            <input type="text" id="name" name="name" placeholder="Your Name"
                            class="bg-transparent border-0 form-control w-100 my-3">
                            <span class="material-symbols-outlined text-white pt-3">person</span>
                        </div>
                        <div class="error" id="nameError"></div>
                    </div>
                
                    <div class="my-2  bord-bottom">
                        <div class="d-flex">
                            <input type="email" name="email" id="email" placeholder="Email Id"
                            class="bg-transparent w-100 my-3 form-control border-0">
                            <span class="material-symbols-outlined pt-3 text-white">mail</span>
                        </div>
                        <div class="error" id="emailError"></div>
                    </div>
                
                    <div class="my-2 bord-bottom">
                        <div class="d-flex">
                            <input type="tel" name="phone" id="phone" placeholder="Contact Number"
                                class="bg-transparent border-0 form-control w-100 my-3">
                            <span class="material-symbols-outlined text-white pt-3">call</span>
                        </div>
                        <div class="error" id="phoneError"></div>
                    </div>
                    <div class="my-2  bord-bottom">
                        <div class="d-flex">
                            <input type="text" name="courses" id="courses" placeholder="Courses You Are Interested In"
                                class="bg-transparent border-0 w-100 my-3 form-control">
                            <span class="material-symbols-outlined text-white pt-3">description</span>
                        </div>
                        <div class="error" id="coursesError"></div>
                    </div>
                
                    <div class="my-2 bord-bottom ">
                        <div class="d-flex">
                            <textarea name="message" id="message" placeholder="Your Message"
                                class="bg-transparent border-0 w-100 my-3 pb-5 form-control"></textarea>
                            <span class="material-symbols-outlined pt-3 text-white">border_color</span>
                        </div>
                        <div class="error" id="messageError"></div>
                    </div>
                
                    <div id="formError" class="error"></div>
                
                    <div>
                        <button type="submit" class="btn btn2 fs14 p-2 bg-secondary"><span
                                class="text-decoration-none text-white">Submit</span>
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>

    <!-- second section -->
    <section class="bg-white">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6">
                    <div>
                        <p class="grey fs-6">OUR BRANDING:</p>
                        <p class="fs-3">Sector 7 Branch</p>
                    </div>
                    <div>
                        <p class="grey fs-6">OUR LOCATION:</p>
                        <p class="fs-3">19A, 7th Street (Avenue A),
                            Near Hosanna Church,
                            Gayatri Devi Temple,
                            Sector 7, Bhilai, Chattisgarh.
                            Bhilai, Chattisgarh.</p>
                    </div>
                    <div>
                        <p class="grey fs-6">OUR CONTACT:</p>
                        <p class="fs-3">7049773672</p>
                    </div>
                    <div class="col-md-12 overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29760.292487314022!2d81.30118845382124!3d21.19070652699099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293d1fa18b0305%3A0x5c8251679e4369d7!2sTejas%20IAS%20Academy!5e0!3m2!1sen!2sin!4v1718876028944!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" width="100%"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <p class="grey fs-6">OUR BRANDING:</p>
                        <p class="fs-3">Smriti Nagar Branch</p>
                    </div>
                    <div>
                        <p class="grey fs-6">OUR LOCATION:</p>
                        <p class="fs-3">B-491, Cross street 25, Smriti Nagar,
                            Bhilai, Chattisgarh</p>
                    </div>
                    <div>
                        <p class="grey fs-6">OUR CONTACT:</p>
                        <p class="fs-3">7049773672</p>
                    </div>
                    <div>
                        <p class="grey fs-6">WORKING HOURS</p>
                        <p class="fs-3">Mon - Fri 09:00 To 18:00 <br>Saturday 09:00 To 13:00 <br> Sunday off</p>

                    </div>
                    <div class="col-md-12 overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29760.292487314022!2d81.30118845382124!3d21.19070652699099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293d1fa18b0305%3A0x5c8251679e4369d7!2sTejas%20IAS%20Academy!5e0!3m2!1sen!2sin!4v1718876028944!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" width="100%"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
          <!-- footer -->
    
          <div id="myModal" class="modal fade">

<div class="modal-dialog modal-confirm">

    <div class="modal-content">

        <div class="modal-header justify-content-center">

            <div class="icon-box">

                <i class="material-icons">&#xE876;</i>

            </div>

            <i class="fa-solid fa-xmark close" data-dismiss="modal" aria-hidden="true"></i>

        </div>

        <div class="modal-body text-center">

            <h4 >Great!</h4>

            <p>Thank You for Connecting us.</p>



        </div>

    </div>

</div>

</div>

<div id="myModalerror" class="modal fade">

<div class="modal-dialog modal-confirm">

<div class="modal-content">

<div class="modal-header modal-error justify-content-center">

    <div class="icon-box">

    <i class="fa-solid fa-xmark"></i>

    </div>

    <i class="fa-solid fa-xmark close" data-dismiss="modal" aria-hidden="true"></i>

</div>

<div class="modal-body text-center">

    <h4 id="title">Great!</h4>

    <p id="messageerror">Thank You for Connecting us.</p>



</div>

</div>

</div>

</div>
    
          <?php include('Footer.php'); ?>
        <?php include('TopFooter.php'); ?>
      
        
        <script>

document.getElementById('firstname').onkeypress = e => (e.which < 48 || e.which > 57) || e.preventDefault();
// document.getElementById('lastname').onkeypress = e => (e.which < 48 || e.which > 57) || e.preventDefault();

// Attach event listener to checkbox
// document.getElementById('checkbox').addEventListener('change', function() {
//     if (this.checked) {
//         // savecontactform(); // Call savecontactform() only when checkbox is checked
//         this.value='true';
//         $("#saveform").removeAttr("disabled","disabled");

//       }

//     else {
//       this.value='';
//       $("#saveform").attr("disabled","disabled");
//     }
// });


function savecontactform() {
    resetValidation();

    var isValid = validateForm();

    if (!isValid) {
        // Optionally, you can handle invalid form state here
        console.log('Form is invalid. Cannot proceed with AJAX.');
        return; // Exit function if validation fails
    }

    var form = document.getElementById('savecontactform');
    var formData = new FormData(form);

    $.ajax({

type: 'POST',

url: '<?php echo base_url() . 'savecontactform' ?>',

data: formData,

contentType: false,

processData: false,

dataType:'json',

success: function(data) {

    console.log('AJAX success:', data);

    if(data.status=='success')
    {
        $('#myModal').modal('show');
    }
    
    else if(data.status=='error')
    {
        $('#myModalerror').modal('show');
        $("#title").html('error');
        $("#messageerror").html(data.message);
      
    }

  

    setTimeout(function() {

        location.reload();

    }, 2000);

},

error: function(xhr, status, error) {

       console.log('AJAX error:', xhr.responseText);

        $('#myModalerror').modal('show');
        $("#title").html('error');
        $("#messageerror").html(data.message);

    setTimeout(function() {

        location.reload();

    }, 2000);

}

});
}



// Function to reset previous validation errors
function resetValidation() {
    var form = document.getElementById('savecontactform');
    var elements = form.elements;

    for (var i = 0; i < elements.length; i++) {
        if (elements[i].classList.contains('er')) {
            elements[i].classList.remove('er');
            elements[i].nextElementSibling.innerHTML = '';
        }
    }
}

// Function to validate form fields
function validateForm() {
    var form = document.getElementById('savecontactform');
    var elements = form.elements;
    var isValid = true;
    var checkbox = document.getElementById('checkbox');
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];

        // Skip validation for submit button
        if (element.type === 'button') {
            continue;
        }

        // Validate required fields
        if (element.required && element.value.trim() === '') {
            isValid = false;
            element.classList.add('er');
            element.nextElementSibling.innerHTML = 'This field is required.';
        }

        if (element.type === 'email' && !emailRegex.test(element.value.trim())) {
            isValid = false;
            element.classList.add('er');
            element.nextElementSibling.innerHTML = 'Please enter a valid email address.';
        }
    }

    return isValid;
}


   




  </script>
       
</body>

</html>