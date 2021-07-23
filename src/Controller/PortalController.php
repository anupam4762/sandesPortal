<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Comnfiguration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class PortalController extends AbstractController
    {
        /**
         * @Route("/")
         */
        public function index(){
            // return new Response('<html><body>Hello</body></html>');
            return $this->render('portal/index.html.twig');
        }
    }
?>