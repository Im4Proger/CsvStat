<?php
/**
 * PHP-class for calculating column and row statistics for the csv file
 * @author https://github.com/Im4Proger
 */

namespace Im4Proger\CsvStat;

class CsvStat
{
	private string $csv_content = '';
	private int $count_row = 0;
	private int $count_col = 0;

	public function __construct(string $csv_content)
	{
		$this->csv_content = $csv_content;
		$this->getCsvStat();
	}

	//calculating column and row
	private function getCsvStat()
	{
		$csv_rows = explode("\n",$this->csv_content);
		$this->count_row = count($csv_rows) - 1;
		$csv_cols = explode(";",$csv_rows[0]);
		$this->count_col = count($csv_cols);
		echo 'CSV rows count: '. $this->count_row .'<br>';
		echo 'CSV cols count: '. $this->count_col .'<br>';
	}
}
?>