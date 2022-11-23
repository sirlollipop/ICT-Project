var numericalValues = new Array();
numericalValues["0"]= 1;
numericalValues["25"]= 2;
numericalValues["50"]= 0;
numericalValues["75"]= 3;
numericalValues["100"]= 4;



function getScore()
{
var quizScore = 0;
var form = document.forms["form"];
var question = form.elements["quiz"];
for(var i=0; i<question.length; i++)
{
    quizScore += numericalValues[question[i].value];
}

return quizScore;
};





function getTotal()
{

var totalScore = getScore();


document.getElementById('result').innerHTML =
                              "Your total score is: "+totalScore;

}

document.getElementById('calculate').onclick=getTotal;
