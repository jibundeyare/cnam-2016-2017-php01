<?php

function redirect($url) {
	header('location: ' . $url, true, 302);
	exit();
}
