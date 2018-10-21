function submitQuiz() {
	var score1 = checkVerbal();
	var score2 = checkQuants();
}

function checkVerbal() {
	var x = document.querySelector('input[name="question_options_1"]:checked').value;
	return x;
}

function checkQuants() {
	alert("checkVerbal");
	return 1;
}