<?php
/**
 * Apptha
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.apptha.com/LICENSE.txt
 *
 * ==============================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * ==============================================================
 * This package designed for Magento COMMUNITY edition
 * Apptha does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * Apptha does not provide extension support in case of
 * incorrect edition usage.
 * ==============================================================
 *
 * @category    Apptha
 * @package     Apptha_Airhotels
 * @version     1.0.0
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2017 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 */
 /**
 * Clas contains inbox Message functions
**/
namespace Apptha\Airhotels\Controller\Adminhtml\Message; 

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Showmessage extends \Magento\Backend\App\Action
{
    protected $_resultPageFactory;
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param Magento\Framework\App\ObjectManager::getInstance ()
     * @param PageFactory $resultPageFactory
     * @param array $context
     */
     public function __construct(Context $context, PageFactory $resultPageFactory) {
          $this->_resultPageFactory = $resultPageFactory;
          $this->objectManager = \Magento\Framework\App\ObjectManager::getInstance ();
          parent::__construct ( $context );
     }
    /**
     * Create show message.
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute(){

               /**
                * Load Inbox Html content
                */
              echo $this->_view->getLayout()->createBlock ("Apptha\Airhotels\Block\Adminhtml\Message\Showmessage" )->setTemplate ( "product/showmessage.phtml" )->toHtml();         
    }
}
