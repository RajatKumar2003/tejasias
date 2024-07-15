<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'TCPDF/tcpdf.php';

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
   
      
        
        $bMargin = $this->getBreakMargin();
        // get current auto-page-break mode
        $auto_page_break = $this->AutoPageBreak;
        // disable auto-page-break
        $this->SetAutoPageBreak(false, 0);
        // set bacground image
        $img_file =  K_PATH_IMAGES . 'assets/background/background.png'; // FCPATH gives you the full server path to the file

        $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
        // restore auto-page-break status
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        // set the starting point for the page content
        $this->setPageMark();
       
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-20);
        // Set font
        $this->SetFont('times', '',8);
        // Page number

        $html = <<<EOD
        <font size="+1"><span><strong>Footer Example</span></strong></font>
        <hr />
        FooterText
EOD;


        $this->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
        // print a block of text using Write()
        //$this->Write(-60, $FooterText , '', 0, 'C', true, 0, false, false, 12);
    }
}


?>