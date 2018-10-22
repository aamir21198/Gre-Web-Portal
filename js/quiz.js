function submitQuiz() {

	//alert("hi");
		var score1 = checkVerbal();
	//aleart("hi");
	var score2 = checkQuants();
}

function checkVerbal() {
	var x = document.querySelector('input[name="question_options_1"]:checked').value;
	var correct = document.getElementById("correct_option_1").value;
	if(correct == x)
		return true;
	else
		return false;
}

// function checkQuants() {
// 	//alert("checkVerbal");
// 	return 1;
// }