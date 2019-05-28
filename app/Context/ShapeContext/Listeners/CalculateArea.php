<?php
declare(strict_types=1);
/**
 * File: CalculateArea.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\Listeners;

use App\Context\ShapeContext\Events\ShapeCreated;
use App\Context\ShapeContext\Jobs\CalculateAreaJob;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class CalculateArea
 * @package App\Context\ShapeContext\Listeners
 */
class CalculateArea implements ShouldQueue
{
    /**
     * CalculateArea constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param ShapeCreated $event
     * @return void
     */
    public function handle(ShapeCreated $event): void
    {
        var_dump('asdf');
        //calculate area
    }
}
