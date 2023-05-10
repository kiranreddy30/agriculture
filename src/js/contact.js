const form=document.getElementById('contactForm');



form.addEventListener('submit',function(e){
    
    
    var name=document.getElementById('name');
    var email=document.getElementById('email');
    var subject=document.getElementById('subject');
    var message=document.getElementById('message');
   // var password=document.getElementById('email');
   // var email=document.getElementById('email');

    if(name.value===''){
        alert("Please enter your name");
        e.preventDefault();
    }
    if(email.value===''){
        alert("Please enter your email");
        e.preventDefault();
    }
    if(subject.value===''){
        alert("Please enter your subject");
        e.preventDefault();
    }
    if(message.value===''){
        alert("Please enter your message");
        e.preventDefault();
    }

    let numbers=name.match(/\d+/g);

    if(numbers.length>0){
        alert("Please enter your name");
        e.preventDefault();
    }

    if(subject.value.length<6){
        alert("Subject size is too short");
        e.preventDefault();
    }

}
)




