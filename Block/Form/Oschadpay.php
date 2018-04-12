<?php

namespace Oschadpay\Oschadpay\Block\Form;

/**
 * Abstract class for Oschadpay payment method form
 */
abstract class Oschadpay extends \Magento\Payment\Block\Form
{
    protected $_instructions;
    protected $_template = 'form/oschadpay_form.phtml';
}
