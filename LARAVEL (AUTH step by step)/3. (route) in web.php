
$this->get('/verify-user/{code}', 
'Auth\RegisterController@activateUser')->name('activate.user');