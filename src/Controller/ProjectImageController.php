<?php

namespace App\Controller;

use App\Entity\Project;
use App\Services\FileUploadServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ProjectImageController extends AbstractController
{
    public function __invoke(Request $request, Project $project, FileUploadServices $fileUploadServices)
    {
        return $fileUploadServices->handleFileUpload($request, $project);
    }
}
