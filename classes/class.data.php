<?php
class fdata{
	private $DB_SERVER='localhost';
	private $DB_USERNAME='root';
	private $DB_PASSWORD='';
	private $DB_DATABASE='assettracker';
	private $conn;
	public function __construct(){
		$this->conn = new PDO("mysql:host=".$this->DB_SERVER.";dbname=".$this->DB_DATABASE,$this->DB_USERNAME,$this->DB_PASSWORD);
		
	}
	
	public function new_data($mvmntdate,$assettag,$assettype,$workstation,$site,$assigne,$acc,$function,$manager,$designation,$wsdesignation){
		
		/* Setting Timezone for DB */
		$NOW = new DateTime('now', new DateTimeZone('Asia/Manila'));
		$NOW = $NOW->format('Y-m-d H:i:s');

		$data = [
			[$mvmntdate,$assettag,$assettype,$workstation,$site,$assigne,$acc,$function,$manager,$designation,$wsdesignation],
		];
		$stmt = $this->conn->prepare("INSERT INTO `fa_data`(`MovementDate`, `AssetTag`, `AssetType`, `Workstation`, `Site`, `Location`, `Assignee`, `AccountDepartment`, `Function`, `Manager`, `Designation`, `WSDesignation`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
		try {
			$this->conn->beginTransaction();
			foreach ($data as $row)
			{
				$stmt->execute($row);
			}
			$this->conn->commit();
		}catch (Exception $e){
			$this->conn->rollback();
			throw $e;
		}

		return true;

	}


	
	public function list_fdata(){
		$sql="SELECT * FROM fa_data";
		$q = $this->conn->query($sql) or die("failed!");
		while($r = $q->fetch(PDO::FETCH_ASSOC)){
		  $data[]=$r;
		}
		if(empty($data)){
		   return false;
		}else{
			return $data;	
		}
}
function get_MovementDate($mvmntdate){
	$sql="SELECT MovementDate FROM fa_data WHERE MovementDate = :MovementDate";	
	$q = $this->conn->prepare($sql);
	$q->execute(['MovementDate' => $mvmntdate]);
	$mvmntdate = $q->fetchColumn();
	return $mvmntdate;
}

public function get_AssetTag($assettag)
{
    $sql = "SELECT * FROM fa_data WHERE AssetTag = :AssetTag";
    $q = $this->conn->prepare($sql);
    $q->execute(['AssetTag' => $assettag]);
    return $q->fetch(PDO::FETCH_ASSOC); // Fetch a single row
}

public function get_Workstation($workstation)
{
    $sql = "SELECT * FROM fa_data WHERE Workstation = :Workstation";
    $q = $this->conn->prepare($sql);
    $q->execute(['Workstation' => $workstation]);
    return $q->fetch(PDO::FETCH_ASSOC); // Fetch a single row
}

public function get_Site($site)
{
    $sql = "SELECT * FROM fa_data WHERE Site = :Site";
    $q = $this->conn->prepare($sql);
    $q->execute(['Site' => $site]);
    return $q->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows matching the site
}

public function get_Location($location)
{
    $sql = "SELECT * FROM fa_data WHERE Location = :Location";
    $q = $this->conn->prepare($sql);
    $q->execute(['Location' => $location]);
    return $q->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows matching the location
}

public function get_Assignee($assignee)
{
    $sql = "SELECT * FROM fa_data WHERE Assignee = :Assignee";
    $q = $this->conn->prepare($sql);
    $q->execute(['Assignee' => $assignee]);
    return $q->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows for a specific assignee
}

public function get_Function($function)
{
    $sql = "SELECT * FROM fa_data WHERE `Function` = :Function";
    $q = $this->conn->prepare($sql);
    $q->execute(['Function' => $function]);
    return $q->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows matching the function
}

public function get_Manager($manager)
{
    $sql = "SELECT * FROM fa_data WHERE Manager = :Manager";
    $q = $this->conn->prepare($sql);
    $q->execute(['Manager' => $manager]);
    return $q->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows for a specific manager
}

public function get_Designation($designation)
{
    $sql = "SELECT * FROM fa_data WHERE Designation = :Designation";
    $q = $this->conn->prepare($sql);
    $q->execute(['Designation' => $designation]);
    return $q->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows matching the designation
}

public function get_WSDesignation($wsdesignation)
{
    $sql = "SELECT * FROM fa_data WHERE WSDesignation = :WSDesignation";
    $q = $this->conn->prepare($sql);
    $q->execute(['WSDesignation' => $wsdesignation]);
    return $q->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows matching the workstation designation
}

public function get_Rows_Limit($limit)
{
    $sql = "SELECT * FROM fa_data LIMIT :limit";
    $q = $this->conn->prepare($sql);
    $q->bindParam(':limit', $limit, PDO::PARAM_INT); // Bind parameter as integer
    $q->execute();
    return $q->fetchAll(PDO::FETCH_ASSOC); // Fetch limited rows
}

	
}