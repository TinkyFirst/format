<?
	$post_id = get_the_ID();
	$section_id = get_field('section_id');
	if($post_id){
		$name_information = get_field('texts_casino', 'option')['information'];
		$name_payments = get_field('texts_casino', 'option')['payments'];
		$name_game_providers = get_field('texts_casino', 'option')['game_providers'];
		$name_website = get_field('texts_casino', 'option')['website'];
		$name_year_launched = get_field('texts_casino', 'option')['year_launched'];
		$name_license = get_field('texts_casino', 'option')['license'];
		$name_number_of_games = get_field('texts_casino', 'option')['number_of_games'];
		$name_bonus_value = get_field('texts_casino', 'option')['bonus_value'];
		$name_min_deposit_required = get_field('texts_casino', 'option')['min_deposit_required'];
		$name_withdrawal_speed_avg = get_field('texts_casino', 'option')['withdrawal_speed_avg'];
		$name_casino_rtp = get_field('texts_casino', 'option')['casino_rtp'];
		$payment_methods_ids = get_field('payment_systems', $post_id) ? get_field('payment_systems', $post_id)['full_list_ids'] : NULL;
		$game_providers_ids = get_field('game_providers', $post_id);
		$website = get_field('general_information', $post_id) ? get_field('general_information', $post_id)['website'] : NULL;
		$year_launched = get_field('general_information', $post_id) ? get_field('general_information', $post_id)['year_launched'] : NULL;
		$license = get_field('general_information', $post_id) ? get_field('general_information', $post_id)['license'] : NULL;
		$number_of_games = get_field('general_information', $post_id) ? get_field('general_information', $post_id)['number_of_games'] : NULL;
		$bonus_value = get_field('general_information', $post_id) ? get_field('general_information', $post_id)['bonus_value'] : NULL;
		$min_deposit_required = get_field('general_information', $post_id) ? get_field('general_information', $post_id)['min_deposit_required'] : NULL;
		$withdrawal_speed_avg = get_field('general_information', $post_id) ? get_field('general_information', $post_id)['withdrawal_speed_avg'] : NULL;
		$casino_rtp = get_field('general_information', $post_id) ? get_field('general_information', $post_id)['casino_rtp'] : NULL;
	}
?>

<? if($post_id): ?>
    <section
            class='info-wrapper inner'
		<? if($section_id): ?>
            id='<?= $section_id; ?>'
		<? endif; ?>
    >

        <div class='row'>

            <h5>
				<?= $name_information; ?>
            </h5>

            <table>

				<? if($website): ?>
                    <tr>
                        <th>
							<?= $name_website; ?>
                        </th>
                        <td>
							<?= $website; ?>
                        </td>
                    </tr>
				<? endif; ?>

				<? if($year_launched): ?>
                    <tr>
                        <th>
							<?= $name_year_launched; ?>
                        </th>
                        <td>
							<?= $year_launched; ?>
                        </td>
                    </tr>
				<? endif ?>

				<? if($license): ?>
                    <tr>
                        <th>
							<?= $name_license; ?>
                        </th>
                        <td>
							<?= $license; ?>
                        </td>
                    </tr>
				<? endif; ?>

				<? if($number_of_games): ?>
                    <tr>
                        <th>
							<?= $name_number_of_games; ?>
                        </th>
                        <td>
							<?= $number_of_games; ?>
                        </td>
                    </tr>
				<? endif; ?>

				<? if($bonus_value): ?>
                    <tr>
                        <th>
							<?= $name_bonus_value; ?>
                        </th>
                        <td>
							<?= $bonus_value; ?>
                        </td>
                    </tr>
				<? endif; ?>

				<? if($min_deposit_required): ?>
                    <tr>
                        <th>
							<?= $name_min_deposit_required; ?>
                        </th>
                        <td>
							<?= $min_deposit_required; ?>
                        </td>
                    </tr>
				<? endif; ?>

				<? if($withdrawal_speed_avg): ?>
                    <tr>
                        <th>
							<?= $name_withdrawal_speed_avg; ?>
                        </th>
                        <td>
							<?= $withdrawal_speed_avg; ?>
                        </td>
                    </tr>
				<? endif; ?>

				<? if($casino_rtp): ?>
                    <tr>
                        <th>
							<?= $name_casino_rtp; ?>
                        </th>
                        <td>
							<?= $casino_rtp; ?>
                        </td>
                    </tr>
				<? endif; ?>

            </table>
        </div>

		<? if($payment_methods_ids): ?>
            <div class='row'>
                <h5>
					<?= $name_payments; ?>
                </h5>
				<? include get_theme_file_path('template-parts/payment-methods/index.php'); ?>
            </div>
		<? endif; ?>

		<? if($game_providers_ids): ?>
            <div class='row'>
                <h5>
					<?= $name_game_providers; ?>
                </h5>
				<? include get_theme_file_path('template-parts/game-providers/index.php'); ?>
            </div>
		<? endif; ?>

    </section>
<? endif; ?>
