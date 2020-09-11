<!-- CTA -->
<section id="cta" class="wrapper"
  <% if $CTAImage %> style="background-image: linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url($CTAImage.Link)" <% end_if %>
>
  <div class="inner">
    <h2>$CTAHeading</h2>
    $CTAContent
  </div>
</section>