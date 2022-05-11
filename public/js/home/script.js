/**
 * モジュール
 */
const Module = new class {
  /**選択した要素の value を select状態にし、クリップボードにコピーする。 
   * @param {element}ele | 対象の要素。
   */
  SelectCopy(ele) {
    ele.target.select();
    let tmp = ele.target.value;
    navigator.clipboard.writeText(tmp).then(ele => {
    });
  }
}


/**
 * Laravel Blade と衝突を避けるため
 * Vue.js の `{{ ~ }}` デリミタを
 * `(% %)` へ変更。
 */
const work_projects = new Vue({
  delimiters: ["(%", "%)"],
  el: '#work_projects_container',
  data: {
    content: 0
  },
  methods: {
    mouseover_action(e) {
      this.content = Number(e.target.dataset.project);
    }
  }
})

const prototype_tempcards = new Vue({
  delimiters: ["(%", "%)"],
  el: '#tempcards',
  data: {
  },
  methods: {
    select_copy(e) {
      e.target.select();
      let tmp = e.target.value;
      navigator.clipboard.writeText(tmp).then(e => {
      });
    }
  }
})




