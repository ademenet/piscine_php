SELECT count(id_film) AS films FROM historique_membre WHERE MONTH(date) LIKE '%12%' AND DAY(date) LIKE '%24' OR DATE(date) BETWEEN '2006-10-30' AND '2007-07-27';
