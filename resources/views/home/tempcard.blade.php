<section>
  <h2>応対支援システム</h2>
  <div class="tempcard_outline">
    @for($i = 0; $i < 3; $i++) <div class="tempcard">
      <div class="tempcard_head">head</div>
      <textarea placeholder="textarea"></textarea>
      <div class="tempcard_foot">foot</div>
    </div>
    @endfor
  </div>

  <div id="tempcard_btn_outline">
    <div id="tempcard_item_btns" class="btn_block">
      <input type="button" value="りんご">
      <input type="button" value="みかん">
      <input type="button" value="バナナ">
      <input type="button" value="ぶどう">
      <input type="button" value="オレンジ">
    </div>
    <div id="tempcard_storage_btns" class="btn_block">
      <input type="button" value="東京倉庫">
      <input type="button" value="大阪倉庫">
      <input type="button" value="那覇倉庫">
    </div>
    <div id="tempcard_pay_btns" class="btn_block">
      <input type="button" value="後払決済">
      <input type="button" value="クレジット">
      <input type="button" value="代引">
      <input type="button" value="講座振替">
    </div>
  </div>

</section>