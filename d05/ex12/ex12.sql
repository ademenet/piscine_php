SELECT nom, prenom FROM fiche_personne WHERE nom LIKE '%-%' AND prenom LIKE'%-%' OR nom LIKE '%-%' OR prenom LIKE '%-%' ORDER BY nom ASC, prenom ASC;
