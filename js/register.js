// - register.js
// This script validates a form.

// Function called when the form is submitted.
// Function validates the form data.

//adds class for correct items and removes X 
function addCorrectClass(id) {
	'use strict';
	var y = document.getElementById(id).innerHTML;
		 
		if (y.includes('X')) {
		document.getElementById(id).innerHTML = document.getElementById(id).innerHTML.replace('X',' ');
		} else {

		}
	document.getElementById(id).classList.remove("labelwrong");
	document.getElementById(id).classList.add("labelcorrect");
	
}
//adds class for wrong items and adds X 
function addWrongClass(id) {
	'use strict';
	var x = document.getElementById(id).innerHTML;
	var ex = "X   ";
	if (x.includes('X')) {
	
	} else {
	ex += x;
	document.getElementById(id).innerHTML = ex;
	}
	
	document.getElementById(id).classList.remove("labelcorrect");
	document.getElementById(id).classList.add("labelwrong");
}

function validateForm(e) {
    'use strict';

    // Get the event object:
	if (typeof e == 'undefined') e = window.event;

    // Get form references:
	var name = U.$('name');
	var email = U.$('email');
	var phone = U.$('phone');
	var query = U.$('query');


	// Flag variable:
	var error = false;

	// Validate the name:
	if (/^[A-Z \.\-']{2,20}$/i.test(name.value)) {
		removeErrorMessage('name');
		addCorrectMessage('name','Correct');
		addCorrectClass('labelname');
	} else {
		addWrongClass('labelname');
		removeErrorMessage('name');
		addErrorMessage('name', 'Please enter your name.');
		error = true;
	}
	
	// Validate the email address:
	if (/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/.test(email.value)) {
		removeErrorMessage('email');
		addCorrectMessage('email','Correct');
		addCorrectClass('labelemail');
	} else {
		addWrongClass('labelemail');
		removeErrorMessage('email');
		addErrorMessage('email', 'Please enter your email address.');
		error = true;
	}
	
	// Validate the phone number:
	if (/\d{3}[ \-\.]?\d{3}[ \-\.]?\d{4}/.test(phone.value)) {
		removeErrorMessage('phone');
		addCorrectMessage('phone','Correct');
		addCorrectClass('labelphone');
	} else {
		addWrongClass('labelphone');
		removeErrorMessage('phone');
		addErrorMessage('phone', 'Please enter your phone number.');
		error = true;
	}
	
	// Validate the query:
	if (/[a-z]{4}/i.test(query.value)) {
		removeErrorMessage('query');
		addCorrectMessage('query','Correct');
		addCorrectClass('labelquery');
	} else {
		addWrongClass('labelquery');
		removeErrorMessage('query');
		addErrorMessage('query', 'Please enter your query.');
		error = true;
	}

    // If an error occurred, prevent the default behavior:
	if (error) {

		// Prevent the form's submission:
	    if (e.preventDefault) {
	        e.preventDefault();
	    } else {
	        e.returnValue = false;
	    }
	    return false;
    
	}
    
} // End of validateForm() function.



// Function called when the terms checkbox changes.
// Function enables and disables the submit button.
function toggleSubmit() {
	'use strict';
    
	// Get a reference to the submit button:
	var submit = U.$('submit');
	
	// Toggle its disabled property:
	if (U.$('terms').checked) {
		submit.disabled = false;
	} else {
		submit.disabled = true;
	}
	
} // End of toggleSubmit() function.

// Establish functionality on window load:
window.onload = function() {
    'use strict';

	// The validateForm() function handles the form:
    U.addEvent(U.$('theForm'), 'submit', validateForm);

	// Disable the submit button to start:
	U.$('submit').disabled = true;

	// Watch for changes on the terms checkbox:
    U.addEvent(U.$('terms'), 'change', toggleSubmit);

	// Enable tooltips on all items:
	U.enableTooltips('name');
	U.enableTooltips('email');
	U.enableTooltips('phone');
	U.enableTooltips('query');
};