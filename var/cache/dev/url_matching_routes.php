<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/admin/users' => [
            [['_route' => 'app_api_adduser', '__controller' => 'App\\Controller\\ApiController::addUser', '__api_resource_class' => 'App\\Entity\\User', '__api_collection_operation_name' => 'add_user', '_controller' => 'App\\Controller\\ApiController::addUser'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_users_add_users_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_users'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/apprenants' => [
            [['_route' => 'app_api_apprenantaddedbyformateur', '__controller' => 'App\\Controller\\ApiController::ApprenantAddedByFormateur', '__api_resource_class' => 'App\\Entity\\User', '__api_collection_operation_name' => 'add_apprenants', '_controller' => 'App\\Controller\\ApiController::ApprenantAddedByFormateur'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_apprenants_add_apprenant_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'add_apprenant'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/grpecompetences' => [
            [['_route' => 'app_api_groupecompetence', '__controller' => 'App\\Controller\\ApiController::GroupeCompetence', '__api_resource_class' => 'App\\Entity\\GrpCompetences', '__api_collection_operation_name' => 'groupecompetences', '_controller' => 'App\\Controller\\ApiController::GroupeCompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_grp_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GrpCompetences', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_grp_competences_groupecompetences_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GrpCompetences', '_api_collection_operation_name' => 'groupecompetences'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/Referentiels' => [
            [['_route' => 'app_api_addreferentiels', '__controller' => 'App\\Controller\\ApiController::addREferentiels', '__api_resource_class' => 'App\\Entity\\Referentiel', '__api_collection_operation_name' => 'add_referentiels', '_controller' => 'App\\Controller\\ApiController::addREferentiels'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_add_referentiels_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'add_referentiels'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/promo' => [
            [['_route' => 'app_api_addpromo', '__controller' => 'App\\Controller\\ApiController::addPromo', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'add_competence', '_controller' => 'App\\Controller\\ApiController::addPromo'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_promos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_promos_add_promo_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'add_promo'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/grptags' => [
            [['_route' => 'app_api_addgrouptag', '__controller' => 'App\\Controller\\ApiController::addGroupTag', '__api_resource_class' => 'App\\Entity\\GroupeTag', '__api_collection_operation_name' => 'add_Grptag', '_controller' => 'App\\Controller\\ApiController::addGroupTag'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupe_tags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupe_tags_add_Grptag_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_collection_operation_name' => 'add_Grptag'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/groupes' => [
            [['_route' => 'app_api_addgroup', '__controller' => 'App\\Controller\\ApiController::addGroup', '__api_resource_class' => 'App\\Entity\\GroupeTag', '__api_collection_operation_name' => 'add_groupe', '_controller' => 'App\\Controller\\ApiController::addGroup'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupes_add_groupe_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'add_groupe'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/formateur/livrables' => [
            [['_route' => 'app_livrables_addlivrable', '__controller' => 'App\\Controller\\ApiController::addLivrable', '__api_resource_class' => 'App\\Entity\\Livrables', '__api_collection_operation_name' => 'add_livrables', '_controller' => 'App\\Controller\\LivrablesController::addLivrable'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_livrables_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Livrables', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_livrables_add_livrable_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Livrables', '_api_collection_operation_name' => 'add_livrable'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/adm' => [[['_route' => 'api_administrateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Administrateur', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/adm/add' => [[['_route' => 'api_administrateurs_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Administrateur', '_api_collection_operation_name' => 'POST'], null, ['POST' => 0], null, false, false, null]],
        '/api/admin/critere_evaluations' => [
            [['_route' => 'api_critere_evaluations_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CritereEvaluation', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_critere_evaluations_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CritereEvaluation', '_api_collection_operation_name' => 'POST'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/critere_admissions' => [
            [['_route' => 'api_critere_admissions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CritereAdmission', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_critere_admissions_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CritereAdmission', '_api_collection_operation_name' => 'POST'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/formateur/livrablespartiels' => [
            [['_route' => 'api_livrable_partielles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartielle', '_api_collection_operation_name' => 'post'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_livrable_partielles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartielle', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/tags' => [
            [['_route' => 'api_tags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_tags_add_tag_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'add_tag'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/apprenant' => [[['_route' => 'api_apprenants_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/apprenants' => [[['_route' => 'api_apprenants_Add_apprenant_by_admin_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'Add_apprenant_by_admin'], null, ['POST' => 0], null, false, false, null]],
        '/api/admin/profilsorties' => [
            [['_route' => 'api_profil_sorties_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_profil_sorties_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/profils' => [
            [['_route' => 'api_profiles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_profiles_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_collection_operation_name' => 'POST'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/niveau_envaluation' => [
            [['_route' => 'api_niveaux_evaluations_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NiveauxEvaluation', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_niveaux_evaluations_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NiveauxEvaluation', '_api_collection_operation_name' => 'POST'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/competences' => [
            [['_route' => 'api_competences_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_competences_add_competence_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'add_competence'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/admin/cm' => [[['_route' => 'api_cms_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/cm/add' => [[['_route' => 'api_cms_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_collection_operation_name' => 'POST'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/(?'
                        .'|admin/(?'
                            .'|users/([^/]++)(*:76)'
                            .'|referentiels/([^/]++)(*:104)'
                            .'|promo/([^/]++)(*:126)'
                        .')'
                        .'|formateur/livrables/([^/]++)(*:163)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:200)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:231)'
                        .'|c(?'
                            .'|ontexts/(.+)(?:\\.([^/]++))?(*:270)'
                            .'|ritere_(?'
                                .'|evaluations/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:328)'
                                .')'
                                .'|admissions/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:376)'
                                .')'
                            .')'
                            .'|ms/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:417)'
                            .')'
                        .')'
                        .'|a(?'
                            .'|dmin(?'
                                .'|istrateurs/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:477)'
                                .')'
                                .'|/(?'
                                    .'|users/([^/]++)(*:504)'
                                    .'|gr(?'
                                        .'|p(?'
                                            .'|tags/([^/]++)(?'
                                                .'|(*:537)'
                                            .')'
                                            .'|ecompetences/([^/]++)(*:567)'
                                        .')'
                                        .'|oupes/([^/]++)(?'
                                            .'|(*:593)'
                                        .')'
                                    .')'
                                    .'|pr(?'
                                        .'|mo(?'
                                            .'|s/([^/]++)(?'
                                                .'|(*:626)'
                                            .')'
                                            .'|/([^/]++)(*:644)'
                                        .')'
                                        .'|o(?'
                                            .'|fils/([^/]++)(?'
                                                .'|(*:673)'
                                            .')'
                                            .'|mo/([^/]++)(?'
                                                .'|(*:696)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|tags/([^/]++)(?'
                                        .'|(*:723)'
                                    .')'
                                    .'|referentiels/([^/]++)(?'
                                        .'|(*:756)'
                                    .')'
                                    .'|competences/([^/]++)(?'
                                        .'|(*:788)'
                                    .')'
                                .')'
                            .')'
                            .'|pprenants/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:837)'
                            .')'
                        .')'
                        .'|f(?'
                            .'|ormateur(?'
                                .'|s/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:892)'
                                .')'
                                .'|/(?'
                                    .'|lirvables/([^/]++)(?'
                                        .'|(*:926)'
                                    .')'
                                    .'|prmo/([^/]++)(*:948)'
                                .')'
                            .')'
                            .'|abriques(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:987)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1025)'
                                .')'
                            .')'
                        .')'
                        .'|l(?'
                            .'|ivrable_partielles/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1088)'
                            .')'
                            .'|angues(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1125)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1164)'
                                .')'
                            .')'
                        .')'
                        .'|profil(?'
                            .'|_sorties/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1222)'
                            .')'
                            .'|es/([^/]++)/profils(?:\\.([^/]++))?(*:1266)'
                        .')'
                        .'|niveaux_evaluations/([^/\\.]++)(?:\\.([^/]++))?(?'
                            .'|(*:1324)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        76 => [[['_route' => 'app_api_edituser', '__controller' => 'App\\Controller\\ApiController::editUser', '__api_resource_class' => 'App\\Entity\\User', '__api_collection_operation_name' => 'edit_user', '_controller' => 'App\\Controller\\ApiController::editUser'], ['id'], ['PUT' => 0], null, false, true, null]],
        104 => [[['_route' => 'app_api_updatereferentiel', '__controller' => 'App\\Controller\\ApiController::UpdateReferentiel', '__api_resource_class' => 'App\\Entity\\Referentiel', '__api_collection_operation_name' => 'update_profile', '_controller' => 'App\\Controller\\ApiController::UpdateReferentiel'], ['id'], ['PUT' => 0], null, false, true, null]],
        126 => [[['_route' => 'app_api_updatepormo', '__controller' => 'App\\Controller\\ApiController::UpdatePormo', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'update_promo', '_controller' => 'App\\Controller\\ApiController::UpdatePormo'], ['id'], ['PUT' => 0], null, false, true, null]],
        163 => [[['_route' => 'app_livrables_updatelivrable', '__controller' => 'App\\Controller\\ApiController::UpdateLivrable', '__api_resource_class' => 'App\\Entity\\Livrables', '__api_collection_operation_name' => 'update_livrbale', '_controller' => 'App\\Controller\\LivrablesController::UpdateLivrable'], ['id'], ['PUT' => 0], null, false, true, null]],
        200 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        231 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        270 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        328 => [
            [['_route' => 'api_critere_evaluations_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CritereEvaluation', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_critere_evaluations_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CritereEvaluation', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_critere_evaluations_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CritereEvaluation', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_critere_evaluations_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CritereEvaluation', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        376 => [
            [['_route' => 'api_critere_admissions_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CritereAdmission', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_critere_admissions_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CritereAdmission', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_critere_admissions_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CritereAdmission', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_critere_admissions_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CritereAdmission', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        417 => [
            [['_route' => 'api_cms_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_cms_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_cms_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_cms_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        477 => [
            [['_route' => 'api_administrateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Administrateur', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_administrateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Administrateur', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_administrateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Administrateur', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_administrateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Administrateur', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        504 => [[['_route' => 'api_users_edit_user_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'edit_user'], ['id'], ['PUT' => 0], null, false, true, null]],
        537 => [
            [['_route' => 'api_groupe_tags_get_Grptag_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'get_Grptag'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupe_tags_update_Grptag_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'update_Grptag'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        567 => [[['_route' => 'api_grp_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GrpCompetences', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null]],
        593 => [
            [['_route' => 'api_groupes_get_groupe_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'get_groupe'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupes_update_groupe_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'update_groupe'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        626 => [
            [['_route' => 'api_groupe_tags_delete_Grptag_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GroupeTag', '_api_item_operation_name' => 'delete_Grptag'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_tags_delete_tag_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delete_tag'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupes_delete_groupe_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'delete_groupe'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        644 => [[['_route' => 'api_promos_delete_promo_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'delete_promo'], ['id'], ['DELETE' => 0], null, false, true, null]],
        673 => [
            [['_route' => 'api_profiles_get_profil_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_item_operation_name' => 'get_profil'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profiles_update_profile_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_item_operation_name' => 'update_profile'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profiles_delete_profil_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_item_operation_name' => 'delete_profil'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        696 => [
            [['_route' => 'api_promos_get_promo_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'get_promo'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_update_promo_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'update_promo'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        723 => [
            [['_route' => 'api_tags_get_tag_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get_tag'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_update_tag_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'update_tag'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        756 => [
            [['_route' => 'api_referentiels_get_referentiels_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'get_referentiels'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_update_referentiel_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'update_referentiel'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_delete_referentiel_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'delete_referentiel'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        788 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        837 => [
            [['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        892 => [
            [['_route' => 'api_formateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        926 => [
            [['_route' => 'api_livrables_get_livrables_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Livrables', '_api_item_operation_name' => 'get_livrables'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrables_update_livrables_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Livrables', '_api_item_operation_name' => 'update_livrables'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        948 => [[['_route' => 'api_livrables_delete_livrables_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Livrables', '_api_item_operation_name' => 'delete_livrables'], ['id'], ['DELETE' => 0], null, false, true, null]],
        987 => [
            [['_route' => 'api_fabriques_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Fabrique', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_fabriques_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Fabrique', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1025 => [
            [['_route' => 'api_fabriques_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Fabrique', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_fabriques_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Fabrique', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_fabriques_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Fabrique', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_fabriques_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Fabrique', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1088 => [
            [['_route' => 'api_livrable_partielles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartielle', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_partielles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartielle', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_livrable_partielles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartielle', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_livrable_partielles_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrablePartielle', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1125 => [
            [['_route' => 'api_langues_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Langue', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_langues_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Langue', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1164 => [
            [['_route' => 'api_langues_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Langue', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_langues_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Langue', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_langues_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Langue', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_langues_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Langue', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1222 => [
            [['_route' => 'api_profil_sorties_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profil_sorties_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1266 => [[['_route' => 'api_profiles_profils_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profiles_profils_get_subresource', '_api_subresource_context' => ['property' => 'profil', 'identifiers' => [['id', 'App\\Entity\\Profile', true]], 'collection' => true, 'operationId' => 'api_profiles_profils_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1324 => [
            [['_route' => 'api_niveaux_evaluations_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NiveauxEvaluation', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_evaluations_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NiveauxEvaluation', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_evaluations_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NiveauxEvaluation', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_evaluations_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NiveauxEvaluation', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
