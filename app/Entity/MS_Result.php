<?php 
namespace App\Entity;

class MS_Result{
	public $status;
	public $message;
	
	// $status = 0 表示成功  $status > 0 表示是失败
	public function toJson(){
		return json_encode($this , JSON_UNESCAPED_UNICODE);
	}
}

?>