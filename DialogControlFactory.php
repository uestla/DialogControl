<?php

namespace Model\Factories;

use Components;


class DialogControlFactory extends BaseControlFactory
{
	/**
	 * @param  string
	 * @return Components\DialogControl
	 */
	function create($appID)
	{
		$c = new Components\DialogControl;
		$this->onCreate( $c );
		return $c;
	}
}
