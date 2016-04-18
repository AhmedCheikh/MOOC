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

            // _easyadmin_render_css
            if ($pathinfo === '/comite/_css/easyadmin.css') {
                return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::renderCssAction',  '_route' => '_easyadmin_render_css',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // avanzu_admin_home
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_home');
                }

                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'avanzu_admin_home',);
            }

            // avanzu_admin_profile
            if (0 === strpos($pathinfo, '/admin/profile') && preg_match('#^/admin/profile/(?P<userid>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_profile');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avanzu_admin_profile')), array ());
            }

            // avanzu_admin_logout
            if ($pathinfo === '/admin/logout') {
                return array('_route' => 'avanzu_admin_logout');
            }

            if (0 === strpos($pathinfo, '/admin/tasks')) {
                // avanzu_admin_all_tasks
                if (rtrim($pathinfo, '/') === '/admin/tasks') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'avanzu_admin_all_tasks');
                    }

                    return array('_route' => 'avanzu_admin_all_tasks');
                }

                // avanzu_admin_show_task
                if (preg_match('#^/admin/tasks/(?P<taskid>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'avanzu_admin_show_task');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avanzu_admin_show_task')), array ());
                }

            }

            if (0 === strpos($pathinfo, '/admin/notifications')) {
                // avanzu_admin_all_notifications
                if (rtrim($pathinfo, '/') === '/admin/notifications') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'avanzu_admin_all_notifications');
                    }

                    return array('_route' => 'avanzu_admin_all_notifications');
                }

                // avanzu_admin_show_notification
                if (preg_match('#^/admin/notifications/(?P<notifyid>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'avanzu_admin_show_notification');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avanzu_admin_show_notification')), array ());
                }

            }

            if (0 === strpos($pathinfo, '/admin/messages')) {
                // avanzu_admin_all_messages
                if (rtrim($pathinfo, '/') === '/admin/messages') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'avanzu_admin_all_messages');
                    }

                    return array('_route' => 'avanzu_admin_all_messages');
                }

                // avanzu_admin_show_message
                if (preg_match('#^/admin/messages/(?P<messageid>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'avanzu_admin_show_message');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avanzu_admin_show_message')), array ());
                }

            }

            // avanzu_admin_demo
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avanzu_admin_demo');
                }

                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'avanzu_admin_demo',);
            }

            if (0 === strpos($pathinfo, '/admin/d')) {
                if (0 === strpos($pathinfo, '/admin/demo-admin')) {
                    // avanzu_admin_form_demo
                    if (rtrim($pathinfo, '/') === '/admin/demo-admin/form-demo') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'avanzu_admin_form_demo');
                        }

                        return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::formAction',  '_route' => 'avanzu_admin_form_demo',);
                    }

                    // avanzu_admin_login_demo
                    if (rtrim($pathinfo, '/') === '/admin/demo-admin/login') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'avanzu_admin_login_demo');
                        }

                        return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::loginAction',  '_route' => 'avanzu_admin_login_demo',);
                    }

                    // avanzu_admin_dash_demo
                    if (rtrim($pathinfo, '/') === '/admin/demo-admin/dashboard') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'avanzu_admin_dash_demo');
                        }

                        return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'avanzu_admin_dash_demo',);
                    }

                }

                // avanzu_admin_dashboard
                if (rtrim($pathinfo, '/') === '/admin/dashboard') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'avanzu_admin_dashboard');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::dashboard2Action',  '_route' => 'avanzu_admin_dashboard',);
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

            if (0 === strpos($pathinfo, '/admin/liste-')) {
                // liste_organisme
                if ($pathinfo === '/admin/liste-organisme') {
                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::listeOrganismeAction',  '_route' => 'liste_organisme',);
                }

                // liste_formateur
                if ($pathinfo === '/admin/liste-formateur') {
                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::formateurAction',  '_route' => 'liste_formateur',);
                }

            }

            // charts
            if ($pathinfo === '/admin/charts') {
                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::chartsAction',  '_route' => 'charts',);
            }

            // test
            if ($pathinfo === '/admin/test') {
                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::testAction',  '_route' => 'test',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
