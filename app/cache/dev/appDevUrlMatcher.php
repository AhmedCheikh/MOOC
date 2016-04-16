<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // mooc_mooc_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mooc_mooc_homepage');
            }

            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mooc_mooc_homepage',);
        }

        // mooc_mooc_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ContactController::sendAction',  '_route' => 'mooc_mooc_contact',);
        }

        // mooc_mooc_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\AboutController::infoAction',  '_route' => 'mooc_mooc_about',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/liste')) {
                // mooc_mooc_listecours
                if ($pathinfo === '/listecours') {
                    return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\CoursController::affichecoursAction',  '_route' => 'mooc_mooc_listecours',);
                }

                // mooc_mooc_listeformateur
                if ($pathinfo === '/listeformateur') {
                    return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::afficheformateurAction',  '_route' => 'mooc_mooc_listeformateur',);
                }

            }

            // mooc_mooc_logformateur
            if ($pathinfo === '/loginformateur') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::loginformateurAction',  '_route' => 'mooc_mooc_logformateur',);
            }

        }

        // mooc_mooc_inscritformateur
        if ($pathinfo === '/inscriptionformateur') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::inscriptionformateurAction',  '_route' => 'mooc_mooc_inscritformateur',);
        }

        // mooc_mooc_log_out_formateur
        if ($pathinfo === '/logoutformateur') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::logoutformateurAction',  '_route' => 'mooc_mooc_log_out_formateur',);
        }

        // mooc_mooc_acceuilformateur
        if (0 === strpos($pathinfo, '/acceuilformateur') && preg_match('#^/acceuilformateur/(?P<name>[^/]++)/(?P<prenom>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_acceuilformateur')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::acceuilformateurAction',));
        }

        // mooc_mooc_publiercourformateur
        if (0 === strpos($pathinfo, '/publiercour') && preg_match('#^/publiercour/(?P<name>[^/]++)/(?P<prenom>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_publiercourformateur')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::publiercourAction',));
        }

        if (0 === strpos($pathinfo, '/listec')) {
            // mooc_mooc_listecourformateur
            if (0 === strpos($pathinfo, '/listecourformateur') && preg_match('#^/listecourformateur/(?P<name>[^/]++)/(?P<prenom>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_listecourformateur')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::listecourformateurAction',));
            }

            // mooc_mooc_listechapitre
            if ($pathinfo === '/listechapitres') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ChapitreController::affichelistChapitresAction',  '_route' => 'mooc_mooc_listechapitre',);
            }

        }

        // mooc_mooc_PasserQuizNonChrono
        if ($pathinfo === '/PasserQuizNonChro') {
            return array (  '_controller' => 'MoocMoocBundle:quiz:passerQuizChro',  '_route' => 'mooc_mooc_PasserQuizNonChrono',);
        }

        // mooc_mooc_Ajouter_chapitre
        if ($pathinfo === '/AjouterChapitre') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ChapitreController::ajouterChapitreAction',  '_route' => 'mooc_mooc_Ajouter_chapitre',);
        }

        // mooc_mooc_Modifier_chapitre
        if (0 === strpos($pathinfo, '/ModifierChapitre') && preg_match('#^/ModifierChapitre/(?P<idchapitre>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_Modifier_chapitre')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ChapitreController::modifierChapitreAction',));
        }

        if (0 === strpos($pathinfo, '/AjouterQu')) {
            // mooc_mooc_Ajouter_quiz
            if ($pathinfo === '/AjouterQuiz') {
                return array (  '_controller' => 'MoocMoocBundle:Quiz:ajouterQuiz',  '_route' => 'mooc_mooc_Ajouter_quiz',);
            }

            // mooc_mooc_Ajouter_question
            if (0 === strpos($pathinfo, '/AjouterQuestion') && preg_match('#^/AjouterQuestion/(?P<idquiz>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_Ajouter_question')), array (  '_controller' => 'MoocMoocBundle:Question:ajouterQuestion',));
            }

        }

        // mooc_mooc_delCours
        if (0 === strpos($pathinfo, '/DeleteCours') && preg_match('#^/DeleteCours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_delCours')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\CoursController::deleteAction',));
        }

        // mooc_mooc_updateCours
        if (0 === strpos($pathinfo, '/UpdateCours') && preg_match('#^/UpdateCours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_updateCours')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\CoursController::updateAction',));
        }

        // mooc_espace_apprenant
        if ($pathinfo === '/espaceapprenant') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::EspaceApprenantAction',  '_route' => 'mooc_espace_apprenant',);
        }

        // mooc_accueil_apprenant
        if (0 === strpos($pathinfo, '/accueilapprenant') && preg_match('#^/accueilapprenant/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_accueil_apprenant')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::acceuilApprenantAction',));
        }

        if (0 === strpos($pathinfo, '/C')) {
            // mooc_cours_apprenant
            if (0 === strpos($pathinfo, '/CoursApprenant') && preg_match('#^/CoursApprenant/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_cours_apprenant')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::CoursApprenantAction',));
            }

            // mooc_chercher_cours_apprenant
            if (0 === strpos($pathinfo, '/ChercherCours') && preg_match('#^/ChercherCours/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_chercher_cours_apprenant')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::ChercherCoursApprenantAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // mooc_login_apprenant
            if ($pathinfo === '/loginApprenant') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::loginApprenantAction',  '_route' => 'mooc_login_apprenant',);
            }

            // mooc_log_out_apprenant
            if ($pathinfo === '/logoutApprenant') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::logoutApprenantAction',  '_route' => 'mooc_log_out_apprenant',);
            }

        }

        // mooc_inscription_apprenant
        if ($pathinfo === '/inscriptionApprenant') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::inscriptionApprenantAction',  '_route' => 'mooc_inscription_apprenant',);
        }

        // mooc_editer_profil_apprenant
        if (0 === strpos($pathinfo, '/accueilapprenant') && preg_match('#^/accueilapprenant/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_editer_profil_apprenant')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::editerProfilAction',));
        }

        // mooc_supprimer_cours_apprenant
        if (preg_match('#^/(?P<id>[^/]++)/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_supprimer_cours_apprenant')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::supprimerAction',));
        }

        // mooc_suivre_cour_apprenant
        if (preg_match('#^/(?P<login>[^/]++)/(?P<id>[^/]++)/(?P<id2>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_suivre_cour_apprenant')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::suivreCoursAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // mooc_ajout_apprenant
            if ($pathinfo === '/ajout') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::ajoutAction',  '_route' => 'mooc_ajout_apprenant',);
            }

            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

        }

        if (0 === strpos($pathinfo, '/comite')) {
            // easyadmin
            if (rtrim($pathinfo, '/') === '/comite') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if (rtrim($pathinfo, '/') === '/comite') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

            // _easyadmin_render_css
            if ($pathinfo === '/comite/_css/easyadmin.css') {
                return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::renderCssAction',  '_route' => '_easyadmin_render_css',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
