<?php
/**
 * @version     $Revision: $:
 * @author      $Author: $:
 * @date        $Date: $:
 */
namespace ManiaLivePlugins\MatchMakingLobby\GUI;

/**
 * Extend this if your are running a team mode script
 */
abstract class AbstractTeam extends AbstractGUI
{
	public $displayAllies = true;

	function getCustomizedQuitDialogManiaLink()
	{
		$message = array(
			'fr' => array(
				'text' =>  'Voulez-vous vraiment abandonner vos alliés ?',
				'available' => 'Disponible dans :'
			),
			'en' => array(
				'text' =>  'Do you really want to abandon your teammates?',
				'available' => 'Available in:'
			),
		);
		$manialink = new \ManiaLivePlugins\MatchMakingLobby\Views\CustomizedQuitDialog($message);
		return $manialink->display();
	}
}
?>