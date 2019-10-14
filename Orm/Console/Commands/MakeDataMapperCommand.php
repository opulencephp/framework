<?php

/**
 * Opulence
 *
 * @link      https://www.opulencephp.com
 * @copyright Copyright (C) 2019 David Young
 * @license   https://github.com/opulencephp/Opulence/blob/master/LICENSE.md
 */

declare(strict_types=1);

namespace Opulence\Framework\Orm\Console\Commands;

use Aphiria\Console\Commands\Command;

/**
 * Defines the command that makes data mappers
 */
final class MakeDataMapperCommand extends Command
{
    public function __construct()
    {
        parent::__construct('make:datamapper', [], [], 'Creates a data mapper class');
    }
}
