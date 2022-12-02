var numericalValues = new Array();
var SessioSave = new Array();
numericalValues["0"]= 1;
numericalValues["33.33"]= 2;
numericalValues["66.66"]= 3;
numericalValues["99.99"]= 4;



function getScore()
{
var quizScore = 0;
var form = document.forms["form"];
var question = form.elements["quiz"];


for(var i=0; i<question.length; i++)
{
    SessioSave.push(question[i].value);
    quizScore += numericalValues[question[i].value];
}
sessionStorage.setItem("quiz", SessioSave);
console.log(sessionStorage.getItem("quiz"));

return quizScore;
};
 

function getTotal()
{

var totalScore = getScore();


document.getElementById('result').innerHTML =
                              "Your total score is: "+totalScore;

}

document.getElementById('calculate').onclick=getTotal;
