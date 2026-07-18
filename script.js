function myfun(){
    let a=getElementByid("set_pass").value;
    let b=getElementByid("con_pass").value;

    if(a!=b){
        getElementByid("txtmsg").innerHTML="Password Does Not Match"

    }
}