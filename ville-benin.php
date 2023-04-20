<?php
$villes = [
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

echo json_encode($villes);
header('Content-Type: application/json');
http_response_code(200);