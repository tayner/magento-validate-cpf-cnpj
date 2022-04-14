<?php
/**
 * @author      Tayner Jhony <taynerjhony46@gmail.com>
 */

namespace Tayner\ValidateCpfCnpj\Plugin\Checkout;

use Magento\Checkout\Block\Checkout\LayoutProcessor;

/**
 * Class LayoutProcessorPlugin
 *
 * @package Tayner\ValidateCpfCnpj\Plugin\Checkout
 */
class LayoutProcessorPlugin
{
    /**
     * @param LayoutProcessor $subject
     * @param array $jsLayout
     * @return array
     */
    public function afterProcess(
        LayoutProcessor $subject,
        array  $jsLayout
    ) {
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['shipping-address-fieldset']['children']['vat_id']['validation']['validate-cpf'] = true;

        return $jsLayout;
    }
}
