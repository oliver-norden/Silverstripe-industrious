<% if $getTestimonials %>
  <!-- Testimonials -->
  <section class="wrapper">
    <div class="inner">
      <div class="testimonials">
        <% loop $getTestimonials %>
          <section>
            <div class="content">
              <blockquote>
                <p>$Qoute</p>
              </blockquote>
              <div class="author">
                <div class="image">
                  <img src="$Image.URL" alt="$Name" />
                </div>
                <p class="credit">- <strong>$Name</strong> <span>$Position - $Company</span></p>
              </div>
            </div>
          </section>          
        <% end_loop %>
      </div>
    </div>
  </section>
<% end_if %>