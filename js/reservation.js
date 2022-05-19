function seat(x)
{
	var color = document.getElementById(x).style.backgroundColor; 

	if (color == "red" ) {


	}else{
		document.getElementById(x).style.backgroundColor  = "red";
		document.getElementById("t_data").innerHTML   += "<tr id='"+x+x+"'><td>"+x+"</td><td class='price'>1450.00</td><td><button onclick=\"rseat('"+x+"','"+x+x+"')\">Delete</button></td></tr>";
	 	var cell = document.getElementsByClassName("price");
        var val = 0;
        var i = 0;
        while (cell[i] != undefined) {
            val += parseFloat(cell[i].innerHTML);
            i++;
        } //end while 
        document.getElementById("val").innerHTML = parseFloat(val).toFixed(2);
        document.getElementById('sval').innerHTML = i;
	}
}

function rseat(x,y)
{
	var color = document.getElementById(x).style.backgroundColor; 

	if (color == "red" ) {
		document.getElementById(x).style.backgroundColor  = "#ffff";
		    var row = document.getElementById(y);
    		row.parentNode.removeChild(row);

    		var cell = document.getElementsByClassName("price");
	        var val = 0;
	        var i = 0;
	        while (cell[i] != undefined) {
	            val += parseFloat(cell[i].innerHTML);
	            i++;
	        } //end while
	        document.getElementById("val").innerHTML = parseFloat(val).toFixed(2);
	        document.getElementById('sval').innerHTML = i;
	}
}

