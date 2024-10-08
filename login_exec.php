    <?php
    //Start session
    session_start();
     
    //Include database connection details
    require_once('include/config.php');
     
    //Array to store validation errors
    $errmsg_arr = array();
     
    //Validation error flag
    $errflag = false;
     
    //Function to sanitize values received from the form. Prevents SQL injection
    function clean($str) {
    $str = @trim($str);
    if(get_magic_quotes_gpc()) {
    $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
    }
     
    //Sanitize the POST values
    $username = clean($_POST['username']);
    $password = clean($_POST['password']);
     
    //Input Validations
    if($username == '') {
    $errmsg_arr[] = '<font color="red" style="margin-left:100px;"><b> Username missing </b></font>';
    $errflag = true;
    }
    if($password == '') {
    $errmsg_arr[] = '</br><font color="red" style="margin-left:100px;"><b> Password missing </b></font>';
    $errflag = true;
    }
     
    //If there are input validations, redirect back to the login form
    if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: login.php");
    exit();
    }
     
    //Create query
    $qry="SELECT * FROM user WHERE user_name='$username' AND password='$password'";
    $result=mysql_query($qry);
     
    //Check whether the query was successful or not
    if($result) {
    if(mysql_num_rows($result) > 0) {
    //Login Successful
    session_regenerate_id();
    $member = mysql_fetch_assoc($result);
    $_SESSION['SESS_MEMBER_ID'] = $member['nid'];
    $_SESSION['SESS_FIRST_NAME'] = $member['user_name'];
    $_SESSION['SESS_LAST_NAME'] = $member['password'];
    session_write_close();
    header("location: u_index.php");
    exit();
    }else {
    //Login failed
    $errmsg_arr[] = '<font color="red" style="margin-left:20px;"><b>Invaid username or password</b></font>';
    $errflag = true;
    if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: login.php");
    exit();
    }
    }
    }else {
    die("Query failed");
    }
    ?>