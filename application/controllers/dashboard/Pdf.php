<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pdf extends CI_Controller {

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
    public function ecc_inter()
    {
        $mpdf = new \Mpdf\Mpdf(
            ['debug' => true]
            
        );
        $mpdf->fontdata["frutiger"] = [
            'R' => "Frutiger-Normal.ttf",
            'I' => "FrutigerObl-Normal.ttf",
        ];
        $html = $this->load->view('dashboard/export/ecc_interview', [], true);
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
}

?>
