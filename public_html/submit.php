<?php 

class Submit{

  public function __construct(){

  }

  public function checkPost($_POST){
    
    echo "User Info<br>";
      echo "-----------------------------------------------<br>";
    echo "User Name: $_POST[user_name]<br>";
    echo "User Email: $_POST[user_email]<br>";
    echo "The Project: $_POST[the_project]<br>";
    echo "Due Date: $_POST[due_date]<br><br>";
    
    if($_POST['web-change'] == 'on'){
      
      $format_ary = array();
      foreach($_POST['site'] as $k => $v){
        //echo "$k => $v<br>";

        foreach($v as $x => $y){
          //echo "-------$x => $y<br>";
          $format_ary[$x][$k] = $y;
        }
      }
      
      echo "Number of Web Change(s): ".count($format_ary)."<br>";
      echo "-----------------------------------------------<br>";
      self::display($format_ary);
    }
    
    if($_POST['print-ad'] == 'on'){
      $format_ary = array();
      foreach($_POST['print'] as $k => $v){
        //echo "$k => $v<br>";
      
        foreach($v as $x => $y){
          //echo "-------$x => $y<br>";
          $format_ary[$x][$k] = $y;
        }
      }
      
      echo "Number of Print Ad(s): ".count($format_ary)."<br>";
      echo "-----------------------------------------------<br>";
      self::display($format_ary);
    }
    
    if($_POST['web-ad'] == 'on'){
      $format_ary = array();
      foreach($_POST['web'] as $k => $v){      
        foreach($v as $x => $y){
          $format_ary[$x][$k] = $y;
        }
      }
      
      echo "Number of Web Ad(s): ".count($format_ary)."<br>";
      echo "-----------------------------------------------<br>";
      self::display($format_ary);
    }
    
    if($_POST['new-collateral'] == 'on'){
      $format_ary = array();
      foreach($_POST['collateral'] as $k => $v){      
        foreach($v as $x => $y){
          $format_ary[$x][$k] = $y;
        }
      }
      
      echo "Number of Collateral Piece(s): ".count($format_ary)."<br>";
      echo "-----------------------------------------------<br>";
      self::display($format_ary);
    }
    
    if($_POST['email-blast'] == 'on'){
      $format_ary = array();
      foreach($_POST['email'] as $k => $v){      
        foreach($v as $x => $y){
          $format_ary[$x][$k] = $y;
        }
      }
      
      echo "Number of Email Blast(s): ".count($format_ary)."<br>";
      echo "-----------------------------------------------<br>";
      self::display($format_ary);
    }
  }

  public function display(array $ary = null){
    if(!empty($ary)){
      foreach($ary as $k => $v){
        if(is_array($v)){
          foreach ($v as $x => $y){
            echo ucfirst($x).": $y<br>";
          }
        }
        echo "<br>";
      }
    }
  }

}

?>