<?php
namespace phpbu\App\Event\Cleanup;

use phpbu\App\Configuration\Backup\Cleanup;
use phpbu\App\Event\Action;

/**
 * Cleanup event base class.
 *
 * @package    phpbu
 * @subpackage App
 * @author     Sebastian Feldmann <sebastian@phpbu.de>
 * @copyright  Sebastian Feldmann <sebastian@phpbu.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       http://phpbu.de/
 * @since      Class available since Release 2.0.0
 */
abstract class Abstraction extends Action
{
    /**
     * Constructor.
     *
     * @param \phpbu\App\Configuration\Backup\Cleanup $cleanup
     */
    public function __construct(Cleanup $cleanup)
    {
        $this->configuration = $cleanup;
    }
}
