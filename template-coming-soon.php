<?php
/**
 * Template Name: Coming Soon / Maintenance Mode
 *
 * Live countdown timer and lead capture subscription form.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php esc_html_e( 'Something Amazing Is Coming Soon', 'bizpro-agency' ); ?></title>
	<?php wp_head(); ?>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: radial-gradient(circle at 50% 30%, #1e1b4b 0%, #0f172a 70%, #060911 100%); color: #ffffff; min-height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center;">

	<div style="max-width: 800px; padding: 40px 20px; margin: 0 auto;">
		
		<div style="display: inline-block; background: rgba(99,102,241,0.2); border: 1px solid rgba(99,102,241,0.4); color: #a5b4fc; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 24px;">
			🚀 Under Active Crafting
		</div>

		<h1 style="font-size: clamp(2.5rem, 6vw, 4.4rem); font-weight: 900; line-height: 1.15; margin: 0 0 20px; color: #ffffff;">
			<?php esc_html_e( 'We Are Preparing Something Extraordinary', 'bizpro-agency' ); ?>
		</h1>

		<p style="color: #94a3b8; font-size: 1.2rem; max-width: 600px; margin: 0 auto 40px; line-height: 1.6;">
			<?php esc_html_e( 'Our updated enterprise portal is undergoing final testing. Leave your email to receive early access and an exclusive launch invitation.', 'bizpro-agency' ); ?>
		</p>

		<!-- Live Countdown Timer -->
		<div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-bottom: 50px;">
			<div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: 16px; padding: 20px; min-width: 100px;">
				<div id="bpaDays" style="font-size: 2.8rem; font-weight: 900; color: #60a5fa;">14</div>
				<span style="font-size: 0.8rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px;">Days</span>
			</div>
			<div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: 16px; padding: 20px; min-width: 100px;">
				<div id="bpaHours" style="font-size: 2.8rem; font-weight: 900; color: #34d399;">08</div>
				<span style="font-size: 0.8rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px;">Hours</span>
			</div>
			<div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: 16px; padding: 20px; min-width: 100px;">
				<div id="bpaMins" style="font-size: 2.8rem; font-weight: 900; color: #fbbf24;">45</div>
				<span style="font-size: 0.8rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px;">Mins</span>
			</div>
			<div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); border-radius: 16px; padding: 20px; min-width: 100px;">
				<div id="bpaSecs" style="font-size: 2.8rem; font-weight: 900; color: #f43f5e;">12</div>
				<span style="font-size: 0.8rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px;">Secs</span>
			</div>
		</div>

		<!-- Email Lead Box -->
		<form method="post" action="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="display: flex; gap: 10px; max-width: 480px; margin: 0 auto;">
			<input type="email" placeholder="<?php esc_attr_e( 'Enter your business email...', 'bizpro-agency' ); ?>" required style="flex: 1; padding: 14px 20px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.08); color: #fff; font-size: 1rem;">
			<button type="submit" class="btn btn--primary" style="padding: 14px 24px; border-radius: 12px; background: #6366f1; border-color: #6366f1; color: #fff; font-weight: 700; cursor: pointer;">Notify Me</button>
		</form>

	</div>

	<script>
	(function(){
		var target = new Date().getTime() + (14 * 24 * 60 * 60 * 1000);
		setInterval(function(){
			var now = new Date().getTime();
			var diff = target - now;
			if(diff > 0){
				var d = Math.floor(diff / (1000 * 60 * 60 * 24));
				var h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
				var s = Math.floor((diff % (1000 * 60)) / 1000);
				document.getElementById('bpaDays').textContent = d < 10 ? '0' + d : d;
				document.getElementById('bpaHours').textContent = h < 10 ? '0' + h : h;
				document.getElementById('bpaMins').textContent = m < 10 ? '0' + m : m;
				document.getElementById('bpaSecs').textContent = s < 10 ? '0' + s : s;
			}
		}, 1000);
	})();
	</script>
	<?php wp_footer(); ?>
</body>
</html>
