<?php 
	$check = [];
	$key = array("developing","average","dramatically","results","shared","basis","monitor","including","detection","symptoms");
	if($_POST['answer']){
		// print_r($_POST['answer']);
		$answerArr = $_POST['answer'];
		for($i = 0;$i<sizeof($key);$i++){
			// print_r($answerArr[$i]);
			if($answerArr[$i] == $key[$i]){
				$check[$i] = "right";
			}else{
				$check[$i] = "wrong";
			}
		}
		$check = json_encode((object)$check);//将索引数组转化为json字符串
		echo $check;
	}
?>
