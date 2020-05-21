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

      {{rehabilitasi}}

      <table class="table table-striped">
          <thead>
            <tr>
              <th>Gambar</th>
              <th>Judul Buku</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Bisa disewa</th>
              <th>Stok</th>

              <th colspan="3" align="center">Action</th>
            </tr>
          </thead>
          <tbody>
           
            <tr v-for="rehabs in rehabilitasi" v-bind:key="rehabs['id']">
              <td>{{rehabs['id_user']}}</td>
              <td>{{rehabs['keluhan_utama']}}</td>
              <td>{{rehabs['pemeriksaan_fisik']}}</td>
              <td>{{rehabs['jam_keluar']}}</td>
              <td>{{rehabs['tgl_kontrol']}}</td>
              <td>{{rehabs['created_at']}}</td>
              <td>{{rehabs['updated_at']}}</td>
              <td><a href="asdadsasda" class="btn btn-warning">Lihat</a></td>
           
            </tr>
          </tbody>
        </table>
    </div>
  </div>
</template>
<script>
export default {
  props: ["rehabilitasi"],

  data() {
    return {
    
    };
  },

  created() {

  },

  methods: {
   
  }
};
</script>