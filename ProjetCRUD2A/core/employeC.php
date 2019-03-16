<?PHP
include "../config.php";
class EmployeC {
	function afficherEmployes(){
                $sql ="SELECT * FROM employe";
                $db = config::getConnexion();
                $list = $db->query($sql);
                return $list;
        }	
	
}

?>