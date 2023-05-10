const form=document.getElementById('signupform');
// const username=document.getElementById('username');
// const password=document.getElementById('password');
// const email=document.getElementById('email');


form.addEventListener('submit',function(e){
    
    
    var username=document.getElementById('username');
    var password=document.getElementById('password');
    var email=document.getElementById('email');

    if(username.value===''){
        alert("Please enter the username");
        e.preventDefault();
    }

    if(password.value.length<6){
        alert("Password size is too short");
        e.preventDefault();
    }

}
)




