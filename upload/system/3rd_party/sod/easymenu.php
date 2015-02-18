<?php

class easyMenu
{
	private $name;
	private $link;
	private $canView;
	private $active;
	private $children;

	public function __construct($name, $link, $canView = true, $active = false, $children = array()) {
		$this->name			= $name;
		$this->link			= $link;
		$this->canView		= $canView;
		$this->active		= $active;
		$this->children		= $children;
	}

	public function canView() {
		return $this->canView;
	}
	
	public function title() {
		return $this->name;
		// return \IPS\Member::loggedIn()->language()->addToStack($this->name);
	}
	
	public function link() {
		return $this->link;
		// return \IPS\Http\Url::external( $this->link );
	}
	
	public function active() {
		return $this->active;
	}

	public function addChild($c) {
		$this->children[] = $c;
	}
	
	public function children() {
		return $this->children;
	}
}