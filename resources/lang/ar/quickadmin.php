<?php

return [
	
	'user-management' => [
		'title' => '',
		'fields' => [
		],
	],
	
	'roles' => [
		'title' => 'Roles',
		'fields' => [
			'title' => 'Title',
		],
	],

    'category' => [
        'title' => 'التصنيف',
        'fields' => [
            'name' => 'اسم التصنيف',
            'title' => 'التصنيف',

        ],
    ],
	
	'users' => [
		'title' => 'المستخدمون',
		'fields' => [
			'name' => 'الاسم',
			'email' => 'البريد الالكتروني',
			'password' => 'كلمة المرور',
			'role' => 'Role',
			'remember-token' => 'Remember token',
			'type' => 'Type',
			'college' => 'College',
		],
	],
	
	'user-actions' => [
		'title' => 'User actions',
		'created_at' => 'Time',
		'fields' => [
			'user' => 'User',
			'action' => 'Action',
			'action-model' => 'Action model',
			'action-id' => 'Action id',
		],
	],
	
	'contact-management' => [
		'title' => 'Contact management',
		'fields' => [
		],
	],
	
	'contact-companies' => [
		'title' => 'Companies',
		'fields' => [
			'name' => 'Company name',
			'address' => 'Address',
			'website' => 'Website',
			'email' => 'Email',
		],
	],
	
	'contacts' => [
		'title' => 'Contacts',
		'fields' => [
			'company' => 'Company',
			'first-name' => 'First name',
			'last-name' => 'Last name',
			'phone1' => 'Phone 1',
			'phone2' => 'Phone 2',
			'email' => 'Email',
			'skype' => 'Skype',
			'address' => 'Address',
		],
	],
	
	'content-management' => [
		'title' => 'Content management',
		'fields' => [
		],
	],
	
	'content-categories' => [
		'title' => 'Categories',
		'fields' => [
			'title' => 'Category',
			'slug' => 'Slug',
		],
	],
	
	'content-tags' => [
		'title' => 'Tags',
		'fields' => [
			'title' => 'Tag',
			'slug' => 'Slug',
		],
	],
	
	'content-pages' => [
		'title' => 'الصفحات',
		'fields' => [
			'title' => 'العنوان',
			'title_en' => 'العنوان بالانجليزية',
			'category-id' => 'Categories',
			'tag-id' => 'Tags',
			'page-text' => 'النص',
			'page-text-en' => 'النص بالانجليزية',
			'excerpt' => 'Excerpt',
			'featured-image' => 'Featured image',
		],
	],
	
	'college' => [
		'title' => 'College',
		'fields' => [
			'name' => 'Name',
		],
	],
	
	'news' => [
		'title' => 'الأخبار',
		'fields' => [
			'title' => 'العنوان',
			'details' => 'التفاصيل',
			'image' => 'صورة',
            'short_text' => 'نص قصير'
		],
	],

    'team' => [
        'title' => 'طلب الانضمام للفريق',
        'fields' => [
            'title' => 'الاسم الوظيفي',
            'name' => 'الاسم',
            'image' => 'صورة',
            'short_text' => 'نص قصير'
        ],
    ],

	'books' => [
		'title' => 'Books',
		'fields' => [
			'title' => 'Title',
			'image' => 'Image',
			'path-upload' => 'Path upload',
			'auther-name' => 'Auther name',
			'user' => 'User id',
			'name' => 'Name',
			'mobile' => 'Mobile',
			'email' => 'Email',
			'type' => 'Type',
		],
	],
	
	'courses' => [
		'title' => 'Courses',
		'fields' => [
			'name-course' => 'Name Course',
			'image' => 'Image',
			'trainer-name' => 'Trainer Name',
			'details' => 'Details',
            'basic_info' => 'Basic info'
		],
	],
	
	'software' => [
		'title' => 'صور سلايدر',
		'fields' => [
			'tool-name' => 'عنوان',
			'tool-image' => ' الصورة ',
			'file-path' => 'Tool Upload',
            'url_tool' => 'عنوتن فرعي'
		],
	],
	
	'newsimages' => [
		'title' => 'News Images',
		'fields' => [
			'image' => 'Image',
			'news' => 'News ',
		],
	],
	
	'services' => [
		'title' => 'Services',
		'fields' => [
			'name' => 'Name',
			'url' => 'Url',
		],
	],
	'qa_create' => 'انشاء',
	'qa_save' => 'حفظ',
	'qa_edit' => 'تعديل',
	'qa_restore' => 'Restore',
	'qa_permadel' => 'Delete Permanently',
	'qa_all' => 'All',
	'qa_trash' => 'Trash',
	'qa_view' => 'عرض',
	'qa_update' => 'تعديل',
	'qa_list' => 'قائمة',
	'qa_no_entries_in_table' => 'No entries in table',
	'qa_custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'تسجيل الخروج',
	'qa_add_new' => 'اضافة',
	'qa_are_you_sure' => 'Are you sure?',
	'qa_back_to_list' => 'العودة للقائمة',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'حذف',
	'qa_delete_selected' => 'حذف المحدد',
	'qa_category' => 'Category',
	'qa_categories' => 'Categories',
	'qa_sample_category' => 'Sample category',
	'qa_questions' => 'Questions',
	'qa_question' => 'Question',
	'qa_answer' => 'Answer',
	'qa_sample_question' => 'Sample question',
	'qa_sample_answer' => 'Sample answer',
	'qa_faq_management' => 'FAQ Management',
	'qa_administrator_can_create_other_users' => 'Administrator (can create other users)',
	'qa_simple_user' => 'Simple user',
	'qa_title' => 'Title',
	'qa_roles' => 'Roles',
	'qa_role' => 'Role',
	'qa_user_management' => 'User management',
	'qa_users' => 'Users',
	'qa_user' => 'User',
	'qa_name' => 'Name',
	'qa_email' => 'Email',
	'qa_password' => 'Password',
	'qa_remember_token' => 'Remember token',
	'qa_permissions' => 'Permissions',
	'qa_user_actions' => 'User actions',
	'qa_action' => 'Action',
	'qa_action_model' => 'Action model',
	'qa_action_id' => 'Action id',
	'qa_time' => 'Time',
	'qa_campaign' => 'Campaign',
	'qa_campaigns' => 'Campaigns',
	'qa_description' => 'Description',
	'qa_valid_from' => 'Valid from',
	'qa_valid_to' => 'Valid to',
	'qa_discount_amount' => 'Discount amount',
	'qa_discount_percent' => 'Discount percent',
	'qa_coupons_amount' => 'Coupons amount',
	'qa_coupons' => 'Coupons',
	'qa_code' => 'Code',
	'qa_redeem_time' => 'Redeem time',
	'qa_coupon_management' => 'Coupon Management',
	'qa_time_management' => 'Time management',
	'qa_projects' => 'Projects',
	'qa_reports' => 'Reports',
	'qa_time_entries' => 'Time entries',
	'qa_work_type' => 'Work type',
	'qa_work_types' => 'Work types',
	'qa_project' => 'Project',
	'qa_start_time' => 'Start time',
	'qa_end_time' => 'End time',
	'qa_expense_category' => 'Expense Category',
	'qa_expense_categories' => 'Expense Categories',
	'qa_expense_management' => 'Expense Management',
	'qa_expenses' => 'Expenses',
	'qa_expense' => 'Expense',
	'qa_entry_date' => 'Entry date',
	'qa_amount' => 'Amount',
	'qa_income_categories' => 'Income categories',
	'qa_monthly_report' => 'Monthly report',
	'qa_companies' => 'Companies',
	'qa_company_name' => 'Company name',
	'qa_address' => 'Address',
	'qa_website' => ' الموقع اللكتروني',
	'qa_contact_management' => 'Contact management',
	'qa_contacts' => 'Contacts',
	'qa_company' => 'Company',
	'qa_first_name' => 'First name',
	'qa_last_name' => 'Last name',
	'qa_phone' => 'Phone',
	'qa_phone1' => 'Phone 1',
	'qa_phone2' => 'Phone 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Photo (max 8mb)',
	'qa_category_name' => 'Category name',
	'qa_product_management' => 'Product management',
	'qa_products' => 'Products',
	'qa_product_name' => 'Product name',
	'qa_price' => 'Price',
	'qa_tags' => 'Tags',
	'qa_tag' => 'Tag',
	'qa_photo1' => 'Photo1',
	'qa_photo2' => 'Photo2',
	'qa_photo3' => 'Photo3',
	'qa_calendar' => 'Calendar',
	'qa_statuses' => 'Statuses',
	'qa_task_management' => 'Task management',
	'qa_tasks' => 'Tasks',
	'qa_status' => 'Status',
	'qa_attachment' => 'Attachment',
	'qa_due_date' => 'Due date',
	'qa_assigned_to' => 'Assigned to',
	'qa_assets' => 'Assets',
	'qa_asset' => 'Asset',
	'qa_serial_number' => 'Serial number',
	'qa_location' => 'Location',
	'qa_locations' => 'Locations',
	'qa_assigned_user' => 'Assigned (user)',
	'qa_notes' => 'Notes',
	'qa_assets_history' => 'Assets history',
	'qa_assets_management' => 'Assets management',
	'qa_slug' => 'Slug',
	'qa_content_management' => 'Content management',
	'qa_text' => 'Text',
	'qa_excerpt' => 'Excerpt',
	'qa_featured_image' => 'Featured image',
	'qa_pages' => 'Pages',
	'qa_axis' => 'Axis',
	'qa_show' => 'Show',
	'qa_group_by' => 'Group by',
	'qa_chart_type' => 'Chart type',
	'qa_create_new_report' => 'Create new report',
	'qa_no_reports_yet' => 'No reports yet.',
	'qa_created_at' => 'Created at',
	'qa_updated_at' => 'Updated at',
	'qa_deleted_at' => 'Deleted at',
	'qa_reports_x_axis_field' => 'X-axis - please choose one of date/time fields',
	'qa_reports_y_axis_field' => 'Y-axis - please choose one of number fields',
	'qa_select_crud_placeholder' => 'Please select one of your CRUDs',
	'qa_select_dt_placeholder' => 'Please select one of date/time fields',
	'qa_aggregate_function_use' => 'Aggregate function to use',
	'qa_x_axis_group_by' => 'X-axis group by',
	'qa_x_axis_field' => 'X-axis field (date/time)',
	'qa_y_axis_field' => 'Y-axis field',
	'qa_integer_float_placeholder' => 'Please select one of integer/float fields',
	'qa_change_notifications_field_1_label' => 'Send email notification to User',
	'qa_change_notifications_field_2_label' => 'When Entry on CRUD',
	'qa_select_users_placeholder' => 'Please select one of your Users',
	'qa_is_created' => 'is created',
	'qa_is_updated' => 'is updated',
	'qa_is_deleted' => 'is deleted',
	'qa_notifications' => 'Notifications',
	'qa_notify_user' => 'Notify User',
	'qa_when_crud' => 'When CRUD',
	'qa_create_new_notification' => 'Create new Notification',
	'qa_stripe_transactions' => 'Stripe Transactions',
	'qa_upgrade_to_premium' => 'Upgrade to Premium',
	'qa_messages' => 'Messages',
	'qa_you_have_no_messages' => 'You have no messages.',
	'qa_all_messages' => 'All Messages',
	'qa_new_message' => 'New message',
	'qa_outbox' => 'Outbox',
	'qa_inbox' => 'Inbox',
	'qa_recipient' => 'Recipient',
	'qa_subject' => 'Subject',
	'qa_message' => 'Message',
	'qa_send' => 'Send',
	'qa_reply' => 'Reply',
	'qa_calendar_sources' => 'Calendar sources',
	'qa_new_calendar_source' => 'Create new calendar source',
	'qa_crud_title' => 'Crud title',
	'qa_crud_date_field' => 'Crud date field',
	'qa_prefix' => 'Prefix',
	'qa_label_field' => 'Label field',
	'qa_suffix' => 'Sufix',
	'qa_no_calendar_sources' => 'No calendar sources yet.',
	'qa_crud_event_field' => 'Event label field',
	'qa_create_new_calendar_source' => 'Create new Calendar Source',
	'qa_edit_calendar_source' => 'Edit Calendar Source',
	'qa_client_management' => 'Client management',
	'qa_client_management_settings' => 'Client management settings',
	'qa_country' => 'Country',
	'qa_client_status' => 'Client status',
	'qa_clients' => 'Clients',
	'qa_client_statuses' => 'Client statuses',
	'qa_currencies' => 'Currencies',
	'qa_main_currency' => 'Main currency',
	'qa_documents' => 'Documents',
	'qa_file' => 'File',
	'qa_income_source' => 'Income source',
	'qa_income_sources' => 'Income sources',
	'qa_fee_percent' => 'Fee percent',
	'qa_note_text' => 'Note text',
	'qa_client' => 'Client',
	'qa_start_date' => 'Start date',
	'qa_budget' => 'Budget',
	'qa_project_status' => 'Project status',
	'qa_project_statuses' => 'Project statuses',
	'qa_transactions' => 'Transactions',
	'qa_transaction_types' => 'Transaction types',
	'qa_transaction_type' => 'Transaction type',
	'qa_transaction_date' => 'Transaction date',
	'qa_currency' => 'Currency',
	'qa_current_password' => 'كلمة المرور الحالية ',
	'qa_new_password' => 'كلمة المرور الجديدة ',
	'qa_password_confirm' => 'تاكيد كلمة المرور  ',
	'qa_dashboard_text' => 'You are logged in!',
	'qa_forgot_password' => 'Forgot your password?',
	'qa_remember_me' => 'Remember me',
	'qa_login' => 'دخول',
	'qa_change_password' => 'تغيير كلمة المرور ',
	'qa_csv' => 'CSV',
	'qa_print' => 'Print',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Copy',
	'qa_colvis' => 'Column visibility',
	'qa_pdf' => 'PDF',
	'qa_reset_password' => 'اعادة تعيين كلمة المرور ',
	'qa_reset_password_woops' => '<strong>Whoops!</strong> There were problems with input:',
	'qa_email_line1' => 'You are receiving this email because we received a password reset request for your account.',
	'qa_email_line2' => 'If you did not request a password reset, no further action is required.',
	'qa_email_greet' => 'Hello',
	'qa_email_regards' => 'Regards',
	'qa_confirm_password' => 'Confirm password',
	'qa_if_you_are_having_trouble' => 'If you’re having trouble clicking the',
	'qa_copy_paste_url_bellow' => 'button, copy and paste the URL below into your web browser:',
	'qa_please_select' => 'Please select',
	'qa_register' => 'Register',
	'qa_registration' => 'Registration',
	'qa_not_approved_title' => 'You are not approved',
	'qa_not_approved_p' => 'Your account is still not approved by administrator. Please, be patient and try again later.',
	'qa_there_were_problems_with_input' => 'There were problems with input',
	'qa_whoops' => 'Whoops!',
	'qa_file_contains_header_row' => 'File contains header row?',
	'qa_csvImport' => 'CSV Import',
	'qa_csv_file_to_import' => 'CSV file to import',
	'qa_parse_csv' => 'Parse CSV',
	'qa_import_data' => 'Import data',
	'qa_imported_rows_to_table' => 'Imported :rows rows to :table table',
	'qa_subscription-billing' => 'Subscriptions',
	'qa_subscription-payments' => 'Payments',
	'qa_basic_crm' => 'Basic CRM',
	'qa_customers' => 'Customers',
	'qa_customer' => 'Customer',
	'quickadmin_title' => 'مجموعة روافد',
];