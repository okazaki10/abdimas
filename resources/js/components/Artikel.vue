<template>
  <div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Id user</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="id_user"
        type="text"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Keluhan utama</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="keluhan_utama"
        type="text"
        v-model="user"
      />
{{user}}
{{rehabilitasi}}
<div class="card card-body mb-2" v-for="rehabs in rehabilitasi" v-bind:key="rehabs['id']">
      <h3>{{rehabs['id'] }}</h3>
      <p>{{ rehabs['keluhan_utama']}}</p>
      <hr>
      <button @click="editArticle(article)" class="btn btn-warning mb-2">Edit</button>
      <button @click="deleteArticle(article.id)" class="btn btn-danger">Delete</button>
    </div>
    </div>
    
  </div>
</template>
<script>

export default {

  props: ['user','rehabilitasi'],
  

  data() {
    return {
      articles: [],
      article: {
        id: "",
        title: "",
        body: ""
      },
      article_id: "",
      pagination: {},
      edit: false,
   
    };
    
  },

  created() {

    this.fetchArticles();
  },

  methods: {
    fetchArticles() {
      this.edit = true;
      this.article.id = "asdasdsa";
      this.article.article_id = "asdasdas";
      this.article.title = "asdasd";
      this.article.body = "";
      this.articles[0] = "asdasasdsa";
      this.articles[1] = "assa";
    }
  }
};
</script>