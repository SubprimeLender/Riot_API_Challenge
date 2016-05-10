<?php
/*Function get_mastery()
*@param summoner ID
*@return array of all summoner's {championId => championPoints}
*/
function get_mastery($summonerId) {
	//get champion masteries from API
	$parsed_champion_mastery = get_api("https://na.api.pvp.net/championmastery/location/NA1/player/" . $summonerId . "/champions?api_key=5e54590d-31c4-4339-ab8f-dc872fd9dffe");
	//store champion masteries into $mastery_array {championId => championPoints} 
	$mastery_array = array();
	foreach ($parsed_champion_mastery as $champ) {
		$mastery_array[$champ->championId] = $champ->championPoints;
	};
	return $mastery_array;
};
