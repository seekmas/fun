<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        if (0 === strpos($pathinfo, '/js/35a8e64')) {
            // _assetic_35a8e64
            if ($pathinfo === '/js/35a8e64.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_35a8e64',);
            }

            // _assetic_35a8e64_0
            if ($pathinfo === '/js/35a8e64_comments_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_35a8e64_0',);
            }

        }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        // dashboard_show
        if ($pathinfo === '/dashboard_show') {
            return array (  '_controller' => 'Mc\\ModuleBundle\\Controller\\DashboardController::showAction',  '_route' => 'dashboard_show',);
        }

        // navigation_show
        if ($pathinfo === '/module_show') {
            return array (  '_controller' => 'Mc\\ModuleBundle\\Controller\\NavigationController::showAction',  '_route' => 'navigation_show',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/program')) {
                // admin_program
                if (rtrim($pathinfo, '/') === '/admin/program') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_program');
                    }

                    return array (  '_controller' => 'Mc\\AdminBundle\\Controller\\ProgramController::indexAction',  '_route' => 'admin_program',);
                }

                // admin_program_show
                if (preg_match('#^/admin/program/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_program_show')), array (  '_controller' => 'Mc\\AdminBundle\\Controller\\ProgramController::showAction',));
                }

                // admin_program_new
                if ($pathinfo === '/admin/program/new') {
                    return array (  '_controller' => 'Mc\\AdminBundle\\Controller\\ProgramController::newAction',  '_route' => 'admin_program_new',);
                }

                // admin_program_create
                if ($pathinfo === '/admin/program/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_program_create;
                    }

                    return array (  '_controller' => 'Mc\\AdminBundle\\Controller\\ProgramController::createAction',  '_route' => 'admin_program_create',);
                }
                not_admin_program_create:

                // admin_program_edit
                if (preg_match('#^/admin/program/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_program_edit')), array (  '_controller' => 'Mc\\AdminBundle\\Controller\\ProgramController::editAction',));
                }

                // admin_program_update
                if (preg_match('#^/admin/program/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_program_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_program_update')), array (  '_controller' => 'Mc\\AdminBundle\\Controller\\ProgramController::updateAction',));
                }
                not_admin_program_update:

                // admin_program_delete
                if (preg_match('#^/admin/program/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_program_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_program_delete')), array (  '_controller' => 'Mc\\AdminBundle\\Controller\\ProgramController::deleteAction',));
                }
                not_admin_program_delete:

            }

            if (0 === strpos($pathinfo, '/admin/unit')) {
                // admin_unit
                if (rtrim($pathinfo, '/') === '/admin/unit') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_unit');
                    }

                    return array (  '_controller' => 'Mc\\AdminBundle\\Controller\\UnitController::indexAction',  '_route' => 'admin_unit',);
                }

                // admin_unit_pagination
                if (preg_match('#^/admin/unit/(?P<program>\\d+)/(?P<page>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_unit_pagination')), array (  '_controller' => 'Mc\\AdminBundle\\Controller\\UnitController::indexAction',));
                }

                // admin_unit_show
                if (preg_match('#^/admin/unit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_unit_show')), array (  '_controller' => 'Mc\\AdminBundle\\Controller\\UnitController::showAction',));
                }

                // admin_unit_new
                if ($pathinfo === '/admin/unit/new') {
                    return array (  '_controller' => 'Mc\\AdminBundle\\Controller\\UnitController::newAction',  '_route' => 'admin_unit_new',);
                }

                // admin_unit_create
                if ($pathinfo === '/admin/unit/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_unit_create;
                    }

                    return array (  '_controller' => 'Mc\\AdminBundle\\Controller\\UnitController::createAction',  '_route' => 'admin_unit_create',);
                }
                not_admin_unit_create:

                // admin_unit_edit
                if (preg_match('#^/admin/unit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_unit_edit')), array (  '_controller' => 'Mc\\AdminBundle\\Controller\\UnitController::editAction',));
                }

                // admin_unit_update
                if (preg_match('#^/admin/unit/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_unit_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_unit_update')), array (  '_controller' => 'Mc\\AdminBundle\\Controller\\UnitController::updateAction',));
                }
                not_admin_unit_update:

                // admin_unit_delete
                if (preg_match('#^/admin/unit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_unit_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_unit_delete')), array (  '_controller' => 'Mc\\AdminBundle\\Controller\\UnitController::deleteAction',));
                }
                not_admin_unit_delete:

            }

        }

        if (0 === strpos($pathinfo, '/repository')) {
            // mc_college_public
            if ($pathinfo === '/repository') {
                return array (  '_controller' => 'Mc\\CollegeBundle\\Controller\\RepositoryController::indexAction',  '_route' => 'mc_college_public',);
            }

            // mc_college_repository
            if (preg_match('#^/repository/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mc_college_repository')), array (  '_controller' => 'Mc\\CollegeBundle\\Controller\\RepositoryController::indexAction',));
            }

        }

        // mc_college_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mc_college_homepage');
            }

            return array (  '_controller' => 'Mc\\CollegeBundle\\Controller\\PortalController::indexAction',  '_route' => 'mc_college_homepage',);
        }

        // mc_college_program
        if (0 === strpos($pathinfo, '/program') && preg_match('#^/program/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mc_college_program')), array (  '_controller' => 'Mc\\CollegeBundle\\Controller\\ProgramController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/l')) {
            // mc_college_learn
            if (0 === strpos($pathinfo, '/learn') && preg_match('#^/learn(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mc_college_learn')), array (  '_controller' => 'Mc\\CollegeBundle\\Controller\\DefaultController::indexAction',  'id' => 0,));
            }

            if (0 === strpos($pathinfo, '/log')) {
                if (0 === strpos($pathinfo, '/login')) {
                    // fos_user_security_login
                    if ($pathinfo === '/login') {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                    }

                    // fos_user_security_check
                    if ($pathinfo === '/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_security_check;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                    }
                    not_fos_user_security_check:

                }

                // fos_user_security_logout
                if ($pathinfo === '/logout') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/api/threads')) {
            // fos_comment_new_threads
            if (0 === strpos($pathinfo, '/api/threads/new') && preg_match('#^/api/threads/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => 'html',));
            }
            not_fos_comment_new_threads:

            // fos_comment_edit_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_edit_thread_commentable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',  '_format' => 'html',));
            }
            not_fos_comment_edit_thread_commentable:

            // fos_comment_new_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_new_thread_comments:

            // fos_comment_remove_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_remove_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_remove_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_remove_thread_comment:

            // fos_comment_edit_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_edit_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_edit_thread_comment:

            // fos_comment_new_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_new_thread_comment_votes:

            // fos_comment_get_thread
            if (preg_match('#^/api/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread:

            // fos_comment_get_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',  '_format' => 'html',));
            }
            not_fos_comment_get_threads:

            // fos_comment_post_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => 'html',));
            }
            not_fos_comment_post_threads:

            // fos_comment_patch_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_fos_comment_patch_thread_commentable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',  '_format' => 'html',));
            }
            not_fos_comment_patch_thread_commentable:

            // fos_comment_get_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comment:

            // fos_comment_patch_thread_comment_state
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_fos_comment_patch_thread_comment_state;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_comment_state')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',  '_format' => 'html',));
            }
            not_fos_comment_patch_thread_comment_state:

            // fos_comment_put_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_fos_comment_put_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_put_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_put_thread_comments:

            // fos_comment_get_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comments:

            // fos_comment_post_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_post_thread_comments:

            // fos_comment_get_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comment_votes:

            // fos_comment_post_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_post_thread_comment_votes:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
