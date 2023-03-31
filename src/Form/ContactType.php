<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;

/**
 * This will suppress all the PMD warnings in
 * this class.
 *
 * @SuppressWarnings(PHPMD)
 */
class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'firstname',
                TextType::class,
                [
                    'label' => 'Prénom',
                    'attr' => ['placeholder' => 'Votre prénom'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Merci d\'entrer un prénom',
                        ]),
                        new Length([
                            'min' => 2,
                            'minMessage' => 'Votre prénom doit faire au moins {{ limit }} caractères',
                            'max' => 4096,
                        ]),
                        new Regex([
                            'pattern' => '/^[a-zA-ZÀ-ÿ\s-]+$/',
                            'message' => 'Votre prénom ne doit contenir que des lettres, des espaces et des tirets',
                        ]),
                    ],
                ]
            )
            ->add(
                'lastname',
                TextType::class,
                [
                    'label' => 'Prénom',
                    'attr' => ['placeholder' => 'Votre prénom'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Merci d\'entrer un nom',
                        ]),
                        new Length([
                            'min' => 2,
                            'minMessage' => 'Votre nom doit faire au moins {{ limit }} caractères',
                            'max' => 4096,
                        ]),
                        new Regex([
                            'pattern' => '/^[a-zA-ZÀ-ÿ\s-]+$/',
                            'message' => 'Votre nom ne doit contenir que des lettres, des espaces et des tirets',
                        ]),
                    ],
                ]
            )
            ->add(
                'email',
                EmailType::class,
                [
                    'label' => 'Email',
                    'attr' => ['placeholder' => 'Votre email'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Merci d\'entrer une adresse email',
                        ]),
                        new Length([
                            'min' => 6,
                            'minMessage' => 'Votre adresse email doit faire au moins {{ limit }} caractères',
                            'max' => 4096,
                        ]),
                        new Regex([
                            'pattern' => '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$/',
                            'message' => 'Merci d\'entrer une adresse email valide',
                        ]),
                    ],
                ]
            )
            ->add(
                'phone',
                TextType::class,
                [
                    'label' => 'Téléphone',
                    'attr' => ['placeholder' => 'Votre téléphone'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Merci d\'entrer un numéro de téléphone',
                        ]),
                        new Length([
                            'min' => 10,
                            'minMessage' => 'Votre numéro de téléphone doit faire au moins {{ limit }} caractères',
                            'max' => 4096,
                        ]),
                        new Regex([
                            'pattern' => '/^[0-9\s-]+$/',
                            'message' => 'Votre numéro de téléphone ne doit contenir que
                            des chiffres, des espaces et des tirets',
                        ]),
                    ],
                ]
            )
            ->add(
                'subject',
                ChoiceType::class,
                [
                    'label' => 'Sujet',
                    'choices' => [
                        'Demande de devis' => 'Demande de devis',
                        'Demande d\'information' => 'Demande d\'information',
                        'Autre' => 'Autre',
                    ],
                    'attr' => ['placeholder' => 'Sujet du message'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Merci de choisir un sujet',
                        ]),
                    ],
                ]
            )
            ->add(
                'message',
                TextareaType::class,
                [
                    'label' => 'Message',
                    'attr' => ['placeholder' => 'Votre message'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Merci d\'entrer un message',
                        ]),
                        new Length([
                            'min' => 10,
                            'minMessage' => 'Votre message doit faire au moins {{ limit }} caractères',
                            'max' => 4096,
                        ]),
                        new Regex([
                            'pattern' => '/^[^<>]+$/',
                            'message' => 'Votre message ne doit pas contenir de balises HTML ni de backslash',
                        ]),
                    ],
                ]
            )
            ->add('rgpd', CheckboxType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci d\'accepter les conditions d\'utilisation de vos données personnelles',
                    ]),
                ],
            ])
            ->add('captcha', Recaptcha3Type::class, [
                'constraints' => new Recaptcha3(),
                'action_name' => 'contact',
                'locale' => 'fr',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
