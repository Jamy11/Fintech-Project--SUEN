
function updateName()
{
    let obj = document.getElementById('a_u_name').value;
    if(obj !="")
    {
        return true;
    }
    else{
        return false;
    }

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
    let obj = document.getElementById('a_u_username').value;
    if(obj !="")
    {
        return true;
    }
    else{
        return false;
    }

}


let check_email;
function checkEmailUniqe()
{
    let mailcheck = updateEmail();
    if(mailcheck)
    {
        let ue = document.getElementById('a_u_email').value;

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
let check_un;
function checkUsenameUniqe()
{
    let usernamecheck = updateUsername();
    if(usernamecheck)
    {
        let ue = document.getElementById('a_u_username').value;

        let xhttp = new XMLHttpRequest();
    
        xhttp.open('POST', '../../ajax/admin/add_admin.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
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

function updateUser()
{
    let name = updateName();
    let email = updateEmail();
    let username =  updateUsername();

    if(name==true && email==true && username ==true && check_un == true && check_email == true) 
    {
        check_email = null;
        check_un = null;
        return true;
    }
    else
    {
        alert('Please use valid information');
        return false; 
    }
}