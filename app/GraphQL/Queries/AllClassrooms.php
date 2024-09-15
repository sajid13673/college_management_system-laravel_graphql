<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\Classroom;

final readonly class AllClassrooms
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $classroom = new Classroom();
        return $classroom->all();
    }
}
