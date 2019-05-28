//Check for the input alphanumeric
function mysubmit()
		{ 
		var x = document.getElementById("textb").value;

		    if(/[^a-zA-Z0-9 ]/.test(x)) //regex for special characters, returns false if special detected
    		{
	    		window.alert("Please no special characters");
	    		return false;
    		}
	    }
