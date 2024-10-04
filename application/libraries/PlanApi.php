<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PlanApi
{


    public function PlanData()
    {
        try {

            // Token to be sent in the header
            $token = TOKEN;
            // $url = 'https://acc.vedaERP.com/crm/api/getdynamicardsvalues';

            $url = 'http://localhost/santransport/crm/Api/getdynamicardsvalues';


            $curl = curl_init();

            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10); // Set connection timeout to 10 seconds
            curl_setopt($curl, CURLOPT_TIMEOUT, 30); // Set overall timeout to 30 seconds
            curl_setopt($curl, CURLOPT_URL,  $url);

            // Set the custom headers including the token
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'token: ' . $token,
            ));

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($curl);

            if (curl_errno($curl)) {
                echo 'Error: ' . curl_error($curl);
                die();
            }

            curl_close($curl);

            return json_decode($result, true);

            // $this->load->view('plans/plans.php', array('obj' => $arr));
        } catch (Exception $e) {
            return array('error' => $e->getMessage(), 'line' => $e->getLine());
        }
    }
}
