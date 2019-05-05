<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use AppBundle\Entity\RapportVisite;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations as Rest;


class ServicesController extends Controller
{


    /**
     * @Route("/", name="services")

     * index
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/Visiteur/{login}/{pass}", name="jsonvisiteur_service_byloginpass")
     *
     * Obtenir un visiteur par son identifiant et mot de passe
     * @var login, pass
     * @return JsonResponse 
     *
     **/
    public function jsonVisiteurByLogpassAction(Request $request,$login, $pass)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Visiteur');
        $user = $repository->findOneBy(array('visLogin' => $login,'visMdp' => $pass));

        if (!$user) {return new JsonResponse();}

        $data = array();

        $data[] = [
            'id' => $user->getVisMatricule(),
            'nom' => $user->getVisNom(),
            'prenom' => $user->getVisprenom(),
            'login' => $user->getVisLogin(),
            'pass' => $user->getVisMdp(),
        ];

        $data = json_encode($data);
        return new JsonResponse(json_decode($data));
    }

    /**
     * @Route("/Visiteur/{matricule}", name="jsonvisiteur_service_byId")
     * Obtenir un visiteur par son matricule
     * @var matricule
     * @return JsonResponse
     * 
     */
    public function jsonVisiteurByIdAction(Request $request,$matricule)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Visiteur');
        $user = $repository->find($matricule);

        if (!$user) {
            return new JsonResponse();
        }

            $data = array();
            $data[] = [
                'id' => $user->getVisMatricule(),
                'nom' => $user->getVisNom(),
                'prenom' => $user->getVisprenom(),
                'login' => $user->getVisLogin(),
                'pass' => $user->getVisMdp(),
                'adresse' => $user->getVisAdresse(),
                'cp' => $user->getVisCp(),
                'ville' => $user->getVisVille(),
            ];



        $data = json_encode($data);
        return new JsonResponse(json_decode($data));
    }

    /**
     * @Route("/Visiteur/", name="jsonvisiteur_service_All")
     * Obtenir tous les visiteurs
     * @var request
     * @return JsonResponse 
     */
    public function jsonVisiteurAction(Request $request)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Visiteur');
        $users = $repository->findAll();

        if (!$users) {
            return new JsonResponse();
        }

        $data = array();
        foreach ($users as $user) {
            $data[] = [
                'id' => $user->getVisMatricule(),
                'nom' => $user->getVisNom(),
                'prenom' => $user->getVisprenom(),
                'login' => $user->getVisLogin(),
                'pass' => $user->getVisMdp(),
            ];
        }



        $data = json_encode($data);
        return new JsonResponse(json_decode($data));
    }

    /**
     * @Route("/Visiteur/{matricule}/Rapports/", name="rapports_ByMatricule")
     * Obtenir les rapports de visites d'un visiteur par son matricule
     * @var matricule
     * @return JsonResponse 
     */
    public function getRapportsAction(Request $request,$matricule)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:RapportVisite');
        $rapports = $repository->findBy(array('visMatricule' => $matricule));

        /*        $serializedEntity = $this->container->get('jms_serializer')->serialize($rapports, 'json');

        return new Response($serializedEntity);*/

        $data = array();
        foreach ($rapports as $rapport) {
            $data[] = [
                'id_Rapport' => $rapport->getRapNum(),
                'bilan' => $rapport->getRapBilan(),
                'dateVisite' => $rapport->getRapDatevisite()->format("d/m/20y"),
                'dateRapport' => $rapport->getRapDaterapport()->format("d/m/20y"),
                'praticien' => ['praNum' => $rapport->getPraticien()->getId(),
                                'praNom' => $rapport->getPraticien()->getPraNom(),
                                'praPrenom' => $rapport->getPraticien()->getPraPrenom(),
                                'praAdresse' => $rapport->getPraticien()->getPraAdresse(),
                                'praCp' => $rapport->getPraticien()->getPraCp(),
                                'praVille' => $rapport->getPraticien()->getPraVille(),
                                'praCoefNotoriete' => $rapport->getPraticien()->getPraCoefnotoriete(),
                                'praTypeLibelle' => $rapport->getPraticien()->getPraTypecode()->getTypeLibelle(),

                               ],
            ];
        }

        $data = json_encode($data);
        return new JsonResponse(json_decode($data));
    }


    /**
     * @Route("/Visiteur/{matricule}/Rapport/{id_Rapport}", name="rapports_ByMatriculeIdRapport")
     * Obtenir un rapport de visite par le matricule d'un visiteur et l'id d'un rapport
     * @var matricule, idRapport
     * @return JsonResponse 
     */
    public function getRapportAction(Request $request,$matricule,$id_Rapport)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:RapportVisite');
        $rapport = $repository->findOneBy(array('visMatricule' => $matricule,'rapNum' => $id_Rapport));

        $data = array();
            $data[] = [
                'id_Rapport' => $rapport->getRapNum(),
                'bilan' => $rapport->getRapBilan(),
                'dateVisite' => $rapport->getRapDatevisite(),
                'dateRapport' => $rapport->getRapDaterapport(),
                'praticien' => ['praNum' => $rapport->getPraticien()->getId(),
                                'praNom' => $rapport->getPraticien()->getPraNom(),
                                'praPrenom' => $rapport->getPraticien()->getPraPrenom(),
                                'praAdresse' => $rapport->getPraticien()->getPraAdresse(),
                                'praCp' => $rapport->getPraticien()->getPraCp(),
                                'praVille' => $rapport->getPraticien()->getPraVille(),
                                'praCoefNotoriete' => $rapport->getPraticien()->getPraCoefnotoriete(),
                                'praTypeLibelle' => $rapport->getPraticien()->getPraTypecode()->getTypeLibelle(),

                               ],
            ];
        
        $data = json_encode($data, JSON_UNESCAPED_UNICODE );
        return new JsonResponse(json_decode($data, JSON_UNESCAPED_UNICODE));
    }



    /**
     * @Route("/Visiteur/{matricule}/Praticiens/", name="praticien_ByMatricule")
     * Obtenir les praticiens en rapport avec le matricule d'un visiteur 
     * @var matricule
     * @return JsonResponse 
     */
    public function getPraticiensAction(Request $request,$matricule)
    {

        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Visiteur');
        $user = $repository->find($matricule);

        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Praticien');
        $praticiens = $repository->findBy(array('visiteur' => $user));

/*        $serializedEntity = $this->container->get('jms_serializer')->serialize($rapports, 'json');

        

        return new Response($serializedEntity);
    }*/

        $data = array();
        foreach ($praticiens as $praticien) {
            $data[] = 
                ['praNum' => $praticien->getId(),
                'praNom' => $praticien->getPraNom(),
                'praPrenom' => $praticien->getPraPrenom(),
                'praAdresse' => $praticien->getPraAdresse(),
                'praCp' => $praticien->getPraCp(),
                'praVille' => $praticien->getPraVille(),
                'praCoefNotoriete' => $praticien->getPraCoefnotoriete(),
                'praTypeLibelle' => $praticien->getPraTypecode()->getTypeLibelle(),

                               ];
        }

        $data = json_encode($data);
        return new JsonResponse(json_decode($data));
    }


    /**
     * @Route("/Visiteur/add/rapport/", name="add_rapport")
     * Ajouter un rapport de visite
     * @var request
     * @return object
     */
    public function AjouterRapportAction(Request $request)
    {
        if ($request->request->get("rapport")) {
            $jsonRequest = $request->request->get("rapport");
            echo "Key: Rapport";
        }
        else {
            $jsonRequest = $request->getContent();
        }
        
        $rapportjson = json_decode($jsonRequest, true);


        dump($rapportjson);


        $em = $this->getDoctrine()->getManager();

        $bilan = $rapportjson["bilan"];

        //date de visite
        $dateVisite = date('Y-m-d', strtotime(str_replace('/', '-', $rapportjson["dateVisite"])));
        $dateVisite = new \Datetime($dateVisite);
        
        //Date de Rapport
        $dateRapport = new \Datetime();

        $matricule = $rapportjson["visiteur"]["id"];
            
        
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Visiteur');
        $visiteur = $repository->find($matricule);

        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Praticien');
        $praticien = $repository->find($rapportjson["praticien"]["praNum"]);


        $rapport = new RapportVisite();
        $rapport->setRapBilan($bilan);
        $rapport->setRapDatevisite($dateVisite);
        $rapport->setRapDaterapport($dateRapport);
        $rapport->setVisMatricule($visiteur);
        $rapport->setPraticien($praticien);

        $em->persist($rapport);
        dump($rapport);
        $em->flush();
        
        die;

    }
}
