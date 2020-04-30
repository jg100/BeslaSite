function dataStorage()
		  {
			var inputFName=document.getElementById("fname");
			localStorage.setItem("fName", inputFName.value);
			var inputLName=document.getElementById("lname");
			localStorage.setItem("lName", inputLName.value);
			var inputCC=document.getElementById("Credit card #");
			localStorage.setItem("CC", inputCC.value);
			var inputEmail=document.getElementById("Email");
			localStorage.setItem("Email", inputEmail.value);
			var inputPhone=document.getElementById("Phone Number")
			localStorage.setItem("Phone", inputPhone.value);
			var inputStreet=document.getElementById("Street Address");
			localStorage.setItem("Street", inputStreet.value);
			var inputCity=document.getElementById("City");
			localStorage.setItem("City", inputCity.value);
			var inputState=document.getElementById("State");
			localStorage.setItem("State", inputState.value);
			var inputCountry=document.getElementById("Country");
			localStorage.setItem("Country", inputCountry.value);
			inputZip=document.getElementById("Zip Code");
			localStorage.setItem("Zip", inputZip.value);
			//var verification=Math.floor(Math.random()*Math.floor(10000));
			//localStorage.setItem("Ver", verification.value);
			//console.log(localStorage);
          }
function dataDisplay()
{
	//console.log(localStorage);
	const lsReplace=document.getElementById("lsReplace");
	for(let i=0; i<localStorage.length; i++)
	{
		const key=localStorage.key(i);
		const value=localStorage.getItem(key);
		lsReplace.innerHTML+=`${key}: ${value}:<br>`;
	}
	//console.log(localStorage);
}
function dataDisplay2()
{
	document.write("Here is your information and verification #:");
	document.getElementById("Stuff").innerHTML=localStorage.getItem("fName");
}
