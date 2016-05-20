<?php

return [
	'title' => 'Категорії відео',
	'single' => 'категорію',
	'model' => 'App\Videos_cat',
	'columns' => [
	    'id',
	    'active',
	    'title',
	    'img' => [
	    	'output' => '<img src="/uploads/videos_cat/medium/(:value)" />'
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
	        'title' => 'Адреса сторінки категорії',
	        'type' => 'text'
	    ],
	    'img' => [
	        'title' => 'Зображення',
	        'type' => 'image',
	        'location' => public_path() . '/uploads/videos_cat/originals/',
	        'sizes' => [
		        [32, 32, 'auto', public_path() . '/uploads/videos_cat/small/', 100],
		        [120, 120, 'auto', public_path() . '/uploads/videos_cat/medium/', 100]
		    ]
	    ],
	],
];