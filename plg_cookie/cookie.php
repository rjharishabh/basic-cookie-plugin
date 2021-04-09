<?php
/**
 * @package     Cookie.Plugin
 * @subpackage  System.cookie
 *
 * @copyright   Copyright (C) 2021 Rishabh Ranjan Jha. All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

use Joomla\CMS\Date\Date;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Uri\Uri;

/**
 * Set cookie and display the contents of the cookie.
 */

class PlgSystemCookie extends CMSPlugin
{

	protected $app;

	 public function onBeforeCompileHead()
{
		 	//		get the Dcoument

						$document = Factory::getDocument();
						$opt = array("version" => "auto");
						$attr = array("defer" => "defer");

			//		add Script

						$document->addScript(JUri::root() . "plugins/system/cookie/script.js", $opt, $attr);

			//		add Stylesheet

						$document->addStyleSheet(JUri::root() . "plugins/system/cookie/styles.css", $opt);

}

		public function onAfterRender(){

			/**
			 * check the cookie
			 * if not set then set the cookies
			 * otherwise display the contents of the cookie
			 */

				if (!isset($_COOKIE['rishabh_ranjan_jha'])) {

						$dt = new Date('now');
						$this->app->input->cookie->set('rishabh_ranjan_jha',$dt->format('Y-m-d__H-i-s-u'));

				}

				else {

						$title=$this->params->get('cookie_bar_title');
						$txt=$this->params->get('cookie_bar_text');

				//		assemble the HTML

						$t='<div id="cookie"  class="alert alert-dismissible fade show" role="alert">';
						$t.='<div id="text">';
						$t.='<div class="row">';
						$t.='<h3 class="text-white">'.htmlspecialchars($title).'</h3>';
						$t.='</div>';
						$t.'<div class="row">';
						$t.='<p class="text-white">Cookie Value = '.$_COOKIE['rishabh_ranjan_jha'].'</p>';
						$t.='<p class="text-white">'.htmlspecialchars($txt).'</p>';
						$t.='</div>';
						$t.='<button" id="close" class="btn btn-success">Accept Cookies</button>';
						$t.='</div>';
						$t.='</div></div>';

						$bd = $this->app->getBody();
						$s=$t.$bd;
						$this->app->setBody($s);

						}
					}
				}
