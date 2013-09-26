$emailnotempty;
$emailvalid;
$passwordnotempty;
$firstnamenotempty;
$lastnamenotempty;
$mobilenotempty;
$usernamenotempty;
function validateForm() {
    $emailnotempty = true;
    $emailvalid = true;
    $passwordnotempty = true;
    validateEmail();
    validatePassword();
    if ($emailnotempty == false) {
        document.getElementById("emailerrors").innerHTML = ' <div class="validation-advice" id="advice-required-entry-email" style="">Email Required</div>';
    }
    else if ($emailvalid == false) {
        document.getElementById("emailerrors").innerHTML = ' <div class="validation-advice" id="advice-required-entry-email" style="">Invalid email</div>';
    }
    else if ($passwordnotempty == true) {
        document.forms['login-form'].submit();
    }
    if ($passwordnotempty == false) {
        document.getElementById("passworderrors").innerHTML = '  <div class="validation-advice" id="advice-required-entry-email" style="">Password field required</div>';
    }
}

function validateEmail()
{
    var x = document.forms["login-form"]["email"].value;
    if (x == null || x == "")
    {
        $emailnotempty = false;
    }

    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length)
    {
        $emailvalid = false;
    }


}
function validatePassword()
{
    var x = document.forms["login-form"]["password"].value;
    if (x == null || x == "")
    {

        $passwordnotempty = false;
    }
}
function validateEmail1()
{
    var x = document.forms["form-validate"]["email"].value;
    if (x == null || x == "")
    {
        $emailnotempty = false;
    }

    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length)
    {
        $emailvalid = false;
    }


}
function validatePassword1()
{
    var x = document.forms["form-validate"]["password"].value;
    if (x == null || x == "")
    {

        $passwordnotempty = false;
    }
}

function validateFirstname()
{
    var x = document.forms["form-validate"]["firstname"].value;
    if (x == null || x == "")
    {

        $firstnamenotempty = false;
    }
}

function validateLastname()
{
    var x = document.forms["form-validate"]["lastname"].value;
    if (x == null || x == "")
    {

        $lastnamenotempty = false;
    }
}


function validateMobile()
{
    var x = document.forms["form-validate"]["mobile"].value;
    if (x == null || x == "")
    {

        $mobilenotempty = false;
    }
}

function validateUsername()
{
    var x = document.forms["form-validate"]["username"].value;
    if (x == null || x == "")
    {

        $usernamenotempty = false;
    }
}

function validateRegister() {
    $emailnotempty = true;
    $emailvalid = true;
    $passwordnotempty = true;
    $firstnamenotempty = true;
    $lastnamenotempty = true;
    $mobilenotempty = true;
    $usernamenotempty = true;
    validateEmail1();
    validateFirstname();
    validateLastname();
    validateMobile();
    validateUsername();
    validatePassword1();
    if ($emailnotempty == false) {
        document.getElementById("emailerrors").innerHTML = ' <div class="validation-advice" id="advice-required-entry-email" style="">Email Required</div>';
    }
    if ($firstnamenotempty == false) {
        document.getElementById("firstnameerrors").innerHTML = ' <div class="validation-advice" id="advice-required-entry-email" style="">First Name Required</div>';
    }
    if ($lastnamenotempty == false) {
        document.getElementById("lastnameerrors").innerHTML = ' <div class="validation-advice" id="advice-required-entry-email" style="">Last Name Required</div>';
    }
    if ($mobilenotempty == false) {
        document.getElementById("mobileerrors").innerHTML = ' <div class="validation-advice" id="advice-required-entry-email" style="">Mobile Required</div>';
    }
    if ($emailvalid == false) {
        document.getElementById("emailerrors").innerHTML = ' <div class="validation-advice" id="advice-required-entry-email" style="">Email Invalid</div>';
    }
    if ($usernamenotempty == false) {
        document.getElementById("usernameerrors").innerHTML = ' <div class="validation-advice" id="advice-required-entry-email" style="">Username Required</div>';
    }
    if ($usernamenotempty == false) {
        document.getElementById("usernameerrors").innerHTML = ' <div class="validation-advice" id="advice-required-entry-email" style="">Username Required</div>';
    }
    if ($passwordnotempty == false) {
        document.getElementById("passworderrors").innerHTML = ' <div class="validation-advice" id="advice-required-entry-email" style="">Password Required</div>';
    }
    if (($emailnotempty == true) && ($firstnamenotempty == true) && ($lastnamenotempty == true) && ($mobilenotempty == true) && ($emailvalid == true) && ($usernamenotempty == true)) {
        document.forms['form-validate'].submit();
    }

}
function valid(str,id)
{  var hint = document.getElementById(id+'1');
      if (str.length == 0)
    {
        hint.innerHTML = "";
        return;
    }  
    if ((id=="firstname")||(id=="lastname")){
    var letters = /^[A-Za-z]+$/; 
    
      if(!letters.test(str)){  

        hint.innerHTML = 'Not Ok';
    }
    else {
        hint.innerHTML = 'Ok';
    }}
 if (id=="mobile"){
    var num_regex = /^\d+$/;
    
      if(!num_regex.test(str) || (str.length < 10) || (str.length > 10)){  

        hint.innerHTML = 'Not Ok';
    }
    else {
        hint.innerHTML = 'Ok';
    }}
if (id=="email"){
   var email_regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/;
    
      if(!email_regex.test(str)){  

        hint.innerHTML = 'Not Ok';
    }
    else {
        hint.innerHTML = 'Ok';
    }}
if (id=="username"){
    var username_regex = /^[\w.-]+$/;
   
     var xmlhttp;
  
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            
            if ((xmlhttp.responseText=='ok') && (username_regex.test(str))){
                hint.innerHTML = 'Ok';
            }else {
                 hint.innerHTML = 'Not ok';
            }
        }
    }
    xmlhttp.open("POST", "/user/checkuser", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("user=" + str);
    
    
}
}


