function showRow(wid) {
	//window.alert(wid);
	document.getElementByID(wid).style.display = "none";
}

function showRow2(rid) {
	var row = document.getElementByID("rid");
	var tags = document.getElementsByTagName("td");
	var i;
	for (i = 0; i < tags.length && i < 4; i++) {
		tags[i].style.backgroundColor = "red";
	}
}

function toggle(e) {
	let toggleBtn = document.getElementById("toggleBtn");
	let checkboxes = document.getElementsByTagName("input");

	//console.log(e.checked);
	//console.log(e);
	//console.log(checkboxes);

	for (var i = 0, n = checkboxes.length; i < n; i++) {
		// sets checked value to the same as the checked value of the toggle button

		checkboxes[i].checked = e.checked;
	}

	switch (toggleBtn.innerHTML) {
		case "Expand":
			toggleBtn.innerHTML = "Collapse";
			break;
		case "Collapse":
			toggleBtn.innerHTML = "Expand";
			break;
		default:
			break;
	}
}
