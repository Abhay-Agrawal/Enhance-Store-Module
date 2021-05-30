<?php
namespace Abhay\EnhanceStore\Block\Product\View\Type;

use Magento\Catalog\Block\Product\View\Type\Simple as SimpleProduct;
use Magento\Catalog\Block\Product\Context;
use Magento\Framework\Stdlib\ArrayUtils;
use Magento\InventorySalesAdminUi\Model\GetSalableQuantityDataBySku;

class Simple extends SimpleProduct
{
    protected $getSalableQuantityDataBySku;

    public function __construct(
        GetSalableQuantityDataBySku $getSalableQuantityDataBySku,
        Context $context,
        ArrayUtils $arrayUtils,
        array $data = []
    ) {
        $this->getSalableQuantityDataBySku = $getSalableQuantityDataBySku;
        parent::__construct($context, $arrayUtils, $data);
    }

    public function getSaleble($sku)
    {
        $salable = $this->getSalableQuantityDataBySku->execute($sku);
        return $salable;
    }
}