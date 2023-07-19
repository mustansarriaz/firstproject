<template>
  <div class="container mx-auto p-4">
    <div class="grid grid-cols-2 gap-4">
      <div>
        <h2 class="text-xl font-bold mb-4">Add Album</h2>
        <form @submit.prevent="addAlbum">
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="albumTitle">Title</label>
            <input v-model="albumTitle" type="text" id="albumTitle" class="w-full px-3 py-2 border border-gray-300 rounded-md">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="albumImage">Image</label>
            <input type="file" ref="albumImage" id="albumImage" @change="handleAlbumImageChange" class="w-full">
          </div>
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Album</button>
        </form>
      </div>
      <div>
        <h2 class="text-xl font-bold mb-4">Add News</h2>
        <form @submit.prevent="addNews">
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="newsTitle">Title</label>
            <input v-model="newsTitle" type="text" id="newsTitle" class="w-full px-3 py-2 border border-gray-300 rounded-md">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="newsImage">Image</label>
            <input type="file" ref="newsImage" id="newsImage" @change="handleNewsImageChange" class="w-full">
          </div>
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add News</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';

export default {
  setup() {
    const albumTitle = ref('');
    const newsTitle = ref('');
    const albumImage = ref(null);
    const newsImage = ref(null);

    const handleAlbumImageChange = (event) => {
      albumImage.value = event.target.files[0];
    };

    const handleNewsImageChange = (event) => {
      newsImage.value = event.target.files[0];
    };

    const addAlbum = () => {
      // Perform album form submission and save the data to the albums table
      const formData = new FormData();
      formData.append('title', albumTitle.value);
      formData.append('image', albumImage.value);
      
      // Call your Laravel API endpoint or use Axios to make a POST request and handle the form submission

      // Reset the form fields
      albumTitle.value = '';
      albumImage.value = null;
    };

    const addNews = () => {
      // Perform news form submission and save the data to the news table
      const formData = new FormData();
      formData.append('title', newsTitle.value);
      formData.append('image', newsImage.value);
      
      // Call your Laravel API endpoint or use Axios to make a POST request and handle the form submission

      // Reset the form fields
      newsTitle.value = '';
      newsImage.value = null;
    };

    return {
      albumTitle,
      newsTitle,
      albumImage,
      newsImage,
      handleAlbumImageChange,
      handleNewsImageChange,
      addAlbum,
      addNews
    };
  },
};
</script>

<style>
/* Add any custom styles here */
</style>
