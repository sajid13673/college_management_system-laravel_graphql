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
            $deletablePath = Storage::putFileAs('public/'.$path, $file, $fileName);
            $link = asset("storage/".$path.'/'.$fileName);
            $size = $this->getFileSize($file);
            return [
                'name' => $fileName,
                'size' => $size,
                'path' => $deletablePath,
                'link' => $link,
            ];
        }
    }
    public function deleteFile($path)
    {
        Storage::delete($path);
    }
    private function getFileSize($file)
    {
        $size = $file->getSize();
        $convertedSize = strlen((string)$size) < 7 ? (intval($size / 1000)) . " Kb" : (number_format($size / 1000000, 2)) . " Mb";
        return $convertedSize;
    }
}
