<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->output->set_header(
            'Cache-Control: no-store, no-cache, max-age=0, post-check=0, pre-check=0'
        );
        $this->site = $this->M_crud->get_data('site', '*');
        $this->id = $this->session->id_user;
		$this->f1 = $this->M_crud->get_data('section','*','id=4','id desc');
		$this->f2 = $this->M_crud->get_data('section','*','id=5','id desc');
		$this->f3 = $this->M_crud->get_data('section','*','id=6','id desc');
        $this->d3 = $this->M_crud->read_data('vocational','*','id_program=1','id desc');
		$this->d4 = $this->M_crud->read_data('vocational','*','id_program=2','id desc');
    }

	public function index(){
		$data['site'] = $this->site;
        $function = 'berita';
        $data['page'] = $function;
        $data['content'] = $function;
        $data['f1'] = $this->f1;
        $data['f2'] = $this->f2;
        $data['f3'] = $this->f3;
        $data['d3'] = $this->d3;
        $data['d4'] = $this->d4;
        $data['title'] = 'Berita';
        $data['deskripsi'] ='Politeknik TEDC Bandung';
        $data['berita'] = $this->M_crud->read_data('view_information','*','type_name="Berita"','information_id desc');

        $this->load->view('fo/component/index', $data);
	}

    public function kemahasiswaan(){
		$data['site'] = $this->site;
        $function = 'berita';
        $data['page'] = $function;
        $data['content'] = $function;
        $data['f1'] = $this->f1;
        $data['f2'] = $this->f2;
        $data['f3'] = $this->f3;
        $data['d3'] = $this->d3;
        $data['d4'] = $this->d4;
        $data['title'] = 'Agenda Kemahasiswaan';
        $data['deskripsi'] ='Politeknik TEDC Bandung';
        $data['berita'] = $this->M_crud->read_data('view_information','*','type_name="Berita"','information_id desc');

        $this->load->view('fo/component/index', $data);
	}

    public function karir(){
		$data['site'] = $this->site;
        $function = 'berita';
        $data['page'] = $function;
        $data['content'] = $function;
        $data['f1'] = $this->f1;
        $data['f2'] = $this->f2;
        $data['f3'] = $this->f3;
        $data['d3'] = $this->d3;
        $data['d4'] = $this->d4;
        $data['title'] = 'Pusat Karir';
        $data['deskripsi'] ='Politeknik TEDC Bandung';
        $data['berita'] = $this->M_crud->read_data('view_information','*','type_name="Berita"','information_id desc');

        $this->load->view('fo/component/index', $data);
	}

    public function beasiswa(){
		$data['site'] = $this->site;
        $function = 'berita';
        $data['page'] = $function;
        $data['content'] = $function;
        $data['f1'] = $this->f1;
        $data['f2'] = $this->f2;
        $data['f3'] = $this->f3;
        $data['d3'] = $this->d3;
        $data['d4'] = $this->d4;
        $data['title'] = 'Pusat Karir';
        $data['deskripsi'] ='Politeknik TEDC Bandung';
        $data['berita'] = $this->M_crud->read_data('view_information','*','type_name="Berita"','information_id desc');

        $this->load->view('fo/component/index', $data);
	}

}
