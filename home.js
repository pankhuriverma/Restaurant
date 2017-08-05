
// var x= document.getElementsByClassName('loader');



function disp1(){
	document.getElementsByClassName('back')[0].style.visibility="visible";
	// alert("hi");
	document.getElementsByClassName('form_top1')[0].style.visibility="visible";
	 document.getElementsByClassName('form_top1')[0].style.WebkitTransform = "scale(1,1)";
	 document.getElementsByClassName('form_top1')[0].style.transitionDuration="1s";
	 // document.btn.style.backgroundColor="green";
	
}


function disp2(){
	document.getElementsByClassName('back')[0].style.visibility="visible";
	// alert("hi");
	document.getElementsByClassName('form_top2')[0].style.visibility="visible";
	 document.getElementsByClassName('form_top2')[0].style.WebkitTransform = "scale(1,1)";
	 document.getElementsByClassName('form_top2')[0].style.transitionDuration="1s";
	 document.btn.style.backgroundColor="green";
	
}



function hide1()
{
		document.getElementsByClassName('back')[0].style.visibility="hidden";
	// // alert("hi");
	// document.getElementsByClassName('form_top')[0].style.visibility="hidden";
	document.getElementsByClassName('form_top1')[0].style.WebkitTransform = "scale(0,0)";
	document.getElementsByClassName('form_top1')[0].style.transitionDuration="1s";


}

function hide2()
{
		document.getElementsByClassName('back')[0].style.visibility="hidden";
	// // alert("hi");
	// document.getElementsByClassName('form_top')[0].style.visibility="hidden";
	document.getElementsByClassName('form_top2')[0].style.WebkitTransform = "scale(0,0)";
	document.getElementsByClassName('form_top2')[0].style.transitionDuration="1s";


}



function scroll1() {
    window.scrollTo(0,0);
   
}

function scroll2() {
    window.scrollTo(0,700);


}


function scroll3() {
    window.scrollTo(0,1300);

}


function scroll4() {
    window.scrollTo(0,1500);
}

function loading(){
	// document.getElementsByClassName('loader')[0].style.backgroundColor="blue";
	// document.getElementsByClassName('loader')[0].style.height="200px";

	document.getElementsByClassName('loader')[0].style.transitionDuration="2s";
	// document.getElementsByClassName('back')[0].style.visibility="visible";
	// alert("hi");
	document.getElementsByClassName('loader')[0].style.visibility="visible";
	 document.getElementsByClassName('loader')[0].style.WebkitTransform = "scale(1,1)";
	 // document.getElementsByClassName('form_top1')[0].style.transitionDuration="1s";

	if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
        console.log("1");
        
    } 
    else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }

}

// }

// function getLocation() {
//     if (navigator.geolocation) {
//         navigator.geolocation.getCurrentPosition(showPosition);
//         console.log("1");
//     } 
//     else { 
//         x.innerHTML = "Geolocation is not supported by this browser.";
//     }
// }

function showPosition(position) 
{
    document.getElementsByClassName('loader')[0].innerHTML = "Your location is:<br>Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude+"<br>Welcome to 10 Downing Street";
    // document.getElementsByClassName('loader')[0].innerTEXT="10 Downing Street";

    console.log(position.coords.latitude );
        console.log( position.coords.longitude);
}

