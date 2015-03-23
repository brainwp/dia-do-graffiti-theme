<?php
/* Class Active Plugins */
class Brasa_Active_Plugins{
	public function __construct($plugins = array(), $message = null, $text_domain = 'odin'){
		$this->plugins = $plugins;
		$this->text_domain = $text_domain;
		$this->message = (!empty($message)) ? $message : __('É necessário instalar, ativar e configurar o(s) plugin(s)&#160;',$this->text_domain);
		/* hooks */
		add_action( 'admin_notices', array($this,'check_plugins') );
	}
	private function show_message_admin( $message ) {
		echo '<div id="message" class="error">';
		echo "<p>$message</p></div>";
	}
	private function not_install(){
		$not_install = array();
		foreach ($this->plugins as $key => $value) {
			if(!is_plugin_active($key)){
				$not_install[$key] = $value;
			}
		}
		return $not_install;
	}
	public function check_plugins() {
		$not_install = $this->not_install();
		$i = 0;
		$max_size = count($not_install);
		if(empty($not_install))
			return;
		$message = $this->message;
		foreach ($not_install as $key => $value) {
			$i++;
			$message .= sprintf('<a href="%s">%s</a>',$value['url'],$value['name']);
			if($i != $max_size){
				$message .= ', ';
			}
		}
		$this->show_message_admin($message);
	}
}
