<?php
/**
 * Template Name: Pricing & Plans
 *
 * Interactive pricing tables tailored to active demo niche.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bizpro_context = function_exists( 'bizpro_agency_get_demo_context' ) ? bizpro_agency_get_demo_context() : 'default';
$bizpro_pricing = function_exists( 'bizpro_agency_get_demo_pricing' ) ? bizpro_agency_get_demo_pricing( $bizpro_context ) : array();
$bizpro_plans   = isset( $bizpro_pricing['plans'] ) ? $bizpro_pricing['plans'] : array();
?>

<main id="primary" class="site-main site-main--pricing">

	<header class="page-header bpa-page-hero">
		<div class="container">
			<span class="bpa-page-hero__eyebrow"><?php echo esc_html( isset( $bizpro_pricing['eyebrow'] ) ? $bizpro_pricing['eyebrow'] : '' ); ?></span>
			<h1 class="page-title bpa-page-hero__title"><?php echo esc_html( isset( $bizpro_pricing['title'] ) ? $bizpro_pricing['title'] : '' ); ?></h1>
			<p class="bpa-page-hero__desc"><?php echo esc_html( isset( $bizpro_pricing['desc'] ) ? $bizpro_pricing['desc'] : '' ); ?></p>
		</div>
	</header>

	<div class="container section" style="padding-block: 80px;">

		<!-- 3-Tier Pricing Grid -->
		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; align-items: stretch; margin-bottom: 70px;">
			<?php foreach ( $bizpro_plans as $bizpro_plan ) : ?>
				<?php
				$is_featured = ! empty( $bizpro_plan['featured'] );
				$card_style  = $is_featured
					? 'background: #ffffff; border: 2px solid #2563eb; border-radius: 20px; padding: 40px 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 20px 50px rgba(37,99,235,0.15); position: relative;'
					: 'background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 20px; padding: 40px 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0,0,0,0.03);';
				?>
				<div style="<?php echo esc_attr( $card_style ); ?>">
					<?php if ( $is_featured && ! empty( $bizpro_plan['badge'] ) ) : ?>
						<span style="position: absolute; top: -14px; left: 50%; transform: translateX(-50%); background: #2563eb; color: #ffffff; font-size: 0.78rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; padding: 4px 16px; border-radius: 20px;"><?php echo esc_html( $bizpro_plan['badge'] ); ?></span>
					<?php endif; ?>
					<div>
						<h3 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin-top: 0;"><?php echo esc_html( $bizpro_plan['name'] ); ?></h3>
						<p style="color: #64748b; font-size: 0.95rem;"><?php echo esc_html( $bizpro_plan['desc'] ); ?></p>
						<div style="font-size: 3.2rem; font-weight: 900; color: <?php echo $is_featured ? '#2563eb' : '#0f172a'; ?>; margin: 24px 0 10px;">
							<?php echo esc_html( $bizpro_plan['price'] ); ?> <span style="font-size: 1rem; color: #64748b; font-weight: 500;"><?php echo esc_html( $bizpro_plan['period'] ); ?></span>
						</div>
						<ul style="list-style: none; padding: 0; margin: 24px 0; line-height: 2.2; color: #334155; font-size: 0.95rem;">
							<?php foreach ( $bizpro_plan['features'] as $feat ) : ?>
								<li><?php echo esc_html( $feat ); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<?php
					$btn_style = $is_featured
						? 'display: block; text-align: center; background: #2563eb; border-color: #2563eb; color: #ffffff; font-weight: 700; padding: 14px; border-radius: 12px; text-decoration: none; box-shadow: 0 10px 20px rgba(37,99,235,0.3);'
						: 'display: block; text-align: center; background: #f1f5f9; color: #0f172a; font-weight: 700; padding: 14px; border-radius: 12px; text-decoration: none; border: 1px solid #cbd5e1;';
					?>
					<a href="<?php echo esc_url( $bizpro_plan['btn_url'] ); ?>" class="btn <?php echo $is_featured ? 'btn--primary' : ''; ?>" style="<?php echo esc_attr( $btn_style ); ?>">
						<?php echo esc_html( $bizpro_plan['btn_text'] ); ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>

	</div>

</main>

<?php
get_footer();
