<?php
/**
 * This file is part of the eZ SupportBundle package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace EzSystems\SupportBundle\Command;

use EzSystems\SupportBundle\DataRetriever\ComposerDataRetriever;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ComposerInstalledCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('support:composer')
            ->setDescription('gets the list of installed composer dependencies')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //For now only displaying some composer information
        /** @var ComposerDataRetriever $composerDataRetriever */
        $composerDataRetriever = $this->getContainer()->get('composer_data_retriever');
        $output->writeln( $composerDataRetriever->test() );
    }
}
