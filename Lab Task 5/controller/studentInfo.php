<?php 

require_once ('model/model.php');

function fetchAllStudents(){
	return showAllStudents();

}
function fetchStudent($id){
	return showStudent($id);

}
