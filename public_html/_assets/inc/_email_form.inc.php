<div class="email-blast form-content" id="email-blast1">
  <h2>Email Blast</h2>
  <p>
    <label for="email[list][]">What email list:<span class="required">*</span></label> 
    <input type="text" id="email[list][]" name="email[list][]" class="is-required" placeholder="Sample Email List">
  </p>
  <p>
    <label for="email[subject][]">Email subject line:<span class="required">*</span></label> 
    <input type="text" id="email[subject][]" name="email[subject][]" class="is-required" placeholder="The Big Event!!">
  </p>
  <p>
    <label for="email[content][]">Email content:<span class="required">*</span></label> 
    <textarea id="email[content][]" name="email[content][]" class="is-required"></textarea>
  </p>
  <p>
    <label for="email[phone][]">Is there a unique phone number?</label> 
    <input type="tel" id="email[phone][]" name="email[phone][]" maxlength="10" placeholder="2125551234">
  </p>
  <p>
    <label for="email[desc][]">Image and/or theme suggestions:</label> 
    <textarea id="email[desc][]" name="email[desc][]" placeholder="The suggestions..."></textarea>
  </p>
  <p><label for="email-files">Upload file(s):</label> <input type="file" id="email-files_0[]" name="email-files_0[]" multiple></p>
</div><!-- /.email-blast -->
<div class="email-blast-btn hide">
  <input id="email-blast_btn-add" class="btn-add" type="button" value="Add Email Blast">
  <input id="email-blast_btn-del" class="btn-del" type="button" value="Remove Email Blast" disabled>
</div>
