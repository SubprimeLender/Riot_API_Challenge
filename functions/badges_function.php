<?php
function badge_compiler($champion) {
	//pogchamp
	if ($champion >= 80000) {
		return "<img src='imgs/pogchamp.png'>";
		}
	//minglee
	elseif ($champion > 3000 && $champion < 80000) {
		return "<img src='imgs/minglee.png'>";
		}
	//catface
	elseif ($champion <= 3000) {
		return "<img src='imgs/lirikN.png'>";
		};
};
