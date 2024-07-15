<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');


class Site_Controller extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('Inquiry_Model');  
      // $this->load->model('Qrcode_Model');
      $this->load->model('Seo_Model');
      $this->load->model('Blog_Model');
      $this->load->model('Gallery_Model');

      $this->loadSeoData();
  }

  public function loadSeoData()
  {
    $this->data['editseo'] = $this->Seo_Model->findSeo('1');
  }
 
public function index(){ 

  // $this->data['addlist'] = $this->Qrcode_Model->getAllGallery();
  $this->data['pagename'] = "Home";
 $this->load->view('site/index',$this->data);
}

public function course()
{
  $this->data['pagename'] = "course";
  $this->load->view('site/course',$this->data);
}

public function faculty()
{
  $this->data['pagename'] = "faculty";
  $this->load->view('site/faculty',$this->data);
}

public function blog()
{
  $this->data['pagename'] = "blog";
  $this->data['bloglist'] =  $this->Blog_Model->getAllBlog('1||0');
  $this->load->view('site/blog',$this->data);
}



public function gallery()
{
  $this->data['pagename'] = "gallery";
  $this->data['gallerylist'] = $this->Gallery_Model->getAllGallery('1');
  $this->load->view('site/gallery',$this->data);
}

public function about()
{
  $this->data['pagename'] = "About";
  $this->load->view('site/about',$this->data);
}

public function contact()
{
 
  $this->data['pagename'] = "Contact";
  $this->load->view('site/contact',$this->data);
}

public function update()
{
  $this->data['pagename'] = "update";
  $this->load->view('site/update',$this->data);
}

public function unsetsession()
{
  $this->session->unset_userdata('success_message');
  $this->session->unset_userdata('message');
  $response = array("res" => true, 'message' => 'Role deleted successfully.');
  echo json_encode($response);
}

public function savecontactform()
{
  // $captcha_response = trim($this->input->post('g-recaptcha-response'));

  // if($captcha_response != '')
  // {
  //   $keySecret = '6LekQtEpAAAAAMUO4LsP4so0MkpfkdvqGflfGRmJ';

  //   $check = array(
  //     'secret'		=>	$keySecret,
  //     'response'		=>	$this->input->post('g-recaptcha-response')
  //   );

  //   $startProcess = curl_init();

  //   curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

  //   curl_setopt($startProcess, CURLOPT_POST, true);

  //   curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

  //   curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

  //   curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

  //   $receiveData = curl_exec($startProcess);

  //   $finalResponse = json_decode($receiveData, true);

  //   if($finalResponse['success'])
  //   {
  
  //     $data = $this->Main_model->add_contact();

  //     if($data)
  //     {
  //       $this->session->set_flashdata('success_message', 'We will soon contact with you');
  //     }

  //     else{
  //       $this->session->set_flashdata('message', 'Some Technicale issue try again!');
  //     }
      
    

  // redirect($_SERVER['HTTP_REFERER']);

  //   }
  //   else
  //   {
  //     $this->session->set_flashdata('message', 'Validation Fail Try Again');
  //     redirect($_SERVER['HTTP_REFERER']);

  //   }
  // }
  // else
  // {
  //   $this->session->set_flashdata('message', 'Validation Fail Try Again');

  //   redirect($_SERVER['HTTP_REFERER']);

  // }

  // $selectedTypes = array_map('intval', $this->input->post('reasonCheckbox'));
        
   // Implode array into a comma-separated string
   $typesString = implode(',', $this->input->post('reasonCheckbox'));

  $contactData = array(
    'Name' => empty($this->input->post('firstname')) ? 'Unknown' : $this->input->post('firstname'),
    'Email' => empty($this->input->post('email')) ? 'unknown@example.com' : $this->input->post('email'),
    'Mobile' => empty($this->input->post('phone')) ? '0' : $this->input->post('phone'),
    'Message' => empty($this->input->post('message')) ? 'No message' : $this->input->post('message'),
    'Reason' => empty($typesString)?'not available':$typesString,
);


  $data = $this->Inquiry_Model->addcontact($contactData);
  if ($data) {
    $info = array( 'status'=>'success',

    'message'=>'Message has been send successfully!'

    );
} else {
  $info = array( 'status'=>'error',

  'message'=>'Some problem Occurred!! please try again'

  );
}

echo json_encode($info);


}


public function blogdetail($id)
{
  if($id)
  {
    $blogdata = $this->Blog_Model->findBlog($id);
    if($id!="")
    {
      $this->data['blogdetail'] = $blogdata;
      $this->data['blogcategory'] = $this->Blog_Model->getAllCategory('1');
      $this->data['bloglist'] = $this->Blog_Model->getAllBlog('1');
      $this->data['pagename'] = "Blogdetail";

      // print_r($this->data['blogcategory']);
      $this->load->view('site/blogdetail',$this->data);
    }

    else {
      return redirect('blog');
    }
  }

  else {
    return redirect('blog');
  }
}

public function blogbycategory($id)
{ if($id)
  {
    $blogdata = $this->Blog_Model->findBlogByCategory($id);
    if($id!="")
    {
      $this->data['bloglist'] = $blogdata;
      $this->data['blogcategory'] = $this->Blog_Model->getAllCategory('1');
     
      $this->data['pagename'] = "Blog";

      // print_r($this->data['blogcategory']);
      $this->load->view('site/blog',$this->data);
    }

    else {
      return redirect('blog');
    }
  }

  else {
    return redirect('blog');
  }

}


} ?>