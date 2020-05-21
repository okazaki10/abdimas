<template>
  <div>
      <table class="shadow-lh bg-white">
        <thead>
          <tr>
            <th class="bg-blue-100 border text-left px-8 py-4">Nama</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Keluhan utama</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Pemeriksaan fisik</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Jam keluar</th>
            <th class="bg-blue-100 border text-left px-8 py-4">tgl_kontrol</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Dibuat tanggal</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Diupdate tanggal</th>
            <th class="bg-blue-100 border text-left px-8 py-4" colspan="3" align="center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="rehabs in rehabilitasi" v-bind:key="rehabs['id']">
            <td class="border px-8 py-4">{{rehabs['nama']}}</td>
            <td class="border px-8 py-4">{{rehabs['keluhan_utama']}}</td>
            <td class="border px-8 py-4">{{rehabs['pemeriksaan_fisik']}}</td>
            <td class="border px-8 py-4">{{rehabs['jam_keluar']}}</td>
            <td class="border px-8 py-4">{{rehabs['tgl_kontrol']}}</td>
            <td class="border px-8 py-4">{{rehabs['created_at']}}</td>
            <td class="border px-8 py-4">{{rehabs['updated_at']}}</td>
            <td class="border px-8 py-4">
              <a
                v-bind:href="'rehabilitasi/'+rehabs['id']+'/edit'"
                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
              >Lihat</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</template>
<script>
export default {
  props: ["rehabilitasi"],

  data() {
    return {};
  },

  created() {},

  methods: {}
};
</script>