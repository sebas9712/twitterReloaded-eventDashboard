<?php 

session_start();
require("./conexion_bd.php");

$mostActive_query = "   SELECT Users.username
                        COUNT(Users.username) AS `most_active` 
                        FROM Users JOIN Events ON Users.username = Events.username
                        GROUP BY Users.user
                        ORDER BY `value_occurrence` DESC
                        LIMIT 1;";

$mostComented_query = " SELECT Tweets.id_tweet, Tweets.description
                        COUNT(Events.id_tweet) AS `most_commented` 
                        FROM Events JOIN Tweets ON Events.id_tweet = Tweets.id_tweet
                        GROUP BY Events.id_tweet
                        ORDER BY `most_commented` DESC
                        LIMIT 1;";

$amountUsers_query = "  SELECT COUNT(DISTINCT username) AS total_users_today 
                        FROM Events 
                        WHERE type_interaction = 0 
                        AND Events.timestamp >= DATEADD(DAY, 0, DATEDIFF(DAY, 0, CURRENT_TIMESTAMP))
                        AND Events.timestamp <  DATEADD(DAY, 1, DATEDIFF(DAY, 0, CURRENT_TIMESTAMP));  " ;

$mostActive = consultaBaseDatos($mostActive_query);
$mostCommented = consultaBaseDatos($mostComented_query);
$amountUsers = consultaBaseDatos($amountUsers_query);

echo $mostActive;
echo $mostCommented;
echo $amountUsers;

?>