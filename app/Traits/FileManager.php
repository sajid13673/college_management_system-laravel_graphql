<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait FileManager
{
    public function saveFile($file, $path)
    {
        if ($file) {
            $currentTime = now()->toDateTimeString();
            $currentTime = str_replace(':', '-', $currentTime);
            $fileName   = $currentTime . ' ' . $file->getClientOriginalName();
            $path = str_replace(" ", "_", $path);
            $fileName = str_replace(" ", "_", $fileName);
            $path = Storage::putFileAs($path, $file, $fileName);
            $size = $this->getFileSize($file);
            return [
                'name' => $fileName,
                'size' => $size,
                'path' => $path,
            ];
        }
    }
    public function deleteFile($path, $fileName)
    {
        Storage::delete($path . $fileName);
    }
    private function getFileSize($file)
    {
        $size = $file->getSize();
        $convertedSize = strlen((string)$size) < 7 ? (intval($size / 1000)) . " Kb" : (number_format($size / 1000000, 2)) . " Mb";
        return $convertedSize;
    }
}
