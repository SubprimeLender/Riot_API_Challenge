# riot_api

+ [name_submit.php](name_submit.php) is where the user will submit his summoner name
+ [api_key.php](api_key.php) simply has keys as variables (insert yours)
+ [region.php](region.php) simply has the region variable...not important
+ [champion_reference.php](champion_reference.php) simply contains an array of champID::champName
+ [get_api_function.php](get_api_function.php) is a function that takes the API URL as a param and returns the decoded array
+ [get_mastery_function.php](get_master_function.php) is a function that takes a summoner ID as a param and returns array of entire list of all champions and respective masteries for that summoner ID 
+ [function.php](function.php) takes submitted summoner name, converts it to summoner ID, gets current game info, then stores summoner name, ID, champ, team, and champ masteries for all champs for all players in the game into $match_players storage array
+ [mastery_result.php](master_result.php) is placeholder for the resulting output page
+ [sample.txt](sample.txt) is a sample current match json return in case you want to look at how the api packet is set up
