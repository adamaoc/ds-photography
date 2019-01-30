
<footer class="site-footer">
  <p>all rights reserved &copy; 2019 | DSPhotography | Denilson Sibrian</p>
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

<?php if (Config::get('http/root') === 'http://goonvilletx.com/') : ?>
  <!-- Google Analytics -->
<?php endif; ?>
</body>
</html>
