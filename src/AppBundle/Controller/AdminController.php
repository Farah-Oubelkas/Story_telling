<?php

namespace AppBundle\Controller;
use FOS\UserBundle\FOSUserBundle;
use FOS\UserBundle\Doctrine\UserManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/admin/show", name="showUsers")
     */
    public function showUsersAction()
    {
        $users = $this->get('fos_user.user_manager')->findUsers();
        return $this->render('admin/show_users.html.twig', array(
            'users' => $users,
        ));
    }
    /**
     * @Route("/admin/delete/{username}",name="delete_user")
     */
    public function deleteAction($username) {
        $userManager = $this->get('fos_user.user_manager');
        $currentuser= $this->getUser();
        if($currentuser->getUsername()==$username){
            $this->addFlash("danger", "You Can't Delete This User");
        }else{
            $user = $userManager->findUserByUsername($username);
            $userManager->deleteUser($user);
            $this->addFlash("success", "User Deleted");
        }
        return $this->redirectToRoute('showUsers');

      }
      /**
     * @Route("/admin/edit/{username}", name="edit_user")
     */
    public function editUserAction($username,Request $request)
    {

        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($username);
            if ($request->getMethod() == Request::METHOD_POST){
            $user->setFirstName($request->request->get('firstName'));
            $user->setLastName($request->request->get('lastName'));
            $user->setFullName($request->request->get('firstName').' ' .$request->request->get('lastName'));
            $user->setFacebookId($request->request->get('facebookId'));
            $user->setGoogleId($request->request->get('googleId'));
            $user->setPhoneNumber($request->request->get('phoneNumber'));

            $userManager->updateUser($user);
            $this->addFlash("success", "User Saved");
        }
        return $this->render('admin/edit_user.html.twig', array(
            'user' => $user,
        ));

    }

}
