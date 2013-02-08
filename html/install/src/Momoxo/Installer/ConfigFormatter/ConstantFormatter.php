<?php

namespace Momoxo\Installer\ConfigFormatter;

use Momoxo\Installer\ValueObject\Site;

class ConstantFormatter implements FormatterInterface
{
    /**
     * Return formatted config text
     * @param  Site   $site
     * @return string
     */
    public function format(Site $site)
    {
        $values = array(
            'XOOPS_ROOT_PATH'   => $site->getRootPath(),
            'XOOPS_TRUST_PATH'  => $site->getTrustPath(),
            'XOOPS_URL'         => $site->getUrl(),
            'XOOPS_SALT'        => $site->getSalt(),
            'XOOPS_DB_TYPE'     => $site->getDB()->getType(),
            'XOOPS_DB_PREFIX'   => $site->getDB()->getPrefix(),
            'XOOPS_DB_HOST'     => $site->getDB()->getHost(),
            'XOOPS_DB_USER'     => $site->getDB()->getUser(),
            'XOOPS_DB_PASS'     => $site->getDB()->getPassword(),
            'XOOPS_DB_NAME'     => $site->getDB()->getName(),
            'XOOPS_DB_PCONNECT' => $site->getDB()->isPermanentConnectionEnabled() ? 1 : 0,
        );

        $lines = array('<?php');

        foreach ($values as $key => $value) {
            $value = var_export($value, true);
            $lines[] = sprintf("define('%s', %s);", $key, $value);
        }

        return implode("\n", $lines);
    }

    /**
     * Return extension
     * @return string
     */
    public function getExtension()
    {
        return 'php';
    }
}
