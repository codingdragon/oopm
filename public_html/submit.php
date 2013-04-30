<?php 

//add more email here: "Name1 <name1@email.com>, Name2 <name2@email.com>"
define('EMAIL_TO', 'Rodney <rodney_nguyen@yahoo.com>');
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
    $from = "$_POST[user_name] <$_POST[user_email]>";
    $subject = "New Project: $_POST[the_project]";
    
    $body = '';
    $body .= "
User Info:
Name: $_POST[user_name]
Email: $_POST[user_email]
Project: $_POST[the_project]
Due Date: $_POST[due_date]
";
    
    if($_POST['web-change'] == 'on'){      
      $forms = self::getFormData('site', 'site-files');      
      $body .= "
Number of Web Change(s): ".count($forms)."
-----------------------------------------------\n";      
      $body .= self::display($forms);
    }
    
    if($_POST['print-ad'] == 'on'){      
      $forms = self::getFormData('print', 'print-files');      
      $body .= "
Number of Print Ad(s): ".count($forms)."
-----------------------------------------------\n";
      $body .= self::display($forms);
    }
    
    if($_POST['web-ad'] == 'on'){
      $forms = self::getFormData('web', 'web-files');   
      $body .= "
Number of Web Ad(s): ".count($forms)."
-----------------------------------------------\n";
      $body .= self::display($forms);
    }
    
    if($_POST['new-collateral'] == 'on'){
      $forms = self::getFormData('collateral', 'collateral-files');      
      $body .= "
Number of Collateral Piece(s): ".count($forms)."
-----------------------------------------------\n";
      $body .= self::display($forms);
    }
    
    if($_POST['email-blast'] == 'on'){
      $forms = self::getFormData('email', 'email-files');
      $body .= "
Number of Email Blast(s): ".count($forms)."<br>
-----------------------------------------------\n";
      $body .= self::display($forms);
    }
    
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // Additional headers
    $headers .= "To: " .EMAIL_TO . "\r\n";
    $headers .= "From: $from" . "\r\n";
    //$headers .= 'Cc: name@example.com' . "\r\n";
    //$headers .= 'Bcc: name@example.com' . "\r\n";
    
    //sending eamil
    mail(EMAIL_TO, $subject, $body, $headers);
  }

  /**
   * display the form data
   * 
   * @param array $ary
   */
  public function display(array $ary = null){
    $str = '';
    if(!empty($ary)){
      foreach($ary as $k => $v){
        if(is_array($v)){
          foreach ($v as $x => $y){
            //echo ucfirst($x).": $y<br>";
            $str .= ucfirst($x).": "."$y\n";
          }
        }
        $str .= "\n";
      }
    }    
    return $str;    
  }
  
  /**
   * get the form data by its $key and all the files by $file_key
   * 
   * @param string $key
   * @param string $file_key
   * @return array
   */
  public function getFormData($key, $file_key){
    $form_data = array();
    
    foreach($_POST[$key] as $k => $v){
      if(is_array($v)){
        // $v is an array, $x represent index 0, 1, 2..., $y is the form data
        foreach($v as $x => $y){
          
          /**
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
      if(!empty($_FILES[$file])){
        foreach($_FILES[$file][name] as $f_key => $f_data){
          $form_data[$i]["file_".$f_key] = $f_data;
          move_uploaded_file($_FILES[$file][tmp_name][$f_key], UPLOAD_DIR . $f_data);
        }
      }
    }
    return $form_data;
  }
}

?>