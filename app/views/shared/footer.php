
<footer class="site-footer">
  <p>all rights reserved &copy; 2019 | Denilson Photos | Denilson Sibrian</p>
</footer>

<script src="<?= Config::get('http/root') ?>dist/main.js"></script>
<?php if ($data['user_data']['loggedin']) : ?>
  <script>
    window.token = "<?= Config::get('data/api_token'); ?>";
    var USER = {
      username: "<?= $data['user_data']['user']['username'] ?>",
      fullname: "<?= $data['user_data']['user']['name'] ?>"
    };
  </script>
  <script src="<?= Config::get('http/root') ?>dist/admin-js/admin.js"></script>
<?php endif; ?>

<?php if (Config::get('http/root') === 'http://denilson.photos' || 'http://denilson.photos/') : ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133705201-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-133705201-1');
  </script>

<?php endif; ?>
</body>
</html>
