let valiPalauteLaskenta = function(score, total)
{
    let number = (score / total)
    let palaute = ''

    if (number <=20) {
            palaute = 'dsadwad'
    } else if (number <=15){
            palaute = 'dawrfwag'
    } else if (number <=10){
            palaute = 'dagersfgaw'
    }  else if (number <=5){
            palaute = 'daawqdawsfgwawgwa'
    }
    return 'Sait' + ' ' + ('number') + ' ' + palaute
}