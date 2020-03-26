<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Client\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $message;
    public $message_css;
    public $server;
    public $dn;
    public $con;

    public function __construct()
    {
        $this->message = array();
        $this->message_css = "";
        $this->server = "10.15.179.66";
        $this->dn = "ou=people,dc=pins,dc=co,dc=id";
        error_reporting(0);
        ldap_connect($this->server);
        $this->con = ldap_connect($this->server);
        ldap_set_option($this->con, LDAP_OPT_PROTOCOL_VERSION, 3);

    }
    public function ldapCheck ($username, $password){
        $server = "10.15.179.66";
        $dn = "ou=people,dc=pins,dc=co,dc=id";

         //error_reporting(0);
        ldap_connect($server);
        $con = ldap_connect($server);
        ldap_set_option($con, LDAP_OPT_PROTOCOL_VERSION, 3);

       // dd($con);

       // if ((string) $con === "Resource id #340") {
       //   $message = "Connect ke intranet yaa :) boleh pake GlobalProtect atau F5";
       //   $user_search = ldap_search($con,$dn,"(|(uid=$username)(mail=$username))");

       //   if ($user_search) {
       //     return false;
       //   }
       //   echo "<script type='text/javascript'>alert('$message'); window.location='../login'</script>";
       // }

         //echo ($con ." - ". $user ." - ". $passw);
           // bind anon and find user by uid
        $user_search = ldap_search($con,$dn,"(|(uid=$username)(mail=$username))");
        $user_get = ldap_get_entries($con, $user_search);
        $user_entry = ldap_first_entry($con, $user_search);
        if (!empty($user_entry)) {
         $user_dn = ldap_get_dn($con, $user_entry);

               /*if (ldap_bind($con, $user_dn, $password) === false){
                   $message[] = "Error E101 - Current Username or Password is wrong.";
                   return false;
                 }
             return true;*/

             $bind = @ldap_bind($con, $user_dn, $password);
             if (!$bind) {
              return false;
            }
            return true;
          }
          return false;
        }

    public function leveldesc(){
        $lvldesc = array ("Administrator","AVP Budget","Dir.Utama","Dir.FBS",
        "Dir.Operation","Dir.Sales","GM Ecommerce","GM Sales","GM Solution",
        "Manager Sales","VP Accounting","VP Sales","VP Treasury");

        return $lvldesc;
    }

    public function changePasswordLdap()
    {
        global $message;
        global $message_css;
        $user = "abdul.muchtar";
        $oldPassword = "P1nsindonesia";
        $newPassword = "4ybis";
        $newPasswordCnf = "4ybis";

        // bind anon and find user by uid
        $user_search = ldap_search($this->con,$this->dn,"(|(uid=$user)(mail=$user))");
        $user_get = ldap_get_entries($this->con, $user_search);
        $user_entry = ldap_first_entry($this->con, $user_search);
        $user_dn = ldap_get_dn($this->con, $user_entry);
        $user_id = $user_get[0]["uid"][0];
        $user_givenName = $user_get[0]["givenName"][0];
        $user_search_arry = array( "*", "ou", "uid", "mail", "passwordRetryCount", "passwordhistory" );
        $user_search_filter = "(|(uid=$user_id)(mail=$user))";
        $user_search_opt = ldap_search($this->con,$user_dn,$user_search_filter,$user_search_arry);
        $user_get_opt = ldap_get_entries($this->con, $user_search_opt);
        $passwordRetryCount = $user_get_opt[0]["passwordRetryCount"][0];
        $passwordhistory = $user_get_opt[0]["passwordhistory"][0];

        //$message[] = "Username: " . $user_id;
        //$message[] = "DN: " . $user_dn;
        //$message[] = "Current Pass: " . $oldPassword;
        //$message[] = "New Pass: " . $newPassword;

        /* Start the testing */
        if ( $passwordRetryCount == 3 ) {
            $message[] = "Error E101 - Your Account is Locked Out!!!";
            return false;
        }
        if (ldap_bind($this->con, $user_dn, $oldPassword) === false) {
            $message[] = "Error E101 - Current Username or Password is wrong.";
            return false;
        }
        if ($newPassword != $newPasswordCnf ) {
            $message[] = "Error E102 - Your New passwords do not match!";
            return false;
        }
        $encoded_newPassword = "{SHA}" . base64_encode( pack( "H*", sha1( $newPassword ) ) );
        $history_arr = ldap_get_values($this->con,$user_dn,"passwordhistory");
        if ( $history_arr ) {
            $message[] = "Error E102 - Your new password matches one of the last 10 passwords that you used, you MUST come up with a new password.";
            return false;
        }
        if (strlen($newPassword) < 8 ) {
            $message[] = "Error E103 - Your new password is too short.<br/>Your password must be at least 8 characters long.";
            return false;
        }
        if (!preg_match("/[0-9]/",$newPassword)) {
            $message[] = "Error E104 - Your new password must contain at least one number.";
            return false;
        }
        if (!preg_match("/[a-zA-Z]/",$newPassword)) {
            $message[] = "Error E105 - Your new password must contain at least one letter.";
            return false;
        }
        if (!preg_match("/[A-Z]/",$newPassword)) {
            $message[] = "Error E106 - Your new password must contain at least one uppercase letter.";
            return false;
        }
        if (!preg_match("/[a-z]/",$newPassword)) {
            $message[] = "Error E107 - Your new password must contain at least one lowercase letter.";
            return false;
        }
        if (!$user_get) {
            $message[] = "Error E200 - Unable to connect to server, you may not change your password at this time, sorry.";
            return false;
        }

        $auth_entry = ldap_first_entry($this->con, $user_search);
        $mail_addresses = ldap_get_values($this->con, $auth_entry, "mail");
        $given_names = ldap_get_values($this->con, $auth_entry, "givenName");
        $password_history = ldap_get_values($this->con, $auth_entry, "passwordhistory");
        $mail_address = $mail_addresses[0];
        $first_name = $given_names[0];

        /* And Finally, Change the password */
        $entry = array();
        $entry["userPassword"] = "$encoded_newPassword";

        if (ldap_modify($this->con,$user_dn,$entry) === false){
            $error = ldap_error($this->con);
            $errno = ldap_errno($this->con);
            $message[] = "E201 - Your password cannot be change, please contact the administrator.";
            $message[] = "$errno - $error";
        } else {
            $message_css = "yes";
            mail($mail_address,"Password change notice","Dear $first_name,
            Your password on http://support.example.com for account $user_id was just changed. If you did not make this change, please contact support@example.com.
            If you were the one who changed your password, you may disregard this message.

            Thanks
            -Matt");
            $message[] = "The password for $user_id has been changed.<br/>An informational email as been sent to $mail_address.<br/>Your new password is now fully Active.";
        }
    }


}

