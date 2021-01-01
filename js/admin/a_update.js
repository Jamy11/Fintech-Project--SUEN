
function updateName()
{

}

function updateEmail()
{
    let email = document.getElementById("a_u_email").value;

    if (email == "")
    {
        document.getElementById("emailDiv").innerHTML = "*required";
        //haserror = true;
        return false;
    }

    var at = email.indexOf("@");
    var dot = email.lastIndexOf("\.");
    if (!(email.length > 0 && at > 0 && email[at + 1] !== "." && dot > at + 1 && dot < email.length && email.indexOf(" ") === -1 && email.indexOf("..") === -1))
    {
        document.getElementById("emailDiv").innerHTML = "*invalid";
        //haserror = true;
        return false;
    }
    else
    {
        document.getElementById("emailDiv").innerHTML = "*Valid";
        mailcheck = true;
        return true; 
    }
}

function updateUsername()
{

}

function updatePassword()
{

}

function updateConpass()
{

}