<?php

class search {
private $mysqli;
public function __construct() {
$this->connect();
}
private function connect() {
	$this->mysqli = new mysqli( 'localhost', 'root', '', 'scruffemu_game' );
}

public function search($search_term) {
	$sanitized = $this->mysqli->real_escape_string($search_term);
	$query = $this->mysqli->query("
	SELECT monsterName
	FROM drops
	WHERE monsterName LIKE '%{$sanitized}%'
	OR objectName LIKE '%{$sanitized}%'
	");
	
	if( ! $query->num_rows ) {
		return false;
	}
	
	while( $row = $query->fetch_object() ) {
		$rows[] = $row;
	}
	
	$search_result = array(
	'count' => $query->num_rows,
	'result' => $rows,
	);
	
	return $search_results;
}
}