<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ken Zaki
 * Date: 27/09/2013
 * Time: 16:52
 * To change this template use File | Settings | File Templates.
 */
Class PDF{
    private static $instance;
    function __construct() {

    }

    public static function getInstance() {
        if (!self::$instance)
        {
            self::$instance = new PDF();
        }
        return self::$instance;
    }
    public function export()
    {
        require('pdfexport.class.php');

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'Xiao Media Inc!');
        $pdf->Output();
    }
}