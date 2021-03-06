<?php
interface CompressInterface
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
	public function extract($source, $target, $password);
	
	//----------------------------------------------------------------------------------------------------
	// Write
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $file
	// @param string $data
	// @param string $mode
	//
	//----------------------------------------------------------------------------------------------------
	public function write($file, $data, $mode);
	
	//----------------------------------------------------------------------------------------------------
	// Read
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $file
	// @param numeric $length
	// @param string  $type
	//
	//----------------------------------------------------------------------------------------------------
	public function read($file, $length, $type);
	
	//----------------------------------------------------------------------------------------------------
	// Compress
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $data
	// @param numeric $blockSize
	// @param mixed   $workFactor
	//
	//----------------------------------------------------------------------------------------------------
	public function compress($data, $blockSize, $workFactor);
	
	//----------------------------------------------------------------------------------------------------
	// Uncompress
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $data
	// @param numeric $small
	//
	//----------------------------------------------------------------------------------------------------
	public function uncompress($data, $small);
	
	//----------------------------------------------------------------------------------------------------
	// Encode
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $data
	// @param numeric $level
	// @param mixed   $encoding
	//
	//----------------------------------------------------------------------------------------------------
	public function encode($data, $level, $encoding);
	
	//----------------------------------------------------------------------------------------------------
	// Decode
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $data
	// @param numeric $length
	//
	//----------------------------------------------------------------------------------------------------
	public function decode($data, $length);
	
	//----------------------------------------------------------------------------------------------------
	// Deflate
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $data
	// @param numeric $level
	// @param mixed   $encoding
	//
	//----------------------------------------------------------------------------------------------------
	public function deflate($data, $level, $encoding);
	
	//----------------------------------------------------------------------------------------------------
	// Inflate
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $data
	// @param numeric $length
	//
	//----------------------------------------------------------------------------------------------------
	public function inflate($data, $length);
}