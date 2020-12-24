
function checkAddName()
{
    let obj = document.getElementById('ad_add_name').value;
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
function checkAddEmail()
{
   
    let email = document.getElementById("ad_add_email").value;

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

function checkAddUsername()
{
    let obj = document.getElementById('ad_add_username').value;
    if(obj != '')
    {
        return true;
    }
    else
    {
        return false;
    }
}

function checkAddPassword()
{
    let obj = document.getElementById('ad_add_password').value;
    if(obj != '')
    {
        return true;
    }
    else
    {
        return false;
    }
}

function checkAddConPassword()
{
    let obj = document.getElementById('ad_add_con_pas').value;
    if(obj != '')
    {
        return true;
    }
    else
    {
        return false;
    }
}

function checkAddGender()
{
    let obj1 = document.getElementById('ad_add_gen1').value;
    let obj2 = document.getElementById('ad_add_gen2').value;
    let obj3 = document.getElementById('ad_add_gen3').value;
    let gen;

    if (obj1 !='')
    {
        gen =obj1;
    }

    if (obj2 !='')
    {
        gen =obj2;
    }

    if (obj3 !='')
    {
        gen =obj3;
    }


    if(gen != '')
    {
        return true;
    }
    else{
        return false;
    }
}

function checkAddDob()
{
    let obj = document.getElementById('ad_add_dob').value;
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
    let name = checkAddName();
    let email = checkAddEmail();
    let username = checkAddUsername();
    let password = checkAddPassword();
    let con_password = checkAddConPassword();
    let gender = checkAddGender();
    let dob = checkAddDob();
   


    if(name==true && email==true && username==true && password==true && con_password==true && gender==true && dob==true)
    {
        alert('Ajex uncomplete');
        document.getElementById('msg').innerHTML = 'Hello';
        // setTimeout(10000);
        // document.getElementById('msg').innerHTML = '';
        document.getElementById('form').reset();
        return true;
    }
    else
    {
        alert('On going work');
        return false;
    }
    
    
    
}
function test()
{
    alert('test');
    return false;
}