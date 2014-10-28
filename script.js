function submitFunction() {
	var x = document.forms["MyForm"]["username"].value;
	var y = document.forms["MyForm"]["pwd"].value;

	if(! x || ! y) {
		alert("The field cant be left empty.");
	} else{
		if(x=="admin") {
			if (y == "1234") {
				alert("You have been signed up for the blog");
			} else {
				alert("Not correct");
			}
		} else {
			alert("User cannot be found.");
		}
	}

	return false;
}