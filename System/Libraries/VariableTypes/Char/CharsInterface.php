<?php	
interface CharsInterface
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------

	/******************************************************************************************
	* IS ALNUM                                                                                *
	*******************************************************************************************
	| Genel Kullanım: A,B..Z, 0-9 alfa sayısal karakterler için sınama yapılır.	 		      |
	
	  @param  string $string
	  @return bool
	|          																				  |
	******************************************************************************************/
	public function isAlnum($string);
	
	/******************************************************************************************
	* IS ALPHA                                                                                *
	*******************************************************************************************
	| Genel Kullanım: A,B..Z metinsel karakterler için sınama yapılır.	 				      |
	
	  @param  string $string
	  @return bool
	|          																				  |
	******************************************************************************************/
	public function isAlpha($string);
	
	/******************************************************************************************
	* IS NUMERIC                                                                              *
	*******************************************************************************************
	| Genel Kullanım: 0-Z sayısal karakterler için sınama yapılır.		 				      |
	
	  @param  string $string
	  @return bool
	|          																				  |
	******************************************************************************************/
	public function isNumeric($string);
	
	/******************************************************************************************
	* IS GRAPH	                                                                              *
	*******************************************************************************************
	| Genel Kullanım: Sınama, boşluk karakterleri hariç basılabilir karakterler için yapılır. |
	
	  @param  string $string
	  @return bool
	|          																				  |
	******************************************************************************************/
	public function isGraph($string);
	
	/******************************************************************************************
	* IS LOWER	                                                                              *
	*******************************************************************************************
	| Genel Kullanım: Sınama, küçük harfler için yapılır.				 					  |	
	
	  @param  string $string
	  @return bool
	|          																				  |
	******************************************************************************************/
	public function isLower($string);
	
	/******************************************************************************************
	* IS UPPER	                                                                              *
	*******************************************************************************************
	| Genel Kullanım: Sınama, büyük harfler için yapılır.				 					  |	
	
	  @param  string $string
	  @return bool
	|          																				  |
	******************************************************************************************/
	public function isUpper($string);
	
	/******************************************************************************************
	* IS PRINT	                                                                              *
	*******************************************************************************************
	| Genel Kullanım: Sınama, basılabilir karakterler için yapılı.		 					  |	
	
	  @param  string $string
	  @return bool
	|          																				  |
	******************************************************************************************/
	public function isPrint($string);

	
	/******************************************************************************************
	* IS NON ALNUM                                                                            *
	*******************************************************************************************
	| Genel Kullanım: birer alfasayısal veya boşluk karakteri olmayan basılabilir karakterler |
	  için yapılır.		 					 
	
	  @param  string $string
	  @return bool
	|          																				  |
	******************************************************************************************/
	public function isNonAlnum($string);
	
	/******************************************************************************************
	* IS SPACE                                                                                *
	*******************************************************************************************
	| Genel Kullanım: Sınama, boşluk karakterleri için yapılır.								  |	 					 
	
	  @param  string $string
	  @return bool
	|          																				  |
	******************************************************************************************/
	public function isSpace($string);
	
	/******************************************************************************************
	* IS HEX                                                                                  *
	*******************************************************************************************
	| Genel Kullanım: Sınama, onaltılık rakamlar için yapılır.								  |	 					 
	
	  @param  string $string
	  @return bool
	|          																				  |
	******************************************************************************************/
	public function isHex($string);
	
	/******************************************************************************************
	* IS CONTROL                                                                             *
	*******************************************************************************************
	| Genel Kullanım: Sınama, denetim karakterleri için yapılır.		 				      |
	
	  @param  string $string
	  @return bool
	|          																				  |
	******************************************************************************************/
	public function isControl($string);	
}