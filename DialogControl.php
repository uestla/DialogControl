<?php

/**
 * This file is part of the DialogControl package
 *
 * Copyright (c) 2013 Petr Kessler (http://kesspess.1991.cz)
 *
 * @license  MIT
 * @link     https://github.com/uestla/DialogControl
 */

namespace Components\Controls;

use Nette\Application\UI;


class DialogControl extends BaseControl
{

	/** @var string */
	protected $message = NULL;

	/** @var UI\Form */
	protected $form = NULL;


	/**
	 * @param  string
	 * @param  UI\Form
	 * @return DialogControl
	 */
	function setup($message, UI\Form $form)
	{
		$this->message = $message;
		$this->form = $form;
		$this->invalidateControl();

		return $this;
	}


	/** @return DialogControl */
	function reset()
	{
		$this->message = $this->form = NULL;
		$this->invalidateControl();

		return $this;
	}


	/** @return void */
	function render()
	{
		if ($this->message !== NULL && $this->form !== NULL) {
			$this->template->message = $this->message;
			$this->template->form = $this->form;
		}

		$this->template->render();
	}

}
