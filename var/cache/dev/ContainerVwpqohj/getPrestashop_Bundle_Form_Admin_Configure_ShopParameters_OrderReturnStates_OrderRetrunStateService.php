<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.bundle.form.admin.configure.shop_parameters.order_return_states.order_retrun_state' shared service.

return $this->services['prestashop.bundle.form.admin.configure.shop_parameters.order_return_states.order_retrun_state'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderReturnStates\OrderReturnStateType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getLanguages());
