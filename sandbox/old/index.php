<?php

// set error reporting level
if (version_compare(phpversion(), '5.3.0', '>=') == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);

session_start();
if (isset($_POST['submit'])) {

    $sEmplUserName = escape($_POST['EmplUserName']);	
    $sEmplPassword = escape($_POST['EmplPassword']);
    $sCEmplPassword = escape($_POST['cEmplPassword']);
    $sEmail = escape($_POST['email']);
    $iGender = (int)$_POST['gender'];

    $sErrors = '';
    if (strlen($sEmplUserName) >= 1 and strlen($sEmplUserName) <= 25) {
        if (strlen($sEmplPassword) >= 1 and strlen($sEmplPassword) <= 25) {
            if (strlen($sEmail) >= 1 and strlen($sEmail) <= 55) {
                if ($sEmplPassword == $sCEmplPassword) {
                    if (ereg('^[a-zA-Z0-9\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $sEmail)) {
                        if ($iGender == '1' xor $iGender == '0') {
                            $sVcode = escape($_POST['vcode']);
                            if (! isset($_SESSION['valdiation_code'])) {
                                // Here you can send him some verification code (by email or any another ways)
                                $sCode = uniqid(rand(), true);
                                $_SESSION['valdiation_code'] = md5($sCode);

                            } elseif (md5($sVcode) == $_SESSION['valdiation_code']) {
                                // Here you can add him to database
                                // mysql_query('INSERT INTO ....

                            } else {
                                $sErrors = 'Verification code is wrong';
                            }
                        } else {
                            $sErrors = 'Gender is wrong';
                        }
                    } else {
                        $sErrors = 'Email is not the correct format';
                    }
                } else {
                    $sErrors = 'Passwords do not match';
                }
            } else {
                $sErrors = 'Address email is too long';
            }
        } else {
            $sErrors = 'Password is too long';
        }
    } else {
        $sErrors = 'Username is too long';
    }


}

// unset validation code if exists
unset($_SESSION['valdiation_code']);

// draw registration page
echo strtr(file_get_contents('Forms/NewHireForm.php'), array());

// extra useful function to make POST variables more safe
function escape($s) {
    //return mysql_real_escape_string(strip_tags($s)); // uncomment in when you will use connection with database
    return strip_tags($s);
}
