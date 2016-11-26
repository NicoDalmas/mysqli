<?php 
echo '<pre>';
var_dump($_POST);
echo '</pre>';
class Form{
	public function noEmpty($data){
		if (empty($data)) {
			return false;
		}
		return true;
	}
	public function validarEdad($edad){
		if (!is_numeric($edad) || $edad <= 17) {
			return false;
		}
		return true;
	}
	public function validarEmail($email){
		if (strpos($email, '@') === false) {
			return false;
		}
		return true;
	}
	public function validarInt($int){
		if (!is_numeric($int)) {
			return false;
		}
		return true;
	}
}
$form = new Form();
foreach ($_POST as $key => $value) {
	switch ($key) {
		case 'cliente':
			$form->noEmpty($value) === false ? print 'el nombre es incorrecto</br>' : print 'el nombre es correcto</br>';
			break;
		case 'producto':
			$form->noEmpty($value) === false ? print 'el apellido es incorrecto</br>' : print 'el apellido es correcto</br>';
			break;
		case 'importe':
			$form->noEmpty($value) === false || $form->validarInt($value) === false  ? print 'la edad es incorrecta</br>' : print 'la edad es correcta</br>';
			break;
		
		default:
			# code...
			break;
	}
}
?>