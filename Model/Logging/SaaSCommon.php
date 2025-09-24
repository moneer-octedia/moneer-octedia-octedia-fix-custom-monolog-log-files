<?php
/**
 * Copyright © Octedia. All rights reserved.
 */
declare(strict_types=1);

namespace Octedia\FixMonologCustomLogFiles\Model\Logging;

use Magento\SaaSCommon\Model\Logging\SaaSExportLoggerInterface;
use Magento\DataExporter\Model\Indexer\FeedIndexMetadata;

/**
 * Dummy logger for SaaSCommon that does nothing
 */
class SaaSCommon implements SaaSExportLoggerInterface
{
    /**
     * @inheritdoc
     */
    public function initSyncLog(FeedIndexMetadata $feedIndexMetadata, string $operation, bool $logMessage = true): void
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function addContext(array $context): void
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function logProgress($processedIdsNumber = null, $syncedItems = null): void
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function complete(): void
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function emergency($message, array $context = []): void
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function alert($message, array $context = []): void
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function critical($message, array $context = []): void
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function error($message, array $context = []): void
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function warning($message, array $context = []): void
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function notice($message, array $context = []): void
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function info($message, array $context = []): void
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function debug($message, array $context = []): void
    {
        // Do nothing
    }

    /**
     * @inheritdoc
     */
    public function log($level, $message, array $context = []): void
    {
        // Do nothing
    }
}
