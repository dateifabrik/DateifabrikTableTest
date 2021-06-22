<?php

namespace DateifabrikTableTest;


use DateifabrikTableTest\Models\Simple;
use Doctrine\ORM\Tools\SchemaTool;
use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;


class DateifabrikTableTest extends Plugin
{

    public function install(InstallContext $context){

        $modelManager = $this->container->get('models');
        $tool = new SchemaTool($modelManager);
        $classMetaData = [
            $modelManager->getClassMetadata(Simple::class)
        ];

        $tool->createSchema($classMetaData);

    }

    public function uninstall(UninstallContext $context)
    {

        $modelManager = $this->container->get('models');
        $tool = new SchemaTool($modelManager);
        $classMetaData = [
            $modelManager->getClassMetadata(Simple::class)
        ];

        $tool->dropSchema($classMetaData);

    }

}