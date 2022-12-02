let valiPalauteLaskenta = function(result)

{
    var number = (result)
    var palaute = ''

    if (number <=40) {
            palaute = 'I am a career guidance professional. I recognize the strengths of students that I leverage in my career planning. I make sure my students regularly accumulate their career planning skills. I have guidance skills, practices, and materials that I use to support workplace counselors. I regularly increase my career guidance skills. I am also happy to guide colleagues in career guidance skills. '
    } else if (number <=35){
            palaute = 'My basic skills for career guidance are already at a good level. I recognize the student’s strengths and share them in the workplace. I update my career guidance skills every now and then. I can help a student build a working career path. I know how I can support job counselors in their work with students. '
    } else if (number <=24){
            palaute = 'I need more skills for individual career guidance. I find out about building individual career paths and how I promote my students ’career planning skills individually.  I find out what kind of career planning skills each of my student’s needs. '
        }
        console.log(number);
        console.log(palaute);
        document.getElementById('valiPalaute').innerHTML =
                "Feedback: "+ palaute;




}
document.getElementById('calculate').onclick=valiPalauteLaskenta; 