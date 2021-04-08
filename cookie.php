<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Authentication.cookie
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
use Joomla\CMS\Input\Cookie;
use Joomla\CMS\Authentication\Authentication;
use Joomla\CMS\Filter\InputFilter;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Log\Log;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Plugin\HTMLHelper;
use Joomla\CMS\User\User;
use Joomla\CMS\User\UserHelper;

/**
 * Joomla Authentication plugin
 *
 * @since  3.2
 * @note   Code based on http://jaspan.com/improved_persistent_login_cookie_best_practice
 *         and http://fishbowl.pastiche.org/2004/01/19/persistent_login_cookie_best_practice/
 */
class PlgSystemCookie extends CMSPlugin
{
	/**
	 * Application object
	 *
	 * @var    \Joomla\CMS\Application\CMSApplication
	 * @since  3.2
	 */
	protected $app;

	/**
	 * Database object
	 *
	 * @var    \Joomla\Database\DatabaseDriver
	 * @since  3.2
	 */
	// protected $db;

	/**
	 * Reports the privacy related capabilities for this plugin to site administrators.
	 *
	 * @return  array
	 *
	 * @since   3.9.0
	 */
	
			public function onAfterRender(){
$this->app->input->cookie->set('rishabh','chhotu');
$p=$this->params->get('cookie_bar_text');
echo $p;
            }
		}