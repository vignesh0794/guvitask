var check=function ()
{
    if (document.getElementById('password').value ==
    document.getElementById('Cpassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
    document.getElementById("register").disabled = false;
  } else {
    document.getElementById("register").disabled = true;
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'password do not match';
  }

}
