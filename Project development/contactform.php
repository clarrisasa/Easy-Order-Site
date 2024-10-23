<html>
    <head>
    <title>
        www.cecewebsite
    </title>
<style type="text/css">
body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
}
.box {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    border: 1px solid #000000;
}
.bluebox {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    font-weight: bolder;
    color: #ffffff;
    background-color: #006699;
    border: 1px solid #000000;
}
.maincell {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    padding: 5px;
    border: 1px solid #006699;
}
.errmsg {
    font-family: "Courier New", Courier, mono;
    font-size: 12px;
    font-weight: bolder;
    color: #cc0000;
}
</style>
<script language="JavaScript">
function checkform()
{
    var cname, cemail, csubject, cmassage;
    with(window.document.msgfrom)
    {
        cname = sname;
        cemail = email;
        csubject = subject;
        cmessage = message;
    }
    if(trim(cname.value) == '')
    {
        alert('please enter your name = ');
        cname.focus();
        return false;
    }
    else if(trim(cemail.value) == '')
    {
        alert('please enter your Email= ');
        cemail.focus();
        return false;
    }
    else if(!isEmail(trim(cemail.value)))
    {
        alert('your email is failed');
        cemail.focus();
        return false;
    }
    else if(trim(csubject.value) == '')
    {
        alert('please enter message subject');
        csubject.focus();
        return false;
    }
    else if(trim(cmessage.value) == '')
    {
        alert('please enter your message');
        cmessage.focus();
        return false;
    }
    else
    {
        cname.value = trim(cname.value);
        cemail.value = trim(cemail.value);
        csubject.value = trim(csubject.value);
        cmessage.value = tirm(cmessage.value);
        return true;
    }
}


function trim(str)
{
    return str.replace(/^\s+|\s+$/g,'');
}




function isEmail(str)
{
    var regex = /^[-_.a-z0-9]+@(([-_a-z0-9]+\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop));
    return regex.test(str); 
}
</script>
</head>
<body>
<p style="text-align:center">
<?php
    $errmsg = ''; //error message
    $sname = ''; //sender's name
    $email = ''; //sender's email addres
    $subject = ''; //message subject
    $message = ''; //the massage itself
    if(isset($_POST['send']))
    {
        $sname = $_POST['sname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        if(trim($sname) == '')
        {
            $errmsg = 'please enter your name';
        }
        else if(trim($email) == '')
        {
            $errmsg = 'please enter your email address';
        }
        else if(!isEmail($email))
        {
            $errmsg = 'please enter message subject';
        }
        else if(trim($subject) == '')
        {
            $errmsg = 'please enter your message';
        }
        else if(trim($message) == '')
        {
            $errmsg = 'please enter message subject';
        }
        if($errmsg == '')
        {
            if(get_magic_quotes_gpc())
            {
                $subject = stripslashes($subject);
                $message = stripcslashes($message);
            }

            $to = "firman@gmail.com";

            $subject = '[contact] : ' . $subject;

            $msg = "from : $sname \r\n " . $message;
            mail($to, $subject, $msg, "from: $email\r\nReply-To: $email\r\nReturn-patch:$email\r\n");   
        }
    }
?>
<div align="center">your message is sent. click <a href="index.php">here</a> to go back to homepage </div>
<?php
    if(!isset($_POST['send']) || $errmsg != '')
?>
<div align="center" class="errmsg"><?=$errmsg;?></div>
<form method="post" name="msgform" id="msgform">
<table width="500" border="0" align="center" cellpadding="2" cellspacing="1" class="maincell">
<tr>
    <td width="106">Your name</td>
    <td width="381"><input name="sname" type="text" class="box" id="name" size="30" value="<?=$sname;?>"></td>
</tr>
<tr>
    <td>your email</td>
    <td><input name="email" type="text" class="box" id="email" size="30" value="<?=$email;?>"></td>
</tr>
<tr>
    <td>subject</td>
    <td><input name= "subject" type="text" class="box" id="subject" size="30" value="<?=$subject;?>"></td>
</tr>
<tr>
    <td>Message</td>
    <td><textarea name="message" cols="55" rows="10" wrap="OFF" class="box" id="message"><?=$message;?></textarea></td>
</tr>
<tr align="center">
    <td colspan="2"><input ame="send" type="submit" class="bluebox" id="send" value="send message" onclick="return checkform();"></td>
</tr>

<tr align="center">
    <td colspan="2"> &nbsp;</td>
</tr>
<tr align="left">
    <td colspan="2">If by any change the form isn't working you can contact me on <br>
    <script language="JavaScript">
    var addr = 'udinharun';
    var host = 'eepis-its.edu';
    var email = '<a href="mailto:' +addr + '@' + host + '">' + addr + "@" + host + "</a>";
    document.write(email);
    </script></td>
</tr>
</table>
</form>
<?php
function isEmail($email)
{
    return(preg_match("/^[-_[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\._)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop"));
}
?>
<p>&nbsp;</p>
<div align="center">copyright @ 2022 <a href="http://222.pens.ac.id">www.pens.ac.id</a></div>
<p>&nbsp;</p>
</p>
</body>
</html>
 