var numericalValues = new Range();
numericalValues["25"]= 1;
numericalValues["50"]= 2;
numericalValues["75"]= 3;
numericalValues["100"]= 4;



function getScore()
{
var quizScore = 0;
var form = document.forms["form"];
var question = form.elements["question1"];
for(var i=0; i<question.length; i++)
{


    quizScore = numericalValues[question[i].value];
    console.log(quizScore)
    break;
    

}
return quizScore;
};

function getScore2()
{
var quizScore2 = 0;
var form = document.forms["form"];
var question2 = form.elements["question2"];
for(var i=0; i<question2.length; i++)
{
  if(question2[i].checked)
  {
  quizScore2 = numericalValues[question2[i].value];
  break;
  }

}
return quizScore2;
};


function getTotal()
{

var totalScore = getScore() + getScore2();


document.getElementById('result').innerHTML =
                              "Your total score is: "+totalScore;

}

document.getElementById('calculate').onclick=getTotal;
