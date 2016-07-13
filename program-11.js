function website() {
    document.getElementById("url").innerHTML = "The url is " + window.location.href;
}

function goBack(){
	window.history.back();
}

function goForward(){
	window.history.forward();
}
