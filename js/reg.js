function showhidden()
{
    var user=document.getElementById("usertype");
    if(user.value=="d")
    {
        document.getElementById("driver_items").style.visibility="visible";
    }
    else
    {
        document.getElementById("driver_items").style.visibility="hidden";
    }
}

function checkpassword() {
    if(document.getElementById("pwd").value==document.getElementById("c_pwd").value)
    {
        alert("Success!");
        return true;
    }
    else{
        alert("Password Missmatch!");
        return false;
    }
}