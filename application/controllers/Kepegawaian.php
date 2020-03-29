<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Kepegawaian extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kepegawaian_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data Kepegawaian';
         $data['list'] = $this->kepegawaian_model->get_kepegawaian();
         $this->loadViews("kepegawaian/list", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data kepegawaian';
         $this->loadViews("kepegawaian/edit", $this->global, NULL , NULL);
    }

    function simpan(){
        $this->kepegawaian_model->save();
        redirect('kepegawaian');
    }

   
    function edit($NIP=NULL){
       
        $this->global['pageTitle'] = 'Ubah Kepegawaian';
        $data['kepegawaian'] = $this->kepegawaian_model->get_by_NIP($NIP);
        $this->loadViews("kepegawaian/edit", $this->global, $data , NULL);
    }
  
    function delete($NIP = NULL){
        $this->global['pageTitle'] = 'Hapus kepegawaian';
        $this->db->where('NIP', $NIP);
        $this->db->delete('pgw_identitas');
        redirect('kepegawaian') ;
    }
    function download()
    {
        $this->load->library('excel');
        $excel = $this->excel->setActiveSheetIndex(0);

        $excel->setCellValue('A1', '')
              ->setCellValue('B1', '')
              ->setCellValue('C1','PANGKAT')
              ->setCellValue('E1','JABATAN')
              ->setCellValue('G1','MASA KERJA')
              ->setCellValue('I1','LATIHAN JABATAN')
              ->setCellValue('L1','PENDIDIKAN')
              ->setCellValue('O1', '')
              ->setCellValue('P1', '')
              ->setCellValue('Q1', '')
              ->setCellValue('R1', '')
              ->setCellValue('S1', '')
              ->setCellValue('T1', '');

        $excel->mergeCells('C1:D1')
              ->mergeCells('E1:F1')
              ->mergeCells('G1:H1')
              ->mergeCells('I1:K1')
              ->mergeCells('L1:N1');

        $excel->setCellValue('A2', 'NO')
              ->setCellValue('B2', 'NAMA/NIP')
              ->setCellValue('C2', 'GOL RUANG')
              ->setCellValue('D2', 'TMT')
              ->setCellValue('E2', 'NAMA')
              ->setCellValue('F2', 'T.M.T')
              ->setCellValue('G2', 'TH')
              ->setCellValue('H2', 'BL')
              ->setCellValue('I2', 'NAMA')
              ->setCellValue('J2', 'BULAN/TAHUN')
              ->setCellValue('K2', 'JUML')
              ->setCellValue('L2', 'NAMA')
              ->setCellValue('M2', 'LULUS TAHUN')
              ->setCellValue('N2', 'TINGKATAN IJAZAH')
              ->setCellValue('O2', 'TEMPAT')
              ->setCellValue('P2', 'TGL LAHIR')
              ->setCellValue('Q2', 'AGAMA ')
              ->setCellValue('R2', ' L/P')
              ->setCellValue('S2', 'TMT CAPEG')
              ->setCellValue('T2', 'KET');

        $excel->getStyle('A1:T1')->getFont()->setBold(true);
        $excel->getStyle('A2:T2')->getFont()->setBold(true);

        $excel->getStyle('A1:T1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $excel->getStyle('A2:T2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $styleArray = array(
              'borders' => array(
                  'allborders' => array(
                      'style' => PHPExcel_Style_Border::BORDER_THIN
                  )
              )
          );
        $excel->getStyle('A1:T38')->applyFromArray($styleArray);



        $excel->getColumnDimension('A')->setWidth(5);
        $excel->getColumnDimension('B')->setWidth(25);
        $excel->getColumnDimension('C')->setWidth(10);
        $excel->getColumnDimension('D')->setWidth(15);
        $excel->getColumnDimension('E')->setWidth(20);
        $excel->getColumnDimension('F')->setWidth(15);
        $excel->getColumnDimension('G')->setWidth(10);
        $excel->getColumnDimension('H')->setWidth(10);
        $excel->getColumnDimension('I')->setWidth(20);
        $excel->getColumnDimension('J')->setWidth(25);
        $excel->getColumnDimension('K')->setWidth(20);
        $excel->getColumnDimension('L')->setWidth(30);
        $excel->getColumnDimension('M')->setWidth(10);
        $excel->getColumnDimension('N')->setWidth(10);
        $excel->getColumnDimension('O')->setWidth(15);
        $excel->getColumnDimension('P')->setWidth(15);
        $excel->getColumnDimension('Q')->setWidth(10);
        $excel->getColumnDimension('R')->setWidth(15);
        $excel->getColumnDimension('S')->setWidth(15);
        $excel->getColumnDimension('T')->setWidth(10);

        $list = $this->kepegawaian_model->get_kepegawaian();
            $no=2;
        foreach ($list as $row) {
            $row = (array) $row;
            $no++;
            $excel  ->setCellValue ( "A".$no, $no-2 )
                    ->setCellValue ( "B".$no, $row["nama"] )
                    ->setCellValue ( "C".$no, $row["gol_ruang"] )
                    ->setCellValue ( "D".$no, $row["tmt"] )
                    ->setCellValue ( "E".$no, $row["jbt_nama"] )
                    ->setCellValue ( "F".$no, $row["jbt_tmt"] )
                    ->setCellValue ( "G".$no, $row["masker_th"] )
                    ->setCellValue ( "H".$no, $row["masker_bln"] )
                    ->setCellValue ( "I".$no, $row["latjab_nama"] )
                    ->setCellValue ( "J".$no, $row["latjab_th"] )
                    ->setCellValue ( "K".$no, $row["latjab_jumlah"] )
                    ->setCellValue ( "L".$no, $row["pendidikan_nama"] )
                    ->setCellValue ( "M".$no, $row["pendidikan_thlulus"] )
                    ->setCellValue ( "N".$no, $row["pend_tingkatijazah"] )
                    ->setCellValue ( "O".$no, $row["tempat_lahir"] )
                    ->setCellValue ( "P".$no, $row["tanggal_lahir"] )
                    ->setCellValue ( "Q".$no, $row["agama"] )
                    ->setCellValue ( "R".$no, $row["jenis_kelamin"] )
                    ->setCellValue ( "S".$no, $row["tmt_capeg"] )
                    ->setCellValue ( "T".$no, $row["Keterangan"] );
                }
        


        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Data Kepegawaian.xls"');
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        $objWriter->save('php://output');
    }

   
} 
?>