<?php

declare(strict_types=1);

namespace App\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;

/**
 * @Annotation
 */
class ViewContext implements ConfigurationInterface
{
    private $context;

    public function __construct($context)
    {
        $this->context = $context['value'] ?? [];
    }

    public function getContext(): array
    {
        return $this->context;
    }

    public function getAliasName(): string
    {
        return 'view_context';
    }

    public function allowArray(): bool
    {
        return false;
    }
}
