<?php

namespace ApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TagController extends Controller
{
    /**
     *
     */
    public function createAction(Request $request)
    {
        $response = [
            'status'=>'success',
            'data'=>[
                'TagController' => 'createAction'
            ]
        ];
        echo json_encode($response);exit;
    }

    public function deleteAction(Request $request)
    {
        $response = [
            'status'=>'success',
            'data'=>[
                'TagController' => 'deleteAction'
            ]
        ];
        echo json_encode($response);exit;
    }
}