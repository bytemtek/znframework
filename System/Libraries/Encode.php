<?php
class __USE_STATIC_ACCESS__Encode
{
	/***********************************************************************************/
	/* ENCODE LIBRARY						                   	                       */
	/***********************************************************************************/
	/* Yazar: Ozan UYKUN
	/* Site: www.zntr.net
	/* Lisans: The MIT License
	/* Telif Hakkı: Copyright (c) 2012-2015, zntr.net
	/*
	/* Sınıf Adı: Encode
	/* Versiyon: 1.0
	/* Tanımlanma: Statik
	/* Dahil Edilme: Gerektirmez
	/* Erişim: encode::, $this->encode, zn::$use->encode, uselib('encode')
	/* Not: Büyük-küçük harf duyarlılığı yoktur.
	/***********************************************************************************/
	
	/* Config Değişkeni
	 *  
	 * Encode ayar bilgisini
	 * tutması için oluşturulmuştur.
	 *
	 */
	protected $config;
	
	public function __construct()
	{
		$this->config = Config::get('Encode');	
	}
		
	/******************************************************************************************
	* CREATE                                                                                  *
	*******************************************************************************************
	| Genel Kullanım: Rastgele şifre oluşturmak için kullanılır.						      |
	|															                              |
	| Parametreler: 2 parametresi vardır.                                                     |
	| 1. numeric var @count => Şifrenin karakter uzunluğu. Varsayılan:6						  |
	| 1. string var @chars => Şifrelemede hangi karakterlerin kullanılacağı. Varsayılan:all	  |
	|          																				  |
	| Örnek Kullanım: create(5);        									                  |
	|          																				  |
	******************************************************************************************/
	public function create($count = 6, $chars = 'all')
	{
		// Parametre numeric yani sayısal veri içermelidir.
		if( ! is_numeric($count) ) 
		{
			$count = 6;
		}
		
		if( ! is_string($chars) ) 
		{
			$chars = "all";
		}
		
		$password   	= '';
		
		// Şifreleme için kullanılacak karakter listesi.
		if( $chars === "all" ) 
		{
			$characters = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOQPRSTUVWXYZ";
		}
		if( $chars === "numeric" ) 
		{
			$characters = "1234567890";
		}
		if( $chars === "string" || $chars === "alpha" )
		{ 
			$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOQPRSTUVWXYZ";
		}
		
		// Parametre olarak belirtilen sayı kadar karakter
		// listesinden karakterler seçilerek
		// rastgele şifre oluşturulur.
		for( $i = 0; $i < $count; $i++ )
		{
			$password .= substr( $characters, rand( 0, strlen($characters)), 1 );	
		}
		
		return $password;
	}	
	
	/******************************************************************************************
	* GOLDEN                                                                                  *
	*******************************************************************************************
	| Genel Kullanım: Şifreleme yapmak için kullanılır. md5 şifreleme yöntemini kullanır.	  |
	| ama bu şifrelemenin adının altın olmasın sebebi şifreye ek belirtmenizdir. Böylece	  |
	| aynı veri için farklı şifrlemeler yapabilirsiniz.									      |
	|															                              |
	| Parametreler: 2 parametresi vardır.                                                     |
	| 1. string/numeric var @data => Şifrelenecek veri.						  			      |
	| 2. string/numeric var @additional => Şifrelenecek veriye eklenecek veri.        	      |
	|          																				  |
	| Örnek Kullanım: golden('data', 'extra1');        									      |
	| Örnek Kullanım: golden('data', 'extra2');  											  |
	|																						  |
	| Yukarıdaki kullanımların çıktıları birbirinden farklı olacaktır.      				  |
	|          																				  |
	******************************************************************************************/
	public function golden($data = '', $additional = 'default')
	{
		if( ! isValue($data) || empty($data) ) 
		{
			return Error::set('Encode', 'golden', lang('Error', 'valueParameter', 'data'));
		}
		
		if( ! isValue($additional) )
		{
			$additional = 'default';
		}
	
		$algo = $this->config['type'];
		
		if( ! isHash($algo) )
		{
			$algo = 'md5';	
		}
		// Ek veri şifreleniyor.
		
		$additional = hash($algo, $additional);
		
		// Veri şifreleniyor.
		$data = hash($algo, $data);
		
		// Veri ve ek yeniden şifreleniyor.
		return hash($algo, $data.$additional);

		
	}	
	
	/******************************************************************************************
	* SUPER                                                                                   *
	*******************************************************************************************
	| Genel Kullanım: Şifreleme yapmak için kullanılır. md5 şifreleme yöntemini kullanır.	  |
	| ama bu şifrelemenin adının süper olmasın sebebi şifreye eki harici bir dosyadan         |
	| belirtmenizdir. Böylece aynı veri için farklı şifrlemeler yapabilirsiniz.				  |
	|															                              |
	| Parametreler: 1 parametresi vardır.                                                     |
	| 1. string/numeric var @data => Şifrelenecek veri.						  			      |
	|          																				  |
	| Örnek Kullanım: super('data', 'extra1');        									      |
	|																						  |
	| Not:Şifre eki Config/Encode.php dosyasında yer alan proje anahtarı bölümündedir.   	  |
	|          																				  |
	******************************************************************************************/
	public function super($data = '')
	{
		if( ! isValue($data) || empty($data) ) 
		{
			return Error::set('Encode', 'super', lang('Error', 'valueParameter', 'data'));
		}
		
		$projectKey = $this->config['projectKey'];
		
		$algo = $this->config['type'];
		
		if( ! isHash($algo) )
		{
			$algo = 'md5';	
		}
		
		// Proje Anahatarı belirtizme bu veri yerine
		// Proje anahtarı olarak sitenin host adresi
		// eklenecek ek veri kabul edilir.
		if( empty($projectKey) ) 
		{
			$additional = hash($algo, host()); 
		}
		else 
		{
			$additional = hash($algo, $projectKey);
		}
		
		// Veri şifreleniyor.
		$data = hash($algo, $data);
		
		// Veri ve ek yeniden şifreleniyor.
		return hash($algo, $data.$additional);

	}
	
	/******************************************************************************************
	* TYPE                                                                                   *
	*******************************************************************************************
	| Genel Kullanım: Veriyi istenilen şifreleme algoritmasına göre şifrelemek içindir.		  |
	|															                              |
	| Parametreler: 2 parametresi vardır.                                                     |
	| 1. string/numeric var @data => Şifrelenecek veri.						  			      |
	| 3. string var @type => Şifreleme Türü. Varsayılan:md5						  			  |
	|          																				  |
	| Örnek Kullanım: type('data', 'sha1');        									          |
	|																						  |
	| Not:Şifreleme türünüz geçerli şifreleme algoritması olmak zorundadır. 			  	  |
	|          																				  |
	******************************************************************************************/
	public function type($data = '', $type = 'md5')
	{
		if( ! isValue($data) ) 
		{
			return Error::set('Encode', 'type', lang('Error', 'valueParameter', 'data'));
		}
		
		// String veri dışında veri girilerse
		// Akışı devam ettirmek için 
		// 2. parametre varsayılan ayarına getiriliyor.
		if( ! is_string($type) ) 
		{
			$type = 'md5';
		}
		
		// md5 için
		if( $type === 'md5' )
		{
			return md5($data);
		}
		else if( $type === 'sha1' )
		{
			// sha1 için
			return sha1($data);	
		}
		else
		{
			// md5 ve sha1 dışında şifre algoritmaları için
			if( in_array($type, hash_algos()) )
			{
				return hash($type, $data);
			}
			else
			{
				// bunlar dışındaki her durum için md5.
				return md5($data);
			}
		}
	}
}