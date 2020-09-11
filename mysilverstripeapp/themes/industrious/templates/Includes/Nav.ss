<!-- Nav -->
<nav id="menu">
  <ul class="links">
    <% loop Menu(1) %>
      <li><a href="$Link">$MenuTitle</a></li>
    <% end_loop %>
  </ul>
</nav>