function checkSuppName()
{
    let obj = document.getElementById('name').value;
    if(obj != '')
    {
        return true;
    }
    else
    {
        return false;
    }
}

let mailcheck;
function checkSuppEmail()
{
   
    let email = document.getElementById("email").value;

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

function checkSuppUsername()
{
    let obj = document.getElementById('username').value;

    let un = obj.split('');
    let user_name ='';

    let count = 0;
    

    if(obj != '')
    {
        if(obj.length > 1)
        {
            
            for(let i =0;i<un.length;i++)
            {
                if((un[i] >= 'A' && un[i] <= 'z') || un[i] == '.' || un[i] == '-')
                {
                    user_name += un[i];
                    document.getElementById('usernameDiv').innerHTML = 'Valid';
                    count +=1;
                }
                else
                {
                    user_name = '';
                    document.getElementById('usernameDiv').innerHTML = 'Invalid';
                    break;
                    //return false;
                }
            }
        }
        else
        {

            //echo "Please use 1st letter betweeen A-z";
            //header('location: registration.php?msg=style_error');
            user_name = '';
            return false;
            //break;
        }
    }
    else
    {
        user_name = '';
        document.getElementById('usernameDiv').innerHTML = 'Reqired';
        return false;
        // /break;
    }
    if(user_name.length == count)
    {
        console.log('true');
        return true;
    }
    else
    {
        console.log('false');
        return false;
    }


    
}

function checkSuppPassword()
{
    let obj = document.getElementById('password').value;
    if(obj != '')
    {
        return true;
    }
    else
    {
        return false;
    }
}

function formValidation()
{

    let name = checkSuppName();
    let email = checkSuppEmail();
    let username = checkSuppUsername();
    let password = checkSuppPassword();

    if(name && email && username && password)
    {
        return true;
    }
    else{
        alert('Fill All box.');
        return false;
    }
}