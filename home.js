
//Handles the submission of contact form on home page
function submitForm() {
    document.getElementById("myForm").submit();
}

function delayFormSubmission() {
    //Delays the submit function for 5 seconds
    setTimeout("submitForm()",2000);

}

function formSubmited() {
    //alert("Didn't work");
    document.getElementById("thankYou").innerHTML = "Thank you! Your response is being recorded!";
    delayFormSubmission();  
}

//***** */

function serverTest {
    var xml = new XMLHttpRequest();

    


}

