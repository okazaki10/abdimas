<template>
  <div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Nama</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="nama"
        type="text"
        v-model="rehabilitasi[0]['nama']"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">No. rm</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="no_rm"
        type="number"
        v-model="rehabilitasi[0]['no_rm']"
      />
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Tanggal lahir</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="tgl_lahir"
        type="date"
        v-model="rehabilitasi[0]['tgl_lahir']"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Alamat</label>
      <textarea
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="alamat"
        type="text"
        v-model="rehabilitasi[0]['alamat']"
      ></textarea>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Keluhan utama</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="keluhan_utama"
        type="text"
        v-model="rehabilitasi[0]['keluhan_utama']"
      />
    </div>
    <div class="mb-4">
      <label
        class="block text-gray-700 text-sm font-bold mb-2"
        for="username"
      >Riwayat penyakit sekarang</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="riwayat_sekarang"
        type="text"
        v-model="rehabilitasi[0]['riwayat_sekarang']"
      />
    </div>
    <div class="mb-4">
      <label
        class="block text-gray-700 text-sm font-bold mb-2"
        for="username"
      >Riwayat penyakit dahulu</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="riwayat_dulu"
        type="text"
        v-model="rehabilitasi[0]['riwayat_dulu']"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Pemeriksaan fisik</label>
      <textarea
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="pemeriksaan_fisik"
        v-model="rehabilitasi[0]['pemeriksaan_fisik']"
      ></textarea>
    </div>
    <div class="mb-4">
      <label
        class="block text-gray-700 text-sm font-bold mb-2"
        for="username"
      >Diagnosis rehabilitasi medis</label>
      <textarea
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="diagnosis"
        v-model="rehabilitasi[0]['diagnosis']"
      ></textarea>
    </div>
    <div class="mb-4">
      <label
        class="block text-gray-700 text-sm font-bold mb-2"
        for="username"
      >Program rehabilitasi medis</label>
      <textarea
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="program"
        v-model="rehabilitasi[0]['program']"
      ></textarea>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Terapi/tindakan</label>
      <textarea
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="terapi"
        v-model="rehabilitasi[0]['terapi']"
      ></textarea>
    </div>
    <div class="mb-4">
      <label
        class="block text-gray-700 text-sm font-bold mb-2"
        for="username"
      >Boleh pulang jam keluar</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="jam_keluar"
        type="date"
        v-model="rehabilitasi[0]['jam_keluar']"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Kontrol klinik</label>
      <select
        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="grid-state"
        name="kontrol"
      >
       <option v-for="intensif in intensifs" v-bind:value="intensif.index" :selected="intensif.index == rehabilitasi[0]['kontrol']" v-bind:key="intensif.index">{{intensif.hasil}}</option>
      </select>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Tanggal kontrol</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="tgl_kontrol"
        type="date"
        v-model="rehabilitasi[0]['tgl_kontrol']"
      />
    </div>
    <div class="mb-4">
      <label
        class="block text-gray-700 text-sm font-bold mb-2"
        for="username"
      >Dirawat di ruang intensif</label>
      <select

        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="grid-state"
        name="intensif"
      >
        <option v-for="intensif in intensifs" v-bind:value="intensif.index" :selected="intensif.index == rehabilitasi[0]['intensif']" v-bind:key="intensif.index">{{intensif.hasil}}</option>
      </select>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Ruang lain</label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="ruang_rawat"
        type="text"
        v-model="rehabilitasi[0]['ruang_rawat']"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Foto tanda tangan</label>
      <img v-bind:src="asset" width="100" height="100">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Ubah tanda tangan</label>
      <input name="tanda_tangan" type="file" />
    </div>

    <div class="flex items-center">
      <button
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        type="submit"
      >Update assesmen</button>

      <input type="button"
        class="ml-3 bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        onClick="window.print()"
      value="Konvert ke pdf">
    </div>
  </div>
</template>
<script>
export default {
  props: ["rehabilitasi","asset"],

  data() {
    return {

      intensifs: [
        { index: "1", hasil: "Ya" },
        { index: "0", hasil: "Tidak" }
      ]
    };
  },

  created() {
  
  },

  methods: {
 
  }
};
</script>