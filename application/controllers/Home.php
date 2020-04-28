<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('partials/header');
		$this->load->view('index');
		$this->load->view('partials/footer');
	}

	
	//iyzico kütüphanesi import ediliyor
	public function initialize_iyzico()
	{
		require_once(APPPATH . 'third_party/iyzipay/IyzipayBootstrap.php');
		IyzipayBootstrap::init();
		$options = new \Iyzipay\Options();
		$options->setApiKey('api keyiniz');
		$options->setSecretKey('secret keyiniz');
		$options->setBaseUrl("https://sandbox-api.iyzipay.com");
		return $options;
	}

	//ödeme formu çalışıyor
	public function payment()
	{
		$data['options'] = $this->initialize_iyzico();
		$this->load->view('partials/header', $data);
		$this->load->view('payment', $data);
		$this->load->view('partials/footer');
	}

	//ödeme formundan sonuç dönüyor
	public function status()
	{
		$options = $this->initialize_iyzico();
		# create request class
		$request = new \Iyzipay\Request\RetrieveCheckoutFormRequest();
		$request->setLocale(\Iyzipay\Model\Locale::TR);
		$request->setConversationId("123456789");
		$request->setToken($_POST["token"]);
		$checkoutForm = \Iyzipay\Model\CheckoutForm::retrieve($request, $options);
		//form sonucu(object)
		//print_r($checkoutForm);
		echo $checkoutForm->getStatus();
		if($checkoutForm->getStatus() == "success")
		{
			$data['status'] = 'Ödeme başarıyla alındı.';
		}
		else{
			$data['status'] = 'Ödeme alınamadı, bir hata oluştu.';
		}

		$this->load->view('partials/header', $data);
		$this->load->view('index', $data);
		$this->load->view('partials/footer');
	}
}
