<?php

return [
	'title' => 'Відео',
	'single' => 'відео',
	'model' => 'App\Videos',
	'columns' => [
	    'id',
	    'active' => [
	    	'title' => 'Опубліковано'
	    ],
	    'title',
	    'img' => [
	    	'output' => '<img src="/uploads/videos/small/(:value)" />'
	    ]
	],
	'edit_fields' => [
		'active' => [
			'title' => 'Опубліковано',
			'type' => 'bool'
		],
	    'title' => [
	        'title' => 'Назва відео',
	        'type' => 'text'
	    ],
	    'url' => [
	    	'title' => 'Адреса сторінки',
	    	'type' => 'text'
	    ],
	    'description' => [
	        'title' => 'Опис відео',
	        'type' => 'wysiwyg'
	    ],
	    'film_code' => [
	        'title' => 'Код відео',
	        'type' => 'textarea'
	    ],
	    'meta_k' => [
	        'title' => 'Мета ключові слова',
	        'type' => 'text'
	    ],
	    'meta_d' => [
	        'title' => 'Мета опис',
	        'type' => 'textarea'
	    ],
	    'categories' => [
			'title' => 'Категорія',
			'type' => 'relationship',
			'name_field' => 'title'
		],
		'types' => [
			'title' => 'Жанр',
			'type' => 'relationship',
			'name_field' => 'title'
		],
	    'yers' => [
	        'title' => 'Рік виходу',
	        'type' => 'number',
	    ],
	    'img' => [
	        'title' => 'Зображення',
	        'type' => 'image',
	        'location' => public_path() . '/uploads/videos/originals/',
	        'sizes' => [
		        [100, 100, 'auto', public_path() . '/uploads/videos/small/', 100],
		        [460, 320, 'auto', public_path() . '/uploads/videos/medium/', 100],
		        [1000, 600, 'auto', public_path() . '/uploads/videos/full/', 100]
		    ]
	    ],
	],
	'form_width' => 600,
];