<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function new(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $email = (new Email())
                ->from($contact['email'])
                ->to('mshillairet@nordnet.fr')
                ->subject($contact['subject'])
                ->text('
                    Nom: ' . $contact['firstname'] . '
                    Prénom: ' . $contact['lastname'] . '
                    Téléphone: ' . $contact['phone'] . '
                    Email: ' . $contact['email'] . '
                    Sujet: ' . $contact['subject'] . '
                    Message: ' . $contact['message'] . '
                ');
            $mailer->send($email);

            $this->addFlash('success', 'Votre message a bien été envoyé.');
            return $this->redirectToRoute('home');
        }

        return $this->render('pages/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
