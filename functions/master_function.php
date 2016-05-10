<?php
include 'variables/api_key.php';
include 'variables/region.php';
include 'get_api_function.php';
include 'get_mastery_function.php';

//get summoner name from form
$summoner_name_encoded = rawurlencode($_POST['summonername']);
$summoner_name = str_replace(" ", "", $_POST['summonername']);
$summoner_name = strtolower($summoner_name);

//convert summoner name into summoner ID
	$parsed_summoner_id = get_api("https://na.api.pvp.net/api/lol/$region/v1.4/summoner/by-name/" . $summoner_name . "?api_key=" . $api_key_mike);
	$summoner_id = $parsed_summoner_id->$summoner_name->id;

//get current match data and mastery data for each players in the match
	$parsed_current_match = get_api("https://na.api.pvp.net/observer-mode/rest/consumer/getSpectatorGameInfo/NA1/" . $summoner_id . "?api_key=" . $api_key_mike);
	//store summoner name, summoner ID, and champ into storage $match_players
	foreach ($parsed_current_match->participants as $data) {
		$match_players[$data->summonerId] = array(
		  "Name"        => $data->summonerName, 
		  "ID"          => $data->summonerId, 
		  "Champion"    => $data->championId,
		  "Team"		=> $data->teamId,
		  "CMastery"	=> get_mastery($data->summonerId),
		  );
	};
