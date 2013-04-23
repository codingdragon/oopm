<div class="print-ad form-content" id="print-ad1">
  <h2>Print Ad</h2>
  <p>
    <label for="print[pub_name][]">Name of publication:<span class="required">*</span></label> 
    <input type="text" id="print[pub_name][]" name="print[pub_name][]" class="is-required" placeholder="Sample Magazine">
  </p>
  <p>
    <label for="print[size][]">Size of ad (in inches):<span class="required">*</span></label> 
    <input type="text" id="print[size][]" name="print[size][]" class="is-required" placeholder="8 x 10">
  </p>
  <p>
    <label for="print[bleed][]">Bleed size?<span class="required">*</span></label> 
    <select id="print[bleed][]" name="print[bleed][]" class="is-required">
      <option></option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
  </p> 
  <p>
    <label for="print[run_date][]">Run Date:</label> 
    <input type="date" id="print[run_date][]" name="print[run_date][]">
  </p> 
  <p>
    <label for="print[color][]">Color or B & W:<span class="required">*</span></label> 
    <select id="print[color][]" name="print[color][]" class="is-required">
      <option></option>
      <option value="color">Color</option>
      <option value="grayscale">B & W</option>
    </select>
  </p>
  <p>
    <label for="print[code][]">Discount code to display in ad? (Leave blank if none)</label> 
    <input type="text" id="print[code][]" name="print[code][]" placeholder="HBNY123">
  </p>
  <p>
    <label for="print[phone][]">Is there a unique phone number?</label> 
    <input type="tel" id="print[phone][]" name="print[phone][]" maxlength="10" placeholder="2125551234">
  </p> 
  <p>
    <label for="print[desc][]">Brief description:</label> 
    <textarea id="print[desc][]" name="print[desc][]" placeholder="The description..."></textarea>
  </p>
  <p><label for="print[file][]">Upload file(s):</label> <input type="file" id="print[file][]" name="print[file][]" multiple></p>
</div><!-- /.print-ad -->
<div class="print-ad-btn hide">
  <input id="print-ad_btn-add" class="btn-add" type="button" value="Add Print Ad">
  <input id="print-ad_btn-del" class="btn-del" type="button" value="Remove Print Ad" disabled>
</div>

