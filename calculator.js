var numericalValues = new Array();
var SessioSave = new Array();
numericalValues["0"]= 1;
numericalValues["25"]= 2;
numericalValues["50"]= 0;
numericalValues["75"]= 3;
numericalValues["100"]= 4;
var FullScore = 0;


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
        FullScore = sessionStorage.getItem("Total1");
        sessionStorage.setItem("FullScore", FullScore);
        var str_json = JSON.stringify(SessioSave);
        console.log(str_json)
        request= new XMLHttpRequest();
        request.open("POST", "Quiz2.php", true);
        request.setRequestHeader("Content-type", "application/json");
        request.send(str_json);

}
else if(sivunum==2){
        sessionStorage.setItem("All2", SessioSave);
        sessionStorage.setItem("Total2", quizScore);
        FullScore = quizScore + parseInt(sessionStorage.getItem("FullScore"));
        sessionStorage.setItem("FullScore", FullScore);
        var str_json = JSON.stringify(SessioSave);
        request= new XMLHttpRequest();
        request.open("POST", "Quiz3.php", true);
        request.setRequestHeader("Content-type", "application/json");
        request.send(str_json);
        
}
else if(sivunum==3){
        console.log(quizScore)
        sessionStorage.setItem("All3", SessioSave);
        sessionStorage.setItem("Total3", quizScore);
        FullScore = quizScore + parseInt(sessionStorage.getItem("FullScore"));
        sessionStorage.setItem("FullScore", FullScore);
        var str_json = JSON.stringify(SessioSave);
        request= new XMLHttpRequest();
        request.open("POST", "Quiz4.php", true);
        request.setRequestHeader("Content-type", "application/json");
        request.send(str_json);
}
else if(sivunum==4){
        sessionStorage.setItem("All4", SessioSave);
        sessionStorage.setItem("Total4", quizScore);
        FullScore = quizScore + parseInt(sessionStorage.getItem("FullScore"));
        sessionStorage.setItem("FullScore", FullScore);
        var str_json = JSON.stringify(SessioSave);
        request= new XMLHttpRequest();
        request.open("POST", "End.php", true);
        request.setRequestHeader("Content-type", "application/json");
        request.send(str_json);
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
        console.log(sessionStorage.getItem("FullScore"))
        console.log(sessionStorage.getItem("Total2"))
    if (number <=40) {
            palaute = '2I am a career guidance professional. I quickly identify a suitable on-the-job learning location for my student. I have an extensive network of companies with which I work systematically. I have a clear plan for developing my own leadership skills. I regularly reflect on career guidance with colleagues, jobs, and students. I am actively exploring opportunities to study outside of school. I have a lot of different methods at my disposal to make decision making easier.  '
    }  if (number <=35){
            palaute = '2I reflect on my career supervision work every now and then. I have a few career guidance methods in use. For example, I think in advance every school year, for example, how I will renew my career guidance skills. I am asking for feedback from the workplace on my guidance. I am asking for feedback from the workplace on how I have managed to help them guide the student. I reflect on career guidance and fluency in decision-making with students.  '
    }  if (number <=24){
            palaute = '2I need more skills to identify new, functional learning environments. I’ll find out where to find new businesses in my on-the-job network. I focus on identifying third sector actors in my field. I wonder how I can more systematically identify new on-the-job learning places. I will master various decision-making methods for career guidance.  '
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
            palaute = '3I am a career guidance professional. I have a lot of different methods at my disposal for career guidance and decision making. I have a plan to increase my knowledge of career guidance methods. My work with workplace counselors is systematic and I keep a record of it. I also train and consult my colleagues on career guidance. I know the key theories of career guidance. I have the skills and plan to build students ’job search skills.   '
    } if (number <=35){
            palaute = '3I have a good range of career guidance methods at my disposal. I can identify students strengths. I have a strong background behind my career guidance, and I know the theory of career guidance. I know how I can develop students ’job search skills. I mentor workplace counselors regularly in their work with students. I am constantly exploring new on-the-job learning places. '
    } if (number <=24){
            palaute = '3I need to focus on gaining more knowledge of career guidance methods and techniques. I acquire the skills to identify a student’s strengths. I take care of developing my students ’job search skills. I develop my competence assessment skills.  '
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
            palaute = '4I am a skilled learning ambassador. I have a solid knowledge of companies in my area, and I know their skills needs. I have excellent skills in training job counselors. Utilizing feedback, I am constantly developing the career guidance that my students receive. I also have the enthusiasm, desire, and ability to help my colleagues develop as career counselors and learning ambassadors.  '
    } if (number <=35){
            palaute = '4I am aware of the needs of the companies in my area and the learning opportunities they offer. I use the information from feedback systems to develop my own career guidance skills. I have a good starting point to be a learning ambassador and I can identify development needs in my own skills and in cooperation between the educational institution and companies.  '
    } if (number <=24){
            palaute = '4I feel that I need to get even more acquainted with the companies in my area, their needs, and the learning opportunities they offer. Possibly my institution does not yet have enough planning to implement career guidance or evaluate its effectiveness. I need even more knowledge and confidence to be an ambassador for learning.  '
        }
        document.getElementById('valiPalaute').innerHTML =
        "Feedback: "+ palaute;
};


function getTotal()
{
var totalScore = getScore();
totalScore = sessionStorage.getItem("FullScore");
var sivunum = sessionStorage.getItem("sivu");
console.log(sessionStorage.getItem("FullScore"))
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

};


document.getElementById('calculate').onclick=getTotal;
