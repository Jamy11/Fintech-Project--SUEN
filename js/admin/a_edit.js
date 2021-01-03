function checkName()
{
    let obj = document.getElementById('name').value;
    

    if(obj !='')
    {
        return true;
    }
    else{
        return false;
    }
}

function checkPass()
{
    let obj = document.getElementById('pass').value;
    

    if(obj !='')
    {
        return true;
    }
    else{
        return false;
    }
}

function checkAll()
{
    let obj1 = checkName();
    let obj2 = checkPass();

    if (obj1 && obj2)
    {
        return true;
    }
    else
    {
        alert('Fill the form.');
        return false;
    }
}