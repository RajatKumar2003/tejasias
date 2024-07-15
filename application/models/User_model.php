 <?php date_default_timezone_set('Asia/Kolkata');
class User_model extends CI_model {
//============================User============================//

public function get_all_user_data($id)
{



  if($id)
  {
    $this->db->where('emp_id', $id);
    $this->db->where_in('emp_status', array('0', '1'));
    return $this->db->get('employee_tbl')->row();
    
  }

  else {
    $this->db->where_in('emp_status', array('0', '1'));
    return $this->db->get('employee_tbl')->result();
    
  }

  // $this->db->where('cnt_status','1');
  
}


public function add_employee()
 {
  $data = array(
    'emp_name'=>ucwords($this->input->post('emp_name')),
    'emp_city'=>$this->input->post('emp_city'),
    'emp_phone'=>empty($this->input->post('emp_phone')) ? '0' : $this->input->post('emp_phone'),
    'emp_status'=> $data = $this->input->post('emp_status')
);

return $this->db->insert('employee_tbl',$data);
}


public function update_employee()
{
    $data = array(
        'emp_name'=>ucwords($this->input->post('emp_name')),
        'emp_city'=>$this->input->post('emp_city'),
        'emp_phone'=>empty($this->input->post('emp_phone')) ? '0' : $this->input->post('emp_phone'),
        'emp_status'=> $data = $this->input->post('emp_status')
    );

    $this->db->where('emp_id',$this->input->post('emp_id'));
    return $this->db->update('employee_tbl',$data);
}


public function certificate_view($certificate_id)
{
    $this->db->where('emp_id', $certificate_id);
    $sql = $this->db->get('employee_tbl');

    $output = '';
    $background_img = "background.jpg";

    foreach ($sql->result() as $profile) {

        $name = !empty($profile->emp_name) ? $profile->emp_name : 'Not Available';
        $city = !empty($profile->emp_city) ? $profile->emp_city : 'Not Available';

        $output .= '<!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Present Marketers | Certificate view</title>
            
         
            <style type="text/css">
                @font-face {
                    font-family: "Agrandir-Regular";
                    src: url("'.base_url("assets/Agrandir/Agrandir-Regular.otf").'") format("opentype");
                }

                body {
                    font-family: "Agrandir-Regular";
                    text-align: center; /* Center-align all text */
                }

                .profile-card {
                    width: 990px;
                    height: 700px;
                }

                .profile-name {
                    margin-top: 320px;
                    margin-left: 260px;
                    font-weight: 700;
                    color: #217F00;
                    font-family: "Agrandir-Regular";
                }

                .profile-info {
                    margin-left: 250px;
                    font-weight: 700;
                    color: #C69C46;
                    font-family: "Agrandir-Regular";
                }
            </style>
        </head>
        <body>
            <div class="profile-card" style="background-image: url(' . base_url("assets/background/$background_img") . '); background-size: cover; ">
                <div class="row">
                    <div class="col-md-12 text-center section-title">
                        <h1 class="profile-name">' . $name . '</h1>
                        <h3 class="profile-info">' . $city . '</h3>
                        
                    </div>
                </div>
            </div>
        </body>
        </html>';
    }

    return $output;
}

public function delete_employee()
{
  $data = array(
    'emp_status'=>'2',
  );

  $this->db->where('emp_id',$this->input->post('delete_id'));
   $this->db->update('employee_tbl',$data);

  return array('status'=>'success','message'=>'Employee Deleted Successfully!');

}


public function get_all_career_report()
{
  return $this->db->get('career_tbl')->result();
}

 

//=========================Desgination=========================//


//===========================/User============================//
} ?>