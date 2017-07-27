<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function mostra(){
		$id = $this->input->get("id");
		$this->load->model("produtos_model");
		$this->load->helper(array("currency"));
		$produto = $this->produtos_model->busca($id);
		$dados = array("produto" => $produto);
		$this->load->view("produtos/mostra", $dados);
	}

	
	public function index()
	{
		$this->load->model("produtos_model");
		$produtos = $this->produtos_model->buscaTodos();
		
		$dados = array("produtos" => $produtos);
		$this->load->helper(array("currency"));
		$this->load->view("produtos/index.php", $dados);
	}
	
	public function formulario() {
		$this->load->view("produtos/formulario");
	}
	
	public function novo() {
		$this->load->library("form_validation");
		$this->form_validation->set_rules("nome", "nome", "required");
		$this->form_validation->set_rules("pessoal", "pessoal", "required");
		$this->form_validation->set_rules("celular", "celular", "trim|required|min_length[8]");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");
		$sucesso = $this->form_validation->run();
		if($sucesso){
		$usuarioLogado = $this->session->userdata("usuario_logado");
		$produto = array(
			"nome" => $this->input->post("nome"),
			"pessoal" => $this->input->post("pessoal"),
			"Etrabalho" => $this->input->post("Etrabalho"),
			"residencial" => $this->input->post("residencial"),
			"trabalho" => $this->input->post("trabalho"),
			"celular" => $this->input->post("celular"),

			"usuario_id" => $usuarioLogado["id"]
		);
		$this->load->model("produtos_model");
		$this->produtos_model->salva($produto);
		$this->session->set_flashdata("success", "Produto salvo com sucesso");
		redirect("/");
	}else{
		$this->load->view("produtos/formulario");
	}

	}

	public function remover($conexao, $id){
		
	}
	
}