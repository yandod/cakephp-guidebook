・29行目付近
/**
 * Include Smarty. By default expects it at ( VENDORS.'smarty'.DS.'Smarty.class.php' )
 */
//vendor('smarty'.DS.'Smarty.class');
App::import('Vendor', 'Smarty', array('file' => 'smarty'.DS.'Smarty.class.php'));


・169行目付近
//    if (!is_null($this->webservices)) {
    if (isset($this->webservices) && !is_null($this->webservices)){


・223行目付近
//        $this->loaded[$helper]->_register_smarty_functions(&$this->Smarty);
        $this->loaded[$helper]->_register_smarty_functions($this->Smarty);


