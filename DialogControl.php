<?php

namespace Components;

use Nette\Application\UI;


class DialogControl extends BaseControl
{
	/** @var string */
	protected $message = NULL;

	/** @var UI\Form */
	protected $form = NULL;



	function setup($message, UI\Form $form)
	{
		$this->message = $message;
		$this->form = $form;
		$this->invalidateControl();

		return $this;
	}



	function reset()
	{
		$this->message = $this->form = NULL;
		$this->invalidateControl();

		return $this;
	}



	function render()
	{
		if ($this->message !== NULL && $this->form !== NULL) {
			$this->template->message = $this->message;
			$this->template->form = $this->form;
		}

		$this->template->render();
	}
}
