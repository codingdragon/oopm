<div class="new-collateral form-content" id="new-collateral1">
  <h2>New Collateral Piece</h2> 
  <p>
    <label for="collateral[size][]">Size (in inches):<span class="required">*</span></label> 
    <input type="text" id="collateral[size][]" name="collateral[size][]" class="is-required" placeholder="4 x 6">
  </p>
  <p>
    <label for="collateral[bleed][]">Bleed size?<span class="required">*</span></label> 
    <select id="collateral[bleed][]" name="collateral[bleed][]" class="is-required">
      <option></option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
  </p>
  <p>
    <label for="collateral[code][]">Discount code to display? (Leave blank if none)</label> 
    <input type="text" id="collateral[code][]" name="collateral[code][]" placeholder="HBNY123">
  </p>
  <p>
    <label for="collateral[quantity][]">Quantity:<span class="required">*</span></label> 
    <input type="number" id="collateral[quantity][]" name="collateral[quantity][]" class="is-required" placeholder="500">
  </p>
  <p>
    <label for="collateral[desc][]">Brief description:</label> 
    <textarea id="collateral[desc][]" name="collateral[desc][]" placeholder="The description..."></textarea>
  </p>
  <p><label for="collateral[file][]">Upload file(s):</label> <input type="file" id="collateral[file][]" name="collateral[file][]" multiple></p>
</div><!-- /.new-collateral -->
<div class="new-collateral-btn hide">
  <input id="new-collateral_btn-add" class="btn-add" type="button" value="Add Collateral Piece">
  <input id="new-collateral_btn-del" class="btn-del" type="button" value="Remove Collateral Piece" disabled>
</div>
