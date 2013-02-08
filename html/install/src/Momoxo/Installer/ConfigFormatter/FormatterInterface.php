<?php

namespace Momoxo\Installer\ConfigFormatter;

use Momoxo\Installer\ValueObject\Site;

interface FormatterInterface
{
    /**
     * Return formatted config text
     * @param  Site   $site
     * @return string
     */
    public function format(Site $site);

    /**
     * Return extension
     * @return string
     */
    public function getExtension();
}
