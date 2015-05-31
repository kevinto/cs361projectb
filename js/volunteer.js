function populateShelterDropbox() {

  // Define a return function
  var shelterDropDownReturnFunc = function(request) {
    return function() {
      if (request.readyState == 4) {
        // Result is an array of JSON objects
        var resultObj = JSON.parse(request.responseText);        
        var selectElement = document.getElementById('SelectShelter');
        
        for (var i = 0; i < resultObj.length; i++) {
        	var currentObj = JSON.parse(resultObj[i]);
        	var option = document.createElement('option');
		    option.value = currentObj.emailAddress;
		    option.innerHTML = currentObj.display;
		    selectElement.appendChild(option);
        }
        
       }
    }
  };

  // Create object that holds the SQL query parameters
  var shelterParams = {
    getAllShelters: true
  };

  callAppPhp(shelterDropDownReturnFunc, shelterParams);
}

function getCurrentShelterOption() {
	var selectElement = document.getElementById("SelectShelter");
	return selectElement.options[selectElement.selectedIndex].value;
}

/*
* Calls the backend PHP code for the 'app' page
* @param {object} returnFunc - function that is executed after PHP
*                              backend is done executing
* @param {object} postParams - params you want to pass to the PHP backend
*/
function callAppPhp(returnFunc, postParams) {
    if (typeof (postParams) === 'undefined') {
        postParams = '';
    }

    var request = new XMLHttpRequest();
    var url = 'shelter.php';
    var postParamsStr = '';

    // Create the post parameter string
    if (postParams.length !== 0) {
        var i = 0;
        for (var property in postParams) {
            if (postParams.hasOwnProperty(property)) {
                if (i === 0) {
                    postParamsStr += property + '=' + postParams[property];
                }
                else {
                    postParamsStr += '&' + property + '=' + postParams[property];
                }
                i++;
            }
        }
    }

    if (!request) {
        return false;
    }

    request.onreadystatechange = returnFunc(request);
    request.open('POST', url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send(postParamsStr);
    return request;
}

// TEST SECTION --------------------------------------------------------------
function getCurrentShelterOptionTest() {
    var currentOption = getCurrentShelterOption();
    alert(currentOption);
}
