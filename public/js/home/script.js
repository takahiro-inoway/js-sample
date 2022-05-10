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
    mouseover_action(e){
      this.content = Number(e.target.dataset.project);
    }
  }
})
