<?php
//----------------------------------------------------------------------------------------------------
// COOKIE 
//----------------------------------------------------------------------------------------------------
//
// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
// Site       : www.zntr.net
// Lisans     : The MIT License
// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
//
//----------------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------------
// Encode                                                                             	  
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: Cookie değerlerini tutan anahtar ifadelerin hangi şifreleme algoritması 
// ile şifreleneceği belirtilir. Şifrelenmesini istediğini hash algorimatsını yazmanız     
// yeterlidir. Boş bırakılması halinde herhangi bir şifreleme yapmayacaktır.				  
//
//----------------------------------------------------------------------------------------------------
$config['Cookie']['encode'] = 'md5';

//----------------------------------------------------------------------------------------------------
// Regenerate                                                                          
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: Çerez oluşturulurken farklı bir PHPSESSID oluşturmasını			      
// sağlamak için bu değerin true olması gerekir. Güvenlik açısındanda			          
// true olması önerilir.			                                                          								
//----------------------------------------------------------------------------------------------------
$config['Cookie']['regenerate'] = true;

//----------------------------------------------------------------------------------------------------
// Time                                                                                    
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: Çerez süresini ayarlamak için kullanılır.								  
// Parametre:Saniye cinsinden sayısal zaman değeri girilir.		                          								
//
//----------------------------------------------------------------------------------------------------
$config['Cookie']['time'] = 604800; // Integer / Numeric / String Numeric

//----------------------------------------------------------------------------------------------------
// Path                                                                                    
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: Çerez nesnelerinin hangi dizinde tutulacağını ayarlamak için kullanılır.						
//
//----------------------------------------------------------------------------------------------------
$config['Cookie']['path'] = '/'; // String

//----------------------------------------------------------------------------------------------------
// Domain                                                                                  
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: Çerezlerin hangi domain adresiden geçerli olacağını belirlemek için 	  
// kullanılır.			      														      						
//
//----------------------------------------------------------------------------------------------------
$config['Cookie']['domain'] = ''; // String

//----------------------------------------------------------------------------------------------------
// Secure                                                                                  
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: Çerezin istemciye güvenli bir HTTPS bağlantısı üzerinden mi aktarılması 
// gerektiğini belirtmek için kullanılır.	  								                    														 						
//
//----------------------------------------------------------------------------------------------------
$config['Cookie']['secure'] = false; // Boolean

//----------------------------------------------------------------------------------------------------
// HTTP Only                                                                                
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: TRUE olduğu takdirde çerez sadece HTTP protokolü üzerinden erişilebilir 
// olacaktır. Yani çerez, JavaScript gibi betik dilleri tarafından erişilebilir 			  
// olmayacaktır.   								             							      															 						
//
//----------------------------------------------------------------------------------------------------
$config['Cookie']['httpOnly'] = true; // Boolean