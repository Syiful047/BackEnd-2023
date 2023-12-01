// membuat array fruits
// array ini berisi data data buah 

const fruits = ['banana', 'mango', 'durian'];

// membuat controller (fruits controller)
// terdapat action index untuk menapilkan buah
// terdapat action store untuk menambahkan buah
const index = () => {
    for (const fruit of fruits) {
        console.log(fruit);
    }
};

const store = (name) => {
    fruits.push(name);
    index();
};

// membuat fungsi utama: main
// fungsi ini yang diakses pertama kali
const main = () => {
    index();
    store('apple');
};

main();