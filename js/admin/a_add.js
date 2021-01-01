
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

let gender_val ='';
function checkAddGender()
{
    // let obj1 = document.getElementById('ad_add_gen1').checked;
    //let obj2 = document.getElementById('ad_add_gen2').value;
    //let obj3 = document.getElementById('ad_add_gen3').value;
    let radio = document.getElementsByName('gen');

    for(let i=0;i<radio.length;i++)
    {
        if(radio[i].checked)
        {
            gender_val = radio[i].value;
        }
    }


    if(gender_val != '')
    {
        return true;
    }
    else{
        return false;
    }
}

let dob_val;
function checkAddDob()
{
    let obj = document.getElementById('ad_add_dob').value;
    if(obj != '')
    {
        dob_val = obj;
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
                    document.getElementById('usernameDiv').innerHTML = 'Username Exist';
                    //console.log('email ase');
                    check_un = false;
                    
                }
                else{
                    document.getElementById('usernameDiv').innerHTML = 'Ready to use';
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


    console.log('name=',name);
    console.log('email=',email);
    console.log('username=',username);
    console.log('password=',password);
    console.log('con_password=',con_password);
    console.log('gender=',gender);
    console.log('dob=',dob);

    console.log('check_email=',check_email);
    console.log('check_un=',check_un);

    let name_val= document.getElementById('ad_add_name').value;
    let email_val= document.getElementById('ad_add_email').value;
    let username_val= document.getElementById('ad_add_username').value;
    let password_val= document.getElementById('ad_add_password').value;
    let conpass_val= document.getElementById('ad_add_con_pas').value;

    console.log('name value=',name_val);
    console.log('email value=',email_val);
    console.log('username value=',username_val);
    console.log('password value=',password_val);
    console.log('con_password value=',con_password);
    console.log('gender value=',gender_val);
    console.log('dob value= ',dob_val);
    
    //let dob_val= document.getElementById().value;

    if(password_val == conpass_val && password_val != '')
    {
        if(name==true && email==true && username==true && password==true && con_password==true && gender==true && dob==true 
            && check_email==true &&  check_un==true)
        {
            
            let formdata = {
                'name' : name_val,
                'email' : email_val,
                'username' : username_val,
                'password' : password_val,
                'con_password' : con_password,
                'gender' : gender_val,
                'dob' : dob_val
            }

            check_email = false;
            check_un = false;
            gender_val='';
            dob_val='';
            
            let data = JSON.stringify(formdata);
            
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../../ajax/admin/add_admin.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    
                    //document.getElementById('usernameDiv').innerHTML = 'Username Exist';
                    //console.log('email ase');
                    //alert(this.responseText);
                    if(this.responseText == 'Done')
                    {
                        document.getElementById('msg').innerHTML = 'Adding complete';
                        //console.log('email ase');
                        return true;
                        
                    }
                    else if(this.responseText =="Admin Adding Failed")
                    {
                        document.getElementById('msg').innerHTML = 'Adding failed';
                        //console.log('done');
                        return false;
    
                    }
                    else{
                        document.getElementById('msg').innerHTML = 'Php Verification Failed';
                        //console.log('done');
                        return false;
                    }
                    
                        
                  
                }
            }

            xhttp.send("add="+data);
            
            
            document.getElementById('emailDiv').innerHTML = '';
            document.getElementById('usernameDiv').innerHTML = '';
            
            
            
            
            // alert('Ajex uncomplete');
    
            // document.getElementById('msg').innerHTML = 'Hello';
            // // setTimeout(10000);
            // // document.getElementById('msg').innerHTML = '';
            document.getElementById('form').reset();
            // //document.getAnimations('msg').delay(800).fadeOut(800);
             return true;
        }
        else
        {
            alert('Requirment do not match and fill up the form.');
            return false;
        }
    }
    else
    {
        alert('Password Do not match.');
        return false;
    }
    
}

