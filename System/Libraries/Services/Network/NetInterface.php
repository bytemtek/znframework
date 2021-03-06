<?php 
interface NetInterface
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
	* CHECK DNS                                                                               *
	*******************************************************************************************
	| Genel Kullanım: Belirtilen bir konak adı veya IP adresi için DNS sorgusu yapar.		  | 
	
	  @param string $host
	  @param string $type MX, A, NS, SOA, PTR, CNAME, AAAA, A6, SRV, NAPTR, TXT veya ANY
	  
	  @return bool
	|														                                  |
	******************************************************************************************/
	public function checkDns($host, $type);
	
	/******************************************************************************************
	* DNS RECORDS                                                                             *
	*******************************************************************************************
	| Genel Kullanım: Belirtilen konak adı ile ilgili DNS Özkaynak Kayıtlarını getirir.		  | 
	
	  @param string $host
	  @param mixed  $type any
	  
	  Types = a, cname, hinfo, mx, ns, ptr, soa, txt, aaaa, srv, naptr, ag, all veya any
	  
	  @return object records, authns, addtl
	|														                                  |
	******************************************************************************************/
	public function dnsRecords($host, $type, $raw);
	
	/******************************************************************************************
	* MX RECORDS                                                                              *
	*******************************************************************************************
	| Genel Kullanım: Belirtilen konak adı ile ilgili MX kaydını döndürür.					  | 
	 
	  @param string $host
	  
	  @return object records, weight
	|														                                  |
	******************************************************************************************/
	public function mxRecords($host);
	
	/******************************************************************************************
	* SOCKET    		                                                                      *
	*******************************************************************************************
	| Genel Kullanım: Bir internet veya Unix alan soketi bağlantısı açar.					  | 
	
	  @param string  $host
	  @param numeric $port -1
	  @param numeric $timeout 60
	  
	  @return resource
	|														                                  |
	******************************************************************************************/
	public function socket($host, $port, $timeout);
	
	/******************************************************************************************
	* PSOCKET           			                                                          *
	*******************************************************************************************
	| Genel Kullanım: pfsockopen().						      								  | 
	|														                                  |
	******************************************************************************************/
	public function psocket($host, $port, $timeout);
	
	/******************************************************************************************
	* IP V4 TO HOST                                                                           *
	*******************************************************************************************
	| Genel Kullanım: Belirtilen IP adresine çözümlenen konak ismini döndürür.				  | 
	|														                                  |
	******************************************************************************************/
	public function ipv4ToHost($ip);
	
	/******************************************************************************************
	* HOST TO IP V4		                                                                      *
	*******************************************************************************************
	| Genel Kullanım: gethostbyname().					      								  | 
	|														                                  |
	******************************************************************************************/
	public function hostToIpv4($host);
	
	/******************************************************************************************
	* HOST TO IPV4 LIST                                                                       *
	*******************************************************************************************
	| Genel Kullanım: gethostbynamel().					      								  | 
	|														                                  |
	******************************************************************************************/
	public function hostToIpv4List($host);
	
	/******************************************************************************************
	* PROTOCOL NAME TO NUMBER                                                                 *
	*******************************************************************************************
	| Genel Kullanım: Protokol ismine karşılık düşen protokol numarasını verir.				  | 
	|														                                  |
	******************************************************************************************/
	public function protocolNumber($name);
	
	/******************************************************************************************
	* PROTOCOL NUMBER TO NAME                                                                 *
	*******************************************************************************************
	| Genel Kullanım: getprotobynumber().						      						  | 
	|														                                  |
	******************************************************************************************/
	public function protocolName($number);
	
	/******************************************************************************************
	* SERVICE PORT                                                                            *
	*******************************************************************************************
	| Genel Kullanım: getservbyname().							      						  | 
	|														                                  |
	******************************************************************************************/
	public function servicePort($service, $protocol);
	
	/******************************************************************************************
	* GET SERVICE NAME                                                                        *
	*******************************************************************************************
	| Genel Kullanım: getservbyport().							      						  | 
	|														                                  |
	******************************************************************************************/
	public function serviceName($port, $protocol);
	
	/******************************************************************************************
	* LOCAL         		                                                                  *
	*******************************************************************************************
	| Genel Kullanım: gethostname().							      						  | 
	|														                                  |
	******************************************************************************************/
	public function local();
	
	/******************************************************************************************
	* RESPONSE CODE    		                                                                  *
	*******************************************************************************************
	| Genel Kullanım: http_response_code().							      					  | 
	|														                                  |
	******************************************************************************************/
	public function rcode($code);

	/******************************************************************************************
	* INET CHR TO ADDR                                                                        *
	*******************************************************************************************
	| Genel Kullanım: Bir IP adresinin gösterimini insan okuyabilir gösterime dönüştürür.	  | 
	|														                                  |
	******************************************************************************************/
	public function chrToIpv4($chr);
	
	/******************************************************************************************
	* INET ADDR TO CHR                                                                        *
	*******************************************************************************************
	| Genel Kullanım:  İnsan okuyabilir bir IP adresini okunamaz gösterimine dönüştürür.	  | 
	|														                                  |
	******************************************************************************************/
	public function ipv4ToChr($addr);
	
	/******************************************************************************************
	* IP V4 TO NUMBER                                                                         *
	*******************************************************************************************
	| Genel Kullanım: ip2long().								      					 	  | 
	|														                                  |
	******************************************************************************************/
	public function ipv4ToNumber($ip);
	
	/******************************************************************************************
	* NUMBER TO IP V4                                                                         *
	*******************************************************************************************
	| Genel Kullanım: long2ip().								      					 	  | 
	|														                                  |
	******************************************************************************************/
	public function numberToIpv4($numberAddress);
}