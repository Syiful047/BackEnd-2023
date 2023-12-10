/**
 * TODO 3:
 * - import fruits dari data/fruits.js
 * - refactor variabel ke ES6 variable
 */
const fruits = require("../data/data.js"); // Sesuaikan dengan path yang benar jika diperlukan

/**
 * TODO 4:
 * - Buat method index.
 * - Refactor function ke ES6 Arrow Function
 * - Tampilkan data fruits.
 *
 * @hint - Gunakan looping for of
 */
const index = () => {
  for (const fruit of fruits) {
    console.log(fruit);
  }
};

/**
 * TODO 5:
 * - Buat method store.
 * - Refactor function ke ES6 Arrow Function
 * - Menambahkan data baru ke array fruits.
 *
 * @param {string} name - Nama buah.
 *
 * @hint - Gunakan method push
 */
const store = (name) => {
  fruits.push(name);
};

/**
 * TODO 6:
 * - Buat method update.
 * - Refactor function ke ES6 Arrow Function
 * - Memperbarui data fruits.
 *
 * @param {number} position
 * @param {string} name
 */
const update = (position, name) => {
  if (fruits[position]) {
    fruits[position] = name;
  } else {
    console.log("Position out of range");
  }
};

/**
 * TODO 7:
 * - Buat method destroy.
 * - Refactor function ke ES6 Arrow Function
 * - Menghapus data fruits.
 *
 * @param {number} position -
 *
 * @hint - Gunakan method splice
 */
const destroy = (position) => {
  if (fruits[position]) {
    fruits.splice(position, 1);
  } else {
    console.log("Position out of range");
  }
};

/**
 * TODO 8: export method index, store, update, dan destroy
 */
module.exports = { index, store, update, destroy };