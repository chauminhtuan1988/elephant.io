<?php
namespace app\classes;

use yii\base\Component;
use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version4X;
class ElephantIo extends Component
{
	public $host = 'http://127.0.0.1:3021';
	public $options = [];
	private $_client;


	public function init()
	{
		parent::init();

		$host = $this->host;
		$options = ['client' => Client::CLIENT_4X];

		$this->_client = Client::create(is_callable($host) ? $host() : $host, $this->options);
		$this->_client->connect();
	}

	public function emit($event, $params = [], $namespace = null)
	{
		if($namespace){
			$this->setNamespace($namespace);
		}
		return $this->_client->emit($event, $params);
	}

	public function wait($event,$timeout = 0)
	{
		return $this->_client->wait($event,$timeout);
	}

	public function close()
	{
		return $this->_client->disconnect();
	}

	public function setNamespace($namespace)
	{
		if(method_exists($this->_client,'of')){
			$this->_client->of($namespace);
		}
	}
}