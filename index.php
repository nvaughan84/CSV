<?php
require_once ('DataSource.php');

$csv = new File_CSV_DataSource('tests/data/products.csv');

	$html .= '<table>';
	$html .='<tr>';
	foreach($csv->getHeaders() as $header)
	{
		 $html .='<th>'.$header.'</th>';
	}
	$html .='</tr>';
	
	
	foreach($csv->connect() as $row)
	{		
		$html .='<tr>';
		foreach($row as $key => $value)
		{			
			$html .= '<td>'.$value.'</td>';
		}		
		$html .= '</tr>';
	}
	$html .= '</table>';
	
	
	echo $html;