<?php namespace Pingpong\CsvReader\Facades;

class CsvReader {

	/**
	 * Make new instance of \Pingpong\CsvReader\CsvReader
	 *
	 * @param  string $file
	 * @return \Pingpong\CsvReader\CsvReader
	 */
	public static function make($file)
	{
		return new \Pingpong\CsvReader\CsvReader($file);
	}

	/**
	 * Make new instance of \Pingpong\CsvReader\CsvReader
	 *
	 * @param  string $file
	 * @return \Pingpong\CsvReader\CsvReader
	 */
	public static function get($file)
	{
		return \Pingpong\CsvReader\CsvReader::get($file);
	}

} 