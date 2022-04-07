

function d(val){

    document.getElementById("result").value+=val;
}

function clearScreen(){

    document.getElementById("result").value="";
}

function solve(){

    var x=document.getElementById("result").value;
    let y=eval(x);
    if(isNaN(result)){
        document.getElementById("result").value=y;
    }
    else{
        alert(" please enter correct data !!!")
    }
}
