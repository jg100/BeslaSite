function none(){
var data = document.getElementsByTagName("td");
    for(var i = 0; i < data.length; i++){
        data[i].hidden = false;
    }
}
function atv(){
var data = document.getElementsByTagName("td");
    for(var i = 0; i < data.length; i++){
        if(i == 2){
            data[i].hidden = false;
        }
        else if(i == 5){
            data[i].hidden = false;
        }
        else if(i == 8){
            data[i].hidden = false;
        }
        else{
            data[i].hidden = true;
        }
    }
}
function fcv(){
var data = document.getElementsByTagName("td");
    for(var i = 0; i < data.length; i++){
        if(i == 2){
            data[i].hidden = false;
        }
        else if(i == 3){
            data[i].hidden = false;
        }
        else if(i == 5){
            data[i].hidden = false;
        }
        else{
            data[i].hidden = true;
        }
    }
}
function fev(){
var data = document.getElementsByTagName("td");
    for(var i = 0; i < data.length; i++){
        if(i == 0){
            data[i].hidden = false;
        }
        else if(i == 3){
            data[i].hidden = false;
        }
        else if(i == 5){
            data[i].hidden = false;
        }
        else if(i == 7){
            data[i].hidden = false;
        }
        else{
            data[i].hidden = true;
        }
    }
}
function hcc(){
var data = document.getElementsByTagName("td");
    for(var i = 0; i < data.length; i++){
        if(i == 0){
            data[i].hidden = false;
        }
        else if(i == 4){
            data[i].hidden = false;
        }
        else if(i == 6){
            data[i].hidden = false;
        }
        else{
            data[i].hidden = true;
        }
    }
}