var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("add").onclick = addScore;
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
};

function displayResults()
{
	var average = 0;
	for(var i=0;i<scores.length;i++)
	{
		average= (average*(i)+scores[i])/(i+1);
	}
	var highScore=Math.max.apply(Math,scores);
	var scoreIndex = scores.indexOf(highScore);       
    var bestStudent = names[scoreIndex]; 
	
	document.getElementById("results").innerHTML="<h2> Results </h2><br /> Average score = "+average + "<br/> <p> High Score= "+bestStudent+" with a score of "+highScore+"</p> "
}
function displayScores()
{
	var result = "";
	for(var i=0; i<names.length;i++){
		result = result +" <tr> <td> "+names[i] +" </td>	<td> "+scores[i]+" </td> </tr> <br/>";
	}
	document.getElementById("scores_table").innerHTML="<h2> Scores </h2> <br/> <tr><td><b>Name</td><td><b>Score</td></tr> <br/>"+result;
	
}

function addScore() {
	if((document.getElementById("name").value.length == 0)||(document.getElementById("score").value.length == 0))
{
    alert("You must enter a name and a valid score.")
}
else{
names.push(document.getElementById("name").value); 
	document.getElementById("name").textContent = names; 
	scores.push(document.getElementById("score").value); 
	document.getElementById("score").textContent = scores; 
}}

