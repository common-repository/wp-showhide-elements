function wp_showhide(theName, number) {
	if(number) {
		for(i=1;i<=number;i++){
			elementName = document.getElementById(theName + "_" + i);
			if(elementName.style.display == "none"){
				elementName.style.display = "block";
			}
			else{
				elementName.style.display = "none";
			}
		}
	}
	else {
		elementName = document.getElementById(theName);
		if(elementName.style.display == "none"){
			elementName.style.display = "block";
		}
		else{
			elementName.style.display = "none";
		}		
	}
}