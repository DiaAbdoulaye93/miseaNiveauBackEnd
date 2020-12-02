<?php

namespace App\Controller;

use App\Entity\Livrables;
use App\Repository\LivrablesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\LivrablePartielleRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LivrablesController extends AbstractController
{
    private $livrablesPartielle;
    private $livrables;

    public function  __construct(LivrablePartielleRepository $livrablesPartielle,LivrablesRepository $livrable)
    {
        $this->livrablesPartielle=$livrablesPartielle;
        $this->livrable=$livrable;
    }

    /**
     * @Route(
     *     path="/api/formateur/livrables",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::addLivrable",
     *          "__api_resource_class"=Livrables::class,
     *          "__api_collection_operation_name"="add_livrables"
     *     }
     * ),
     * 
     */
    public function addLivrable(Request $request,SerializerInterface $serializer, ValidatorInterface $validator,EntityManagerInterface $manager)
    {
        $livrable=new Livrables();
         $data=$request->request->all();  
            foreach($data as $key =>$value)
            { 
                if($key !="livrablepartielle")
                {
                    if($key != "datelivraison")
                    {
                        $setProperty='set'.ucfirst($key);
                        $livrable->$setProperty($value);
                    }
                    else{
                        $dateDebut = strtotime($value);
                        $debut = date('Y-m-d', $dateDebut); 
                        $livrable->setDatelivraison(new \DateTime($debut));
                    }
                }
                else{
                    foreach($data["livrablepartielle"] as $OneObject)
                    {
                        $OneObject =  $this->livrablesPartielle->findBy(['libelle'=>$OneObject]);
                       
                        $livrable->addLivrablepartielle($OneObject[0]); 
                    }
                   
                }                          
            }
             $manager->persist($livrable);
             $manager->flush();
            return new JsonResponse("Vous venez de creer un nouveau livrable", Response::HTTP_CREATED, [], true);
    }
    /**
     * @Route(
     *     path="/api/formateur/livrables/{id}",
     *     methods={"put"},
     *     defaults={
     *          "__controller"="App\Controller\ApiController::UpdateLivrable",
     *          "__api_resource_class"=Livrables::class,
     *          "__api_collection_operation_name"="update_livrbale"
     *     }
     * )
     */
    public function UpdateLivrable(
        int $id,
        Request $request,
        SerializerInterface $serializer, 
        ValidatorInterface $validator,
        EntityManagerInterface $manager
       
    )
    {
        $livrable = $this ->livrable-> find($id);  
        $edtiLivrable=$userService->UpadateEntity($request);
        if($edtiLivrable)
        {
            foreach($edtiLivrable as $item => $oneUpdate)
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
}
