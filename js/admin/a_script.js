function loginValidation()
{
    let obj1 = checkUsername_login();
    let obj2 = checkPassword_login();

    if(obj1 == true && obj2 ==true)
    {
        return true;
    }
    else
    {
        alert('Please Fill the form.');
        return false;
    }

    
}
function checkUsername_login()
{
    let obj = document.getElementById('admin_uname').value;


    if(obj != '')
    {
        return true;
    }
    else{
        return false;
    }

}

function checkPassword_login()
{
    let obj = document.getElementById('admin_pass').value;

    
    if(obj != '')
    {
        return true;
    }
    else{
        return false;
    }
}