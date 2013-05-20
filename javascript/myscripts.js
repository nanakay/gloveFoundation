var tips;
function init() {
	tips = document.getElementById("tips");

	var tipsArray = [];
	

	// tipsArray.push("First tip");
	// tipsArray.push("Second tip");
	// tipsArray.push("Another tip");


	tips.innerHTML = tipsArray[0];
	setInterval(setTip, 5000);

	var count = 1;
	function setTip() {
		if (count < tipsArray.length) {
			tips.innerHTML = tipsArray[count];
			count += 1;
		}
		else {
			count = 0;
		}
	}

}
