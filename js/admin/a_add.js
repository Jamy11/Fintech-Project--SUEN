
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
                    document.getElementById('usernameDiv').innerHTML = user_name;
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
        user_name = ''
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


let check_email;
function checkEmailUniqe()
{
    let mailcheck = checkAddEmail();
    if(mailcheck)
    {
        let ue = document.getElementById('ad_add_email').value;

        let xhttp = new XMLHttpRequest();
    
        xhttp.open('POST', '../../ajax/admin/add_admin.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                //document.getElementById('emailDiv').innerHTML= this.responseText;
                if(this.responseText == 'exist')
                {
                    document.getElementById('emailDiv').innerHTML = 'Email Exist';
                    //console.log('email ase');
                    check_email = false;
                }
                else{
                    document.getElementById('emailDiv').innerHTML = 'Ready to use';
                    //console.log('done');
                    check_email = true;

                }
            }
        }
        xhttp.send("email="+ue);
    }
    else
    {
        check_email = false;
    }
    

}



//username 
let check_un;
function checkUsenameUniqe()
{
    let usernamecheck = checkAddUsername();
    if(usernamecheck)
    {
        let ue = document.getElementById('ad_add_username').value;

        let xhttp = new XMLHttpRequest();
    
        xhttp.open('POST', '../../ajax/admin/add_admin.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                //document.getElementById('emailDiv').innerHTML= this.responseText;
                if(this.responseText == 'exist')
                {
                    document.getElementById('emailDiv').innerHTML = 'Username Exist';
                    //console.log('email ase');
                    check_un = false;
                    
                }
                else{
                    document.getElementById('emailDiv').innerHTML = 'Ready to use';
                    //console.log('done');
                    check_un = true;

                }
            }
        }
        xhttp.send("check_username="+ue);
    }
    else
    {
        check_un = false;
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
        document.getAnimations('msg').delay(800).fadeOut(800);
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