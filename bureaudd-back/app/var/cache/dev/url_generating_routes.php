<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'api_characters' => [[], ['_controller' => 'App\\Controller\\CharacterController::getCharacters'], [], [['text', '/api/characters']], [], [], []],
    'api_character' => [['characterId'], ['_controller' => 'App\\Controller\\CharacterController::getOneCharacter'], ['id' => '\\d+'], [['variable', '/', '[^/]++', 'characterId', true], ['text', '/api/characters']], [], [], []],
    'app_f_a_q' => [[], ['_controller' => 'App\\Controller\\FAQController::index'], [], [['text', '/f/a/q']], [], [], []],
    'app_feedback' => [[], ['_controller' => 'App\\Controller\\FeedbackController::index'], [], [['text', '/feedback']], [], [], []],
    'app_note' => [[], ['_controller' => 'App\\Controller\\NoteController::index'], [], [['text', '/note']], [], [], []],
    'app_transformation' => [[], ['_controller' => 'App\\Controller\\TransformationController::index'], [], [['text', '/transformation']], [], [], []],
    'api_users' => [[], ['_controller' => 'App\\Controller\\UserController::getUsers'], [], [['text', '/api/users']], [], [], []],
    'api_user' => [['userId'], ['_controller' => 'App\\Controller\\UserController::getOneUser'], ['id' => '\\d+'], [['variable', '/', '[^/]++', 'userId', true], ['text', '/api/users']], [], [], []],
    'api_user_characters' => [['userId'], ['_controller' => 'App\\Controller\\UserController::getCharactersOfOneUser'], ['id' => '\\d+'], [['text', '/characters'], ['variable', '/', '[^/]++', 'userId', true], ['text', '/api/users']], [], [], []],
];
