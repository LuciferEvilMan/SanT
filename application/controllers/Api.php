<?php

// echo "uasd";die;
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers:Accept");
defined('BASEPATH') or exit('No direct script access allowed');
class Api extends CI_Controller
{
    public $url;

    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
        $this->url = 'http://localhost/santransport/crm/Api/';
        // $this->url = 'https://acc.vedaERP.com/crm/api';
        $this->load->library('planapi');

        $this->load->helper(array('captcha', 'url'));
        $this->vals = array(
            'img_path'      => './captcha-images/',
            'img_url'       => base_url() . 'captcha-images/',
            'font_path'     => './path/to/fonts/Oi! Survive Poster.ttf',
            'img_width'     => '200',
            'img_height'    => 40,
            'expiration'    => 60,
            'word_length'   => 7,
            'font_size'     => 15,
            'img_id'        => 'Imageid',
            'pool'          => '123456789abcdefghijkmnpqrtuvwxyzABCDEFGHIJKLMNPQRTUVWXYZ',
            'colors'        => array(
                'background'    => array(255, 255, 255), // Set background color to white
                'border'        => array(250, 250, 250),
                'text'          => array(0, 0, 0),
                'grid'          => array(238, 197, 254)
            ),

        );
    }






    public function index()
    {
        $this->api("");
    }


    function api($page_name = 'home')
    {
        if ($page_name == '') {
            $this->load_page('Home');
        } else {
            $this->load_page($page_name);
        }
    }



    public function success()
    {
        set_time_limit(0);
        $paymentData = $_POST;
        $this->load->view('success.php', array('data' => $paymentData));
    }




    //comman for all pages
    public function load_page($page_name)
    {
        // print_r($page_name);die;

        switch ($page_name) {
            case 'Home':
                $dataList = $this->planapi->PlanData();
                // print_r($dataList);die;

                $this->load->view('home.php', array('obj' => $dataList));
                break;

                case 'registeration':
                    $dataList = $this->planapi->PlanData();
                    // print_r($dataList);die;
    
                    $this->load->view('home.php', array('obj' => $dataList));
                    break;
    

            default:
                show_404();
                break;
        }
    }

    //plan data
    public function PlanData($plan_id)
    {
        $captcha = create_captcha($this->vals);
        $captcha_word = $captcha['word'];
        $this->session->set_userdata('captchaword', $captcha_word);

        $dataList = $this->planapi->PlanData();
        $data = $dataList['result']['data'];

        $selected_plan = null;
        foreach ($data as $item) {
            if ($item['plan_id'] == $plan_id) {
                $selected_plan = $item;
                break;
            }
        }

        if ($selected_plan) {
            $this->load->view('registrationform.php', ['captcha_image' => $captcha['image'], 'data' => $selected_plan]);
        } else {
            // Handle case where plan is not found
            $this->response(FALSE, 'Plan not found', [], 400);
        }
    }



    //refresh
    public function refreshCaptcha()
    {
        $files = glob('./captcha-images/*'); // get all file names
        foreach ($files as $file) {
            // iterate files
            if (is_file($file))
                unlink($file); // delete file
        }

        $cap = create_captcha($this->vals);
        $image = $cap['image'];
        $captchaword = $cap['word'];
        $this->session->unset_userdata('captchaword');
        $this->session->set_userdata('captchaword', $captchaword);
        echo  $image;

       
    }

    //comman respose
    public function response($success, $message, $data = array(), $status_code = 200)
    {
        $message = strip_tags($message);
        echo json_encode(array('success' => $success, 'message' => $message, 'result' => empty($data) ? new stdClass() : $data, 'statuscode' => $status_code));
        exit;
    }

    //comman curl
    public function curl_data($func_name, $jsonData)
    {
        $token = TOKEN;
        $url = $this->url . $func_name;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_ENCODING, '');
        curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
        curl_setopt($curl, CURLOPT_TIMEOUT, 0);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($jsonData));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'token' . ':' . $token,
        ));

        $response = curl_exec($curl);

        if ($response === false) {
            $error = curl_error($curl);
            $this->response(FALSE, 'cURL error: ' . $error, [], 500);
            return;
        }
        curl_close($curl);
        echo $response;
    }

    //contact Form
    public function contactForm()
    {
        $captcha = $this->input->post('captcha_value');
        if ($captcha) {
            try {
                $captcha_session = $this->session->userdata('captchaword');

                if (!empty($captcha) && $captcha == $captcha_session) {
                    $post = $this->input->post();

                    $config = array(
                        array(
                            'field' => 'client_name',
                            'label' => 'Client Name',
                            'rules' => 'required|trim'
                        ),
                        array(
                            'field' => 'email',
                            'label' => 'Email',
                            'rules' => 'required|trim|valid_email',
                        ),
                        array(
                            'field' => 'phone_no',
                            'label' => 'Phone No ',
                            'rules' => 'required|trim'
                        ),
                        array(
                            'field' => 'message',
                            'label' => 'Message ',
                            'rules' => 'required|trim'
                        )
                    );

                    $this->form_validation->set_rules($config);

                    if ($this->form_validation->run() == FALSE) {
                        $this->response(FALSE, validation_errors(), [], 400);
                        return;
                    }
                    $this->curl_data('contactDetails', $post);
                } else {
                    $this->response(FALSE, 'Wrong Captcha !', [], 400);
                }
            } catch (Exception $e) {
                $this->response(FALSE, $e->getMessage(), [], 500);
            }
        } else {
            $this->response(FALSE, 'Please Enter Captcha', [], 400);
        }
    }



    //phoneNumber Send
    public function phoneNumberSend()
    {
        try {
            $data = $this->input->post();
            if (empty($data)) {
                $this->response(FALSE, 'Please Enter Required field', [], 400);
                return;
            }

            $config = array(
                array(
                    'field' => 'client_name',
                    'label' => 'Client Name',
                    'rules' => 'trim'
                ),
                array(
                    'field' => 'company_name',
                    'label' => 'Company Name',
                    'rules' => 'trim'
                ),
                array(
                    'field' => 'phone_no',
                    'label' => 'Phone Number',
                    'rules' => 'required|trim'
                )
            );

            $this->form_validation->set_data($data);
            $this->form_validation->set_rules($config);

            if ($data['client_name'] || $data['company_name']) {

                if ($this->form_validation->run() == FALSE) {
                    $this->response(FALSE, validation_errors(), [], 400);
                    return;
                }
                $this->curl_data('verifyPhoneEmail', $data);
            } else {
                $this->form_validation->set_rules('client_name', 'Please Provide Either Your Name or the Name of Your Company', 'callback_check_at_least_one_filled');
            }
        } catch (Exception $e) {
            $this->response(FALSE, $e->getMessage(), [], 500);
            // echo json_encode(array('success' => false, 'statuscode' => 500, 'message' => $e->getMessage()));
        }
    }


    //phone verify
    public function verify_sms_otp()
    {
        try {
            $data = $this->input->post();
            if (!empty($data['mobile_verification_code'])) {
                $config = array(
                    array(
                        'field' => 'mobile_verification_code',
                        'label' => 'Phone OTP',
                        'rules' => 'required|trim'
                    )
                );
                $this->form_validation->set_rules($config);
                if ($this->form_validation->run() == FALSE) {
                    $this->response(FALSE, validation_errors(), [], 400);
                    return;
                }
                $this->curl_data('verifyOTP', $data);
            } else {
                $this->response(FALSE, 'Please Enter OTP', [], 400);
                // echo json_encode(array('success' => false, 'statuscode' => 400, 'message' => 'Please Enter OTP'));//check
            }
        } catch (Exception $e) {
            $this->response(FALSE, $e->getMessage(), [], 500);
            // echo json_encode(array('success' => false, 'statuscode' => 500, 'message' => $e->getMessage()));
        }
    }

    //email
    public function sendEmail()
    {
        try {
            $data = $this->input->post();
            $config = array(
                array(
                    'field' => 'client_name',
                    'label' => 'Client Name',
                    'rules' => 'trim'
                ),
                array(
                    'field' => 'company_name',
                    'label' => 'Company Name',
                    'rules' => 'trim'
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|trim'
                )
            );

            $this->form_validation->set_data($data);
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() == FALSE) {
                $this->response(FALSE, validation_errors(), [], 400);
                return;
            }

            if ($data['client_name'] || $data['company_name']) {

                if ($this->form_validation->run() == FALSE) {
                    $this->response(FALSE, validation_errors(), [], 400);
                    return;
                }
                $this->curl_data('verifyPhoneEmail', $data);
            } else {
                $this->form_validation->set_rules('client_name', 'Please Provide Either Your Name or the Name of Your Company', 'callback_check_at_least_one_filled');
            }
        } catch (Exception $e) {
            $this->response(FALSE, $e->getMessage(), [], 500);
            // echo json_encode(array('success' => false, 'statuscode' => 500, 'message' => $e->getMessage()));
        }
    }


    //email verify
    public function verify_email_otp()
    {
        try {
            $data = $this->input->post();
            if (!empty($data['email_verification_code'])) {
                $config = array(
                    array(
                        'field' => 'email_verification_code',
                        'label' => 'Email OTP',
                        'rules' => 'required|trim'
                    )
                );
                $this->form_validation->set_rules($config);
                if ($this->form_validation->run() == FALSE) {
                    $this->response(FALSE, validation_errors(), [], 400);
                    return;
                }
                $this->curl_data('verifyOTP', $data);
            } else {
                $this->response(FALSE, 'Please Enter OTP', [], 400);
                // echo json_encode(array('success' => false, 'statuscode' => 400, 'message' => 'Please Enter OTP'));
            }
        } catch (Exception $e) {
            $this->response(FALSE, $e->getMessage(), [], 500);
            // echo json_encode(array('success' => false, 'statuscode' => 500, 'message' => $e->getMessage()));
        }
    }

    //country
    public function countryData()
    {
        try {

            $curl = curl_init();

            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10); // Set connection timeout to 10 seconds
            curl_setopt($curl, CURLOPT_TIMEOUT, 30); // Set overall timeout to 30 seconds
            curl_setopt($curl, CURLOPT_URL, 'https://acc.vedaERP.com/crm/Api/getCountry');



            // Set the custom headers including the token
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'token: ' . TOKEN, //change $token
            ));

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($curl);
            if (curl_errno($curl)) {
                echo 'Error: ' . curl_error($curl);
                die();
            }

            curl_close($curl);

            $str_json_format = json_decode($result, true);
            $country_get = $str_json_format['success'];

            echo json_encode(array('success' => true, 'statuscode' => 200, 'data' => $country_get)); //check
            // $this->response(true, '', ['data' => $country_get], 200);
        } catch (Exception $e) {
            $this->response(FALSE, $e->getMessage(), [], 500);
            // return array('error' => $e->getMessage(), 'line' => $e->getLine());
        }
    }

    //state
    public function stateData()
    {
        try {
            $data = $this->input->post();
            if (!empty($data['country_code'])) {
                $config = array(
                    array(
                        'field' => 'country_code',
                        'label' => 'Country',
                        'rules' => 'required|trim'
                    )
                );
                $this->form_validation->set_rules($config);
                if ($this->form_validation->run() == FALSE) {
                    $this->response(FALSE, validation_errors(), [], 400);
                    return;
                }
                $this->curl_data('getStatesByCountryCode', $data);
            } else {
                $this->response(FALSE, 'Please Select Country', [], 400);
            }
        } catch (Exception $e) {
            $this->response(FALSE, $e->getMessage(), [], 500);
            // echo json_encode(array('success' => false, 'statuscode' => 500, 'message' => $e->getMessage()));
        }
    }

    //registration
    public function registrationWithPlan()
    {

        $captcha = $this->input->post('captcha_value');
        if ($captcha) {
            try {
                $captcha_session = $this->session->userdata('captchaword');

                if (!empty($captcha) && $captcha == $captcha_session) {
                    $post = $this->input->post();

                    $config = array(
                        array(
                            'field' => 'client_name',
                            'label' => 'Client Name',
                            'rules' => 'trim'
                        ),
                        array(
                            'field' => 'company_name',
                            'label' => 'Company Name',
                            'rules' => 'trim',
                        ),
                        array(
                            'field' => 'phone_no',
                            'label' => 'Phone No ',
                            'rules' => 'required|trim|numeric|exact_length[10]'
                        ),
                        array(
                            'field' => 'is_verified_mobile',
                            'label' => 'Phone Verify',
                            'rules' => 'trim'
                        ),

                        array(
                            'field' => 'mobile_verification_code',
                            'label' => 'Mobile Code',
                            'rules' => 'trim|numeric|exact_length[6]'
                        ),

                        array(
                            'field' => 'is_verified_email',
                            'label' => 'Email Verify',
                            'rules' => 'trim'
                        ),
                        array(
                            'field' => 'email',
                            'label' => 'Email',
                            'rules' => 'required|trim|valid_email',
                        ),

                        array(
                            'field' => 'email_verification_code',
                            'label' => 'Email Code',
                            'rules' => 'trim|numeric|exact_length[6]'
                        ),

                        // array(
                        //     'field' => 'pan_no',
                        //     'label' => 'PAN Number',
                        //     'rules' => 'required|trim'
                        // ),

                        array(
                            'field' => 'country',
                            'label' => 'Country Name ',
                            'rules' => 'required|trim'
                        ),

                        array(
                            'field' => 'state',
                            'label' => 'State ',
                            'rules' => 'required|trim'
                        ),

                        array(
                            'field' => 'city',
                            'label' => 'City Name ',
                            'rules' => 'required|trim'
                        ),

                        array(
                            'field' => 'pincode',
                            'label' => 'Pincode ',
                            'rules' => 'required|trim|numeric|exact_length[6]'
                        ),

                        array(
                            'field' => 'address',
                            'label' => 'Address ',
                            'rules' => 'required|trim'
                        ),
                        array(
                            'field' => 'captcha_value',
                            'label' => 'Captcha_value ',
                            'rules' => 'required|trim'
                        )
                    );
                    $this->form_validation->set_rules($config);

                    if ($this->form_validation->run() == FALSE) {
                        $this->response(FALSE, validation_errors(), [], 400);
                        return;
                    }
                    $this->curl_data('insertBuyPlan', $post);
                } else {
                    $this->response(FALSE, 'Wrong Captcha !', [], 400);
                }
            } catch (Exception $e) {
                $this->response(FALSE, $e->getMessage(), [], 500);
            }
        } else {
            $this->response(FALSE, 'Please Enter Captcha', [], 400);
        }
    }

    //paymentResponse
    public function paymentResponse()
    {
        try {
            $data = $this->input->post();

            if (!empty($data)) {
                $this->curl_data('paymentResponse', $data);
            } else {
                echo json_encode(array('success' => false, 'statuscode' => 400, 'message' => 'Something went Worng'));
            }
        } catch (Exception $e) {
            $this->response(FALSE, $e->getMessage(), [], 500);
        }
    }
}
