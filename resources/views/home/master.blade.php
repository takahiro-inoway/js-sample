<section>
  <h2>情報を管理する</h2>
  <div id="master_tables_outline">
    <table id="items_table" class="master_table">
      <thead>
        <tr>
          <th>商品名</th>
          <th>コード</th>
          <th>同梱設定</th>
        </tr>
      </thead>
      <tbody>
        @for($i = 0; $i < 3; $i++) <tr>
          <td>りんご</td>
          <td>apple001</td>
          <td>A1</td>
          </tr>
          @endfor
      </tbody>
    </table>
  </div>
</section>