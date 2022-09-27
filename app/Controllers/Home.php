<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // ottengo dati dal repo github
        $csv_last_regioni = file_get_contents("https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-regioni/dpc-covid19-ita-regioni-latest.csv");
        $csv_last_province = file_get_contents("https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-province/dpc-covid19-ita-province-latest.csv");

        $csv_last_month = $this->get_last_month_data();

        // csv a array associativo regioni
        $temp_regioni = $this->csv_to_array($csv_last_regioni);

        // ottimizzo chiavi
        $last_regioni = array();
        for ($i=0; $i < count($temp_regioni); $i++) { 
            $last_regioni[intval($temp_regioni[$i]['codice_regione'])] = $temp_regioni[$i];
        }

        // csv a array associativo province
        $temp_province = $this->csv_to_array($csv_last_province);

        // array con solo province veneto
        $last_province = array();
        foreach ($temp_province as  $p) {
            if($p['codice_regione'] == 05){
                $last_province[$p['sigla_provincia']] = $p;
            }
        }

        // salvo nella sessione i dati del veneto
        session_start();
        $_SESSION['last_veneto'] = $last_regioni[5];
        $_SESSION['last_province_veneto'] = $last_province;

        echo view("components/head", ['title' => 'Monitoraggio Covid-19 Veneto']);
        echo view("components/nav");
        echo view("home/main", ['regione' => $last_regioni[5], 'province' => $last_province]);
        echo view("components/footer");
        
    }
    
    public function get_last_month_data(){
        $data = Array();

        $i = 0;
        $limit = date("Ymd", strtotime("-1 months"));



        return $data;
    }

    private function csv_to_array($input){
        $rows = array_map('str_getcsv', preg_split('/\r\n|\r|\n/', $input));
        $header = array_shift($rows);
        $csv = array();
        foreach ($rows as $row) {
            if(count((Array)$row) == count((Array)$header)){
               $csv[] = array_combine((Array)$header, (Array)$row); 
            }
        }
        return $csv;
    }

    
}
