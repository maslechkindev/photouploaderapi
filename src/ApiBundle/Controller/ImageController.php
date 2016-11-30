<?php

namespace ApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ImageController extends Controller
{
    /**
     *
     */
    public function createAction(Request $request)
    {
        $response = [
            'status'=>'success',
            'data'=>[
                'ImageController' => 'createAction'
            ]
        ];
        echo json_encode($response);exit;
    }
}
