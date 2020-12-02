<?php

namespace App\Controller;

 
use App\Entity\User;
use App\Entity\Promo;
use App\Entity\Groupe;
use App\Entity\Profile;
use App\Entity\Apprenant;
use App\Entity\Formateur;
use App\Entity\GroupeTag;
use App\Entity\Competences;
use App\Entity\Referentiel;
use App\Service\UserService;
use App\Entity\GrpCompetences;
use App\Controller\ApiController;
use App\Repository\TagRepository;
use App\Repository\UserRepository;
use App\Repository\PromoRepository;
use App\Repository\LangueRepository;
use App\Repository\ProfileRepository;
use App\Repository\FabriqueRepository;
use App\Repository\ApprenantRepository;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Repository\FormateurRepository; 
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CompetencesRepository;
use App\Repository\ReferentielRepository;
use App\Repository\GrpCompetencesRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CritereAdmissionRepository;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\CritereEvaluationRepository;
use App\Repository\NiveauxEvaluationRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ApiController extends AbstractController
{
    private $repo;
    private $profil;
    private $encoder;
    private $formateur;
    private $promo;
    private $manager;
    private $apprenant;
    public function __construct(UserRepository $user,ReferentielRepository $referentiel, ProfileRepository $profil, UserPasswordEncoderInterface $encoder, FormateurRepository $formateur,PromoRepository $promo,EntityManagerInterface $manager,ApprenantRepository $apprenant)
    {
        $this ->userRepo = $user;
        $this ->refRepo=$referentiel;
        $this->profil=$profil;
        $this->encoder=$encoder;
        $this->formateur=$formateur;
        $this->promo=$promo;
        $this->manager=$manager;
        $this->apprenant=$apprenant;
    }
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
     *     path="/api/admin/users/{id}",
     *     methods={"put"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::editUser",
     *          "__api_resource_class"=User::class,
     *          "__api_collection_operation_name"="edit_user"
     *     }
     * ),
     * 
     */
    public function editUser(int $id, Request $request,UserService $userService, EntityManagerInterface $manager)
    {
        $user = $this ->userRepo-> find($id);  
        $editUser=$userService->UpadateEntity($request);
        foreach($editUser as $item => $oneUpdate)
        {
            $setProperty='set'.ucfirst($item);
            $user->$setProperty($oneUpdate);
        }
         $data=$request->getContent();
        $manager->flush();
        return $this->json("L'utilisateur à été modifié avec success", Response::HTTP_OK);
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

    /**
     * @Route(
     *     path="/api/admin/Referentiels",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::addREferentiels",
     *          "__api_resource_class"=REferentiel::class,
     *          "__api_collection_operation_name"="add_referentiels"
     *     }
     * )
     */
    public function addREferentiels
    (
               Request $request,
               SerializerInterface $serializer, 
               ValidatorInterface $validator,
               EntityManagerInterface $manager,
               CritereEvaluationRepository $CritereEvaluation,
               CritereAdmissionRepository $CriterAdmission,
               GrpCompetencesRepository $GrpCompetences
    )
    {
        $referentiel=new Referentiel();
        $data=$request->request->all();
        foreach ($data['grpcompetence'] as $OneGrpCompetence){ 
            $OneGrpCompetence = $GrpCompetences->findBy(['libelle'=>$OneGrpCompetence]);
            $referentiel->addGrpcompetence($OneGrpCompetence[0]);
        }
        foreach ($data['critereadmission'] as $OneAdmissionCritere){ 
            $admissionCritereObject = $CriterAdmission->findBy(['libelle'=>$OneAdmissionCritere]);
            if ($admissionCritereObject) {
                $referentiel->addCritereadmission($admissionCritereObject[0]);
            }
        }
        foreach ($data['criteraluation'] as $OneEvaluationCompetence){ 
            $evaluationCritereObject = $CritereEvaluation->findBy(['libelle'=>$OneEvaluationCompetence]);
            if ($evaluationCritereObject) {
                $referentiel->addCriterevaluation($evaluationCritereObject[0]);
            }
        }   
        $programme = $request->files->get("programme");
        $programme = fopen($programme->getRealPath(), "rb");    
        $referentiel->setProgramme($programme);
        $referentiel->setIsdeleted(false);
        $referentiel->setLibelle($data['libelle']);
        $referentiel->setPresentation($data['presentation']);
      $manager->persist($referentiel);
      $manager->flush();
      return new JsonResponse("Vous venez d'Ajouter un nouveau referentiel", Response::HTTP_CREATED, [], true);
    }

     /**
     * @Route(
     *     path="/api/admin/referentiels/{id}",
     *     methods={"put"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::UpdateReferentiel",
     *          "__api_resource_class"=Referentiel::class,
     *          "__api_collection_operation_name"="update_profile"
     *     }
     * )
     */
    public function UpdateReferentiel(
        int $id,
        Request $request,
        SerializerInterface $serializer, 
        ValidatorInterface $validator,
        EntityManagerInterface $manager,
       UserService $userService
    )
    {
        $referentiel = $this ->refRepo-> find($id);  
        $editRef=$userService->UpadateEntity($request);
        if($editRef)
        {
            foreach($editRef as $item => $oneUpdate)
            {
                $setProperty='set'.ucfirst($item);
                $referentiel->$setProperty($oneUpdate);
               
            }
        }
      else{
        return $this->json("Vous, n'avez choisi aucun attribut", Response::HTTP_OK);
      }
         $data=$request->getContent();
        $manager->flush();
        return $this->json("L'utilisateur à été modifié avec success", Response::HTTP_OK);
      
    }
   /**
     * @Route(
     *     path="/api/admin/promo",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::addPromo",
     *          "__api_resource_class"=Promo::class,
     *          "__api_collection_operation_name"="add_competence"
     *     }
     * )
  
 */

public function addPromo (
    Request $request,
    SerializerInterface $serializer, 
    ValidatorInterface $validator,
    EntityManagerInterface $manager,
    FabriqueRepository $fabrique,
    ReferentielRepository $referentiel,
    PromoRepository $Promo,
    LangueRepository $langue,
    \Swift_Mailer $mailer
)
{
   $promo=new Promo();
   $groupe = new  Groupe();
   $emailApprenat = array();
   $promoToArray=(array)$promo;
   $simplekey=array();
   $data=$request->request->all(); 
   $emailApprenant=array();
    //dd(class_exists('ZipArchive'));
    foreach($promoToArray as $key=>$value)
    {
        $simplekey[].=$key;
    }  
    foreach($data as $key =>$value)
    {    
        if(($key !="apprenant") && ($key !="formateur") && ($key !="fichier"))
        {
     
        if(in_array("\x00App\Entity\Promo\x00".$key,$simplekey))
        {      
          $setProperty='set'.ucfirst($key);
          
            if($key=="fabrique")
            {
                $values = $fabrique->findBy(['libelle'=>$value]);
                if($values)
                {
                    $promo->setFabrique($values[0]);
                }
                else{
                    return $this->json("La fabrique $value n'existe pas", Response::HTTP_OK);
                }
              
            }
           else if($key=="referentiel")
            {
                $values = $referentiel->findBy(['libelle'=>$value]);
                if($values)
                {
                    $promo->addReferentiel($values[0]);
                }
                else{
                    return $this->json("Le Refentiel $value n'existe pas", Response::HTTP_OK);
                }
            }
           else if($key=="langue")
            {
                $values = $langue->findBy(['libelle'=>$value]);
                if($values)
                {
                    $promo->setLangue($values[0]);
                }
                
                else{
                    return $this->json("La langue $value n'existe pas", Response::HTTP_OK);
                }
            }
           elseif($key=="datedebut")
            {
                $dateDebut = strtotime($value);
                $debut = date('Y-m-d', $dateDebut); 
                $promo->setDatedebut(new \DateTime($debut));
            } 
           elseif($key=="datefin")
            {
                $dateFin = strtotime($value);
                $fin = date('Y-m-d', $dateFin); 
                $promo->setDatefin(new \DateTime($fin));
            }             
          else
            {  
                $setProperty='set'.ucfirst($key);
                $promo->$setProperty($value);
            }
        }
        else{
            return $this->json("Attribut $key ne se trouve pas das dans la classe promo", Response::HTTP_OK);
        }
    }
    }
   
    if(!is_null($request->files->get('fichier')))
    {
        $filename = $request->files->get('fichier')->getRealPath();
        $emailApprenatEx = $this->readFile($filename);
        foreach ($emailApprenatEx as $value) {
            $emailApprenant[]= $value[0];
        }
    }
    if (isset($data['apprenant']) && !empty($data['apprenant'])) {
        foreach ($data['apprenant'] as $email) {
            
            if(!in_array($email,$emailApprenant)){
                $emailApprenant[] = $email;
            }
            
        }
        
    } 
  
    foreach($emailApprenant as $Onemail)
    {
        //dd($Onemail);
        $this->createApprenant($promo, $Onemail, $this->encoder, $this->profil,$groupe);
        $this->sendEmail($mailer,$Onemail);
    }

     
    if (isset($data['formateur']) && !empty($data['formateur'])) {
            foreach ($data['formateur'] as $OneFormateur) {
                $OneFormateurObject = $this->formateur->findBy(['email'=>$OneFormateur]);
                $promo->addFormateur($OneFormateurObject[0]);
                $groupe->addFormateur($OneFormateurObject[0]);
            }
        }
  
    $manager->persist($promo);
  $manager->flush();
  $last_id = $promo->getId();
  $promo_id = $Promo->findBy(['id'=>$last_id]);
  $groupe->setPromo($promo_id[0]);
  $groupe->setLibelle("Groupe principale de la $last_id.eme Cohorte ");
  $groupe->setDateCreation(new \DateTime($debut));
  $groupe->setIsClosed(false);
  $manager->persist($groupe);
  $manager->flush();
  return $this->json("Vous avez ajouté une nouvelle promo", Response::HTTP_OK);
}
public function sendEmail($mailer,$email){
       
    $msg = (new \Swift_Message('Sonatel Academy'))
    ->setFrom('SymfonyThiebouKethiakhOoh@gmail.com')
    ->setTo($email)
    ->setBody("Bonjour M");
    $mailer->send($msg);
}
public function readFile($doc)
    {
        if($doc)
        {
            
            $file= IOFactory::identify($doc);
            $reader= IOFactory::createReader($file);
            $spreadsheet=$reader->load($doc);
            $fichierexcel= $spreadsheet->getActivesheet()->toArray();
            return $fichierexcel;
        }
    }

/*    public function excelInArray($doc)
    {
        $tabEmail = [];
        //$file = \PHPExcel_IOFactory::identify($doc);

        $reader =\PHPExcel_IOFactory::createReaderForFile($doc);
        $spreadsheet = $doc->setReadDataOnly($doc);

        //$array_content_file = $spreadsheet->getActivesheet()->toArray();
        foreach ($spreadsheet as $value) {
            foreach ($value as $email) {
                if ($email != null) {
                    $tabEmail [] = $email;
                }
            }
        }
        dd($tabEmail);
        return $tabEmail;
    }
*/
     


      public function createApprenant($promo,$email, $encoder, $profil,$groupe)
      {
          if (!empty($email)) {
            $role=["ROLE_Apprenant"];
              $apprenant = new Apprenant();      
              $apprenant->setNom("null");
              $apprenant->setPrenom("null");
              $apprenant->setEmail($email);
              $apprenant->setTelephone(771099000);
              $apprenant->setAdresse("odc");
              $apprenant->setSex("null");
              $password = "password";
              $apprenant->setRoles($role);
              $apprenant->setPassword($encoder->encodePassword($apprenant, $password));
              $apprenant->setProfil($profil->findBy(['libelle' => "Apprenant"])[0]);        
              $apprenant->setStatut("dormant");
              $apprenant->setIsdeleted(false);
              $apprenant->setArchiver(0);
           if ($promo->addApprenant($apprenant)) {
                  $groupe->addApprenant($apprenant);
  
              }
          }
      }

    /**
     * @Route(
     *     path="/api/admin/promo/{id}",
     *     methods={"put"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::UpdatePormo",
     *          "__api_resource_class"=Promo::class,
     *          "__api_collection_operation_name"="update_promo"
     *     }
     * )
     */
    public function UpdatePormo(
        int $id,
        Request $request,
        SerializerInterface $serializer, 
        ValidatorInterface $validator,
        EntityManagerInterface $manager,
       UserService $userService
    )
    {
        $promo = $this ->promo-> find($id);  
        $editPromo=$userService->UpadateEntity($request);
        if($editPromo)
        {
            foreach($editPromo as $item => $oneUpdate)
            {
                $setProperty='set'.ucfirst($item);
                $promo->$setProperty($oneUpdate);
               
            }
        }
      else{
        return $this->json("Vous, n'avez choisi aucun attribut", Response::HTTP_OK);
      }
         $data=$request->getContent();
        $manager->flush();
        return $this->json("Vous venez de modifier la promo", Response::HTTP_OK);
      
    }
    /**
     * @Route(
     *     path="/api/admin/grptags",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::addGroupTag",
     *          "__api_resource_class"=GroupeTag::class,
     *          "__api_collection_operation_name"="add_Grptag"
     *     }
     * ),
     * 
     */
    public function addGroupTag(Request $request,SerializerInterface $serializer, ValidatorInterface $validator,EntityManagerInterface $manager, TagRepository $tag)
    {
        $groupeTag = new  GroupeTag();
            $data=$request->request->all();
            foreach ($data['tag'] as $OneTag){ 
                    $TagObject = $tag->findBy(['libelle'=>$OneTag]);
                    if ($TagObject) {
                        $groupeTag->addTag($TagObject[0]);
                        $groupeTag->setLibelle($data['libelle']);
                       
                    }
            }
             $manager->persist($groupeTag);
             $manager->flush();
            return new JsonResponse("Vous venez de creer un nouveau group de Tags", Response::HTTP_CREATED, [], true);
    }
  /**
     * @Route(
     *     path="/api/admin/groupes",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::addGroup",
     *          "__api_resource_class"=GroupeTag::class,
     *          "__api_collection_operation_name"="add_groupe"
     *     }
     * ),
     * 
     */
    public function addGroup(Request $request)
    {
        $groupe = new  Groupe();
        $data=$request->request->all();
        foreach ($data['apprenant'] as $OneObject){ 
            $OneObject = $this->apprenant->findBy(['email'=>$OneObject]);
            
         
                    if ($OneObject) {
                        $groupe->addApprenant($OneObject[0]);          
                    }
            }
            if(isset($data['formateur']) && !empty($data['formateur']))
            {
                foreach ($data['formateur'] as $OneObject){ 
                    $OneObject = $this->formateur->findBy(['formateur'=>$OneObject]);
                    if ($OneObject) {
                        $groupe->addApprenant($OneObject[0]);          
                    }
            }
            }
         
            $groupe->setLibelle($data['libelle']);
            $date = date('Y-m-d');
            $groupe->setDateCreation(new \DateTime($date));
            $promo = $this->promo->findBy(array(),array('id'=>'DESC'),1,0);
            $groupe->setPromo($promo[0]);
            $groupe->setIsClosed(false);
            $this->manager->persist($groupe);
            $this->manager->flush();
            return new JsonResponse("Vous venez de creer un nouveau group ", Response::HTTP_CREATED, [], true);
    }
       
}
