<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class FileUploadServices
{
    public function handleFileUpload(Request $request, mixed $target)
    {
        $uploadedFile = $request->files->get('file');
        if (!$uploadedFile) {
            throw new BadRequestHttpException('"file" is required');
        }

        $target->setFile($uploadedFile); // Just I set the file and Vich bundle will do the rest

        return $target;
    }
}