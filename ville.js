var villes = [
    "Cotonou",
    "Abomey-Calavi",
    "Porto-Novo",
    "Parakou",
    "Djougou",
    "Bohicon",
    "Natitingou",
    "Savé",
    "Abomey",
    "Ouidah",
    "DOgbo-Tota",
    "Kandi",
    "Cové",
    "Malanville",
    "Pobé",
    "Kérou",
    "Savalou",
    "Sakété",
    "Comé",
    "Bembéréké",
    "Bassila",
    "Banikoara",
    "Kétou",
    "Dassa-Zoumé",
    "Tchaourou",
    "Allada",
    "Aplahoué",
    "Tanguiéta",
    "N'Dali",
    "Segbana",
    "Athiémé",
    "Grand Popo",
    "Kouandé"
];
var selectsVille = document.querySelectorAll('.select-ville');

villes.forEach(ville => {
   
    //document.querySelector('.select-ville').appendChild(optionEle)
    selectsVille.forEach(select =>{
        var optionEle = document.createElement('option')
        optionEle.innerHTML = ville
        select.appendChild(optionEle)
    })
});