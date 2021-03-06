<?php namespace Arcanedev\LaravelNotes\Bases;

use Arcanedev\LaravelNotes\Traits\ConfigHelper;
use Arcanedev\Support\Bases\Migration as BaseMigration;

/**
 * Class     Migration
 *
 * @package  Arcanedev\LaravelMessenger\Bases
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
abstract class Migration extends BaseMigration
{
    /* -----------------------------------------------------------------
     |  Traits
     | -----------------------------------------------------------------
     */

    use ConfigHelper;

    /* -----------------------------------------------------------------
     |  Constructor
     | -----------------------------------------------------------------
     */

    /**
     * Migration constructor.
     */
    public function __construct()
    {
        $this->setConnection($this->getFromConfig('database.connection'));
        $this->setPrefix($this->getFromConfig('database.prefix'));
    }
}
