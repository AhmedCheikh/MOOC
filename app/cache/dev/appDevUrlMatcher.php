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

        if (0 === strpos($pathinfo, '/logout')) {
            // mooc_mooc_log_out_admin
            if ($pathinfo === '/logoutadmin') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\AdminController::logoutadminAction',  '_route' => 'mooc_mooc_log_out_admin',);
            }

            // mooc_mooc_log_out_comite
            if ($pathinfo === '/logoutcomite') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ComiteController::logoutcomiteAction',  '_route' => 'mooc_mooc_log_out_comite',);
            }

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
            if (0 === strpos($pathinfo, '/log')) {
                if (0 === strpos($pathinfo, '/login')) {
                    // mooc_mooc_logadmin
                    if ($pathinfo === '/loginadmin') {
                        return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\AdminController::loginAdminAction',  '_route' => 'mooc_mooc_logadmin',);
                    }

                    // mooc_mooc_logcomite
                    if ($pathinfo === '/logincomite') {
                        return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ComiteController::loginComiteAction',  '_route' => 'mooc_mooc_logcomite',);
                    }

                }

                // mooc_mooc_logOrganisme
                if ($pathinfo === '/logOrganisme') {
                    return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::loginOrganismeAction',  '_route' => 'mooc_mooc_logOrganisme',);
                }

            }

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
        if (0 === strpos($pathinfo, '/acceuilformateur') && preg_match('#^/acceuilformateur/(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_acceuilformateur')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::acceuilformateurAction',));
        }

        // mooc_mooc_publiercourformateur
        if (0 === strpos($pathinfo, '/publiercour') && preg_match('#^/publiercour/(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_publiercourformateur')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::publiercourAction',));
        }

        // mooc_mooc_listecourformateur
        if (0 === strpos($pathinfo, '/listecourformateur') && preg_match('#^/listecourformateur/(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_listecourformateur')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::listecourformateurAction',));
        }

        // mooc_mooc_profilformateur
        if (0 === strpos($pathinfo, '/profilformateur') && preg_match('#^/profilformateur/(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_profilformateur')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::profilformateurAction',));
        }

        // mooc_mooc_profediterprofile
        if (0 === strpos($pathinfo, '/editerprofile') && preg_match('#^/editerprofile/(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_profediterprofile')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::editerprofileAction',));
        }

        // mooc_mooc_afficherformateur
        if ($pathinfo === '/afficherformateur') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::afficherformateurAction',  '_route' => 'mooc_mooc_afficherformateur',);
        }

        if (0 === strpos($pathinfo, '/liste')) {
            // mooc_mooc_listeformateurbconnect
            if (0 === strpos($pathinfo, '/listeformateurconnect') && preg_match('#^/listeformateurconnect/(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_listeformateurbconnect')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::listeformateurbconnectAction',));
            }

            // mooc_mooc_listeorganismeconnect
            if (0 === strpos($pathinfo, '/listeorganismeconnect') && preg_match('#^/listeorganismeconnect/(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_listeorganismeconnect')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::listeorganismeconnectAction',));
            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            // mooc_mooc_profileorganismeconnect
            if (0 === strpos($pathinfo, '/profileorganismeconnect') && preg_match('#^/profileorganismeconnect/(?P<cin>[^/]++)/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_profileorganismeconnect')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::profileorganismeconnectAction',));
            }

            // mooc_mooc_pageint
            if ($pathinfo === '/pageint') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::pageintAction',  '_route' => 'mooc_mooc_pageint',);
            }

        }

        // mooc_mooc_inviterOrganisme
        if (0 === strpos($pathinfo, '/inviterOrganisme') && preg_match('#^/inviterOrganisme/(?P<cin>[^/]++)/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_inviterOrganisme')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::inviterOrganismeAction',));
        }

        // mooc_mooc_listeinvitation
        if (0 === strpos($pathinfo, '/listeinvitation') && preg_match('#^/listeinvitation/(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_listeinvitation')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::listeinvitationAction',));
        }

        if (0 === strpos($pathinfo, '/re')) {
            // mooc_mooc_repondreorganisme
            if (0 === strpos($pathinfo, '/repondreorganisme') && preg_match('#^/repondreorganisme/(?P<cin>[^/]++)/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_repondreorganisme')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::repondreorganismeAction',));
            }

            // mooc_mooc_refuserinvitation
            if (0 === strpos($pathinfo, '/refuserinvitation') && preg_match('#^/refuserinvitation/(?P<cin>[^/]++)/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_refuserinvitation')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::refuserinvitationAction',));
            }

        }

        // mooc_mooc_accepterinvitation
        if (0 === strpos($pathinfo, '/accepterinvitation') && preg_match('#^/accepterinvitation/(?P<cin>[^/]++)/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_accepterinvitation')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::accepterinvitationAction',));
        }

        // mooc_mooc_nombreinvitation
        if ($pathinfo === '/nombreinvitation') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::nombreinvitationAction',  '_route' => 'mooc_mooc_nombreinvitation',);
        }

        // mooc_mooc_rechercherOrganisme
        if (0 === strpos($pathinfo, '/rechercherOrganisme') && preg_match('#^/rechercherOrganisme(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_rechercherOrganisme')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\FormateurController::rechercherOrganismeAction',));
        }

        if (0 === strpos($pathinfo, '/ModifierQ')) {
            // mooc_mooc_modifier_qz
            if (0 === strpos($pathinfo, '/ModifierQZ') && preg_match('#^/ModifierQZ/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_modifier_qz')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuizController::modifierQuizAction',));
            }

            // mooc_mooc_modifier_question
            if (0 === strpos($pathinfo, '/ModifierQuestion') && preg_match('#^/ModifierQuestion/(?P<idquestion>[^/]++)/(?P<idquiz>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_modifier_question')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuestionController::modifierQuestionAction',));
            }

        }

        // mooc_mooc_supprimer_question
        if (0 === strpos($pathinfo, '/SupprimerQuestion') && preg_match('#^/SupprimerQuestion/(?P<idquestion>[^/]++)/(?P<idquiz>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_supprimer_question')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuestionController::supprimerQuestionAction',));
        }

        // mooc_mooc_modifier_test
        if (0 === strpos($pathinfo, '/testmodifier') && preg_match('#^/testmodifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_modifier_test')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuizController::testmodifierAction',));
        }

        // mooc_mooc_passer_quiz
        if (0 === strpos($pathinfo, '/validerQuiz') && preg_match('#^/validerQuiz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_passer_quiz')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuizController::PasserQuizAction',));
        }

        // mooc_mooc_note
        if (0 === strpos($pathinfo, '/note') && preg_match('#^/note/(?P<note>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_note')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuizController::NoteAction',));
        }

        // mooc_mooc_afficher_chapitreForm
        if (0 === strpos($pathinfo, '/AfficherChapitreForm') && preg_match('#^/AfficherChapitreForm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_afficher_chapitreForm')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ChapitreController::afficheChapitreFormAction',));
        }

        if (0 === strpos($pathinfo, '/listechapitres')) {
            // mooc_mooc_listechapitre
            if (preg_match('#^/listechapitres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_listechapitre')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ChapitreController::affichelistChapitresAction',));
            }

            // mooc_mooc_listechapitreApp
            if (0 === strpos($pathinfo, '/listechapitresApp') && preg_match('#^/listechapitresApp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_listechapitreApp')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ChapitreController::affichelistChapitresAppAction',));
            }

        }

        // mooc_mooc_Ajouter_chapitre
        if (0 === strpos($pathinfo, '/AjouterChapitre') && preg_match('#^/AjouterChapitre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_Ajouter_chapitre')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ChapitreController::ajouterChapitreAction',));
        }

        // mooc_mooc_Modifier_chapitre
        if (0 === strpos($pathinfo, '/ModifierChapitre') && preg_match('#^/ModifierChapitre/(?P<id>[^/]++)/(?P<idcours>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_Modifier_chapitre')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ChapitreController::modifierChapitreAction',));
        }

        if (0 === strpos($pathinfo, '/AjouterQu')) {
            // mooc_mooc_Ajouter_quiz
            if ($pathinfo === '/AjouterQuiz') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuizController::ajouterQuizAction',  '_route' => 'mooc_mooc_Ajouter_quiz',);
            }

            // mooc_mooc_Ajouter_question
            if (0 === strpos($pathinfo, '/AjouterQuestion') && preg_match('#^/AjouterQuestion/(?P<idquiz>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_Ajouter_question')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuestionController::ajouterQuestionAction',));
            }

        }

        // mooc_mooc_listeQuiz
        if ($pathinfo === '/listequiz') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuizController::affichelistquizAction',  '_route' => 'mooc_mooc_listeQuiz',);
        }

        if (0 === strpos($pathinfo, '/Supprimer')) {
            // mooc_mooc_Supprimer_chapitre
            if (0 === strpos($pathinfo, '/SupprimerChapitre') && preg_match('#^/SupprimerChapitre/(?P<id>[^/]++)/(?P<idcours>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_Supprimer_chapitre')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ChapitreController::supprimerChapitreAction',));
            }

            // mooc_mooc_Supprimer_quiz
            if (0 === strpos($pathinfo, '/SupprimerQuiz') && preg_match('#^/SupprimerQuiz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_Supprimer_quiz')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuizController::supprimerQuizAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Afficher')) {
            // mooc_mooc_afficher_chapitre
            if (0 === strpos($pathinfo, '/AfficherChapitre') && preg_match('#^/AfficherChapitre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_afficher_chapitre')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ChapitreController::afficheChapitreAction',));
            }

            // mooc_mooc_afficher_quiz
            if (0 === strpos($pathinfo, '/AfficherQuiz') && preg_match('#^/AfficherQuiz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_afficher_quiz')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuizController::afficheQuizAction',));
            }

        }

        // mooc_mooc_afficher_test
        if (0 === strpos($pathinfo, '/test') && preg_match('#^/test/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_afficher_test')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuizController::testAction',));
        }

        // mooc_mooc_afficher_quiz_chrono
        if (0 === strpos($pathinfo, '/AfficherQuizChrono') && preg_match('#^/AfficherQuizChrono/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_afficher_quiz_chrono')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuizController::afficheQuizChronoAction',));
        }

        // mooc_mooc_modifier_quiz
        if (0 === strpos($pathinfo, '/ModifierQuiz') && preg_match('#^/ModifierQuiz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_modifier_quiz')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\QuizController::afficheQuizModifierAction',));
        }

        // mooc_mooc_delCours
        if (0 === strpos($pathinfo, '/DeleteCours') && preg_match('#^/DeleteCours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_delCours')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\CoursController::deleteAction',));
        }

        // mooc_mooc_updateCours
        if (0 === strpos($pathinfo, '/UpdateCours') && preg_match('#^/UpdateCours/(?P<id>[^/]++)/(?P<idquiz>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_updateCours')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\CoursController::updateCoursAction',));
        }

        // mooc_mooc_PassOublier
        if ($pathinfo === '/PassOublier') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\MailController::PassOublierAction',  '_route' => 'mooc_mooc_PassOublier',);
        }

        // mooc_mooc_Send
        if ($pathinfo === '/Send') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\MailController::SendAction',  '_route' => 'mooc_mooc_Send',);
        }

        // mooc_mooc_CodeConfirme
        if ($pathinfo === '/CodeConfirme') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\MailController::CodeConfirmeAction',  '_route' => 'mooc_mooc_CodeConfirme',);
        }

        // mooc_mooc_modifPass
        if (0 === strpos($pathinfo, '/modifPass') && preg_match('#^/modifPass/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_modifPass')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\MailController::modifPassAction',));
        }

        // mooc_mooc_ModifPassword
        if (0 === strpos($pathinfo, '/ModifPassword') && preg_match('#^/ModifPassword/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_ModifPassword')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\MailController::ModifPasswordAction',));
        }

        // mooc_inscription_apprenant
        if ($pathinfo === '/inscriptionApprenant') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::inscriptionApprenantAction',  '_route' => 'mooc_inscription_apprenant',);
        }

        // mooc_espace_apprenant
        if ($pathinfo === '/espaceapprenant') {
            return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::EspaceApprenantAction',  '_route' => 'mooc_espace_apprenant',);
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

        if (0 === strpos($pathinfo, '/accueilapprenant')) {
            // mooc_accueil_apprenant
            if (preg_match('#^/accueilapprenant/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_accueil_apprenant')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::acceuilApprenantAction',));
            }

            // mooc_editer_profil_apprenant
            if ($pathinfo === '/accueilapprenant') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::editerProfilAction',  '_route' => 'mooc_editer_profil_apprenant',);
            }

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

        if (0 === strpos($pathinfo, '/detailCoursApprenant')) {
            // mooc_detail_cours_apprenant
            if (preg_match('#^/detailCoursApprenant/(?P<idCourSuivi>[^/]++)/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_detail_cours_apprenant')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::detailCoursApprenantAction',));
            }

            // mooc_editer_cours_apprenant
            if ($pathinfo === '/detailCoursApprenant') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::editCoursApprenantAction',  '_route' => 'mooc_editer_cours_apprenant',);
            }

        }

        if (0 === strpos($pathinfo, '/CoursApprenan')) {
            // mooc_suivre_cour_apprenant
            if ($pathinfo === '/CoursApprenant') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::suivreCoursAction',  '_route' => 'mooc_suivre_cour_apprenant',);
            }

            // mooc_supprimer_cours_apprenant
            if ($pathinfo === '/CoursApprenan') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::supprimerAction',  '_route' => 'mooc_supprimer_cours_apprenant',);
            }

        }

        // mooc_editer_password_apprenant
        if (preg_match('#^/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_editer_password_apprenant')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::editPasswordAction',));
        }

        // mooc_consult_cours_apprenant
        if (0 === strpos($pathinfo, '/consulterCours') && preg_match('#^/consulterCours/(?P<cours>[^/]++)/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_consult_cours_apprenant')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::consultAction',));
        }

        // mooc_pdf
        if (0 === strpos($pathinfo, '/pdf') && preg_match('#^/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_pdf')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\CoursController::pdfAction',));
        }

        // mooc_apprenant_cours_details
        if (0 === strpos($pathinfo, '/coursDet') && preg_match('#^/coursDet/(?P<idCours>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_apprenant_cours_details')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\ApprenantController::coursDetailsAction',));
        }

        if (0 === strpos($pathinfo, '/PreinscriptionOrganisme')) {
            // mooc_mooc_PreinscriptionOrganisme
            if ($pathinfo === '/PreinscriptionOrganisme') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::PreinscriptionOrganismeAction',  '_route' => 'mooc_mooc_PreinscriptionOrganisme',);
            }

            // mooc_mooc_PreinscriptionOrganismeEnreg
            if ($pathinfo === '/PreinscriptionOrganismeEnreg') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::PreinscriptionOrganismeEnregAction',  '_route' => 'mooc_mooc_PreinscriptionOrganismeEnreg',);
            }

        }

        if (0 === strpos($pathinfo, '/inscriptionOrganisme')) {
            // mooc_mooc_inscriptionOrganisme
            if (preg_match('#^/inscriptionOrganisme/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_inscriptionOrganisme')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::inscriptionOrganismeAction',));
            }

            // mooc_mooc_inscriptionOrganismeMail
            if (0 === strpos($pathinfo, '/inscriptionOrganismeMail') && preg_match('#^/inscriptionOrganismeMail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_inscriptionOrganismeMail')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::inscriptionOrganismeMailAction',));
            }

        }

        // mooc_mooc_acceuilOrganisme
        if (0 === strpos($pathinfo, '/acceuilOrganisme') && preg_match('#^/acceuilOrganisme/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_acceuilOrganisme')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::acceuilOrganismeAction',));
        }

        // mooc_mooc_profileOrganisme
        if (0 === strpos($pathinfo, '/profileOrganisme') && preg_match('#^/profileOrganisme/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_profileOrganisme')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::profileOrganismeAction',));
        }

        if (0 === strpos($pathinfo, '/liste')) {
            // mooc_mooc_listeOrganisme
            if ($pathinfo === '/listeOrganisme') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::listeOrganismeAction',  '_route' => 'mooc_mooc_listeOrganisme',);
            }

            // mooc_mooc_listeFormateurs
            if (0 === strpos($pathinfo, '/listeFormateurs') && preg_match('#^/listeFormateurs/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_listeFormateurs')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::listeFormateursAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Liste')) {
            // mooc_mooc_ListeFormateurs1
            if (0 === strpos($pathinfo, '/ListeFormateurs1') && preg_match('#^/ListeFormateurs1/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_ListeFormateurs1')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::ListeFormateurs1Action',));
            }

            // mooc_mooc_ListeTousFormateurs
            if (0 === strpos($pathinfo, '/ListeTousFormateurs') && preg_match('#^/ListeTousFormateurs/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_ListeTousFormateurs')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::ListeTousFormateursAction',));
            }

            // mooc_mooc_ListeOrganismes1
            if (0 === strpos($pathinfo, '/ListeOrganismes1') && preg_match('#^/ListeOrganismes1/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_ListeOrganismes1')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::ListeOrganismes1Action',));
            }

        }

        // mooc_mooc_mail
        if (0 === strpos($pathinfo, '/mail') && preg_match('#^/mail/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_mail')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::mailAction',));
        }

        if (0 === strpos($pathinfo, '/Chercher')) {
            if (0 === strpos($pathinfo, '/ChercherFormateur')) {
                // mooc_mooc_ChercherFormateur
                if (preg_match('#^/ChercherFormateur/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_ChercherFormateur')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::ChercherFormateurAction',));
                }

                // mooc_mooc_ChercherFormateur2
                if (0 === strpos($pathinfo, '/ChercherFormateur2') && preg_match('#^/ChercherFormateur2/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_ChercherFormateur2')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::ChercherFormateur2Action',));
                }

            }

            // mooc_mooc_ChercherOrganisme
            if (0 === strpos($pathinfo, '/ChercherOrganisme') && preg_match('#^/ChercherOrganisme/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_ChercherOrganisme')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::ChercherOrganismeAction',));
            }

        }

        // mooc_mooc_SupprimerFormateur
        if (0 === strpos($pathinfo, '/SupprimerFormateur') && preg_match('#^/SupprimerFormateur/(?P<cin>[^/]++)/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_SupprimerFormateur')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::supprimerAction',));
        }

        if (0 === strpos($pathinfo, '/ProfilFormateur')) {
            // mooc_mooc_ProfilFormateur
            if (preg_match('#^/ProfilFormateur/(?P<cin>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_ProfilFormateur')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::ProfilFormateurAction',));
            }

            // mooc_mooc_ProfilFormateur1
            if (0 === strpos($pathinfo, '/ProfilFormateur1') && preg_match('#^/ProfilFormateur1/(?P<nom>[^/]++)/(?P<name>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_ProfilFormateur1')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::ProfilFormateur1Action',));
            }

            // mooc_mooc_ProfilFormateur2
            if (0 === strpos($pathinfo, '/ProfilFormateur2') && preg_match('#^/ProfilFormateur2/(?P<cin>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_ProfilFormateur2')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::ProfilFormateur2Action',));
            }

        }

        // mooc_mooc_profileAutreOrganisme
        if (0 === strpos($pathinfo, '/profileAutreOrganisme') && preg_match('#^/profileAutreOrganisme/(?P<name>[^/]++)/(?P<name2>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_profileAutreOrganisme')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::profileAutreOrganismeAction',));
        }

        // mooc_mooc_ListeInvit
        if (0 === strpos($pathinfo, '/ListeInvit') && preg_match('#^/ListeInvit/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_ListeInvit')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::ListeInvitAction',));
        }

        // mooc_mooc_InviterFormateur
        if (0 === strpos($pathinfo, '/InviterFormateur') && preg_match('#^/InviterFormateur/(?P<cin>[^/]++)/(?P<login>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_InviterFormateur')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::InviterFormateurAction',));
        }

        // mooc_mooc_Organisme_AccepterInvit
        if (0 === strpos($pathinfo, '/AccepterInvit') && preg_match('#^/AccepterInvit/(?P<id>[^/]++)/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_Organisme_AccepterInvit')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::AccepterInvitAction',));
        }

        // mooc_mooc_supprimerInvit
        if (0 === strpos($pathinfo, '/supprimerInvit') && preg_match('#^/supprimerInvit/(?P<id>[^/]++)/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_supprimerInvit')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::supprimerInvitAction',));
        }

        // mooc_mooc_publierCoursOrganisme
        if (0 === strpos($pathinfo, '/publierCoursOrganisme') && preg_match('#^/publierCoursOrganisme/(?P<name>[^/]++)/(?P<nbr>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_mooc_publierCoursOrganisme')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\OrganismeController::publierCoursOrganismeAction',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
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

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // avanzu_admin_home
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_home');
                }

                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DashboardController::dashboardAction',  '_route' => 'avanzu_admin_home',);
            }

            // avanzu_admin_demo
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_demo');
                }

                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DashboardController::dashboardAction',  '_route' => 'avanzu_admin_demo',);
            }

            // admin_mail
            if ($pathinfo === '/admin/admin-mail') {
                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::adminMailAction',  '_route' => 'admin_mail',);
            }

            if (0 === strpos($pathinfo, '/admin/d')) {
                // avanzu_admin_dashboard
                if (rtrim($pathinfo, '/') === '/admin/dashboard') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'avanzu_admin_dashboard');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DashboardController::dashboardAction',  '_route' => 'avanzu_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/demo-admin/ui-elements')) {
                    // avanzu_admin_ui_gen_demo
                    if (rtrim($pathinfo, '/') === '/admin/demo-admin/ui-elements/general') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'avanzu_admin_ui_gen_demo');
                        }

                        return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::uiGeneralAction',  '_route' => 'avanzu_admin_ui_gen_demo',);
                    }

                    // avanzu_admin_ui_icon_demo
                    if (rtrim($pathinfo, '/') === '/admin/demo-admin/ui-elements/icons') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'avanzu_admin_ui_icon_demo');
                        }

                        return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::uiIconsAction',  '_route' => 'avanzu_admin_ui_icon_demo',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/liste')) {
                // liste_organisme
                if ($pathinfo === '/admin/liste-organisme') {
                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\OrganismeController::listeOrganismeAction',  '_route' => 'liste_organisme',);
                }

                // liste_organisme2
                if ($pathinfo === '/admin/listee-organisme') {
                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\OrganismeController::listeOrganisme2Action',  '_route' => 'liste_organisme2',);
                }

                // liste_formateur
                if ($pathinfo === '/admin/liste-formateur') {
                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::formateurAction',  '_route' => 'liste_formateur',);
                }

            }

            // charts
            if ($pathinfo === '/admin/charts') {
                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\ChartsController::chartsAction',  '_route' => 'charts',);
            }

            // test
            if ($pathinfo === '/admin/test') {
                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::testAction',  '_route' => 'test',);
            }

            // details_organisme
            if (0 === strpos($pathinfo, '/admin/details-organisme') && preg_match('#^/admin/details\\-organisme/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'details_organisme')), array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\OrganismeController::detailsOrganismeAction',));
            }

            // valider_organisme
            if (0 === strpos($pathinfo, '/admin/valider-organisme') && preg_match('#^/admin/valider\\-organisme/(?P<id>[^/]++)/(?P<mail>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'valider_organisme')), array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\OrganismeController::validerOrganismeAction',));
            }

            // bloquer_organisme
            if (0 === strpos($pathinfo, '/admin/bloquer-organisme') && preg_match('#^/admin/bloquer\\-organisme/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bloquer_organisme')), array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\OrganismeController::bloquerOrganismeAction',));
            }

            // supprimer_organisme
            if (0 === strpos($pathinfo, '/admin/supprimer-organisme') && preg_match('#^/admin/supprimer\\-organisme/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_organisme')), array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::supprimerOrganismeAction',));
            }

            // print
            if ($pathinfo === '/admin/print') {
                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\OrganismeController::printAction',  '_route' => 'print',);
            }

            // admin_mail_organisme
            if (0 === strpos($pathinfo, '/admin/mail-organisme') && preg_match('#^/admin/mail\\-organisme/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mail_organisme')), array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::SendmailAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
