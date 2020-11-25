<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'app_api_adduser' => [[], ['__controller' => 'App\\Controller\\ApiController::addUser', '__api_resource_class' => 'User', '__api_collection_operation_name' => 'add_user', '_controller' => 'App\\Controller\\ApiController::addUser'], [], [['text', '/api/admin/users']], [], []],
    'app_api_apprenantaddedbyformateur' => [[], ['__controller' => 'App\\Controller\\ApiController::ApprenantAddedByFormateur', '__api_resource_class' => 'User', '__api_collection_operation_name' => 'add_apprenants', '_controller' => 'App\\Controller\\ApiController::ApprenantAddedByFormateur'], [], [['text', '/api/apprenants']], [], []],
    'app_api_groupecompetence' => [[], ['__controller' => 'App\\Controller\\ApiController::GroupeCompetence', '__api_resource_class' => 'App\\Entity\\GrpCompetences', '__api_collection_operation_name' => 'groupecompetences', '_controller' => 'App\\Controller\\ApiController::GroupeCompetence'], [], [['text', '/api/admin/grpecompetences']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
    'api_administrateurs_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Administrateur', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/adm']], [], []],
    'api_administrateurs_POST_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Administrateur', '_api_collection_operation_name' => 'POST'], [], [['text', '/api/admin/adm/add']], [], []],
    'api_administrateurs_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Administrateur', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/administrateurs']], [], []],
    'api_administrateurs_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Administrateur', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/administrateurs']], [], []],
    'api_administrateurs_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Administrateur', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/administrateurs']], [], []],
    'api_administrateurs_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Administrateur', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/administrateurs']], [], []],
    'api_users_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/users']], [], []],
    'api_users_add_users_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_users'], [], [['text', '/api/admin/users']], [], []],
    'api_users_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
    'api_users_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
    'api_users_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
    'api_users_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
    'api_formateurs_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_formateurs_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_formateurs_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_formateurs_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/formateurs']], [], []],
    'api_apprenants_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/apprenant']], [], []],
    'api_apprenants_add_apprenant_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'add_apprenant'], [], [['text', '/api/apprenants']], [], []],
    'api_apprenants_Add_apprenant_by_admin_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'Add_apprenant_by_admin'], [], [['text', '/api/admin/apprenants']], [], []],
    'api_apprenants_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/apprenants']], [], []],
    'api_apprenants_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/apprenants']], [], []],
    'api_apprenants_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/apprenants']], [], []],
    'api_apprenants_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/apprenants']], [], []],
    'api_profil_sorties_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/profilsorties']], [], []],
    'api_profil_sorties_post_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_collection_operation_name' => 'post'], [], [['text', '/api/admin/profilsorties']], [], []],
    'api_profil_sorties_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/profil_sorties']], [], []],
    'api_profil_sorties_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/profil_sorties']], [], []],
    'api_profil_sorties_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/profil_sorties']], [], []],
    'api_profil_sorties_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ProfilSortie', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/profil_sorties']], [], []],
    'api_profiles_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/profils']], [], []],
    'api_profiles_POST_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_collection_operation_name' => 'POST'], [], [['text', '/api/admin/profils']], [], []],
    'api_profiles_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profil']], [], []],
    'api_profiles_delete_item' => [['id'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_item_operation_name' => 'delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profil']], [], []],
    'api_profiles_get_profil_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_item_operation_name' => 'get_profil'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/profil']], [], []],
    'api_profiles_profils_get_subresource' => [['id', '_format'], ['_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profiles_profils_get_subresource', '_api_subresource_context' => ['property' => 'profil', 'identifiers' => [['id', 'App\\Entity\\Profile', true]], 'collection' => true, 'operationId' => 'api_profiles_profils_get_subresource']], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/profils'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/profiles']], [], []],
    'api_grp_competences_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GrpCompetences', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/grpecompetences']], [], []],
    'api_grp_competences_groupecompetences_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\GrpCompetences', '_api_collection_operation_name' => 'groupecompetences'], [], [['text', '/api/admin/grpecompetences']], [], []],
    'api_grp_competences_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\GrpCompetences', '_api_item_operation_name' => 'get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/grpecompetences']], [], []],
    'api_niveaux_evaluations_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NiveauxEvaluation', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/niveau_envaluation']], [], []],
    'api_niveaux_evaluations_POST_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NiveauxEvaluation', '_api_collection_operation_name' => 'POST'], [], [['text', '/api/admin/niveau_envaluation']], [], []],
    'api_niveaux_evaluations_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NiveauxEvaluation', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/niveaux_evaluations']], [], []],
    'api_niveaux_evaluations_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NiveauxEvaluation', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/niveaux_evaluations']], [], []],
    'api_niveaux_evaluations_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NiveauxEvaluation', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/niveaux_evaluations']], [], []],
    'api_niveaux_evaluations_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NiveauxEvaluation', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/niveaux_evaluations']], [], []],
    'api_competences_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/competences']], [], []],
    'api_competences_add_competence_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_collection_operation_name' => 'add_competence'], [], [['text', '/api/admin/competences']], [], []],
    'api_competences_get_item' => [['id'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/competences']], [], []],
    'api_competences_put_item' => [['id'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competences', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/admin/competences']], [], []],
    'api_cms_get_collection' => [[], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_collection_operation_name' => 'get'], [], [['text', '/api/admin/cm']], [], []],
    'api_cms_POST_collection' => [[], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_collection_operation_name' => 'POST'], [], [['text', '/api/admin/cm/add']], [], []],
    'api_cms_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/cms']], [], []],
    'api_cms_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/cms']], [], []],
    'api_cms_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/cms']], [], []],
    'api_cms_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Cm', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/cms']], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], []],
];