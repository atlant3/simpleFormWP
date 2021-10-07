
var currentTab = 0;

showTab(currentTab);

function showTab(n) {
	
	var x = document.getElementsByClassName("tab");
	x[n].style.display = "block";
	setBreadcrumb(n);
	if(n == 0) {
		document.getElementById("backBtn").style.display = "none";
	} else {
		document.getElementById("backBtn").style.display = "inline";
	}
	if (n== (x.length - 2 )) {
		document.getElementById("continueBtn").innerHTML = "Send to Email";
	}
	else if (n== (x.length-1 )) {
		document.getElementById("continueBtn").innerHTML = "Start again";
		document.getElementById("backBtn").style.display = "none";
	} else {
		document.getElementById("continueBtn").innerHTML = "Continue";
	}

	console.log(n);
	setBreadcrumb(n+1);

}

function continueButton(n) {
	var x = document.getElementsByClassName("tab");
	if (n == 1 && !validateForm(currentTab)) return false;
	x[currentTab].style.display = "none";
	currentTab = currentTab + n;

	setPrice(document.getElementById("quantity").value);
	if(document.getElementById("continueBtn").innerHTML == "Start again") {
		currentTab = 0;
		document.getElementById("wpForm").reset();
	}
	if(currentTab==3) {
		if(sendRequest()) {
			document.getElementById("okDone").style.display = "block";
			document.getElementById("errSendDone").style.display = "none";
		} else {
			document.getElementById("okDone").style.display = "none";
			document.getElementById("errSendDone").style.display = "block";
		}
			
		
	}
	showTab(currentTab);
}

function validateForm(n) {
	const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var email = document.getElementById("email").value;
	var name = document.getElementById("name").value;
	var phone = document.getElementById("phone").value;
	var quantity = document.getElementById("quantity").value;
	if(currentTab==0) {
		if (name == "") {
	    	alert("Please entry your Name");
	    	return false;
  		}
  		else if (!re.test(email)) {
	    	alert("Please entry your email");
	    	return false;
  		}
	  	else if (phone == "" | phone.length<6) {
	  		alert("Please entry your phone");
	    	return false;
	  	}
	}
	if(currentTab==1) {
		if(quantity>1000) {
			alert("Max quantity 1000")
			return false;
		}
	}
	
  	return true;
 }

 function setPrice(q) {
 		if(q>0 && q<11) {
 			document.getElementById("price").innerHTML = "10$";
 		} else if (q>10 && q<101) {
 			document.getElementById("price").innerHTML = "100$";
 		} else if(q>100 && q<1001) {
 			document.getElementById("price").innerHTML = "1000$"
 		} else {
 			document.getElementById("price").innerHTML = "0$"
 		}
 }

 function setBreadcrumb(n) {
 	var i, breadcrumbs = document.getElementsByClassName("breadcrumb-item");
 	for (i = 0; i < breadcrumbs.length; i++) {
    	breadcrumbs[i].className = breadcrumbs[i].className.replace(" active", "");
  	}
  	breadcrumbs[n].className += " active";
 }

 function sendRequest(){
 	const XHR = new XMLHttpRequest();
	const form = document.getElementById( "wpForm" );

   const FD = new FormData( form );
   XHR.open( "POST", "https://example.com/index.php" );
   XHR.send( FD );
   console.log(XHR.readyState);
   if(XHR.readyState==4) {
    	return true
   }

	return false;

}
