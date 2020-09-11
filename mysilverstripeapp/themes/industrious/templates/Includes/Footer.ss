<!-- Footer -->
<footer id="footer">
  <div class="inner">
    <div class="content">
      <% if $SiteConfig.FooterContent %>
        <section>
          $SiteConfig.FooterContent
        </section>
      <% end_if %>
      <% if getFooterPages %>
        <section>
          <h4>Featured pages</h4>
          <ul class="alt">
            <% loop getFooterPages %>
              <li><a href="$Link">$MenuTitle</a></li>
            <% end_loop %>
          </ul>
        </section>    
      <% end_if %>
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
      &copy; {$SiteConfig.Title}. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
    </div>
  </div>
</footer>