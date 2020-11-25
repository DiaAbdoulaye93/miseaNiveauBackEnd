<?php

namespace App\Controller;

use \Swift_Mailer;
use App\Entity\Profile;
use App\Entity\Competences;
use App\Service\UserService;
use App\Entity\GrpCompetences;
use App\Controller\ApiController;
use App\Repository\UserRepository;
use App\Repository\ProfileRepository;
use App\Repository\ApprenantRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CompetencesRepository;
use App\Repository\GrpCompetencesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\NiveauxEvaluationRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ApiController extends AbstractController
{
    

    /**
     * @Route(
     *     path="/api/admin/users",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::addUser",
     *          "__api_resource_class"=User::class,
     *          "__api_collection_operation_name"="add_user"
     *     }
     * ),
     * 
     */
    public function addUser
    (
        Request $request, UserPasswordEncoderInterface $encoder,
        SerializerInterface $serializer, ValidatorInterface $validator,
        ProfileRepository $profil, EntityManagerInterface $manager,
        UserRepository $userRepository,UserService $_userService
      
    )
    {

        
     $user =$_userService->addUser($request);
     $manager->persist($user);
     $manager->flush();
       
        return $this->json("l'utilisateur a été enregistré avec success", Response::HTTP_CREATED);

    }
 /**
     * @Route(
     *     path="/api/apprenants",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::ApprenantAddedByFormateur",
     *          "__api_resource_class"=User::class,
     *          "__api_collection_operation_name"="add_apprenants"
     *     }
     * )
     */
    public function ApprenantAddedByFormateur
    (
        Request $request, UserPasswordEncoderInterface $encoder,
        SerializerInterface $serializer, ValidatorInterface $validator,
        ProfileRepository $profil, EntityManagerInterface $manager,
        UserRepository $userRepository,UserService $_userService
       
    )
    {

         $user =$_userService->addUser($request);
        dd($user);
        $Apprenant->setRoles(['ROLE_Apprenant']);
        $Apprenant->setArchiver(0);
        $Apprenant->setPassword($encoder->encodePassword($Apprenant, "password"));
        $manager->persist($Apprenant);
        $manager->flush();
        return $this->json("l'utilisateur a été enregistré avec success", Response::HTTP_CREATED);

    }
   /**
     * @Route(
     *     path="/api/admin/grpecompetences",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::GroupeCompetence",
     *          "__api_resource_class"=GrpCompetences::class,
     *          "__api_collection_operation_name"="groupecompetences"
     *     }
     * ),
     * 
     */
    public function GroupeCompetence(Request $request,SerializerInterface $serializer, ValidatorInterface $validator,EntityManagerInterface $manager, CompetencesRepository $competence)
    {
        $groupeCompetence = new  GrpCompetences();
            $data=$request->request->all();
            foreach ($data['competences'] as $OneCompetence){ 
                    $competenceObject = $competence->findBy(['libelle'=>$OneCompetence]);
                    if ($competenceObject) {
                        $groupeCompetence->addCompetence($competenceObject[0]);
                        $groupeCompetence->setLibelle($data['libelle']);
                        $groupeCompetence->setDescription($data['description']);
                    }
                    else{

                        $Newcompetence=new Competences();
                        $Newcompetence->setLibelle($OneCompetence);
                        $manager->persist($Newcompetence);
                        $manager->flush();   
                        $competenceObject = $competence->findBy(['libelle'=>$OneCompetence]);
                        $groupeCompetence->addCompetence($competenceObject[0]);
                        $groupeCompetence->setLibelle($data['libelle']);
                        $groupeCompetence->setDescription($data['description']);
                    }     
            }
             $manager->persist($groupeCompetence);
             $manager->flush();
            return new JsonResponse("Vous venez de creer un nouveau group de Competences", Response::HTTP_CREATED, [], true);
    }
  /*
     * @Route(
     *     path="/api/admin/competences",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::competence",
     *          "__api_resource_class"=Competences::class,
     *          "__api_collection_operation_name"="add_competence"
     *     }
     * )
  

    public function competence(
        Request $request, ValidatorInterface $validator,
        SerializerInterface $serializer, NiveauxEvaluationRepository $evaluationRepository,
        GrpCompetencesRepository $grpCompetencesRepository, EntityManagerInterface $manager
    )
    {
        $competence = new  Competences();
        $data = $request->request->all();
       
        $competence->setLibelle($data['libelle']);   
        foreach ($data['niveauxEvaluation'] as $value) {
            $niveauxEvaluation = $evaluationRepository->findBy(['id' => $value]);     
            $competence->setNiveaucompetence($niveauxEvaluation[0]);     
        }
        $groupeCompetenceId = $data['groupeCompetence'];
        foreach($groupeCompetenceId as $uniqueGroupe)
        {
            $uniqueGroupe=$grpCompetencesRepository->findBy(['libelle' => $groupeCompetenceId]);
            $competence->addGrpcompetence($uniqueGroupe[0]);
          
        }
       $competence->setLibelle($data['libelle']);     
        $errors = $validator->validate($competence);
        if (count($errors) > 0) {
            $errors = $serializer->serialize($errors, "json");
            return new JsonResponse($errors, Response::HTTP_BAD_REQUEST, [], true);
        }
        $manager->persist($competence);
        $manager->flush();
        return new JsonResponse("la compétence  a été enregistré avec succéss", Response::HTTP_CREATED, [], true);

    }
   */

   /*
     * @Route(
     *     path="/api/admin/apprenants",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::AddApprenant",
     *          "__api_resource_class"=Apprenant::class,
     *          "__api_collection_operation_name"="Add_apprenant_by_admin"
     *     }
     * )
  
    public function AddApprenant(ApprenantRepository $apprenantRepo, \Swift_Mailer $mailer, SerializerInterface $serializer)
    {
        $apprenants = $apprenantRepo->findBy(['promo' => 3]);
        //dd($apprenants);
        $apprenantsjson = $serializer->serialize($apprenants, 'json');
        
        foreach ($apprenants as $value) {
            $email = $value->getEmail();
          
           // dd($email);
         //   $titre = $value->getPromo()->getTitre();
            $password = "password";
            $login = $email;
          
           dd($this->sendEmail($mailer, $password, $login, $email));
        }
        return new JsonResponse("This mail is sent", Response::HTTP_OK, [], true);
    }

   
    public function sendEmail(\Swift_Mailer $mailer, $password, $login, $email)
    {
        $msg = (new \Swift_Message('Création compte Sonatel Academy'))
            ->setFrom('diaabdoulayedjibril@gmail.com')
            ->setTo($email)
            ->setBody(
                "Teest mail Sent \n
              Login :" . $login . "
              mot de passe :" . $password);
        $mailer->send($msg);
    }
       */
}
