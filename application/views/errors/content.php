<<<<<<< HEAD
<article>
<?php $iden = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array(); ?>
    <h1>We&rsquo;ll be back soon!</h1>
    <div>
        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href='mailto:<?php echo $iden['email']; ?>'>Contact Us</a>, otherwise we&rsquo;ll be back online shortly!</p>
        <p>&mdash; <?php echo $iden['nama_website']; ?></p>
    </div>
=======
<article>
<?php $iden = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array(); ?>
    <h1>We&rsquo;ll be back soon!</h1>
    <div>
        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href='mailto:<?php echo $iden['email']; ?>'>Contact Us</a>, otherwise we&rsquo;ll be back online shortly!</p>
        <p>&mdash; <?php echo $iden['nama_website']; ?></p>
    </div>
>>>>>>> b2e8316a9b987a4934c8a3971d55075790f77740
</article>