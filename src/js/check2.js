const form=document.getElementById('loginform');
form.addEventListener('submit',function(e){
    
    
    var username=document.getElementById('username');
    var password=document.getElementById('password');

    if(username.value===''){
        alert("Please enter the username");
        e.preventDefault();
    }
    if(password.value===''){
        alert("Please enter the password");
        e.preventDefault();
    }

    

}
)