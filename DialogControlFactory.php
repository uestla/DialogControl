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

use Nette;
use Components\Controls;


class DialogControlFactory extends Nette\Object implements IDialogControlFactory
{

	/** @var Nette\DI\IContainer */
	protected $container;


	/** @param  Nette\DI\IContainer */
	function __construct(Nette\DI\IContainer $container)
	{
		$this->container = $container;
	}


	/** @return Controls\DialogControl */
	function createControl()
	{
		return $this->container->createDialogControl();
	}

}
