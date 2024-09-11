<?php
/**
 * Twenty Twenty-Four functions and definitions хуй ujdyjq djyztn
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_style('main-styles', get_stylesheet_uri());
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfour_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );

/// my code

function get_airtable_events() {


    $api_url = 'https://api.airtable.com/v0/app7g2ANnagHYZkZ8/tbleWW3ENwjP0uDgh?maxRecords=50&view=viwwgjyNHmGyuRhia';

    // Заголовки для авторизации и формата запроса
    $headers = array(
        'Authorization' => 'Bearer patH7vMYiTOyuJqrZ.07c6baf72a40d99653c1ea516814884ba6a34421672d138377236a6186dda389', // Используй свой API-ключ
        'Content-Type'  => 'application/json'
    );

    // Выполнение запроса к API Airtable
    $response = wp_remote_get($api_url, array(
        'headers' => $headers
    ));
    
	
    return $response;
}

function display_events_calendar() {
	$events = get_airtable_events();
	
	$predata = $events['body'];
	
	$data = json_decode($predata, true)['records'];
    
	
	#echo gettype($data);
	$events = [];
	$daysOfWeek = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
	foreach ($data as $event) {
        #$fields = $event['fields']['Name_event'];
        #echo "<div class='event'>";
        
		//название ивента
		$event_name = $event['fields']['Name_event'];

		$dateB = new DateTime($event['fields']['Начало Мероприятия']);
		$dateB->modify('+2 hours');
		$dayOfWeek = $dateB->format('w');
		$formattedDateB = $dateB->format('d.m') . ' (' . $daysOfWeek[$dayOfWeek] . ')';
		$formattedTimeB = $dateB->format('H.i');
		
		$exception_TimeE = new DateTime($event['fields']['Начало Мероприятия']);
		$exception_TimeE->modify('+2 hours');
		$dateE = isset($event['fields']['Date (end)']) ? new DateTime($event['fields']['Date (end)']) : $exception_TimeE;
		$dateE->modify('+2 hours');
		$formattedTimeE = $dateE->format('H.i');
		
		$for_subs_only = isset($event['fields']['is_it_subscribers_only']) ? '⭐️' : '';

		$price_m = $event['fields']['Стоимость д. клуба'];
		$price_z = isset($event['fields']['Стоимость д. всех']) ? $event['fields']['Стоимость д. всех'] : '-';	
		$description = isset($event['fields']['Стоимость д. всех']) ? $event['fields']['Описание'] : '';

		$event_id = $event['id'];

		$this_event = [
			'event_name' => $event_name, 
			'date_b' => $formattedDateB, 
			'time_b' => $formattedTimeB, 
			'time_e' => $formattedTimeE, 
			'subs_star' => $for_subs_only, 
			'price_m' => $price_m, 
			'price_z' => $price_z, 
			'description' => $description,
			'event_id' => $event_id
		];
			array_push($events, $this_event);
		
		#echo "<h3>{$event_name}{$for_subs_only}</h3>";
		#echo "<h5>{$description}</h5>";
        #echo "<h5>{$formattedDateB}</h5>";
        #echo "<h5>{$formattedTimeB} - {$formattedTimeE}</h5>";
		#echo "<h5>{$price_m}/{$price_z}</h5>";
		#echo "</div>";
    }  
	#var_dump($events);
	return $events;
}

add_shortcode('airtable_events', 'display_events_calendar');

function display_event_cards() {
    // Массив с данными ивентов
    $events = display_events_calendar();
    
    // HTML для вывода карточек
    $output = '<div class="event-cards-container">';
    
    foreach ($events as $event) {
        // Создание карточки для каждого события
		#var_dump($event);
		#var_dump($event['description']);
        $output .= '
        <div class="event-card" onclick="openModal(\'' . esc_html($event['event_id']) . '\')">
            <h3><strong>' . esc_html($event['subs_star']) . esc_html($event['event_name']) . '</strong></h3>
            <p class="event-description">' . esc_html($event['description']) . '</p>
            <p><strong>' . esc_html($event['date_b']) . '</strong></p>
			

        </div>
        

		
        <!-- Модальное окно для каждого ивента -->
        <div id="modal-' . esc_html($event['event_id']) . '" class="modal">
            <div class="modal-content">
                <span class="modal-close" onclick="closeModal(\'' . esc_html($event['event_id']) . '\')">&times;</span>
                <h3>' . esc_html($event['subs_star']) . esc_html($event['event_name']) . '</h3>
				<h4><strong>' . esc_html($event['date_b']) . ', в ' . esc_html($event['time_b']) . '</strong></h4>
                <p>' . nl2br(esc_html($event['description'])) . '</p>
				<p>Цена для .more: €' . esc_html($event['price_m']) . ', для всех: €' . esc_html($event['price_z']) .  '<p>
                
            </div>
        </div>';
    }

    $output .= '</div>';

    return $output;
}

// Регистрация шорткода
add_shortcode('event_cards', 'display_event_cards');


function enqueue_custom_scripts() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/script.js', array(), null, true);
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');