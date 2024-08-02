          ___     _,.--.,_         Elephant.io is a socket.io client written in PHP.
      .-~   ~--"~-.   ._ "-.     Its goal is to ease the communications between your
     /      ./_    Y    "-. \    PHP application and a socket.io server.
    Y       :~     !         Y
    lq p    |     /         .|   Requires PHP 7.2 and openssl, licensed under
    \. .-, l    /          |j   the MIT License
    \___) |/   \_/";       !
    \._____.-~\  .  ~\.  ./
            Y_ Y_. "vr"~  T      Built-in engines:
            (  (    |L    j      - Socket.io 4.x, 3.x, 2.x, 1.x
            [nn[nn..][nn..]      - Socket.io 0.x (courtesy of @kbu1564)
          ~~~~~~~~~~~~~~~~~~~

Install ElephantIO/elephant.io lib via composer:
    
    composer require elephantio/elephant.io

Yii2 Elephant IO implementation.
This is a really dirt simple extension which just wraps the Elephant IO module into a Yii2 Component. We updated source source code for socket.io version 4 or larger.
You can configure it in your application configuration like so:

    'elephantio' => [
	      'class' => 'app\classes\ElephantIo',
	      'host' => 'http://127.0.0.1:3021'
    ]
    
Adding it to your components array.

    \Yii::$app->elephantio->emit('setuser',  ['foo' => 'bar']);
    \Yii::$app->elephantio->close();

I hope it will be helpful for you!
Thanks
