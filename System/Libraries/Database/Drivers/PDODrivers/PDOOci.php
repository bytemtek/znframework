<?php
class PDOOciDriver
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
	/* Config Değişkeni
	 *  
	 * Veritabanı ayarlar bilgisini
	 * tutmak için oluşturulmuştur.
	 *
	 */
	protected $config;
	
	/******************************************************************************************
	* CONSTRUCT     	                                                                      *
	******************************************************************************************/
	public function __construct()
	{
		$this->config = Config::get('Database');	
	}
	
	/******************************************************************************************
	* DNS       		                                                                      *
	*******************************************************************************************
	| Bu sürücü için dsn bilgisi oluşturuluyor.  							                  |
	******************************************************************************************/
	public function dsn()
	{
		$dsn  = 'oci:dbname=';
			
		$dsn .= ( empty($this->config['host']) ) 
				? ';dbname=127.0.0.1' 
				: 'dbname=//'.$this->config['host'];
				
		$dsn .= ( ! empty($this->config['database']) ) 
				? ';dbname='.$this->config['database'] 
				: '';
				
		$dsn .= ( ! empty($this->config['port']) ) 
				? ':'.$this->config['port'] 
				: '';
		
		$dsn .= ( ! empty($this->config['charset']) ) 
				? ';charset='.$this->config['charset'] 
				: '';
		
		return $dsn;
	}	
}