<section>
  <h2>projects</h2>

  <div id="work_projects_container" class="flex_container_outline">
    <div id="project_titles" class="container_content">
      <div><span v-on:mouseover="mouseover_action" data-project=0>分析支援システム</span></div>
      <div><span v-on:mouseover="mouseover_action" data-project=1>商品同梱管理システム</span></div>
      <div><span v-on:mouseover="mouseover_action" data-project=2>応対支援システム</span></div>
      <div><span v-on:mouseover="mouseover_action" data-project=3>社内ポータル</span></div>
    </div>
    <div class="container_media">
      <video v-show="content === 3" autoplay loop muted playsinline src="{{ asset('movie/work/work_projects_movie01_linkpage.mp4') }}"></video>
    </div>
    <div class="container_content">
      <div v-show="content === 0">
        分析支援システム<br>
        <font class="hashtag_font">#php #js #HTML5 #通販業界</font><br>
        フリーダイヤルと顧客入電番号を関連づけた分析支線システムです。
        過去データの検索・表示をすばやく行います。<br>
        要件定義、UI設計、開発まで行いました。
      </div>
      <div v-show="content === 1">
        商品同梱管理システム<br>
        <font class="hashtag_font">#php #Vue.js #HTML5 #通販業界</font><br>
        商品に付属する明細書・チラシの同梱管理を行うシステムです。複雑な組み合わせに柔軟に対応します。<br>
        要件定義、UI設計、開発まで行いました。
      </div>
      <div v-show="content === 2">
        応対支援システム<br>
        <font class="hashtag_font">#php #js #HTML5 #コールセンター業界</font><br>
        オペレーターの顧客対応を支援するシステムです。直感的な操作で必要な情報を取得し、すばやく定型分を作成できます。<br>
        プロジェクトの起案、要件定義、UI設計、開発まで行いました。
      </div>
      <div v-show="content === 3">
        社内ポータル<br>
        <font class="hashtag_font">#gas #js #HTML5 #コールセンター業界</font><br>
        Googleスプレッドシートから編集が可能な社内ポータルサイトを開発しました。既存のスプレッドシートから直接HTMLを生成するため、作業時間が半分に短縮します。<br>
        プロジェクトの起案、要件定義、UI設計、開発まで行いました。
      </div>
    </div>
  </div>

</section>