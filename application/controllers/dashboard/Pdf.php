<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pdf extends CI_Controller {

    public function index()
    {
        $mpdf = new \Mpdf\Mpdf(
<<<<<<< HEAD
            ['debug' => true]
            
        );
        $mpdf->fontdata["frutiger"] = [
            'R' => "Frutiger-Normal.ttf",
            'I' => "FrutigerObl-Normal.ttf",
        ];
        $html = $this->load->view('dashboard/export/Ecc_interview', [], true);
=======
            ['debug' => true]           
        );      
        $html = $this->load->view('dashboard/export/jcli_admission', [], true);
>>>>>>> 90731e1e639a059a27ab39c1f945ab7ae2c24430
        $this->stylesheet = file_get_contents('asset/css/style.css');
        $mpdf->WriteHTML($html);  
        $mpdf->Output();
    }
<<<<<<< HEAD

    public function index_admiss()
    {
        $mpdf = new \Mpdf\Mpdf(
            ['debug' => true]
            
        );
        $mpdf->fontdata["frutiger"] = [
            'R' => "Frutiger-Normal.ttf",
            'I' => "FrutigerObl-Normal.ttf",
        ];
        $html = $this->load->view('dashboard/export/Ecc_admission', [], true);
        $this->stylesheet = file_get_contents('asset/css/style.css');
        $mpdf->WriteHTML($html);  
        $mpdf->Output();
    }

    
    
     // $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
        // $fontDirs = $defaultConfig['fontDir'];

        // $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
        // $fontData = $defaultFontConfig['fontdata'];
        // $mpdf = new \Mpdf\Mpdf(
        //     ['debug' => true],
        //     [
        //     'fontDir' => array_merge($fontDirs, [
        //         __DIR__ . '/custom/font/directory',
        //     ]),
        //     'fontdata' => $fontData + [ // lowercase letters only in font key
        //         'frutiger' => [
        //             'R' => 'Frutiger-Normal.ttf',
        //             'I' => 'FrutigerObl-Normal.ttf',
        //         ]
        //     ],
        //     'default_font' => 'frutiger'
        // ]);
        

=======
>>>>>>> 90731e1e639a059a27ab39c1f945ab7ae2c24430
}

?>
