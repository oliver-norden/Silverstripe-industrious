<!-- Footer -->
<footer id="footer">
  <div class="inner">
    <div class="content">
      <section>
        <h3>Accumsan montes viverra</h3>
        <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
      </section>
      <section>
        <h4>Sem turpis amet semper</h4>
        <ul class="alt">
          <li><a href="#">Dolor pulvinar sed etiam.</a></li>
          <li><a href="#">Etiam vel lorem sed amet.</a></li>
          <li><a href="#">Felis enim feugiat viverra.</a></li>
          <li><a href="#">Dolor pulvinar magna etiam.</a></li>
        </ul>
      </section>
      <section>
        <h4>Connect with us!</h4>
        <ul class="plain">
          <% if $SiteConfig.TwitterLink %>
            <li><a href="$SiteConfig.TwitterLink"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>            
          <% end_if %>
          <% if $SiteConfig.FacebookLink %>
            <li><a href="$SiteConfig.FacebookLink"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
          <% end_if %>  
          <% if $SiteConfig.InstagramLink %>
            <li><a href="$SiteConfig.InstagramLink"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
          <% end_if %>  
          <% if $SiteConfig.GithubLink %>
            <li><a href="$SiteConfig.GithubLink"><i class="icon fa-github">&nbsp;</i>Github</a></li>          
          <% end_if %>  
        </ul>
      </section>
    </div>
    <div class="copyright">
      &copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
    </div>
  </div>
</footer>