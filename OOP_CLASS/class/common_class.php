<?php
require_once("userInformation.php");
// ................... Main Class ......................
class Main_Class extends UserInfo 
{
	var $conn;
	public function __construct()
   {
    $this->conn= new mysqli(HOST,USERNAME,PASSWORD,DATABASE);
    if(! $this->conn)
    {    
      die("Database Not Found"); 
    }
    else
    {
       session_start();
    }
  }

    public function insert($data){

       return $this->conn->query($data);
    }

    public function total_row($sql)
    {
      $query= $this->conn->query($sql);
      if($query->num_rows >0)
      {  
        return $query->num_rows; 
      }
      else
       {
          return false;
       }

    }
    public function fetch_data($sql){
       $query= $this->conn->query($sql);
        if($query->num_rows>0)
        {    
            $data = array(); 
            while($result = $query->fetch_array(MYSQLI_ASSOC))
             {
                $data[] = $result;
             }
          return $data;    
        }
        else{
            return false;
        }   

    }

    public function single_row_fetch($sql){
       $query= $this->conn->query($sql);
        if($query->num_rows>0)
        {    
        
            while($result = $query->fetch_array(MYSQLI_ASSOC))
             {
               return $result; 
             }
             
        }
        else{
            return false;
        }   

    }
    public function session_access()
    {
      if(isset($_SESSION['id']) && !empty($_SESSION['donor_name']))
      {
         echo "<script>window.location='../user/index.php'</script>";
      }
    }
    public function session_private()
    {
        if( empty($_SESSION['id'] && $_SESSION['donor_name']))
      {
         echo "<script>window.location='../ui/index.php'</script>";
      }
    }

    public function admin_session_access()
    {
      if(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_name']))
      {
         echo "<script>window.location='dashboard/index.php'</script>";
      }
    }
    public function admin_session_private()
    {
        if( empty($_SESSION['admin_id'] && $_SESSION['admin_name']))
      {
         echo "<script>window.location='../index.php'</script>";
      }
    }
// Exit Class
}

?>