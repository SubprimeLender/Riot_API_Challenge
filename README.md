# riot_api
This is a simple query into champion masteries of every player in your live game. There is a twist: instead of displaying in-game badges or mastery points, players will be gifted Twitch.tv emotes!
<enter>
<enter>
Live demo: [champselect.info](http://champselect.info/kappa/kappa.html)
How it works:

+ [kappa.html](kappa.html) is where the user will submit a summoner name
+ [api_key.php](api_key.php) simply has keys as variables (insert 2)
+ [region.php](region.php) simply has the region variable...currently only good for NA
+ [champion_reference.php](champion_reference.php) simply contains an array of champID::champName
+ [get_api_function.php](get_api_function.php) is a function that takes the API URL as a param and returns the decoded array
+ [get_mastery_function.php](get_master_function.php) is a function that takes a summoner ID as a param and returns array of entire list of all champions and respective masteries for that summoner ID 
+ [master_function.php](master_function.php) takes submitted summoner name, converts it to summoner ID, gets current game info, then stores summoner name, ID, champ, team, and champ masteries for all champs for all players in the game into $match_players storage array
+ [results.php](results.php) is the output of everything
+ Full development history in repo [https://github.com/SubprimeLender/riot_api](https://github.com/SubprimeLender/riot_api)
