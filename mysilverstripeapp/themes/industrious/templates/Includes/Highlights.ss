<!-- Highlights -->
<section class="wrapper">
  <div class="inner">
    <header class="special">
      $Content
    </header>
    <% if $Highlights %>
      <div class="highlights">
        <% loop $Highlights %>
          <section>
            <div class="content">
              <header>
                <a href="$LinkToPage.Link" class="icon $Icon"><span class="label">Icon</span></a>
                <h3>$Title</h3>
              </header>
              <p>$Content</p>
            </div>
          </section>        
        <% end_loop %>
      </div>      
    <% end_if %>
  </div>
</section>