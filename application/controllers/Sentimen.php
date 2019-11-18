<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sentimen extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Modelsentimen');
		$this->load->helper('url');
	}

	public function index()
	{
		$data_pages = array(
			'content_active' => 'home',
		);
		$this->load->view('pages.php',$data_pages);
	}

	public function tampil($a)
	{
		$data_pages = array(
			'content_active' => $a,
		);

		if ($a == "home") {
			$this->load->view('pages.php',$data_pages);		
		}else if ($a == "tweet_jokowi") {

			$data_tweet = $this->Modelsentimen->ambildata("list_tweet");

			$this->load->view('pages',array(
										'content_active'=>$a,
										'data_tweet' => $data_tweet));
		}else if ($a == "tweet_prabowo") {

			$data_tweet = $this->Modelsentimen->ambildata("list_positif");

			$this->load->view('pages',array(
										'content_active'=>$a,
										'data_tweet' => $data_tweet));
		}else if ($a == "diagram") {

			$this->load->view('pages',array('content_active' => $a));
		}else{
			$this->load->view('homepage');
		}
		
	}

}
