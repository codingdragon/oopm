<div class="web-ad form-content" id="web-ad1">
  <h2>Web Ad</h2>
  <p>
    <label for="web[web_site][]">Name of site:<span class="required">*</span></label> 
    <input type="text" id="web[web_site][]" name="web[web_site][]" class="is-required" placeholder="samplesite.com">
  </p>
  <p>
    <label for="web[size][]">Size of ad (in pixels):<span class="required">*</span></label> 
    <input type="text" id="web[size][]" name="web[size][]" class="is-required" placeholder="800 x 150">
  </p>
  <p>
    <label for="web[format][]">File format:<span class="required">*</span></label> 
    <select id="web[format][]" name="web[format][]" class="is-required" >
      <option></option>
      <option value="jpg">jpg</option>
      <option value="png">png</option>
      <option value="gif">gif</option>
    </select>
  </p>
  <p>
    <label for="web[phone][]">Is there a unique phone number?</label> 
    <input type="tel" id="web[phone][]" name="web[phone][]" maxlength="10" placeholder="2125551234">
  </p>
  <p>
    <label for="web[url_link][]">Ad should link to (should be actual web page or site):<span class="required">*</span></label>
     
    <?php //Please note that web_url value must be a valid to pass validation or form won't submit properly ?>
    <input type="url" id="web[url_link][]" name="web[url_link][]" class="is-required" value="http://www.mysite.com" placeholder="http://www.mysite.com">
  </p>
  <p>
    <label for="web[desc][]">Brief description:</label> 
    <textarea id="web[desc][]" name="web[desc][]" placeholder="The description..."></textarea>
  </p>
  <p><label for="web-files">Upload file(s):</label> <input type="file" id="web-files_0[]" name="web-files_0[]" multiple></p>
</div><!-- /.web-ad -->
<div class="web-ad-btn hide">
  <input id="web-ad_btn-add" class="btn-add" type="button" value="Add Web Ad">
  <input id="web-ad_btn-del" class="btn-del" type="button" value="Remove Web Ad" disabled>
</div>