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
var sivunum = sessionStorage.getItem("sivu");
for(var i=0; i<question.length; i++)
{
    SessioSave.push(question[i].value);
    quizScore += numericalValues[question[i].value];
}


if(sivunum==1){

        sessionStorage.setItem("All1", SessioSave);
        sessionStorage.setItem("Total1", quizScore);
        var FullScore = sessionStorage.getItem("Total1");
        sessionStorage.setItem("FullScore", FullScore);
        
}
else if(sivunum==2){
        sessionStorage.setItem("All2", SessioSave);
        sessionStorage.setItem("Total2", Score2);
        var FullScore = FullScore += quizScore
        console.log(FullScore);
        sessionStorage.setItem("FullScore", FullScore);
        
}
else if(sivunum==3){
        console.log(quizScore)
        sessionStorage.setItem("All3", SessioSave);
        sessionStorage.setItem("Total3", quizScore);
        var FullScore = FullScore += quizScore
        sessionStorage.setItem("FullScore", FullScore);
}
else if(sivunum==4){
        sessionStorage.setItem("All4", SessioSave);
        sessionStorage.setItem("Total4", quizScore);
        var FullScore = FullScore += quizScore
        sessionStorage.setItem("FullScore", FullScore);
}
return quizScore;
};
 
function valiPalaute1()
{

    var number = (sessionStorage.getItem("Total1"))
    var palaute = ''
    console.log(sessionStorage.getItem("All1"))
    console.log(sessionStorage.getItem("Total1"))
    if (number <= 40) {
            palaute = 'I am a career guidance professional. I recognize the strengths of students that I leverage in my career planning. I make sure my students regularly accumulate their career planning skills. I have guidance skills, practices, and materials that I use to support workplace counselors. I regularly increase my career guidance skills. I am also happy to guide colleagues in career guidance skills. '
    } if (number <=35){
            palaute = 'My basic skills for career guidance are already at a good level. I recognize the student’s strengths and share them in the workplace. I update my career guidance skills every now and then. I can help a student build a working career path. I know how I can support job counselors in their work with students. '
    } if (number <=24){
            palaute = 'I need more skills for individual career guidance. I find out about building individual career paths and how I promote my students ’career planning skills individually.  I find out what kind of career planning skills each of my student’s needs. '
        }
        document.getElementById('valiPalaute').innerHTML =
        "Feedback: "+ palaute;
};

function valiPalaute2()
{
        var number = (sessionStorage.getItem("Total2"))
        var palaute = ''
        console.log(sessionStorage.getItem("All2"))
        console.log(sessionStorage.getItem("Total2"))
    if (number <=40) {
            palaute = '2I am a career guidance professional. I recognize the strengths of students that I leverage in my career planning. I make sure my students regularly accumulate their career planning skills. I have guidance skills, practices, and materials that I use to support workplace counselors. I regularly increase my career guidance skills. I am also happy to guide colleagues in career guidance skills. '
    }  if (number <=35){
            palaute = '2My basic skills for career guidance are already at a good level. I recognize the student’s strengths and share them in the workplace. I update my career guidance skills every now and then. I can help a student build a working career path. I know how I can support job counselors in their work with students. '
    }  if (number <=24){
            palaute = '2I need more skills for individual career guidance. I find out about building individual career paths and how I promote my students ’career planning skills individually.  I find out what kind of career planning skills each of my student’s needs. '
        }
        document.getElementById('valiPalaute').innerHTML =
        "Feedback: "+ palaute;
};
function valiPalaute3()
{
    var number = (sessionStorage.getItem("Total3"))
    var palaute = ''
    console.log(sessionStorage.getItem("All3"))
    console.log(sessionStorage.getItem("Total3"))
    if (number <=40) {
            palaute = '3I am a career guidance professional. I recognize the strengths of students that I leverage in my career planning. I make sure my students regularly accumulate their career planning skills. I have guidance skills, practices, and materials that I use to support workplace counselors. I regularly increase my career guidance skills. I am also happy to guide colleagues in career guidance skills. '
    } if (number <=35){
            palaute = '3My basic skills for career guidance are already at a good level. I recognize the student’s strengths and share them in the workplace. I update my career guidance skills every now and then. I can help a student build a working career path. I know how I can support job counselors in their work with students. '
    } if (number <=24){
            palaute = '3I need more skills for individual career guidance. I find out about building individual career paths and how I promote my students ’career planning skills individually.  I find out what kind of career planning skills each of my student’s needs. '
        }
        document.getElementById('valiPalaute').innerHTML =
        "Feedback: "+ palaute;
};
function valiPalaute4()
{
    var number = (sessionStorage.getItem("Total4"))
    var palaute = ''
    console.log(sessionStorage.getItem("All4"))
    console.log(sessionStorage.getItem("Total4"))
    if (number <=40) {
            palaute = '4I am a career guidance professional. I recognize the strengths of students that I leverage in my career planning. I make sure my students regularly accumulate their career planning skills. I have guidance skills, practices, and materials that I use to support workplace counselors. I regularly increase my career guidance skills. I am also happy to guide colleagues in career guidance skills. '
    } if (number <=35){
            palaute = '4My basic skills for career guidance are already at a good level. I recognize the student’s strengths and share them in the workplace. I update my career guidance skills every now and then. I can help a student build a working career path. I know how I can support job counselors in their work with students. '
    } if (number <=24){
            palaute = '4I need more skills for individual career guidance. I find out about building individual career paths and how I promote my students ’career planning skills individually.  I find out what kind of career planning skills each of my student’s needs. '
        }
        document.getElementById('valiPalaute').innerHTML =
        "Feedback: "+ palaute;
};


function getTotal()
{
var totalScore = getScore();
totalScore = sessionStorage.getItem("FullScore");
var sivunum = sessionStorage.getItem("sivu");
if(sivunum==1){
        valiPalaute1();
}
else if(sivunum==2){
        console.log(sivunum);
        valiPalaute2();
}
else if(sivunum==3){
        valiPalaute3();
}
else if(sivunum==4){
        valiPalaute4();
}



document.getElementById('result').innerHTML =
                              "Your total score is: "+totalScore;                           

}

document.getElementById('calculate').onclick=getTotal;
