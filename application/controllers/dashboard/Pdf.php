<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {

    public function index()
    {
        $mpdf = new \Mpdf\Mpdf(
            ['debug' => true]           
        );      
        $html = $this->load->view('dashboard/export/jcli_admission', [], true);
        $this->stylesheet = file_get_contents('asset/css/style.css');
        $mpdf->WriteHTML($html);  
        $mpdf->Output();
    }
}

?>
