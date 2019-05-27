<?php
declare(strict_types=1);
/**
 * File: Shape.php
 *
 * @author Mateusz Procner<mateusz.procner@gmail.com>
 * @copyright Copyright (C) 2019 Mateusz Procner
 */
namespace App\Context\ShapeContext\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * Class Shape
 * @package App\Context\ShapeContext\Entities
 */
class Shape extends Model
{
    /**
     * @return MorphTo
     */
    public function figure(): MorphTo
    {
        return $this->morphTo();
    }
}
