<?php

return [
	'title' => 'Типи відео',
	'single' => 'тип',
	'model' => 'App\Videos_type',
	'columns' => [
	    'id',
	    'active',
	    'title',
	    'img' => [
	    	'output' => '<img src="/uploads/videos_type/medium/(:value)" />'
	    ]
	],
	'edit_fields' => [
	    'active' => [
	        'title' => 'Опубліковано',
	        'type' => 'bool'
	    ],
	    'weight' => [
	        'title' => 'Порядок',
	        'type' => 'number'
	    ],
	    'title' => [
	        'title' => 'Назва',
	        'type' => 'text'
	    ],
	    'slug' => [
	        'title' => 'Адреса сторінки типу',
	        'type' => 'text'
	    ],
	    'img' => [
	        'title' => 'Зображення',
	        'type' => 'image',
	        'location' => public_path() . '/uploads/videos_type/originals/',
	        'sizes' => [
		        [32, 32, 'auto', public_path() . '/uploads/videos_type/small/', 100],
		        [120, 120, 'auto', public_path() . '/uploads/videos_type/medium/', 100]
		    ]
	    ],
	],
];