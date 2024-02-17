<?php

namespace App\Controller;

use App\Entity\Skill;
use App\Services\FileUploadServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class SkillImageController extends AbstractController
{
    public function __invoke(Request $request, Skill $skill, FileUploadServices $fileUploadServices)
    {
        return  $fileUploadServices->handleFileUpload($request, $skill); 
    }
}
