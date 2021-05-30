<?php
namespace Abhay\EnhanceStore\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    const CONFIG_MODULE_ENABLE_XPATH = 'abhay/general/enable';
    // for simple prooduct 
    const CONFIG_MODULE_SP_ENABLE = 'abhay/general/sp/sp_enable';
    const CONFIG_MODULE_SP_SALABEL_QTY = 'abhay/general/sp/sp_salable_qty';
    // for group Product
    const CONFIG_MODULE_GP_ENABLE = 'abhay/general/gp/gp_enable';
    const CONFIG_MODULE_GP_CHILD_SKU = 'abhay/general/gp/gp_child_sku';
    const CONFIG_MODULE_GP_SALABEL_QTY = 'abhay/general/gp/gp_salable_qty';
    // for configurable Product
    const CONFIG_MODULE_CP_ENABLE = 'abhay/general/cp/cp_enable';
    const CONFIG_MODULE_CP_MIN_MAX_PRICE = 'abhay/general/cp/cp_min_max_price';
    
    public function isModuleEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_ENABLE_XPATH);
    }
    // for simple product
    public function isSpEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_SP_ENABLE);
    }
    public function isSpSalableEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_SP_SALABEL_QTY);
    }

    // for group product
    public function isGpEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_GP_ENABLE);
    }
    public function isGpChildSkuEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_GP_CHILD_SKU);
    }
    public function isGpSalableEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_GP_SALABEL_QTY);
    }
    // for configurable Product
    public function isCpEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_CP_ENABLE);
    }
    public function isCpMinMaxPrice()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_CP_MIN_MAX_PRICE);
    }
    
}
