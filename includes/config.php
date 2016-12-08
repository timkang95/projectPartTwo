<?php
  ob_start();
  session_start();
  //database credentials
  define('DBHOST','localhost');
  define('DBUSER','demo');
  define('DBPASS','demo');
  define('DBNAME','mysql');
  $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //set timezone
  date_default_timezone_set('Europe/London');
  //load classes as needed
  function __autoload($class) {

    $class = strtolower($class);
    //if call from within assets adjust the path
    $classpath = 'classes/class.'.$class . '.php';
    if ( file_exists($classpath)) {
      require_once $classpath;
    }

    //if call from within admin adjust the path
    $classpath = '../classes/class.'.$class . '.php';
    if ( file_exists($classpath)) {
      require_once $classpath;
    }

    //if call from within admin adjust the path
    $classpath = '../../classes/class.'.$class . '.php';
    if ( file_exists($classpath)) {
      require_once $classpath;
    }

  }

  $user = new User($db);

  //for email submit
  if(isset($_POST['submitEmail'])){
    $to = "timothykang8@gmail.com"; // my email
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); //lets sender have a message that the email was sent
  }

  //for blog submit
  if(isset($_POST['submitPost'])){
    $_POST = array_map( 'stripslashes', $_POST );
    //collect form data
    extract($_POST);
    //validation
    if($postTitle ==''){
      $error[] = 'Please enter the title.';
    }
    if($postDesc ==''){
      $postDesc = 'placeHolderText since I did not end up needing description';
    }
    if($postCont ==''){
      $error[] = 'Please enter the content.';
    }
    if(!isset($error)){
      try {
        //insert into database
        $stmt = $db->prepare('INSERT INTO blog_posts (postTitle, postDesc, postCont,postDate) VALUES (:postTitle, :postDesc, :postCont, :postDate)') ;
        $stmt->execute(array(
          ':postTitle' => $postTitle,
          ':postDesc' => $postDesc,
          ':postCont' => $postCont,
          ':postDate' => date('Y-m-d H:i:s')
        ));
        //redirect to index page
        header('Location: index.php?action=added');
        exit;
      } catch(PDOException $e) {
          echo $e->getMessage();
      }
    }
  }
?>