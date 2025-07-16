  <div class="container">
      <div class="site-logo">
      <?php if (has_custom_logo()) {
          the_custom_logo();
      } else {
          // Fallback to site title if no logo is set
          echo '<a href="' .
              esc_url(home_url("/")) .
              '">' .
              get_bloginfo("name") .
              "</a>";
      } ?>
      </div>

    <nav class="main-nav">
      <?php wp_nav_menu([
          "theme_location" => "header_menu_primary",
          "menu_class" => "nav-menu",
          "container" => false,
      ]); ?>
    </nav>

    <div class="nav-icons">
        <ul>
            <li>
                <a href="/cart">
                    <?= getComponent("icons/Cart") ?>
                </a>

            </li>
            <li>
                <a href="/my-account">
                    <?= getComponent("icons/User") ?>
                </a>
            </li>
        </ul>
    </div>
  </div>
