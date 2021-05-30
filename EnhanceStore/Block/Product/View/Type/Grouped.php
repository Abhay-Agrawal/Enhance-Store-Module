<?php
namespace Abhay\EnhanceStore\Block\Product\View\Type;

use Magento\GroupedProduct\Block\Product\View\Type\Grouped as MagentoGrouped;
use Magento\Catalog\Block\Product\Context;
use Magento\Framework\Stdlib\ArrayUtils;
use Magento\InventorySalesAdminUi\Model\GetSalableQuantityDataBySku;

class Grouped extends MagentoGrouped
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