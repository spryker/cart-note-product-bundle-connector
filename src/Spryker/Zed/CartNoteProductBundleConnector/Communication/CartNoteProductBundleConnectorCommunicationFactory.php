<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CartNoteProductBundleConnector\Communication;

use Spryker\Zed\CartNoteProductBundleConnector\CartNoteProductBundleConnectorDependencyProvider;
use Spryker\Zed\CartNoteProductBundleConnector\Dependency\Facade\CartNoteProductBundleConnectorToProductBundleFacadeInterface;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

class CartNoteProductBundleConnectorCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return \Spryker\Zed\CartNoteProductBundleConnector\Dependency\Facade\CartNoteProductBundleConnectorToProductBundleFacadeInterface
     */
    public function getProductBundleFacade(): CartNoteProductBundleConnectorToProductBundleFacadeInterface
    {
        return $this->getProvidedDependency(CartNoteProductBundleConnectorDependencyProvider::FACADE_PRODUCT_BUNDLE);
    }
}
