<?php 

define('UPLOAD_DIR', 'uploads/');

class Submit{

  public function __construct(){

  }

  /**
   * check the user post data
   * 
   * @param $_POST
   * @return none
   */
  public function checkPost($_POST){
    
    echo "User Info<br>";
    echo "-----------------------------------------------<br>";
    echo "User Name: $_POST[user_name]<br>";
    echo "User Email: $_POST[user_email]<br>";
    echo "The Project: $_POST[the_project]<br>";
    echo "Due Date: $_POST[due_date]<br><br>";
    
    if($_POST['web-change'] == 'on'){      
      $forms = self::getFormData('site', 'site-files');      
      echo "Number of Web Change(s): ".count($forms)."<br>";
      echo "-----------------------------------------------<br>";
      self::display($forms);
    }
    
    if($_POST['print-ad'] == 'on'){      
      $forms = self::getFormData('print', 'print-files');      
      echo "Number of Print Ad(s): ".count($forms)."<br>";
      echo "-----------------------------------------------<br>";
      self::display($forms);
    }
    
    if($_POST['web-ad'] == 'on'){
      $forms = self::getFormData('web', 'web-files');   
      echo "Number of Web Ad(s): ".count($forms)."<br>";
      echo "-----------------------------------------------<br>";
      self::display($forms);
    }
    
    if($_POST['new-collateral'] == 'on'){
      $forms = self::getFormData('collateral', 'collateral-files');      
      echo "Number of Collateral Piece(s): ".count($forms)."<br>";
      echo "-----------------------------------------------<br>";
      self::display($forms);
    }
    
    if($_POST['email-blast'] == 'on'){
      $forms = self::getFormData('email', 'email-files');
      echo "Number of Email Blast(s): ".count($forms)."<br>";
      echo "-----------------------------------------------<br>";
      self::display($forms);
    }
  }

  /**
   * display the form data
   * 
   * @param array $ary
   */
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
  
  /**
   * get the form data by its $key and the files by $file_key
   * 
   * @param string $key
   * @param string $file_key
   * @return array
   */
  public function getFormData($key, $file_key){
    $form_data = array();
    
    foreach($_POST[$key] as $k => $v){
      if(is_array($v)){
        //echo "$k => $v<br>";
        // $v is an array, $x represent index 0, 1, 2..., $y is the form data
        foreach($v as $x => $y){
          //echo "-------$x => $y<br>";
          
          /**
           * since our form data is an array
           * form is reformatted to display correctly
           * in their correct order
           */
          $form_data[$x][$k] = $y;
        }
      }
    }
    
    $forms = count($form_data);    
    for($i = 0; $i < $forms; $i++){
      $file = $file_key.'_'.$i; //name of file element in the form
      //echo "file: $file<br>";
      if(!empty($_FILES[$file])){
        foreach($_FILES[$file][name] as $f_key => $f_data){
          //echo "$f_key => $f_data<br>";
          $form_data[$i]["file_".$f_key] = $f_data;
          move_uploaded_file($_FILES[$file][tmp_name][$f_key], UPLOAD_DIR . $f_data);
        }
        //echo "<br>";
      }
    }
    return $form_data;
  }
}

?>