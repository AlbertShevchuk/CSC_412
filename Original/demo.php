<form id="contact-form" action="script.php" method="post">

<ul>
<li><label for="firstname">First Name:</label> <input type="text" name="firstname" id="firstname" value="" /></li>
<li><label for="lastname">Last Name:</label> <input type="text" name="lastname" id="lastname" value="" /></li>
<li><label for="email">Email:</label> <input type="email" name="email" id="email" value="" /></li>
</ul>

<ul>
  <li>Please check all the emotions that apply to you:
    <ul>
      <li><label for="angry">Angry</label> <input type="checkbox" name="angry" id="angry" value="angry"></li>
      <li><label for="sad">Sad</label> <input type="checkbox" name="sad" id="sad" value="sad"></li>
      <li><label for="happy">Happy</label> <input type="checkbox" name="happy" id="happy" value="happy"></li>
      <li><label for="ambivalent">Ambivalent</label> <input type="checkbox" name="ambivalent" id="ambivalent" value="ambivalent"></li>
    </ul>
  </li>
  <li>How satisfied were you with our service?
    <ul>
      <li><label for="vsat">Very satisfied</label> <input type="radio" name="satisfaction" id="vsat" value="vsat"></li>
      <li><label for="sat">Satisfied</label> <input type="radio" name="satisfaction" id="sat" value="sat"></li>
      <li><label for="dcare">Didn't care</label> <input type="radio" name="satisfaction" id="dcare" value="dcare"></li>
      <li><label for="disat">Dissatisfied</label> <input type="radio" name="satisfaction" id="disat" value="disat"></li>
      <li><label for="vdisat">Very dissatisfied</label> <input type="radio" name="satisfaction" id="vdisat" value="vdisat"></li>
    </ul>
  </li>
  <li><label for="comments">Further comments:</label> <textarea name="comments" id="comments" cols="25" rows="3"></textarea></li>
</ul>

<ul>
  <li><label for="photo">Bio photo:</label> <input type="file" name="photo" id="photo" value="" /></li>

</ul>

<li><input type="submit" value="submit" /></li>

</form
