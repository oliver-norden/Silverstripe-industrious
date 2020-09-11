<!-- Banner -->
<section
  id="banner"
  <% if $Image %>style="background-image: url($Image.URL)"<% end_if %>
>
  <div class="inner">
    <h1>$Title</h1>
    <p>$Lead</p>
  </div>
  <video autoplay loop muted playsinline src="$Video.URL"></video>
</section>