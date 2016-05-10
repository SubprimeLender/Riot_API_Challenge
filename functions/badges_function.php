<?php
function badge_compiler($champion) {
	//pogchamp
	if ($champion >= 80000) {
		return "<img src='imgs/pogchamp.jpg'>";
		}
	//minglee
	elseif ($champion > 3000 && $champion < 80000) {
		return "<img src='imgs/minglee.jpg'>";
		}
	//catface
	elseif ($champion <= 3000) {
		return "<img src='imgs/lirikN.jpg'>";
		};
};