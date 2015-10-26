<?PHP

date_default_timezone_set('Etc/UTC');
require_once("PHPMailerAutoload.php");


/*
Interface to Captcha handler
*/
class FG_CaptchaHandler
{
    function Validate() { return false;}
    function GetError(){ return '';}
}

class FGContactForm
{
    var $errors;
    var $error_message;
    var $name;
    var $email;
    var $message;
    var $form_random_key;
    var $SMTPSecure;
    var $Username;
    var $Password;
    var $Host;

    function FGContactForm()
    {
        $this->errors = array();
        $this->form_random_key = 'HTgsjhartag';
    }

    function SetFormRandomKey($key)
    {
        $this->form_random_key = $key;
    }
    function GetSpamTrapInputName()
    {
        return 'sp'.md5('KHGdnbvsgst'.$this->GetKey());
    }
    function SafeDisplay($value_name)
    {
        if(empty($_POST[$value_name]))
        {
            return'';
        }
        return htmlentities($_POST[$value_name]);
    }
    function GetFormIDInputName()
    {
        $rand = md5('TygshRt'.$this->GetKey());

        $rand = substr($rand,0,20);
        return 'id'.$rand;
    }


    function GetFormIDInputValue()
    {
        return md5('jhgahTsajhg'.$this->GetKey());
    }

    function ProcessForm()
    {
        if(!isset($_POST['submitted']))
        {
            //error_log(var_export("erro1", true));
            return false;
        }
        if(!$this->Validate())
        {
            //error_log(var_export("erro2", true));
            $this->error_message = implode('<br/>',$this->errors);
            return false;
        }
        $this->CollectData();

        $ret = $this->SendFormSubmission();
        //error_log(var_export("erro3", true));
        return $ret;
    }

    function RedirectToURL($url)
    {
        header("Location: $url");
        exit;
    }

    function GetErrorMessage()
    {
        return $this->error_message;
    }
    function GetSelfScript()
    {
        return htmlentities($_SERVER['PHP_SELF']);
    }

    function GetName()
    {
        return $this->name;
    }
    function GetEmail()
    {
        return $this->email;
    }
    function GetMessage()
    {
        return htmlentities($this->message,ENT_QUOTES,"UTF-8");
    }

    /*--------  Private (Internal) Functions -------- */


    function SendFormSubmission()
    {

        $mail = new PHPMailer;

//Tell PHPMailer to use SMTP
        $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
        $mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';

//Set the hostname of the mail server
        $mail->Host = 'smtp.pdmfc.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'ssl';

//Whether to use SMTP authentication
        $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "tech-generic";

//Password to use for SMTP authentication
        $mail->Password = "t3CH|:g3n3r1C!";

//Set who the message is to be sent from
        $mail->setFrom('info@beyond-vision.pt', 'BeyondVision');

//Set an alternative reply-to address
       // $mail->addReplyTo('dmdias@gmail.com', 'Daniel Dias');
	$mail->AddReplyTo($this->email, $this->name);
//Set who the message is to be sent to
        //$mail->addAddress('info@apps4mobility.com', $this->name);
        $mail->addAddress('info@beyond-vision.pt', $this->name);
//$mail->addAddress('mail@dmdias.info', 'Daniel Dias');

//Set the subject line
        $mail->Subject = $this->name.' contacted from BeyondVision portal';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
       // $mail->msgHTML("$this->message");
	$mail->msgHTML("<b>Name:</b> $this->name<br /><b>Message:</b> $this->message<br /><b>Email:</b> $this->email");
//$mail->msgHTML($message = ComposeFormtoEmail());


//Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';

//Attach an image file

//send the message, check for errors
        if (!$mail->send()) {
   //  $mail->add_error("Failed sending email!");
    // echo "Mailer Error: " . $mail->ErrorInfo;
            return false;
   // echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
      // echo "Message sent!";
           return true;

       }
    }


    /*
    Internal variables, that you donot want to appear in the email
    Add those variables in this array.
    */
    function IsInternalVariable($varname)
    {
        $arr_interanl_vars = array('scaptcha',
            'submitted',
            $this->GetSpamTrapInputName(),
            $this->GetFormIDInputName()
            );
        if(in_array($varname,$arr_interanl_vars))
        {
            return true;
        }
        return false;
    }

    function FormSubmissionToMail()
    {
        $ret_str='';
        foreach($_POST as $key=>$value)
        {
            if(!$this->IsInternalVariable($key))
            {
                $value = htmlentities($value,ENT_QUOTES,"UTF-8");
                $value = nl2br($value);
                $key = ucfirst($key);
                $ret_str .= "<div class='label'>$key :</div><div class='value'>$value </div>\n";
            }
        }
        return $ret_str;
    }

    function ExtraInfoToMail()
    {
        $ret_str='';

        $ip = $_SERVER['REMOTE_ADDR'];
        $ret_str = "<div class='label'>IP address of the submitter:</div><div class='value'>$ip</div>\n";

        return $ret_str;
    }

    function GetMailStyle()
    {
        $retstr = "\n<style>".
        "body,.label,.value { font-family:Arial,Verdana; } ".
        ".label {font-weight:bold; margin-top:5px; font-size:1em; color:#333;} ".
        ".value {margin-bottom:15px;font-size:0.8em;padding-left:5px;} ".
        "</style>\n";

        return $retstr;
    }
    function GetHTMLHeaderPart()
    {
       $retstr = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">'."\n".
       '<html><head><title></title>'.
       '<meta http-equiv=Content-Type content="text/html; charset=utf-8">';
       $retstr .= $this->GetMailStyle();
       $retstr .= '</head><body>';
       return $retstr;
   }
   function GetHTMLFooterPart()
   {
    $retstr ='</body></html>';
    return $retstr ;
}
function ComposeFormtoEmail()
{
    $header = $this->GetHTMLHeaderPart();
    $formsubmission = $this->FormSubmissionToMail();
    $extra_info = $this->ExtraInfoToMail();
    $footer = $this->GetHTMLFooterPart();

    $message = $header."Contact from Apps4Mobility form:<p>$formsubmission</p><hr/>$extra_info".$footer;

    return $message;
}

function Validate()
{
    $ret = true;
        //security validations
    if(empty($_POST[$this->GetFormIDInputName()]) ||
      $_POST[$this->GetFormIDInputName()] != $this->GetFormIDInputValue() )
    {
            //The proper error is not given intentionally
        $this->add_error("Automated submission prevention: case 1 failed");
        $ret = false;
    }

        //This is a hidden input field. Humans won't fill this field.
    if(!empty($_POST[$this->GetSpamTrapInputName()]) )
    {
            //The proper error is not given intentionally
        $this->add_error("Automated submission prevention: case 2 failed");
        $ret = false;
    }

        //name validations
    if(empty($_POST['name']))
    {
        $this->add_error("Please provide your name");
        $ret = false;
    }
    else if(strlen($_POST['name'])>50){
        $this->add_error("Name is too big!");
        $ret = false;
    }

    //email validations
    if(empty($_POST['email']))
    {
        $this->add_error("Please provide your email address");
        $ret = false;
    }
    else if(strlen($_POST['email'])>50)
    {
        $this->add_error("Email address is too big!");
        $ret = false;
    }
    else if(!$this->validate_email($_POST['email'])){
        $this->add_error("Please provide a valid email address");
        $ret = false;
    }

    //message validaions
    if(empty($_POST['message']))
    {
        $this->add_error("Please write your message!");
        $ret = false;
    }else if(strlen($_POST['message'])>2048){
        $this->add_error("Message is too big!");
        $ret = false;
    }

      return $ret;
    }

    function StripSlashes($str)
    {
       if(get_magic_quotes_gpc())
       {
         $str = stripslashes($str);
       }
       return $str;
    }
    /*
    Sanitize() function removes any potential threat from the
    data submitted. Prevents email injections or any other hacker attempts.
    if $remove_nl is true, newline chracters are removed from the input.
    */
    function Sanitize($str,$remove_nl=true)
    {
        $str = $this->StripSlashes($str);

        if($remove_nl)
        {
            $injections = array('/(\n+)/i',
                '/(\r+)/i',
                '/(\t+)/i',
                '/(%0A+)/i',
                '/(%0D+)/i',
                '/(%08+)/i',
                '/(%09+)/i'
                );
            $str = preg_replace($injections,'',$str);
        }

        return $str;
    }

    /*Collects clean data from the $_POST array and keeps in internal variables.*/
    function CollectData()
    {
        $this->name = $this->Sanitize($_POST['name']);
        $this->email = $this->Sanitize($_POST['email']);

        /*newline is OK in the message.*/
        $this->message = $this->StripSlashes($_POST['message']);
    }

    function add_error($error)
    {
        array_push($this->errors,$error);
    }
    function validate_email($email)
    {
        return eregi("^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$", $email);
    }

    function GetKey()
    {
        return $this->form_random_key.$_SERVER['SERVER_NAME'].$_SERVER['REMOTE_ADDR'];
    }

}

?>

