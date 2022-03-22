<?php

namespace app\core;

class Router
{
	protected $routes = [];
	public $request;

	public function __construct(\app\core\Request $request)
	{
		$this->request = $request;
	}

	public function get($path, $callback)
	{
		$this->routes['get'][$path] = $calback;
	}

	public function resolve()
	{
		$path = $this->request->getPath();
		$method = $this->request->getMethod();
		$callback = $this->routes[$method][$path];

		var_dump($this->routes);
	}
}