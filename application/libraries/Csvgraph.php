<?php

class csvgraph{
	private $link;
	
	public function __construct(){
		$this->link = mysqli_connect("localhost", "root","","daspos");
	}
	
	public function LoadDetectorSel(){
		$html = '<select id="selDetector" class="form-control">';
		for($i = 0; $i <= 24 ; $i++){
			$html.='<option value="'.$i.'">'.$i.'</option>';
		}
		$html.='</select>';
		echo $html;
	}
	
	public function TrimToThresh($val){
		if($val > 100) return 100;
		else return $val;
	}
	
	public function LoadGridData($id){
		$returnArray = array();
		$tmp_array = array();
		$tableid = $id;
		if($id>12){
			$id = $id % 12;	
		}
		$query = "
						select 
						date, OilLevel$id, OilAlarmLevel$id, OilStatus$id, GasLevel$id, GasAlarmLevel$id, GasStatus$id
						from detector$tableid
						WHERE (OilAlarmLevel$id - OilLevel$id)<=0
						or (GasAlarmLevel$id - GasLevel$id)<=0
						";
				//		echo $query;
				//	return;
		if ($result = mysqli_query($this->link, $query)) {
			/* fetch associative array */
			while ($row = mysqli_fetch_row($result)) {
				$additionalColumn = '<input type="checkbox" id="'.$row[0].'" >';
				array_push($row, $additionalColumn);
				$returnArray[] = $row;
			}
		
			/* free result set */
			mysqli_free_result($result);
		}
		echo json_encode(array("demo"=>$returnArray));
	}
	
	public function LoadGraph($id){
		$tableid = $id;
		if($id>12){
			$id = $id % 12;	
		}
		$query = "select date, OilLevel$id, OilAlarmLevel$id, GasLevel$id, GasAlarmLevel$id from detector$tableid";
		if ($result = mysqli_query($this->link, $query)) {
		$fp = fopen("datafiles/detector$tableid.csv", "w");
			/* fetch associative array */
			while ($row = mysqli_fetch_row($result)) {
				if($row[1]>100) $row[1] = 100;
				if($row[2]>100) $row[2] = 100;
				if($row[3]>100) $row[3] = 100;
				if($row[4]>100) $row[4] = 100;
				fwrite($fp, implode(',',$row)."\n");
			}
		
			/* free result set */
			mysqli_free_result($result);
			
		//	echo json_encode(array("demo"=>$returnArray));
		}
	}
	
	public function DeleteSelected($id, $selected){
		$query = "delete from detector$id where Date in ('".implode("','",$selected)."');";
		$result = mysqli_query($this->link, $query);
		if($result){
			echo "SUCCESS : Successfully deleted the records. Please reload Graph and grid";
		}else{
			echo "ERROR : ".mysqli_error($this->link);
		}
	}
	
	public function CreateDetectorTable($id){
		$tableid = $id;
		if($id <= 12){
			$query = "DROP TABLE IF EXISTS detector$id;";
			$tmpres = mysqli_query($this->link, $query);
			if($this->hasDetectorID()){
				$query = "create table detector$id as select date, OilLevel$id, OilAlarmLevel$id, OilStatus$id, GasLevel$id, GasAlarmLevel$id, GasStatus$id from graph where masterID = 1";
			}else{
				$query = "create table detector$id as select date, OilLevel$id, OilAlarmLevel$id, OilStatus$id, GasLevel$id, GasAlarmLevel$id, GasStatus$id from graph";
			}
		}else if($id > 12 && $id <=24){
			$query = "DROP TABLE IF EXISTS detector$id;";
			$tmpres = mysqli_query($this->link, $query);
			$id = $id % 12;
			$query = "create table detector$tableid as select date, OilLevel$id, OilAlarmLevel$id, OilStatus$id, GasLevel$id, GasAlarmLevel$id, GasStatus$id from graph where masterID = 2";		
		}else if($id >24 && $id <=36){
			$query = "DROP TABLE IF EXISTS detector$id;";
			$tmpres = mysqli_query($this->link, $query);
			$id = $id % 12;
			$query = "create table detector$tableid as select date, OilLevel$id, OilAlarmLevel$id, OilStatus$id, GasLevel$id, GasAlarmLevel$id, GasStatus$id from graph where masterID = 3";		
		}
		
		$result = mysqli_query($this->link, $query);
		if($result){
			echo "SUCCESS : Successfully dropped and recreated table detector$tableid. Please reload data.";
		}else{
			echo "ERROR : ".mysqli_error($this->link);
		}
	}
	
	public function hasDetectorID(){
			$query = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'graph' AND COLUMN_NAME='MasterID'";
			$result = $result = mysqli_query($this->link, $query);
			if($result){
				$rowcount=mysqli_num_rows($result);
				if($rowcount > 0) return true;
			}else{
				return false;
			}
			return false;
	}

	function CsvToDatabase($filename, $table_name){
		$row = 0;
	//	return array(true, base_url()."datafiles/".$filename);
		if (($handle = fopen($filename, "r")) !== FALSE) {
				while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
						$row++;
						if($row == 1){
							$table_columns = count($data);
							$this->create_table($data, $table_name);
							continue;
						}
						$num = count($data);
						if($num < $table_columns) continue;
						$date = array_shift($data);
						$query = "insert into $table_name values('".$date."',".implode(',', $data).")";	
						if(!$result = mysqli_query($this->link, $query)) return array(false, mysqli_error($this->link));
				}
				fclose($handle);
				return array(true, 'Successfully inserted date in database');
		}
		return array(false, 'No file input specified');
	}

	function create_table($data, $table_name){		
		//Drop graph table first
		$query = "DROP TABLE IF EXISTS $table_name;";
		$tmpres = mysqli_query($this->link, $query);
		if(!$tmpres) die("Error dropping graph table with error ".mysqli_error($this->link));
		
		$date = array_shift($data);
		$query = "create table $table_name(Date timestamp,".implode(' integer,',$data)." integer)";
		
		if(!$result = mysqli_query($this->link, $query)){
			echo $query;
			die("can not create table structure for csv file");
		}
	}
	
	//function list_owners()
}
?>