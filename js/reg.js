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