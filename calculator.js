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
 
function valiPalaute()
{
    var number = (sessionStorage.getItem("quiz"))
    var palaute = ''

    if (number <=40) {
            palaute = 'I am a career guidance professional. I recognize the strengths of students that I leverage in my career planning. I make sure my students regularly accumulate their career planning skills. I have guidance skills, practices, and materials that I use to support workplace counselors. I regularly increase my career guidance skills. I am also happy to guide colleagues in career guidance skills. '
    } else if (number <=35){
            palaute = 'My basic skills for career guidance are already at a good level. I recognize the student’s strengths and share them in the workplace. I update my career guidance skills every now and then. I can help a student build a working career path. I know how I can support job counselors in their work with students. '
    } else if (number <=24){
            palaute = 'I need more skills for individual career guidance. I find out about building individual career paths and how I promote my students ’career planning skills individually.  I find out what kind of career planning skills each of my student’s needs. '
        }
        document.getElementById('valiPalaute').innerHTML =
        "Feedback: "+ palaute;
};


function getTotal()
{
valiPalauteLaskenta();
var totalScore = getScore();

document.getElementById('result').innerHTML =
                              "Your total score is: "+totalScore;                           

}

document.getElementById('calculate').onclick=getTotal;
