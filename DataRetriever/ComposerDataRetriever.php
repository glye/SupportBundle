<?php
/**
 * This file is part of the eZ SupportBundle package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace EzSystems\SupportBundle\DataRetriever;

//TODO DataRetriever interface
class ComposerDataRetriever {

    public function test(){
        //TODO add path in config
        $lockFile = __DIR__ . '/../../../../composer.lock';

        return file_get_contents($lockFile);
    }
}