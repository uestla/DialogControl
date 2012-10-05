<?php

namespace Model\Factories;

use Components;


class DialogControlFactory extends BaseControlFactory
{
	/** @return Components\DialogControl */
	function create()
	{
		$c = new Components\DialogControl;
		$this->onCreate( $c );
		return $c;
	}
}
