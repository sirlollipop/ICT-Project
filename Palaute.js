let palauteLaskenta = function(score, total)
{
    let number = (score / total)
    let palaute = ''

    if (number <=80) {
            palaute = 'dsadwad'
    } else if (number <=60){
            palaute = 'dawrfwag'
    } else if (number <=40){
            palaute = 'dagersfgaw'
    }  else if (number <=20){
            palaute = 'daawqdawsfgwawgwa'
    }   else if (number <=10){
            palaute = 'AAAAAAAAAAAAAAAAAAAAA'
    }
    return 'Sait' + ' ' + ('number') + ' ' + palaute
}