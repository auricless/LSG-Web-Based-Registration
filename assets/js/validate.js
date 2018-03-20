	function validate(){
		var fname = document.forms['guestForm']['fname'].value;
		var lname = document.forms['guestForm']['lname'].value;
		var age = document.forms['guestForm']['age'].value;
		var addr = document.forms['guestForm']['address'].value;
		var contact = document.forms['guestForm']['contact'].value;
		var invited = document.forms['guestForm']['invited'].value;

		//TODO
		// -add age validation

		if(fname.trim() == "" || lname.trim() == "" || age.trim() == "" || addr.trim() == "" || contact.trim() == "" || invited.trim() == ""){
			$(".validation-message").html("<div class='alert alert-warning'><strong>Warning!</strong> Required fields were not filled up.</div>");
			return false;
		}
		return true;

	}