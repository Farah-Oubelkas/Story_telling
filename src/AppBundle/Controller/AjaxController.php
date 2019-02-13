<?php

namespace AppBundle\Controller;

use FOS\UserBundle\FOSUserBundle;
use AppBundle\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AjaxController extends Controller
{
    /**
     * @Route("/security/validate_registration", name="validate_registration")
     */
    public function validateRegistrationAction(Request $request){
        if($request->request->get('username')){
            $username = $request->get('username');
            $answer = $this->get('fos_user.user_manager')->findUserByUsername($username);
            if(!$answer){
                return new JsonResponse(true);
            }
            return new JsonResponse(false);
        }else if($request->request->get('email')){
            $email = $request->get('email');
            $answer = $this->get('fos_user.user_manager')->findUserByEmail($email);
            if(!$answer){
                return new JsonResponse(true);
            }
            return new JsonResponse(false);
        }
        
    }

}
