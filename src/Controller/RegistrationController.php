<?php
namespace App\Controller;


use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;


class RegistrationController extends AbstractController
{
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger=$logger;
    }

    public function register(Request $request)
    {
            $this->logger->info($request);

        //$sPAth = $request->getPathInfo();
        $content = json_decode($request->getContent());
        $sFullname = $content->firstname;
        $sLastname = $content->lastname;
        $sBirthday = $content->birthday;
        $sPhone = $content->phone;
        $sEmail = $content->email;
        $sPassword = password_hash($content->password, PASSWORD_DEFAULT);

        $user = new User();
        $user->setFirstname($sFullname);
        $user->setLastname($sLastname);
        $user->setBirthday(new \DateTime($sBirthday));
        $user->setPhone($sPhone);
        $user->setEmail($sEmail);
        $user->setPassword($sPassword);

            //  save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

        return new JsonResponse("Bruker ble lagret");
    }
}