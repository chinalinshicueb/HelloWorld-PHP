<?php
/**
 * DES加解密类
 * @author Peter
 * @version: v0.1
 * 2016年10月20日
 *
 */
class DES{
	public function encrypt($str, $key){
		$block = mcrypt_get_block_size ( 'des', 'ecb' );
		$pad = $block - (strlen ( $str ) % $block);
		$str .= str_repeat ( chr ( $pad ), $pad );
		return mcrypt_encrypt ( MCRYPT_DES, $key, $str, MCRYPT_MODE_ECB );
	}
	
	public function decrypt($str, $key){
		$str = mcrypt_decrypt ( MCRYPT_DES, $key, $str, MCRYPT_MODE_ECB );
		$block = mcrypt_get_block_size ( 'des', 'ecb' );
		$pad = ord ( $str [($len = strlen ( $str )) - 1] );
		return substr ( $str, 0, strlen ( $str ) - $pad );
	}
}

?>  