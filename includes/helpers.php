<?php

function showError($errors, $index){
	$alert = '';
	if (isset($errors[$index]) && !empty($index)) {
		$alert = '<p class="text-danger">'.$errors[$index].'</p>';
	}

	return $alert;
}

function deleteError(){
	$_SESSION['errors'] = null;
	unset($_SESSION['errors']);

	//return $deleted;

}
