<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php if (isset($this->session->userdata['logged_in'])) { ?>
      <li class="nav-item dropdown" >
        <select id="multiselect" multiple="multiple">
          <option class="a" value="http://ipv4.download.thinkbroadband.com/5MB.zip">Option 1</option>
          <option class="a" value="http://ipv4.download.thinkbroadband.com/10MB.zip">Option 2</option>
          <option class="a" value="http://ipv4.download.thinkbroadband.com/20MB.zip">Option 3</option>
          <option class="a" value="http://ipv4.download.thinkbroadband.com/50MB.zip">Option 4</option>
        </select>
      </li>
      <?php } ?>
      </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
      <?php if (isset($this->session->userdata['logged_in'])) { ?>
        <a class="nav-link" href="/user_auth/logout">Logout <span class="sr-only">(current)</span></a>
      <?php } else { ?>
        <a class="nav-link" href="/user_auth">Login <span class="sr-only">(current)</span></a>
      <?php } ?>
      </li>
    </ul>
  </div>
</nav>
