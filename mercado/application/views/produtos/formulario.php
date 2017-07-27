<html>
<head>
	<link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<div class="container">
		<h1>Cadastre um novo contato</h1>
		
<?php
echo form_open("produtos/novo");

echo form_label("Nome", "nome");
echo form_input(array(
	"name" => "nome",
	"class" => "form-control",
	"id" => "nome",
	"maxlength" => "255", 
	"value" => set_value("nome", "")
));
echo form_error("nome");

echo form_label("E-mail pessoal", "pessoal");
echo form_input(array(
	"name" => "pessoal",
	"class" => "form-control",
	"id" => "pessoal",
	"maxlength" => "255",
	"value" => set_value("pessoal", "")
));
echo form_error("pessoal");

echo form_label("E-mail trabalho", "Etrabalho");
echo form_input(array(
	"name" => "Etrabalho",
	"class" => "form-control",
	"id" => "Etrabalho",
	"maxlength" => "255",
));

echo form_label("telefone residencial", "residencial");
echo form_input(array(
	"name" => "residencial",
	"class" => "form-control",
	"id" => "residencial",
	"maxlength" => "255",
	"type" => "number"
));

echo form_label("telefone trabalho", "trabalho");
echo form_input(array(
	"name" => "trabalho",
	"class" => "form-control",
	"id" => "trabalho",
	"maxlength" => "255",
	"type" => "number",
	"input" => "required"
));

echo form_label("celular", "celular");
echo form_input(array(
	"name" => "celular",
	"class" => "form-control",
	"id" => "celular",
	"maxlength" => "255",
	"type" => "number",
	"value" => set_value("celular", "")

));
	echo form_error("celular");


echo form_button(array(
	"class" => "btn btn-primary",
	"content" => "Cadastrar",
	"type" => "submit"
));




echo form_close();
	
	
?>
</div>
</body>
</html>