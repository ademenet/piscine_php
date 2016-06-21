SELECT nom, prenom, SUBSTRING(date_naissance FROM 1 FOR 10) AS 'date de naissance' FROM fiche_personne WHERE YEAR(date_naissance) LIKE '1989' ORDER BY nom;
