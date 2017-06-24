<?php
use \LeanCloud\User;

function acl () {
	if (User::getCurrentUser() != null && User::getCurrentUser()->get('username') == '321charles123' ) {
		return true;
	}
	return false;
}