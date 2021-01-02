function oldPass()
{
    let obj = document.getElementById('old_pass').value;
    if (obj !='')
    {
        return true;
    }
    else
    {

    }
}

function newPass()
{
    let obj = document.getElementById('new_pass').value;
    if (obj !='')
    {
        return true;
    }
    else
    {
        
    }
}

function conPass()
{
    let obj = document.getElementById('con_pass').value;
    if (obj !='')
    {
        return true;
    }
    else
    {
        
    }
}


function passCheck()
{
    let oldpass = oldPass();
    let newpass = newPass();
    let conpass = conPass();

    let val1 = document.getElementById('new_pass').value;
    let val2 = document.getElementById('con_pass').value;

    if(oldpass && newpass && conpass)
    {
        if(val1 === val2)
        {
            return true;
        }
        else
        {
            alert("Password dont match.");
            return false;
        }
        
    }
    else
    {
        alert("Fill in the form.");
        return false;
    }
}