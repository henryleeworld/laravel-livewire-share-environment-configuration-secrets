<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Frontend Language Lines
    |--------------------------------------------------------------------------
    */
    'account' => [
        'title'   => 'My Account',
        'content' => [
            'details'       => 'Details',
            'email_address' => 'Email address',
            'first_name'    => 'First name',
            'last_name'     => 'Last name',
            'save'          => 'Save',
        ],
    ],
    'apps' => [
        'title'   => 'Apps',
        'content' => [
            'search'                           => 'Search...',
            'no_apps'                          => 'No apps',
            'no_results_match'                 => 'No results match this query.',
            'there_are_currently_no_apps_here' => 'There are currently no apps here. Please ask an administrator to create one for you.',
            'variable'                         => 'variable',
            'variables'                        => 'variables',
        ],
        'pagination' => [
            'of'       => 'of',
            'next'     => 'Next',
            'previous' => 'Previous',
            'results'  => 'results',
            'showing'  => 'Showing',
            'to'       => 'to',
        ],
        'create'  => [
            'title'   => 'New app',
            'content' => [
                'continue'       => 'Continue',
                'my_awesome_app' => 'My Awesome App',
            ],
        ],
        'edit'  => [
            'content' => [
                'add'                             => 'Add',
                'admin'                           => 'Admin',
                'administrator'                   => 'Administrator',
                'are_you_sure_you_want_to_delete'  => 'Are you sure you want to delete',
                'are_you_sure_you_want_to_grant'  => 'Are you sure you want to grant',
                'are_you_sure_you_want_to_remove' => 'Are you sure you want to remove',
                'are_you_sure_you_want_to_revoke' => 'Are you sure you want to revoke the admin privileges for',
                'back'                            => 'Back',
                'cancel'                          => 'Cancel',
                'channel'                         => 'Channel',
                'collaborators'                   => 'Collaborators',
                'confirm'                         => 'Confirm',
                'delete_this_app'                 => 'Delete this app',
                'details'                         => 'Details',
                'edit'                            => 'Edit',
                'general'                         => 'general',
                'grant_admin_privileges'          => 'Grant admin privileges',
                'name'                            => 'Name',
                'no_longer_be_able_to_edit'       => 'They will no longer be able to edit this app\'s variables.',
                'no_longer_be_able_to_view'       => 'from project collaborator? They may no longer be able to view this project.',
                'owner'                           => 'Owner',
                'remove_this_collaborator'        => 'Remove this collaborator',
                'revoke_admin_privileges'         => 'Revoke admin privileges',
                'save'                            => 'Save',
                'saved'                           => 'Saved!',
                'slack_notifications'             => [
                    'title'     => 'Slack Notifications',
                    'disabled'  => 'disabled.',
					'enabled'   => 'enabled.',
                    'statement' => 'Slack notifications',
                ],
                'this_action_is_permanent'        => '? This action is permanent.',
                'webhook_url'                     => 'Webhook URL',
                'will_be_able_to_edit_this_app'   => 'admin privileges? They will be able to edit this app\'s variables.',
            ],
        ],
        'show'  => [
            'content' => [
                'copy'            => 'Copy',
                'manage_app'      => 'Manage App',
                'set_up_this_app' => 'Set up this app',
            ],
        ],
    ],
    'auth' => [
        'content' => [
            'a_fresh_code_has_been_sent'    => 'A fresh code has been sent to your email address.',
            'continue'                      => 'Continue',
            'resend_code'                   => 'Resend code',
            'shot_an_email_into_your_inbox' => 'We\'ve shot an email into your inbox with a confirmation code. What code did we send?',
            'sign_out'                      => 'Sign out',
            'the_code_we_emailed_you'       => 'The code we emailed you',
            'your_email_address'            => 'Your email address',
        ],
    ],
    'log' => [
        'title'   => 'Audit Log',
        'content' => [
            'action'                  => 'Action',
            'date'                    => 'Date',
            'no_results'              => 'No results match this query.',
            'select_action'           => 'Select action...',
            'select_app'              => 'Select app...',
            'select_user_responsible' => 'Select user responsible...',
            'app'           => [
                'created'                       => 'App created',
                'deleted'                       => 'App deleted',
                'name_updated'                  => 'App name updated',
                'notifications_set_up'          => 'App notifications set up',
                'notification_settings_updated' => 'App notification settings updated',
                'collaborator_added'            => 'Collaborator added',
                'collaborator_removed'          => 'Collaborator removed',
                'collaborator_role_updated'     => 'Collaborator role updated',
            ],
            'user'          => [
                'title'                 => 'User',
                'added'                 => 'User added',
                'email_address_updated' => 'User email address updated',
                'name_updated'          => 'User name updated',
                'removed'               => 'User removed',
                'role_updated'          => 'User role updated',
                'signed_in'             => 'User signed in',
            ],
            'variable'      => [
                'created'       => 'Variable created',
                'deleted'       => 'Variable deleted',
                'imported'      => 'Variables imported',
                'key_updated'   => 'Variable key updated',
                'value_updated' => 'Variable value updated',
            ],
        ],
        'pagination' => [
            'of'       => 'of',
            'next'     => 'Next',
            'previous' => 'Previous',
            'results'  => 'results',
            'showing'  => 'Showing',
            'to'       => 'to',
        ],
    ],
    'menu' => [
        'content' => [
            'close_main_menu' => 'Close main menu',
            'main_menu'       => 'Main menu',
        ],
    ],
    'setup' => [
        'content' => [
            'complete_setup'  => 'Complete Setup',
            'get_started'     => 'Get started by providing details for the owner\'s account. Owners have no restrictions and can manage anything on your server.',
            'ready_to_use'    => 'You\'re nearly ready to use!',
            'your_email_address'       => 'Your email address',
            'your_first_name' => 'Your first name',
            'your_last_name'  => 'Your last name',
        ],
    ],
    'users' => [
        'title'   => 'Users',
        'content' => [
            'admin'             => 'Admin',
            'no_users_here_yet' => 'No users here yet!',
            'owner'             => 'Owner',
        ],
        'create'  => [
            'title'   => 'New user',
            'content' => [
                'create'        => 'Create',
                'email_address' => 'Email address',
                'first_name'    => 'First name',
                'last_name'     => 'Last name',
            ],
        ],
        'delete'  => [
            'title'   => 'Delete this user',
            'content' => [
                'are_you_sure_you_want_to_delete' => 'Are you sure you want to delete this user? This action is permanent.',
                'cancel'                          => 'Cancel',
                'confirm'                         => 'Confirm',
            ],
        ],
        'edit'  => [
            'content' => [
                'admins_can_manage_every_app'  => 'Admins can manage every app on your server, and can create new users.',
                'back'                         => 'Back',
                'edit'                         => 'Edit',
                'email_address'                => 'Email address',
                'first_name'                   => 'First name',
                'last_name'                    => 'Last name',
                'owners_have_no_restrictions'  => 'Owners have no restrictions and can manage anything on your server.',
                'role'                         => 'Role',
                'save'                         => 'Save',
                'users_cannot_access_any_apps' => 'Users can’t access any apps by default, instead being added as a “collaborator” to their apps.',
            ],
        ],
        'show'  => [
            'content' => [
                'admin'         => 'Admin',
                'close'         => 'Close',
                'edit'          => 'Edit',
                'email_address' => 'Email address',
                'first_name'    => 'First name',
                'last_name'     => 'Last name',
                'owner'         => 'Owner',
                'role'          => 'Role',
                'user'          => 'User',
            ],
        ],
    ],
    'variables' => [
        'title'   => 'Variables',
        'content' => [
            'no_variables_here_yet' => 'No variables here yet!',
        ],
        'create'  => [
            'title'   => 'New variable',
            'content' => [
                'cancel'           => 'Cancel',
                'create'           => 'Create',
                'import'           => 'Import',
                'import_variables' => 'Import Variables',
                'imported'         => 'Imported',
                'variables'        => 'variables!',
            ],
        ],
        'delete'  => [
            'title'   => 'Delete this variable',
            'content' => [
                'are_you_sure_you_want_to_delete' => 'Are you sure you want to delete this variable? This action is permanent.',
                'cancel'                          => 'Cancel',
                'confirm'                         => 'Confirm',
            ],
        ],
        'edit'  => [
            'content' => [
                'back'         => 'Back',
                'edit'         => 'Edit',
                'roll_back_to' => 'Roll back to',
                'save'         => 'Save',
                'saved'        => 'Saved!',
            ],
        ],
        'show'  => [
            'content' => [
                'close' => 'Close',
                'edit'  => 'Edit',
            ],
        ],
    ],
];
