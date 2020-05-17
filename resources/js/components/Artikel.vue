<template>
  <div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Id user</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="id_user"
        type="number"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Keluhan utama</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="keluhan_utama"
        type="text" v-model="article.body"
      />
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      articles: [],
      article: {
        id: '',
        title: '',
        body: ''
      },
      article_id: '',
      pagination: {},
      edit: false
    };
  },

  created() {
    this.fetchArticles();
  },

  methods: {
   fetchArticles() {
      this.edit = true;
      this.article.id = 'asdasdsa';
      this.article.article_id = 'asdasdas';
      this.article.title = 'asdasd';
      this.article.body = 'body';
    }
  }
};
</script>