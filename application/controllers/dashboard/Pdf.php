<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pdf extends CI_Controller {
    private $private_db = "dashboard/Pdf_Model";
    private $data, $key, $url;
    private $sessiondata, $authkey, $slugkey, $std_id, $usr_email, $usr_phone, $usr_name;
    private $id, $enroll_course, $enroll_batch, $enroll_package, $enroll_checker, $usertoken;
    //Initial presite config
    //Initial auth session
    protected $current_id, $current_user, $current_role, $current_csrf_key, $current_permission, $current_session_count, $current_login_time, $current_log_id, $session_checker, $user_config;
    //Initial presite config
    protected $site_name, $meta_tag, $favicon, $decimal_point, $date_format, $phone_format, $user_session, $timezone;
    //File upload data
    private $filename;
    private $filenames;
    private $upload_path = "./upload/assets/adm/usr/";
    private $upload_paths = "./upload/assets/adm/sign/";
    private $file_path = "/../../../upload/assets/adm/usr/";
    private $max_size = "202800"; // upload max size 200 MB
    private $max_width = "1024";
    private $max_height = "1024";
    private $allow_type = 'jpg|jpeg|png|JPEG';
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
        $this->load->model($this->private_db);
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('encryption');
        $this->load->library('user_agent');
        $this->load->library('upload');
        //$this->load->library('uploads');
        $this->load->library('email');
        $this->load->library('mainconfig');
        $this->load->helper('custom');
        $this->load->helper('cookie');
        //$this->load->library('userconfig');
       // $this->mainconfig->_DefaultTimeZone($this->timezone);
        
    }
    public function jcli_admiss()
    {
        $mpdf = new \Mpdf\Mpdf(
            ['debug' => true]
            
        );
        $mpdf->fontdata["frutiger"] = [
            'R' => "Frutiger-Normal.ttf",
            'I' => "FrutigerObl-Normal.ttf",
        ];
        $html = $this->load->view('dashboard/export/jcli_admission', [], true);
        $this->stylesheet = file_get_contents('asset/css/style.css');
        $mpdf->WriteHTML($html);  
        $mpdf->Output();
    }
    public function index() {
        $data['member'] = $this->Pdf_Model->alldata();
        $this->load->view('dashboard/export/ecc_interview', $data);
    }
    function topdf() {
       // $this->mpdf->useOnlyCoreFonts = true;
       //$filename = "VISH";
        $data['member'] = $this->Pdf_Model->alldata();
       // $html = $this->load->view('dashboard/export/ecc_interview', $data['member'], true);
        $html = $this->load->view('dashboard/export/ecc_interview', $data, true);
        var_dump($html);
        $this->mpdf = new \Mpdf\Mpdf;

        // $mpdf = new \Mpdf\Mpdf(
        //     ['debug' => true]
            
        // );
      //  $this->$mpdf->setTitle('Posts');
        // $this->mpdf->writeHTML($html);
        // $this->mpdf->output();
        $this->mpdf->WriteHTML($html); // write the HTML into the PDF
        $output = 'itemreport' . date('Y_m_d_H_i_s') . '_.pdf';
        $this->mpdf->Output("$output", 'I'); // save to file because we can
        exit();
    }

    public function ecc_inter($id)
    {   

         /** User Permission Checker **/
        // $this->__permissionChecker($this->key, $this->url);
        $globalHeader = array("alert" => $this->mainconfig->_DefaultNotic(), 'title' => "Student Lists", 'msg' => "", 'uri' => array("langschoolapplicant", "jls_lists"), 'config' => $this->user_config);
         $lists = $this->Pdf_Model->getJLSList();
         // var_dump($list);
         //*** Generate necessary key and value
         $Q_list = _transfer_key_prepare(array_keys_checker($lists));
         $this->data['lists'] = array_transfer($lists, $Q_list);
         //$this->data['course'] = $this->Langschoolapplicant_Model->getStudentCourseRequest();
         $this->data = $this->mainconfig->_ArrayDataMarge($globalHeader, $this->data);
         // For data showing (course, )
        // $this->load->view('dashboard/langschoolstudent/lists', $this->data);

        $mpdf = new \Mpdf\Mpdf(
            ['debug' => true]
            
        );
        $mpdf->fontdata["frutiger"] = [
            'R' => "Frutiger-Normal.ttf",
            'I' => "FrutigerObl-Normal.ttf",
        ];
        $html = $this->load->view('dashboard/export/ecc_interview', $this->data,TRUE);
        $this->stylesheet = file_get_contents('asset/css/style.css');
        $mpdf->WriteHTML($html);  
        $mpdf->Output();
    }
    public function ecc_admiss()
    {
        $mpdf = new \Mpdf\Mpdf(
            ['debug' => true]
            
        );
        $mpdf->fontdata["frutiger"] = [
            'R' => "Frutiger-Normal.ttf",
            'I' => "FrutigerObl-Normal.ttf",
        ];
        $html = $this->load->view('dashboard/export/ecc_admission', [], true);
        $this->stylesheet = file_get_contents('asset/css/style.css');
        $mpdf->WriteHTML($html);  
        $mpdf->Output();
    }

    public function fukuoka_inter()
    {
        $mpdf = new \Mpdf\Mpdf(
            ['debug' => true]
            
        );
        $mpdf->fontdata["frutiger"] = [
            'R' => "Frutiger-Normal.ttf",
            'I' => "FrutigerObl-Normal.ttf",
        ];
        $html = $this->load->view('dashboard/export/fukuoka_interview', [], true);
        $this->stylesheet = file_get_contents('asset/css/style.css');
        $mpdf->WriteHTML($html);  
        $mpdf->Output();
    }
    public function fukuoka_admiss()
    {
        $mpdf = new \Mpdf\Mpdf(
            ['debug' => true]
            
        );
        $mpdf->fontdata["frutiger"] = [
            'R' => "Frutiger-Normal.ttf",
            'I' => "FrutigerObl-Normal.ttf",
        ];
        $html = $this->load->view('dashboard/export/fukuoka_admission', [], true);
        $this->stylesheet = file_get_contents('asset/css/style.css');
        $mpdf->WriteHTML($html);  
        $mpdf->Output();
    }
    public function shizuoka_inter()

    {
        $mpdf = new \Mpdf\Mpdf(
            ['debug' => true]
            
        );
        $mpdf->fontdata["frutiger"] = [
            'R' => "Frutiger-Normal.ttf",
            'I' => "FrutigerObl-Normal.ttf",
        ];
        $html = $this->load->view('dashboard/export/shizuoka_interview', [], true);
        $this->stylesheet = file_get_contents('asset/css/style.css');
        $mpdf->WriteHTML($html);  
        $mpdf->Output();
    }
    public function shizuoka_admiss()

    {
        $mpdf = new \Mpdf\Mpdf(
            ['debug' => true]
            
        );
        $mpdf->fontdata["frutiger"] = [
            'R' => "Frutiger-Normal.ttf",
            'I' => "FrutigerObl-Normal.ttf",
        ];
        $html = $this->load->view('dashboard/export/shizuoka_admission', [], true);
        $this->stylesheet = file_get_contents('asset/css/style.css');
        $mpdf->WriteHTML($html);  
        $mpdf->Output();
    }
}

?>
