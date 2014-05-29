<?php

/**
 * This file is part of the DialogControl package
 *
 * Copyright (c) 2013 Petr Kessler (http://kesspess.1991.cz)
 *
 * @license  MIT
 * @link     https://github.com/uestla/DialogControl
 */

namespace Components\Factories;

use Components\Controls;


interface IDialogControlFactory
{

	/** @return Controls\DialogControl */
	function createControl();

}
