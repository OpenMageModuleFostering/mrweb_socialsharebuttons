<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    MRWEB
 * @package     MRWEB_SocialShareButtons
 * @copyright   Copyright (c) 2015 MR Websolution (http://www.mrwebsolution.in)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 ?>
 <?php
 class MRWEB_SocialShareButtons_IndexController extends Mage_Core_Controller_Front_Action
{
    /*
     * To test Ecards functions...
     */
    public function indexAction()
    {
      
      $this->loadLayout();   
	 /* $this->getLayout()->getBlock("head")->setTitle($this->__("Social Share Buttons"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("titlename", array(
                "label" => $this->__("Social Share Buttons"),
                "title" => $this->__("SocialShareButtons")
		   ));
*/
      $this->renderLayout(); 
	  
    }
    
    public function testAction()
    {
      // $this->loadLayout();
        //$this->renderLayout();

    }
      //  echo 		$payEmailTo=Mage::getStoreConfig(MRWEB_SocialShareButtons_Helper_Data::SSB_STATUS);
    
    
}
