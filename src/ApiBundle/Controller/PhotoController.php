<?php

namespace ApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PhotoController extends Controller
{
    /**
     *
     */
    public function getAction(Request $request)
    {
        $response = [
            'status'=>'success',
            'data'=>[
                'PhotoController' => 'getAction'
            ]
        ];
        echo json_encode($response);exit;
    }

    /**
     *
     */
    public function getAllAction(Request $request)
    {
        $response = [
            'status'=>'success',
            'data'=>[
                'PhotoController' => 'getAllAction'
            ]
        ];
        echo json_encode($response);exit;
    }

    public function deleteAction(Request $request)
    {
        $response = [
            'status'=>'success',
            'data'=>[
                'PhotoController' => 'deleteAction'
            ]
        ];
        echo json_encode($response);exit;
    }
}