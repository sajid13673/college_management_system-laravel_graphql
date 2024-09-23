<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\ClassMaterial;
use App\Models\File;
use App\Traits\FileManager;

final readonly class CreateClassMaterial
{
    /** @param  array{}  $args */
    use FileManager;
    public function __invoke(null $_, array $args)
    {
        $classMaterial = new ClassMaterial();
        $classMaterial = $classMaterial->create($args);
        $savedFile = $this->saveFile($args['file'], 'classMaterial');
        $classMaterial->file()->create(['name'=> $savedFile['name'], 'size' => $savedFile['size'], 'path' => $savedFile['path']]);
        return $classMaterial;
    }
}
