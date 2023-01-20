function jourTravaille() {
    let holidays = [
        new Date(2020, 0, 1), // Jour de l'an
        new Date(2020, 4, 13), // Paques
        new Date(2020, 5, 1), // Fete du travail
        new Date(2020, 5, 8), // Victoire des alliés
        new Date(2020, 5, 21), // l'Ascension
        new Date(2020, 6, 1), // pentcote
        new Date(2020, 7, 14), // Prise de la bastille
        new Date(2020, 08, 15), // l'Assomption
        new Date(2020, 11, 1), // La Toussaint
        new Date(2020, 11, 11), // L'Armistice
        new Date(2020, 12, 25) //  Noel
    ];
    let dateString = document.getElementById("date").value;
    let date = new Date(dateString);
    let day = date.getDate();
    let month = date.getMonth()+1;
    let year = date.getFullYear();
    let dayOfWeek = date.getDay();

    if (holidays.includes(date)) {
        console.log(`Le ${day} ${month} ${year} est un jour férié`);
    }

     else if (dayOfWeek === 0 || dayOfWeek === 6) {
        console.log(`Non, ${day} ${month} ${year} est un week-end`);
    }
    else {
        console.log(`Oui, ${day} ${month} ${year} est un jour travaillé`);
    }
}

