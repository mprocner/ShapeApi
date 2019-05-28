<?php
declare(strict_types=1);
/**
 * File: ShapeCreated.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */

namespace App\Context\ShapeContext\Events;

use App\Context\ShapeContext\Contracts\ShapeInterface;
use Illuminate\Queue\SerializesModels;

/**
 * Class ShapeCreated
 * @package App\Context\ShapeContext\Events
 */
class ShapeCreated
{
    use SerializesModels;

    /**
     * @var ShapeInterface
     */
    private $figure;

    /**
     * ShapeCreated constructor.
     * @param ShapeInterface $figure
     */
    public function __construct(ShapeInterface $figure)
    {
        $this->figure = $figure;
    }

    /**
     * @return ShapeInterface
     */
    public function getFigure(): ShapeInterface
    {
        return $this->figure;
    }

}
