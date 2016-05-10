# riot_api
This is a simple query into champion masteries of every player in your live game. There is a twist: instead of displaying in-game badges or mastery points, players will be gifted Twitch.tv emotes!
<enter>
<enter>
Live demo: [champselect.info](http://champselect.info/kappa/kappa.html)


+ [kappa.html](kappa.html) is where the user will submit a summoner name
+ [api_key.php](variables/api_key.php) simply has keys as variables (insert 2)
+ [region.php](variables/region.php) simply has the region variable...currently only good for NA
+ [champion_reference.php](variables/champion_reference.php) simply contains an array of champID::champName
+ [get_api_function.php](functions/get_api_function.php) is a function that takes the API URL as a param and returns the decoded array
+ [get_mastery_function.php](functions/get_master_function.php) is a function that takes a summoner ID as a param and returns array of entire list of all champions and respective masteries for that summoner ID...because PHP doesn't take in non-global variables inside the function without the variables being parameters, you must manually insert/copy-paste in $api_key_2 into the function
+ [master_function.php](functions/master_function.php) takes submitted summoner name, converts it to summoner ID, gets current game info, then stores summoner name, ID, champ, team, and champ masteries for all champs for all players in the game into $match_players storage array
+ [badges_function.php](functions/badges_function.php) returns appropriate badges, drawn from assets folder /imgs/
+ [results.php](results.php) is the output of all players names, loading splash art of players' respective champions, and Twitch.tv emote badges
+ Full development history in repo [https://github.com/SubprimeLender/riot_api](https://github.com/SubprimeLender/riot_api)
+ EDIT: changes to some documents made after 11:59pm were to remove our API keys
