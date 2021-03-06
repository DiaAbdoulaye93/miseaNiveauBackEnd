<?php

namespace App\Service ;

use App\Repository\UserRepository;
use App\Repository\ProfilSortieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserService 
{

    private $userRepository;
    private $serializer;
    private $encoder;
    private $profil_sortie;
    public function __construct(UserRepository $userRepository, SerializerInterface $serializer, UserPasswordEncoderInterface $encoder,ProfilSortieRepository $profil_sortie)
    {
            $this->userRepository= $userRepository;
            $this->serializer=$serializer;
            $this->encoder =$encoder;
            $this->profil_sortie=$profil_sortie;
    }
 

    public function addUser($request)
    {
 
       $user = $request->request->all(); //Ceci nous retourne les données sous la forme  un tableau  
       $avatar = $request->files->get("photo");
       $avatar = fopen($avatar->getRealPath(), "rb");
       $user["photo"] = $avatar;
       $profil = $this->serializer->denormalize($user["profil"], "App\Entity\Profile");
       $profil_libelle=$profil->getLibelle();
       $user = $this->serializer->denormalize($user, "App\Entity\\".$profil_libelle);
       if($profil_libelle=="Apprenant")
       {
           $user->setArchiver(0);
           $user->setRoles(['ROLE_Apprenant']);
           $user->setStatut("dormant");
           $profilSortie =  $this->profil_sortie->findBy(array('id'=>1));
          $user->setProfilSortie($profilSortie[0]);
       }
  
       $user->setPassword($this->encoder->encodePassword($user, "password"));
        return $user;
    }
 public function UpadateEntity(Request $request)
    {
        $data=$request->getContent(); 
        $firstSplit=preg_split("/form-data; /",$data);
        unset($firstSplit[0]);
        $tabdata=[];
        foreach($firstSplit as $oneSplit)
        {
        
            $secondSplit=preg_split("/\r\n/", $oneSplit);
            array_pop($secondSplit);
            array_pop($secondSplit);
            $find=explode('"', $secondSplit[0]);
            $tabdata[$find[1]]=end($secondSplit);
           
        }    
        if(isset($tabdata["photo"]))  
        {
            $stream=fopen('php://memory','r+');
            fwrite($stream,$tabdata['photo']);
            rewind($stream);
            $tabdata['photo']=$stream;
        } 
        return $tabdata ;

    }
}