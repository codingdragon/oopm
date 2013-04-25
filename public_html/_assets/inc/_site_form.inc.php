<div class="web-change form-content" id="web-change1">
  <h2>Website Change</h2>
  <p>
    <label for="site[desc][]">Description of change(s):<span class="required">*</span></label> 
    <textarea id="site[desc][]" name="site[desc][]" class="is-required" placeholder="The description..."></textarea>
  </p>
  <p>
    <label for="site[url][]">Exact URL where change is to be made:<span class="required">*</span></label> 
    
    <?php //Please note that site_url value must be a valid to pass validation or form won't submit properly ?>
    <input type="url" id="site[url][]" name="site[url][]" class="is-required" value="http://www.mysite.com" placeholder="http://www.mysite.com">
  </p>
  <p><label for="site-files">Upload file(s):</label> <input type="file" id="site-file-0[]" name="site-file-0[]" multiple></p>
</div><!-- /.web-changes -->
<div class="web-change-btn hide">
  <input id="web-change_btn-add" class="btn-add" type="button" value="Add Website Change">
  <input id="web-change_btn-del" class="btn-del" type="button" value="Remove Website Change" disabled>
</div>
