function animalDB_ajaxCall(){
	var animalType = document.getElementById("animal_type").value;
	
	//Tests if html is connecting and if retrieved user input
	document.getElementById("test1").innerHTML=animalType;
	serverRequest(animalType);
};

var serverRequest = function(animal){
	console.log("I'm working");
	
	//Request to server for database
    var httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", "http://web.engr.oregonstate.edu/~hansejod/CS361/animalQuery.php", true);
    httpRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    httpRequest.send("animal="+animal);
    
    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState === 4) {
            if (httpRequest.status === 200) {
            	document.getElementById("test2").innerHTML="Connection successful";
            	document.getElementById("test3").innerHTML=httpRequest.responseText;
            	var data = JSON.parse(httpRequest.responseText);
            	console.log(data);
            	createTable(data);
        	}
            else{console.log("Sorry, something didn't work")}
        }
        
       else {console.log("Server busy.")}
    }
	
};

var createTable = function(data){
	//Take this out when we have the length of the query results
	
	var div = document.getElementById("table");
    
    while (div.firstChild){
        div.removeChild(div.firstChild);
    }
    
    var table = document.createElement("table");
    table.setAttribute("border", "2", "2");
    var tHead = document.createElement("thead");
    var tRow = document.createElement("tr");
    
    var tH1 = document.createElement("th");
    var tHeadText1 = document.createTextNode("PICTURE");
    tH1.appendChild(tHeadText1);
    
    var tH2 = document.createElement("th");
    var tHeadText2 = document.createTextNode("DESCRIPTION");
    tH2.appendChild(tHeadText2);
    
    var tH3 = document.createElement("th");
    var tHeadText3 = document.createTextNode("AGE");
    tH3.appendChild(tHeadText3);
    
    var tH4 = document.createElement("th");
    var tHeadText4 = document.createTextNode("SEX");
    tH4.appendChild(tHeadText4);
    
    var tH5 = document.createElement("th");
    var tHeadText5 = document.createTextNode("SIZE");
    tH5.appendChild(tHeadText5);
    
    tRow.appendChild(tH1);
    tRow.appendChild(tH2);
    tRow.appendChild(tH3);
    tRow.appendChild(tH4);
    tRow.appendChild(tH5);
    
    tHead.appendChild(tRow);
    table.appendChild(tHead);
    
    var tBody = document.createElement("tbody");
    
    // creating all cells of table
    for (var i = 0; i < data.length; i++) {
        var mainRows = document.createElement("tr");
          
        var cell1 = document.createElement("td");
       	cell1.setAttribute("class", "cell");
        var picture = document.createElement("img");
        var url = "http://web.engr.oregonstate.edu/~hansejod/CS361/"+data[i].picture;
        console.log(url);
        picture.setAttribute("src", url);
        picture.setAttribute("height", 50);
        picture.setAttribute("width", 50);
        cell1.appendChild(picture);
        mainRows.appendChild(cell1);
            
        var cell2 = document.createElement("td");
     	var cellText2 = document.createTextNode(data[i].description);
        cell2.appendChild(cellText2);
        mainRows.appendChild(cell2);
            
        var cell3 = document.createElement("td");
        var cellText3 = document.createTextNode(data[i].age);
        cell3.appendChild(cellText3);
        mainRows.appendChild(cell3);
            
        var cell4 = document.createElement("td");
        var cellText4 = document.createTextNode(data[i].sex);
        cell4.appendChild(cellText4);
        mainRows.appendChild(cell4);
        
        var cell5 = document.createElement("td");
        var cellText5 = document.createTextNode(data[i].size);
        cell5.appendChild(cellText5);
        mainRows.appendChild(cell5);
        
        tBody.appendChild(mainRows);
    }
   
    table.appendChild(tBody);
    div.appendChild(table);
};