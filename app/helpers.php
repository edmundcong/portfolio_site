<?php

// not in a class so no need to declare function access e.g. public, protected, private, etc

function flash($message, $level = 'info')
{
	session()->flash('flash_message', $message);
	session()->flash('flash_message_level', $level);
}