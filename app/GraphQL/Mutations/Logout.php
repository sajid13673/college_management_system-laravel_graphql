<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;
use Illuminate\Support\Facades\Auth;

final readonly class Logout
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        // TODO implement the resolver
        $guard = Auth::guard();
        $guard->user()->currentAccessToken()->delete();
        return "Successfully logged out";
    }
}
