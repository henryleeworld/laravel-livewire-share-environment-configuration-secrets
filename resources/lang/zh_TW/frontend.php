<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Frontend Language Lines
    |--------------------------------------------------------------------------
    */
    'account' => [
        'title'   => '我的帳戶',
        'content' => [
            'details'       => '詳細資料',
            'email_address' => '電子郵件地址',
            'first_name'    => '名字',
            'last_name'     => '姓氏',
            'save'          => '儲存',
        ],
    ],
    'apps' => [
        'title'   => '應用程式',
        'content' => [
            'search'                           => '搜尋...',
            'no_apps'                          => '無應用程式',
            'no_results_match'                 => '該查詢查無結果。',
            'there_are_currently_no_apps_here' => '目前尚無應用程式，請詢問管理員幫您建立一個應用程式。',
            'variable'                         => '變數',
            'variables'                        => '變數',
        ],
        'pagination' => [
            'of'       => '共',
            'next'     => '下一頁',
            'previous' => '上一頁',
            'results'  => '項結果',
            'showing'  => '顯示',
            'to'       => '至',
        ],
        'create'  => [
            'title'   => '新的應用程式',
            'content' => [
                'continue'       => '繼續',
                'my_awesome_app' => '我的最棒應用程式',
            ],
        ],
        'edit'  => [
            'content' => [
                'add'                             => '新增',
                'admin'                           => '管理者',
                'administrator'                   => '管理者',
                'are_you_sure_you_want_to_delete'  => '你確定你要刪除',
                'are_you_sure_you_want_to_grant'  => '你確定要同意',
                'are_you_sure_you_want_to_remove' => '你確定要刪除',
                'are_you_sure_you_want_to_revoke' => '你確定要撤銷管理員權限對使用者',
                'back'                            => '返回',
                'cancel'                          => '取消',
                'channel'                         => '頻道',
                'collaborators'                   => '協作伙伴',
                'confirm'                         => '確認',
                'delete_this_app'                 => '刪除這個應用程式',
                'details'                         => '詳細資料',
                'edit'                            => '編輯',
                'general'                         => '一般',
                'grant_admin_privileges'          => '同意管理者權限',
                'name'                            => '名稱',
                'no_longer_be_able_to_edit'       => '他們將不再能夠編輯此應用程式變數。',
                'no_longer_be_able_to_view'       => '來自協作伙伴？他們可能不能夠再瀏覽此專案。',
                'owner'                           => '負責人',
                'remove_this_collaborator'        => '移除這位協作伙伴',
                'revoke_admin_privileges'         => '撤銷管理員權限',
                'save'                            => '儲存',
                'saved'                           => '已儲存！',
                'slack_notifications'             => [
                    'title'     => 'Slack 通知',
                    'disabled'  => '關閉。',
					'enabled'   => '啟用。',
                    'statement' => 'Slack 通知',
                ],
                'this_action_is_permanent'        => '？此操作是永久性的。',
                'webhook_url'                     => 'Webhook 網址',
                'will_be_able_to_edit_this_app'   => '管理員權限？管理員將能夠編輯此應用程式的變數。',
            ],
        ],
        'show'  => [
            'content' => [
                'copy'            => '複製',
                'manage_app'      => '管理應用程式',
                'set_up_this_app' => '設定這個應用程式',
            ],
        ],
    ],
    'auth' => [
        'content' => [
            'a_fresh_code_has_been_sent'    => '新代碼已發送到您的電子郵件地址。',
            'continue'                      => '繼續',
            'resend_code'                   => '發送代碼',
            'shot_an_email_into_your_inbox' => '我們已將一封含確認碼的電子郵件發送到您的收件匣。我們之前發送了什麼代碼？',
            'sign_out'                      => '登出',
            'the_code_we_emailed_you'       => '電子郵件發送給您的代碼',
            'your_email_address'            => '您的電子郵件地址',
        ],
    ],
    'log' => [
        'title'   => '審核日誌',
        'content' => [
            'action'                  => '操作',
            'date'                    => '日期',
            'no_results'              => '該查詢查無結果。',
            'select_action'           => '選擇操作...',
            'select_app'              => '選擇應用程式...',
            'select_user_responsible' => '選擇負責的使用者...',
            'app'           => [
                'created'                       => '應用程式已新增',
                'deleted'                       => '應用程式已刪除',
                'name_updated'                  => '應用程式名稱已更新',
                'notifications_set_up'          => '應用程式通知設置',
                'notification_settings_updated' => '應用程式通知設定已更新',
                'collaborator_added'            => '協作伙伴已新增',
                'collaborator_removed'          => '協作伙伴已刪除',
                'collaborator_role_updated'     => '協作伙伴角色已更新',
            ],
            'user'          => [
                'title'                 => '使用者',
                'added'                 => '使用者已新增',
                'email_address_updated' => '使用者電子郵件地址已更新',
                'name_updated'          => '使用者名稱已更新',
                'removed'               => '使用者已刪除',
                'role_updated'          => '使用者角色已更新',
                'signed_in'             => '使用者已登入',
            ],
            'variable'      => [
                'created'       => '變數已新增',
                'deleted'       => '變數已刪除',
                'imported'      => '變數已匯入',
                'key_updated'   => '變數鍵值更新',
                'value_updated' => '變數值更新',
            ],
        ],
        'pagination' => [
            'of'       => '共',
            'next'     => '下一頁',
            'previous' => '上一頁',
            'results'  => '項結果',
            'showing'  => '顯示',
            'to'       => '至',
        ],
    ],
    'menu' => [
        'content' => [
            'close_main_menu' => '關閉主選單',
            'main_menu'       => '主選單',
        ],
    ],
    'setup' => [
        'content' => [
            'complete_setup'  => '完成設定',
            'get_started'     => '首先提供負責人帳戶的詳細資料。負責人者沒有任何限制，並且可以管理你伺服器上的內容。',
            'ready_to_use'    => '你幾乎可以使用了！',
            'your_email_address'       => '你的電子郵件地址',
            'your_first_name' => '你的名字',
            'your_last_name'  => '你的姓氏',
        ],
    ],
    'users' => [
        'title'   => '使用者',
        'content' => [
            'admin'             => '管理者',
            'no_users_here_yet' => '這裡還沒有使用者！',
            'owner'             => '負責人',
        ],
        'create'  => [
            'title'   => '新增使用者',
            'content' => [
                'create'        => '新增',
                'email_address' => '電子郵件地址',
                'first_name'    => '名字',
                'last_name'     => '姓氏',
            ],
        ],
        'delete'  => [
            'title'   => '刪除此使用者',
            'content' => [
                'are_you_sure_you_want_to_delete' => '你確定要刪除該使用者嗎？此操作是永久性的。',
                'cancel'                          => '取消',
                'confirm'                         => '確認',
            ],
        ],
        'edit'  => [
            'content' => [
                'admins_can_manage_every_app'  => '管理者可以管理你伺服器上的每個應用程式，且可以新增新使用者。',
                'back'                         => '返回',
                'edit'                         => '編輯',
                'email_address'                => '電子郵件地址',
                'first_name'                   => '名字',
                'last_name'                    => '姓氏',
                'owners_have_no_restrictions'  => '負責人者沒有任何限制且可以管理你伺服器上的內容。',
                'role'                         => '角色',
                'save'                         => '儲存',
                'users_cannot_access_any_apps' => '預設情況下，使用者無法存取任何應用程式，而是將其作為「協作伙伴」加入到其應用程式中。',
            ],
        ],
        'show'  => [
            'content' => [
                'admin'         => '管理者',
                'close'         => '關閉',
                'edit'          => '編輯',
                'email_address' => '電子郵件地址',
                'first_name'    => '名字',
                'last_name'     => '姓氏',
                'owner'         => '負責人',
                'role'          => '角色',
                'user'          => '使用者',
            ],
        ],
    ],
    'variables' => [
        'title'   => '變數',
        'content' => [
            'no_variables_here_yet' => '這裡還沒有變數！',
        ],
        'create'  => [
            'title'   => '新增變數',
            'content' => [
                'cancel'           => '取消',
                'create'           => '新增',
                'import'           => '匯入',
                'import_variables' => '匯入變數',
                'imported'         => '已匯入',
                'variables'        => '變數！',
            ],
        ],
        'delete'  => [
            'title'   => '刪除此變數',
            'content' => [
                'are_you_sure_you_want_to_delete' => '你確定要刪除此變數嗎？此操作是永久性的。',
                'cancel'                          => '取消',
                'confirm'                         => '確認',
            ],
        ],
        'edit'  => [
            'content' => [
                'back'         => '返回',
                'edit'         => '編輯',
                'roll_back_to' => '回溯到',
                'save'         => '儲存',
                'saved'        => '已儲存！',
            ],
        ],
        'show'  => [
            'content' => [
                'close' => '關閉',
                'edit'  => '編輯',
            ],
        ],
    ],
];
