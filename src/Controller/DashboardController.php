<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index()
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    /**
     * @Route("/clients", name="clients")
     */
    public function clients()
    {
        return $this->render('dashboard/clients.html.twig');
    }


    /**
     * @Route("/estimate", name="estimate")
     */
    public function estimate()
    {
        return $this->render('dashboard/estimate.html.twig');
    }


    /**
     * @Route("/scheduling", name="scheduling")
     */
    public function scheduling()
    {
        return $this->render('dashboard/scheduling.html.twig');
    }


    /**
     * @Route("/rugs", name="rugs")
     */
    public function rugs()
    {
        return $this->render('dashboard/rugs.html.twig');
    }

    /**
     * @Route("/client-profile", name="client-profile")
     */
    public function clientProfile()
    {
        return $this->render('dashboard/clientprofile.html.twig');
    }


    /**
     * @Route("/marketing", name="marketing")
     */
    public function marketing()
    {
        return $this->render('dashboard/marketing.html.twig');
    }

    /**
     * @Route("/users", name="users")
     */
    public function users()
    {
        return $this->render('dashboard/users.html.twig');
    }


    /**
     * @Route("/reports", name="reports")
     */
    public function reports()
    {
        return $this->render('dashboard/reports.html.twig');
    }


    /**
     * @Route("/settings", name="settings")
     */
    public function settings()
    {
        return $this->render('dashboard/settings.html.twig');
    }


    /**
     * @Route("/manage", name="manage")
     */
    public function manage()
    {
        return $this->render('dashboard/manage.html.twig');
    }




}
