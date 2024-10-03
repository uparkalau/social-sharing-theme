<div class="social-sharing-links d-flex justify-content-center">
    <?php foreach ($social_urls as $network => $url): ?>
        <a href="<?php echo esc_url($url); ?>" target="_blank" class="btn btn-primary mx-2">
            <?php if ($network == 'LinkedIn'): ?>
                <i class="fab fa-linkedin-in"></i>
            <?php elseif ($network == 'Facebook'): ?>
                <i class="fab fa-facebook-f"></i>
            <?php endif; ?>
        </a>
    <?php endforeach; ?>
</div>
