<?php

namespace FondOfSpryker\Zed\InvoiceExtension\Dependecy\Plugin;

use Generated\Shared\Transfer\InvoiceTransfer;

interface InvoicePostSavePluginInterface
{
    /**
     * Specification:
     * - Plugin is triggered after invoice object is saved.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\InvoiceTransfer $creditMemoTransfer
     *
     * @return \Generated\Shared\Transfer\InvoiceTransfer
     */
    public function postSave(InvoiceTransfer $creditMemoTransfer): InvoiceTransfer;
}
