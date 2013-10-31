
<?php
// app/Controller/AppController.php
class AppController extends Controller {
    //...

    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'posts', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
        )
    );

    
    //...
    
    // app/Controller/UsersController.php

public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('add'); // Letting users register themselves
}

public function login() {
    if ($this->Auth->login()) {
        $this->redirect($this->Auth->redirect());
    } else {
        $this->Session->setFlash(__('Invalid username or password, try again'));
    }
}

public function logout() {
    $this->redirect($this->Auth->logout());
}
}

?>